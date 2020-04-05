<?php


namespace app\controllers;


use app\models\Product;
use yii\web\NotFoundHttpException;

class ProductController extends AppController
{
    public function actionView($id){
        $product = Product::findOne($id);
        if (empty($product)) throw new NotFoundHttpException('Продукт не найден...');

        $this->setMeta($product->title, $product->description, $product->keywords);
        return $this->render('view', compact('product'));
    }
}