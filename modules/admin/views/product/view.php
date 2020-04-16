<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-warning btn-lg']) ?>
            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger btn-lg',
                'data' => [
                    'confirm' => 'Вы уверены, что хотите удалить данный товар?',
                    'method' => 'post',
                ],
            ]) ?>
            </div>
            <div class="card-body">
            <?= DetailView::widget([
                'model' => $model,
                'options' => [
                    'class' => 'table table-bordered table-hover'
                ],
                'attributes' => [
                    'id',
                    [
                        'attribute' => 'category_id',
                        'value' => function($data){
                            return Html::a($data->category->title, \yii\helpers\Url::to(['category/view', 'id' => $data->category->id]));
                        },
                        'format' => 'html',
                    ],
                    'title',
                    'content:html',
                    'price',
                    'old_price',
                    'description',
                    'keywords',
                    [
                        'attribute' => 'img',
                        'value' => function($data){
                            return "@web/{$data->img}";
                            },
                        'format' => 'image',
                    ],
                    [
                        'attribute' => 'is_offer',
                        'value' => function($data){
                            return $data->is_offer ? '<span class="text-success">ДА</span>' : '<span class="text-danger">НЕТ</span>';
                        },
                        'format' => 'html',
                    ],
                ],
            ]) ?>
            </div>
        </div>
    </div>
</div>
