<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Категории', 'url' => ['index']];
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
                        'confirm' => "Вы уверены, что хотите удалить категорию {$model->title}? Это действие будет невозможно отменить!",
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
                        'title',
                        [
                            'attribute' => 'parent_id',
                            'value' => function($data){
                                return $data->parentName;
                            },
                        ],
                        'description',
                        'keywords',
                        'banner_img',
                        'banner_title',
                        'banner_subtitle',
                        ],
                     ]) ?>
            </div>
        </div>
    </div>
</div>
