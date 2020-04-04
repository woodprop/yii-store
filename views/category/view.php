<?php
/**
 * @var $category object
 * @var $products array
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
                                        <a href="<?= \yii\helpers\Url::to(['/product/view/', 'id' => $product->id]) ?>"><?= \yii\helpers\Html::img("@web/images/products/{$product->img}", ['alt' => '', 'class' => 'img-responsive']); ?></a>
                                        <p><?= $product->title ?></p>
                                        <h4>&#8381; <?= $product->price ?>
                                            <?php if ((float)$product->old_price): ?>
                                            <span><?= $product->old_price ?></span></h4>
                                        <?php endif; ?>
                                    </div>
                                    <div class="snipcart-details">
                                        <form action="#" method="post">
                                            <fieldset>
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_name" value="can - tuna for cats" />
                                                <input type="hidden" name="amount" value="8.00" />
                                                <input type="hidden" name="discount_amount" value="1.00" />
                                                <input type="hidden" name="currency_code" value="USD" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button" />
                                            </fieldset>
                                        </form>
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
    </div>
</div>
<!--products end-->
