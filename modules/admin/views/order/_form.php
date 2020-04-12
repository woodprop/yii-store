<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'total_qty')->textInput() ?>

    <?= $form->field($model, 'total_price')->textInput(['maxlength' => true]) ?>

    <?php
    $orderProducts = $model->orderProducts; ?>

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
                            <th>Удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($orderProducts as $product): ?>
                            <tr>
                                <td><?= $product->product_id ?></td>
                                <td><?= $product->title ?></td>
                                <td><?= $product->qty ?></td>
                                <td><?= $product->price ?></td>
                                <td><?= $product->qty * $product->price ?></td>
                                <td><a href="<?= \yii\helpers\Url::to(['order/delete-product', 'id' => $product->id]) ?>"><i class="far fa-trash-alt text-danger"></i></a></td>
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

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
