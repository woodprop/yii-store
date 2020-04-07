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

    public function actionDeleteItem($id){
        $session = \Yii::$app->session;
        $session->open();
        $_SESSION['cart-qty'] -= $_SESSION['cart'][$id]['qty'];
        $_SESSION['cart-total'] -= $_SESSION['cart'][$id]['qty'] * $_SESSION['cart'][$id]['price'];
        unset($_SESSION['cart'][$id]);
        if (empty($_SESSION['cart'])) $this->actionDestroy();
        return $this->renderPartial('cart-modal', compact('session'));
    }

    public function actionDestroy(){
        $session = \Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart-qty');
        $session->remove('cart-total');
        return $this->renderPartial('cart-modal', compact('session'));
    }
}