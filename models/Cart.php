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

    }
}