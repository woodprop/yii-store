<?php

namespace app\models;


use yii\base\Model;

class Cart extends Model
{
    public function addToCart($item, $qty = 1){
        $_SESSION['cart'][$item->id] = [
            'title' => $item->title,
            'price' => $item->price,
            'img'   => $item->img,
            'qty'   => isset($_SESSION['cart'][$item->id]) ? $_SESSION['cart'][$item->id]['qty'] + $qty : $qty,
             ];
        $this->calculateCart();
    }

    public function removeFromCart($id){
        unset($_SESSION['cart'][$id]);
        if (empty($_SESSION['cart'])){
            $this->clearCart();
            return;
        }
        $this->calculateCart();
    }

    public function calculateCart(){
        $_SESSION['cart-qty'] = 0;
        $_SESSION['cart-total'] = 0;
        foreach ($_SESSION['cart'] as $item){
            $_SESSION['cart-qty'] += $item['qty'];
            $_SESSION['cart-total'] += $item['price'] * $item['qty'];
        }
    }

    public function clearCart(){
        unset($_SESSION['cart']);
        unset($_SESSION['cart-qty']);
        unset($_SESSION['cart-total']);
    }
}