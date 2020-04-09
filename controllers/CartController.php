<?php


namespace app\controllers;


use app\models\Cart;
use app\models\Order;
use app\models\OrderProduct;
use app\models\Product;
use SebastianBergmann\CodeCoverage\TestFixture\C;
use yii\db\Transaction;

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
        $order = new Order();
        $orderProduct = new OrderProduct();

        if ($order->load(\Yii::$app->request->post())) {
            $order->total_qty = $_SESSION['cart-qty'];
            $order->total_price = $_SESSION['cart-total'];
            $transaction = \Yii::$app->getDb()->beginTransaction();
            if (!$order->save() || !$orderProduct->saveOrderProducts($_SESSION['cart'], $order->id)){
                $transaction->rollBack();
                \Yii::$app->session->setFlash('error', 'Ошибка при отправке заказа');
            } else {
                $transaction->commit();
                \Yii::$app->session->setFlash('success', 'Заказ успешно отправлен!');
                $cart = new Cart();
                $cart->clearCart();
                return $this->refresh();
            }
        }

        $this->setMeta('Оформление заказа');
        return $this->render('checkout', compact('session', 'order'));
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

    public function actionChangeQty($id, $qty){
        $session = \Yii::$app->session;
        $session->open();
        $cart = new Cart();
        $cart->changeQty($id, $qty);
        return;
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