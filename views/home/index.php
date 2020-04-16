<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>
    <div class="w3l_banner_nav_right">
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="w3l_banner_nav_right_banner">
                            <h3>Make your <span>food</span> with Spicy.</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner1">
                            <h3>Make your <span>food</span> with Spicy.</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="w3l_banner_nav_right_banner2">
                            <h3>upto <i>50%</i> off.</h3>
                            <div class="more">
                                <a href="products.html" class="button--saqui button--round-l button--text-thick" data-text="Shop now">Shop now</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="clearfix"></div>
</div>
<!-- banner -->
<div class="banner_bottom">
    <div class="wthree_banner_bottom_left_grid_sub">
    </div>
    <div class="wthree_banner_bottom_left_grid_sub1">
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="images/4.jpg" alt=" " class="img-responsive" />
                <div class="wthree_banner_bottom_left_grid_pos">
                    <h4>Купи со скидкой <span>25%</span></h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="images/5.jpg" alt=" " class="img-responsive" />
                <div class="wthree_banner_btm_pos">
                    <h3>introducing <span>best store</span> for <i>groceries</i></h3>
                </div>
            </div>
        </div>
        <div class="col-md-4 wthree_banner_bottom_left">
            <div class="wthree_banner_bottom_left_grid">
                <img src="images/6.jpg" alt=" " class="img-responsive" />
                <div class="wthree_banner_btm_pos1">
                    <h3>Save <span>Upto</span> $10</h3>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- top-brands -->
<?php if (!empty($offers)): ?>
    <div class="top-brands">
    <div class="container">
        <h3>Горячие Предложения</h3>
        <div class="agile_top_brands_grids">
            <?php foreach ($offers as $offer): ?>
            <div class="col-md-3 top_brand_left">
                <div class="hover14 column">
                    <div class="agile_top_brand_left_grid">
                        <div class="agile_top_brand_left_grid_pos">
                            <?= \yii\helpers\Html::img('@web/images/offer.png', ['alt' => 'offer', 'class' => 'img-responsive']); ?>
                        </div>
                        <div class="agile_top_brand_left_grid1">
                            <figure>
                                <div class="snipcart-item block">
                                    <div class="snipcart-thumb">
                                        <a href="<?= \yii\helpers\Url::to(['/product/view/', 'id' => $offer->id]) ?>"><?= \yii\helpers\Html::img("@web/{$offer->img}", ['alt' => '', 'class' => 'img-responsive']); ?></a>
                                        <p><?= $offer->title ?></p>
                                        <h4>&#8381; <?= $offer->price ?>
                                            <?php if ((float)$offer->old_price): ?>
                                            <span><?= $offer->old_price ?></span></h4>
                                            <?php endif; ?>
                                    </div>
                                    <div class="snipcart-details top_brand_home_details">
                                        <a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $offer->id]) ?>" data-id="<?= $offer->id ?>" class="button add-to-cart-btn">В Корзину</a>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- //top-brands -->