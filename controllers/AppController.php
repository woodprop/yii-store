<?php


namespace app\controllers;


use yii\web\Controller;

class AppController extends Controller
{
    public function beforeAction($action)
    {
        $this->view->title = \Yii::$app->name;
        return parent::beforeAction($action);
    }

    protected function setMeta($title = null, $description = null, $keywords = null){
        $this->view->title = "$title | " . \Yii::$app->name;
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
    }
}