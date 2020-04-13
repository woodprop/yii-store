<?php
/**
 * @var $category object
 * @var $products array
 * @var $pages
 */
?>
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="<?= \yii\helpers\Url::home() ?>">Главная</a><span>|</span></li>
            <li><?= $category->title ?></li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>
    <div class="w3l_banner_nav_right">
        <div class="category_banner">
            <?= \yii\helpers\Html::img("@web/images/{$category->banner_img}", ['alt' => '', 'class' => 'img-responsive']) ?>
<!--        <div class="w3l_banner_nav_right_banner9 w3l_banner_nav_right_banner_pet">-->
            <div class="category_banner_title">
                <h4>Your Pet Favourite Food</h4>
                <p>Sint occaecat cupidatat non proident</p>
                <a href="single.html">Shop Now</a>
            </div>

        </div>
    </div>

    <div class="clearfix"></div>
</div>

<div class="banner_bottom">
    <div class="wthree_banner_bottom_left_grid_sub">
    </div>
    <div class="wthree_banner_bottom_left_grid_sub1">
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="/images/4.jpg" alt=" " class="img-responsive" />
                <div class="wthree_banner_bottom_left_grid_pos">
                    <h4>Купи со скидкой <span>25%</span></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="/images/5.jpg" alt=" " class="img-responsive" />
                <div class="wthree_banner_btm_pos">
                    <h3>introducing <span>best store</span> for <i>groceries</i></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="/images/6.jpg" alt=" " class="img-responsive" />
                <div class="wthree_banner_btm_pos1">
                    <h3>Save <span>Upto</span> $10</h3>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>

<section class="product_block">
<!--products start-->
<div class="container">
    <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
        <h3 class="w3l_fruit"><?= $category->title ?></h3>
        <div class="row product_list_wrapper">
            <?php if (!$products): ?>
            <h2>Нет товаров в данной категории</h2>
            <?php else: ?>
                <?php foreach ($products as $product): ?>
<!-- -------------- Start product card----------------- -->
            <div class="col-md-3 w3ls_w3l_banner_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
                        <?php if ($product->is_offer): ?>
                        <div class="agile_top_brand_left_grid_pos">
                            <?= \yii\helpers\Html::img('@web/images/offer.png', ['alt' => 'offer', 'class' => 'img-responsive']); ?>
                        </div>
                        <?php endif; ?>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="<?= \yii\helpers\Url::to(['/product/view/', 'id' => $product->id]) ?>"><?= \yii\helpers\Html::img("@web/{$product->img}", ['alt' => '', 'class' => 'img-responsive']); ?></a>
                                        <p><?= $product->title ?></p>
                                        <h4>&#8381; <?= $product->price ?>
                                            <?php if ((float)$product->old_price): ?>
                                            <span><?= $product->old_price ?></span></h4>
                                        <?php endif; ?>
                                    </div>
                                    <div class="snipcart-details">
                                        <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id]) ?>" data-id="<?= $product->id ?>" class="button add-to-cart-btn">В Корзину</a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
<!-- -------------- End product card------------------- -->
                <?php endforeach; ?>
            <?php endif; ?>
<!--            <div class="clearfix"> </div>-->
        </div>
        <?= \yii\widgets\LinkPager::widget(['pagination' => $pages]) ?>
    </div>
</div>
<!--products end-->
</section>
