<?php


namespace app\controllers;


use app\models\Cart;
use app\models\Product;
use SebastianBergmann\CodeCoverage\TestFixture\C;

class CartController extends AppController
{
    public function actionShow(){
        $session = \Yii::$app->session;
        $session->open();
        return $this->renderPartial('cart-modal', compact('session'));
    }

    public function actionCheckout(){
        $session = \Yii::$app->session;
        $session->open();
        return $this->render('checkout', compact('session'));
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

    public function actionDeleteItem($id){
        $session = \Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->removeFromCart($id);
        if (\Yii::$app->request->isAjax) {
            return $this->renderPartial('cart-modal', compact('session'));
        }
        return $this->redirect(\Yii::$app->request->referrer);
    }

    public function actionClear(){
        $session = \Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->clearCart();
        return $this->renderPartial('cart-modal', compact('session'));
    }
}