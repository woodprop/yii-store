<?php


namespace app\controllers;


use app\models\Product;

class HomeController extends AppController
{
    public function actionIndex()
    {
        $offers = Product::find()->where(['is_offer' => 1])->limit(4)->all();
        return $this->render('index', ['offers' => $offers]);
    }

    public function actionAbout(){
        $this->setMeta('О нас');
        return $this->render('about');
    }

    public function actionEvents(){
        $this->setMeta('Акции');
        return $this->render('events');
    }

    public function actionSale(){
        $this->setMeta('Распродажа');
        return $this->render('sale');
    }
    public function actionServices(){
        $this->setMeta('Услуги');
        return $this->render('services');
    }

}