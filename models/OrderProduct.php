<?php


namespace app\models;


use yii\db\ActiveRecord;

class OrderProduct extends ActiveRecord
{
    public static function tableName()
    {
        return 'order_products';
    }

    public function rules()
    {
        return [
            [['order_id', 'product_id', 'title', 'qty', 'price'], 'required'],
            [['order_id', 'product_id', 'qty'], 'integer'],
            ['price', 'number'],
            ['title', 'string', 'max' => 255]
        ];
    }

    public function saveOrderProducts($products, $order_id){
        foreach ($products as $id => $product){
            $this->id = null;
            $this->isNewRecord = true;
            $this->order_id = $order_id;
            $this->product_id = $id;
            $this->title = $product['title'];
            $this->qty = $product['qty'];
            $this->price = $product['price'];
            if (!$this->save()) return false;
        }
        return true;
    }
}