<?php


namespace app\modules\admin\controllers;


use app\modules\admin\models\Order;

class MainController extends AppAdminController
{
    public function actionIndex(){
        $this->view->title = 'Статистика магазина';

        $orderCount = Order::find()->count();
        return $this->render('index', compact('orderCount'));
    }
}