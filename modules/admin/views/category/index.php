<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Категории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-sm-12">
        <?= Html::a('Добавить новую категорию', ['create'], ['class' => 'btn btn-success']) ?>

        <div class="card mt-3">
        <?= GridView::widget([
            'options' => [
                'class' => 'card-body',
            ],
            'tableOptions' => [
                'class' => 'table table-bordered table-hover dataTable dtr-inline',
            ],
            'dataProvider' => $dataProvider,
            'columns' => [
                'title',
                [
                    'attribute' => 'parent_id',
                    'value' => function($data){
                        return $data->parentName;
                    },
                ],

                //'description',
                //'keywords',
                //'banner_img',
                //'banner_title',
                //'banner_subtitle',

                [
                    'class' => 'yii\grid\ActionColumn',
                    'header' => 'Действия',
                    'template' => '{view} <span> | </span> {update} <span> | </span> {delete}',
                    'buttons' => [
                        'view' => function ($url,$model) {
                            return Html::a(
                                '<i class="far fa-eye"></i>',
                                $url);
                        },
                        'update' => function ($url,$model) {
                            return Html::a(
                                '<i class="fas fa-pencil-alt"></i>',
                                $url);
                        },
                        'delete' => function ($url) {
                            return Html::a(
                                '<i class="far fa-trash-alt"></i>',
                                $url, [
                                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete?'),
                                'data-method' => 'post',
                            ]);
                        },
                    ],
                ],
            ],
        ]); ?>
        </div>
    </div>
</div>
