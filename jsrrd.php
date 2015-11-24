<?php

namespace stivehu\widgets;

use yii\base\Widget;
use yii\web\View;

/**
 * jsrrd wrapper class
 */
class Jsrrd extends Widget {

    public function run() {
        $this->registerAssets();
        $this->registerDrawScript();
        return $this->render('YiiJsrrd');
    }

    private function registerDrawScript() {
        $this->getView()->registerJs("draw();", View::POS_END);
    }

    private function registerAssets() {
        JsrrdAsset::register($this->getView());
    }

}
