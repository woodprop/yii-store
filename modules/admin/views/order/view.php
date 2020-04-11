<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = "Заказ № {$model->id}";
$this->params['breadcrumbs'][] = ['label' => 'Заказы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
            <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
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
                            'name',
                            'email:email',
                            'phone',
                            'address',
                            'comment:ntext',
                            ['attribute' => 'status',
                                'value' => function($item){
                                    if ($item->status) return '<span class="text-success">Выполнен</span>';
                                    return '<span class="text-danger">Новый</span>';
                                },
                                'format' => 'html',
                            ],
                            'created_at',
                            'updated_at',
                            'total_qty',
                            'total_price',
                            ],
                        ]) ?>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Товары в заказе:</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>ID товара</th>
                        <th>Наименование</th>
                        <th>Количество</th>
                        <th>Цена</th>
                        <th>Сумма</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($model->orderProducts as $product): ?>
                    <tr>
                        <td><?= $product->product_id ?></td>
                        <td><?= $product->title ?></td>
                        <td><?= $product->qty ?></td>
                        <td><?= $product->price ?></td>
                        <td><?= $product->qty * $product->price ?></td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
</div>