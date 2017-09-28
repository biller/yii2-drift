<?php

namespace juanisorondo\yii2drift;

use yii\base\Widget;
use yii\web\View;

class DriftWidget extends Widget {

    public $code;

    public function run() {
        $js = $this->render('drift', ['code' => $this->code]);
        $this->view->registerJsX($js, View::POS_HEAD);
        return '';
    }

}