<?php
/**
 * @var integer $orderCount
 * @var integer $productCount
 * @var integer $categoryCount
 */

$this->title = 'Статистика';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3><?= $orderCount ?></h3>

                <p>Заказов</p>
            </div>
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['order/index']) ?>" class="small-box-footer">К заказам <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3><?= $productCount ?></h3>

                <p>Товаров</p>
            </div>
            <div class="icon">
                <i class="fas fa-pizza-slice"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['product/index']) ?>" class="small-box-footer">К товарам <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3><?= $categoryCount ?></h3>

                <p>Категорий</p>
            </div>
            <div class="icon">
                <i class="fas fa-bezier-curve"></i>
            </div>
            <a href="<?= \yii\helpers\Url::to(['category/index']) ?>" class="small-box-footer">К категориям<i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>