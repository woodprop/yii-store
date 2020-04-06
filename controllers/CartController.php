<?php


namespace app\controllers;


use app\models\Cart;
use app\models\Product;

class CartController extends AppController
{
    public function actionShow(){
        $session = \Yii::$app->session;
        $session->open();
        return $this->renderPartial('cart-modal', compact('session'));
    }

    public function actionAdd($id){
        $product = Product::findOne($id);
        if (empty($product)) return false;

        $session = \Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->addToCart($product);
        return $this->renderPartial('cart-modal', compact('session'));
    }

    public function actionDestroy(){
        $session = \Yii::$app->session;
        $session->destroy();
        return $this->renderPartial('cart-modal', compact('session'));
    }
}