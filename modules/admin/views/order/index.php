<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'email:email',
            'phone',
            //'address',
            //'comment:ntext',
            'status',
            'created_at:dateTime',
            'updated_at:dateTime',
            'total_qty',
            'total_price',

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
