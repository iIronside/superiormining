<?php

namespace frontend\controllers;


use yii\helpers\Url;

class BrokerController extends \yii\web\Controller
{
    public function init()
    {
        parent::init();
        $this->layout = '@app/views/layouts/broker';
    }

    public function actionLetMeCloud()
    {
        return $this->render('letMeCloud');
    }

    public function actionIqMining()
    {
        return $this->render('iqMining');
    }

    public function actionEcos()
    {
        return $this->render('ecos');
    }

    public function actionGmining()
    {
        return $this->render('gmining');
    }

    public function actionHashShiny()
    {
        return $this->render('hashShiny');
    }
}
