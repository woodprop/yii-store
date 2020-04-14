<?php


namespace app\modules\admin\controllers;


use app\modules\admin\models\Category;
use app\modules\admin\models\Order;
use app\modules\admin\models\Product;

class MainController extends AppAdminController
{
    public function actionIndex(){
        $orderCount = Order::find()->count();
        $productCount = Product::find()->count();
        $categoryCount = Category::find()->count();
        return $this->render('index', compact('orderCount', 'productCount', 'categoryCount'));
    }
}