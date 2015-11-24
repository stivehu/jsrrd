<?php

namespace stivehu\widgets;

use Yii;
use yii\web\AssetBundle;

class JsrrdAsset extends AssetBundle {

    public static $extra_js = [];

    public function init() {
        Yii::setAlias('@jsrrd', __DIR__);
        foreach (static::$extra_js as $js_file) {
            $this->js[] = $js_file;
        }
        return parent::init();
    }

    public $sourcePath = '@jsrrd/assets';
    public $css = [
    ];
    public $js = [
        'jquery.flot.js',
        'javascriptrrd.js',
        'javascriptrrd.wlibs.js',
        'rrdFile.js',
        'rrdFilter.js',
        'rrdFlotAsync.js',
        'rrdFlot.js',
        'rrdMultiFile.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

}
