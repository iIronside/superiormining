<?php

namespace frontend\controllers;


use yii\helpers\Url;

class SuperiorminingController extends \yii\web\Controller
{
    public function init()
    {
        parent::init();
        $this->layout = '@app/views/layouts/superiormining';
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
