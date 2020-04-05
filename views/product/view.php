<?php
/**
 * @var $product object
 */
?>
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="<?= \yii\helpers\Url::home() ?>">Главная</a><span>|</span></li>
            <li><a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $product->category->id]) ?>"><?= $product->category->title ?></a><span>|</span></li>
            <li><?= $product->title ?></li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>
    <div class="w3l_banner_nav_right">
        <div class="category_banner">
            <?= \yii\helpers\Html::img("@web/images/2.jpg", ['alt' => '', 'class' => 'img-responsive']) ?>
            <!--        <div class="w3l_banner_nav_right_banner9 w3l_banner_nav_right_banner_pet">-->
            <div class="category_banner_title">
                <h4>Your Pet Favourite Food</h4>
                <p>Sint occaecat cupidatat non proident</p>
                <a href="single.html">Shop Now</a>
            </div>

        </div>

<!--        Single product start-->
        <div class="agileinfo_single">
            <h5><?= $product->title ?></h5>
            <div class="col-md-4 agileinfo_single_left">
                <?= \yii\helpers\Html::img("@web/images/products/{$product->img}", ['alt' => '', 'class' => 'img-responsive', 'id' => 'example']) ?>
            </div>
            <div class="col-md-8 agileinfo_single_right">
                <div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" checked>
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
                </div>
                <div class="w3agile_description">
                    <h4>Описание :</h4>
                    <p><?= $product->content ?></p>
                </div>
                <div class="snipcart-item block">
                    <div class="snipcart-thumb agileinfo_single_right_snipcart">
                        <h4>&#8381; <?= $product->price ?>
                            <?php if ((float)$product->old_price): ?>
                            <span><?= $product->old_price ?></span></h4>
                        <?php endif; ?>
                    </div>
                    <div class="snipcart-details agileinfo_single_right_details">
                        <form action="#" method="post">
                            <fieldset>
                                <input type="hidden" name="cmd" value="_cart" />
                                <input type="hidden" name="add" value="1" />
                                <input type="hidden" name="business" value=" " />
                                <input type="hidden" name="item_name" value="pulao basmati rice" />
                                <input type="hidden" name="amount" value="21.00" />
                                <input type="hidden" name="discount_amount" value="1.00" />
                                <input type="hidden" name="currency_code" value="USD" />
                                <input type="hidden" name="return" value=" " />
                                <input type="hidden" name="cancel_return" value=" " />
                                <input type="submit" name="submit" value="В корзину" class="button" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>

<!--        Single product end-->
    </div>

    <div class="clearfix"></div>
</div>


<section class="product_block">
    <!--products start-->
    <div class="container">
        <div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
            <h3 class="w3l_fruit">bla bla bla</h3>
            <div class="row product_list_wrapper">

            </div>
        </div>
    </div>
    <!--products end-->
</section>
