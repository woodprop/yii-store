<?php


namespace app\controllers;


use app\models\Category;
use app\models\Product;
use yii\data\Pagination;
use yii\helpers\Html;
use yii\web\NotFoundHttpException;

class CategoryController extends AppController
{
    public function actionView($id){
        $category = Category::findOne($id);
        if (!$category) throw new NotFoundHttpException('Категория не найдена...');

//        $products = Product::find()->where(['category_id' => $id])->all();
        $query = Product::find()->where(['category_id' => $id]);
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 4,
            'forcePageParam' => false,
            'pageSizeParam' => false,
        ]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();

        $this->setMeta($category->title, $category->description, $category->keywords);
        return $this->render('view', compact('category', 'products', 'pages'));
    }

    public function actionSearch($q = null){
        $query = Product::find()->where(['like', 'title', $q]);
        $pages = new Pagination([
            'totalCount' => $query->count(),
            'pageSize' => 4,
            'forcePageParam' => false,
            'pageSizeParam' => false,
            ]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta("Поиск: {$q}");
        return $this->render('search', compact('products', 'q', 'pages'));
    }

}