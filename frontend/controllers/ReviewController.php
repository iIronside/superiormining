<?php

namespace frontend\controllers;


use yii\helpers\Url;

class ReviewController extends \yii\web\Controller
{
    public function init()
    {
        parent::init();
        $this->layout = '@app/views/layouts/broker';
    }

    protected function setMetaTags($title = '', $description = '')
    {
        $this->view->title = $title;
        $this->view->registerMetaTag(
            ['name' => 'description', 'content' => $description]
        );
    }

    public function actionLetMeCloud()
    {
        $this->setMetaTags(
            'LetMeCloud',
            'LET ME CLOUD ® is a British company with a head office in London that has offered cloud mining
            contracts since 2018.'
        );
        return $this->render('letMeCloud');
    }

    public function actionIqMining()
    {
        $this->setMetaTags(
            'IqMining',
            'Introducing IQMining, the cloud mining company that offers a really great selection of reliable
            and profitable cloud mining contracts.'
        );
        return $this->render('iqMining');
    }

    public function actionEcos()
    {
        $this->setMetaTags(
            'Ecos',
            'ECOS is a cloud mining provider that offers to rent hash power and the real capacity of mining
                equipment for individuals.'
        );
        return $this->render('ecos');
    }

    public function actionGmining()
    {
        $this->setMetaTags(
            'Gmining',
            'Gmining is an online and mobile cloud mining company. Despite the platform being launched in
            2018, it has over three thousand active users so far who invest in digital cloud mining contracts.'
        );
        return $this->render('gmining');
    }

    public function actionHashShiny()
    {
        $this->setMetaTags(
            'HashShiny',
            'Do you want to start earning digital currency in a few easy steps? HashShiny is a promising
            cloud mining platform that could be the best solution.'
        );
        return $this->render('hashShiny');
    }
}
