<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group field-product-category_id">
        <label class="control-label" for="product-category_id">Категория</label>
        <select id="product-category_id" class="form-control" name="Product[category_id]">
            <?= \app\components\MenuWidget::widget(['tpl' => 'dropdown-product', 'model' => $model, 'cache_time' => 0]) ?>
        </select>

        <div class="help-block"></div>
    </div>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->widget(TinyMce::class, [
        'options' => ['rows' => 15],
        'language' => 'ru',
        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'old_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <div class="border mb-3">
        <?= Html::img("@web/{$model->img}", ['alt' => 'Фото товара']) ?>
    </div>

    <?= $form->field($model, 'imageFile')->fileInput() ?>

    <?= $form->field($model, 'is_offer')->dropDownList([
        '0' => 'НЕТ',
        '1' => 'ДА',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success btn-lg']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
