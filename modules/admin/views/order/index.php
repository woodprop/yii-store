<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заказы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-index">

    <p>
        <?= Html::a('Create Order', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <?= GridView::widget([
                    'options' => [
                        'class' => 'card-body',
                    ],

                    'tableOptions' => [
                            'class' => 'table table-bordered table-hover dataTable dtr-inline',
                    ],

                    'dataProvider' => $dataProvider,
                    'columns' => [
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
                    'pager' => [
                            'options' => ['class' => 'pagination mt-3 justify-content-center'],
                            'linkContainerOptions' => ['class' => 'page-item'],
                            'disabledListItemSubTagOptions' => [
                                    'tag' => 'a',
                                    'class' => 'page-link',
                                    'aria-disabled' => 'true',
                            ],
                            'linkOptions' => ['class' => 'page-link'],
                            'prevPageLabel' => 'Назад',
                            'nextPageLabel' => 'Вперёд',
                    ],
                ]); ?>
                </div>
            </div>



    </div>








</div>
