<?php
/**
 * Created by PhpStorm.
 * User: cronfy
 * Date: 27.07.17
 * Time: 10:58
 */

namespace main\components;

use yii\base\Object;
use Yii;

class AutoAssets extends Object
{
    public $page;

    protected $_css;
    protected $_js;

    const MODE_PAGE = 1;
    const MODE_LAYOUT = 2;

    public $mode;

    public function addCss($css) {
        if (!preg_match('#^https://#', $css)) {
            // см. docs/misc-information.md
            throw new \Exception("Only CDN assets allowed, but not absolute url provided: " . $css);
        }
        $allowed = [
            '#\.css#', // явные css файлы
        ];
        $path = parse_url($css)['path'];
        $matched = false;
        foreach ($allowed as $regex) {
            if (preg_match($regex, $path)) {
                $matched = true;
                break;
            }
        }
        if (!$matched) {
            throw new \Exception($css . " is not a CSS file.");
        }
        $this->_css[$this->mode][] = trim($css, '/');
    }

    public function addJs($js) {
        if (!preg_match('#^https://#', $js)) {
            // см. docs/misc-information.md
            throw new \Exception("Only CDN assets allowed, but not absolute url provided: " . $js);
        }
        $allowed = [
            '#\.js$#', // явные js файлы
            '#/[^/.]+/?$#', // просто путь без расширения, например https://maps.googleapis.com/maps/api/js
        ];
        $path = parse_url($js)['path'];
        $matched = false;
        foreach ($allowed as $regex) {
            if (preg_match($regex, $path)) {
                $matched = true;
                break;
            }
        }
        if (!$matched) {
            throw new \Exception($js . " is not a JS file.");
        }
        $this->_js[$this->mode][] = trim($js, '/');
    }

    protected function getLocalCss($path, $required = true) {
        /** @var ProjectConfig $projectConfig */
        $projectConfig = Yii::$app->projectConfig;
        if ($projectConfig->config['global']['assets']['css'] === 'preprocessed') {
            $dir = dirname($path);
            $name = basename($path, '.css');
            $result = $dir . '/' . $name . '.p.css';
        } else {
            $result = $path;
        }
        if (!file_exists(Yii::getAlias('@webroot') . '/' . $result)) {
            if ($required) {
                throw new \Exception("Css file " . $result . " not found");
            } else {
                return null;
            }
        }

        return $result;
    }

    public function getCss() {
        $css = $this->_css;

        // см. docs/misc-information.md
        // 1. Библиотеки layout.
        // 2. Компоненты - в одном файле.
        // 3. Стили layout - в одном файле.
        // 4. Библиотеки страницы.
        // 5. Стили страницы - в одном файле.

        $result = [];

        // Библиотеки layout
        if (isset($css[static::MODE_LAYOUT])) {
            $result = array_merge($result, $css[static::MODE_LAYOUT]);
        }

        // Компоненты
        $result[] = $this->getLocalCss('frontend/component/components.css');

        // Стили layout
        $result[] = $this->getLocalCss('frontend/layout/layout.css');

        // Библиотеки страницы
        if (isset($css[static::MODE_PAGE])) {
            $result = array_merge($result, $css[static::MODE_PAGE]);
        }

        // Стили страницы
        if ($default = $this->getLocalCss("frontend/{$this->page}/{$this->page}.css", false)) {
            $result[] = $default;
        }

        $result = array_unique($result);

        return $result;
    }

    public function getJs() {
        $js = $this->_js;

        // см. docs/misc-information.md
        // 1. Библиотеки layout.
        // 2. JS layout - в одном файле.
        // 3. Библиотеки страницы.
        // 4. JS страницы - в одном файле.

        $result = [];

        // Библиотеки layout
        if (isset($js[static::MODE_LAYOUT])) {
            $result = array_merge($result, $js[static::MODE_LAYOUT]);
        }

        // JS layout
        $result[] = 'frontend/layout/layout.js';

        // Библиотеки страницы
        if (isset($js[static::MODE_PAGE])) {
            $result = array_merge($result, $js[static::MODE_PAGE]);
        }

        // JS страницы
        $default = "frontend/{$this->page}/{$this->page}.js";
        if (file_exists(Yii::getAlias('@webroot') . '/' . $default)) {
            $result[] = $default;
        }

        $result = array_unique($result);

        return $result;
    }

}