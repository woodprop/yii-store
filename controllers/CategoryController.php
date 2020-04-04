<?php


namespace app\controllers;


use app\models\Category;
use app\models\Product;
use yii\web\NotFoundHttpException;

class CategoryController extends AppController
{
    public function actionView($id){
        $category = Category::findOne($id);
        if (!$category) throw new NotFoundHttpException('Категория не найдена...');

        $products = Product::find()->where(['category_id' => $id])->all();

        return $this->render('view', compact('category', 'products'));
    }
}