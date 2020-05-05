<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<!-- header -->
<div class="agileits_header">
    <div class="w3l_offers">
        <a href="products.html">Только Сегодня !</a>
    </div>
    <div class="w3l_search">
        <form action="<?= Url::to(['category/search']) ?>" method="get">
            <input type="text" name="q" value="Поиск товаров..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Поиск товаров...';}" required="">
            <input type="submit" value="">
        </form>
    </div>
    <div class="product_list_header">
        <!-- Button trigger modal -->
        <button type="button" class="button-show-cart" data-toggle="modal" data-target="#cart-modal">
            Корзина
        </button>
        <!-- Modal -->
        <div class="modal fade" id="cart-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content no-br">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Корзина</h4>
                    </div>
                    <div class="modal-body"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default no-br" data-dismiss="modal">Продолжить покупки</button>
                        <button type="button" class="btn btn-primary no-br button-checkout">Оформить заказ</button>
                        <button type="button" class="btn btn-danger no-br button-clear-cart">Очистить корзину</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="w3l_header_right1">
        <h2><a href="">Связаться с нами</a></h2>
    </div>
    <div class="clearfix"> </div>
</div>

<div class="logo_products">
    <div class="container">
        <div class="w3ls_logo_products_left">
            <h1><a href="<?= Url::home() ?>"><span>Продуктовый</span> Ларёк</a></h1>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="special_items">
                <li><a href="<?= Url::to(['home/events']) ?>">Акции</a><i>/</i></li>
                <li><a href="<?= Url::to(['home/about']) ?>">О Нас</a><i>/</i></li>
                <li><a href="<?= Url::to(['home/sale']) ?>">Распродажа</a><i>/</i></li>
                <li><a href="<?= Url::to(['home/services']) ?>">Услуги</a></li>
            </ul>
        </div>
        <div class="w3ls_logo_products_left1">
            <ul class="phone_email">
                <li><i class="fa fa-phone" aria-hidden="true"></i>+7 (495) 234-5678</li>
                <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">store@grocery.com</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //header -->
    <?= $content ?>
<!-- newsletter -->
<div class="newsletter">
    <div class="container">
        <div class="w3agile_newsletter_left">
            <h3>подпишитесь на нашу рассылку</h3>
        </div>
        <div class="w3agile_newsletter_right">
            <form action="#" method="post">
                <input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                <input type="submit" value="Подписаться">
            </form>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //newsletter -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-3 w3_footer_grid">
            <h3>information</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="events.html">Акции</a></li>
                <li><a href="about.html">О Нас</a></li>
                <li><a href="products.html">Распродажа</a></li>
                <li><a href="services.html">Услуги</a></li>
                <li><a href="short-codes.html">Купоны</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>policy info</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="faqs.html">ЧаВо</a></li>
                <li><a href="privacy.html">Конфиденциальность</a></li>
                <li><a href="privacy.html">Условия</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>what in stores</h3>
            <ul class="w3_footer_grid_list">
                <li><a href="pet.html">Pet Food</a></li>
                <li><a href="frozen.html">Frozen Snacks</a></li>
                <li><a href="kitchen.html">Kitchen</a></li>
                <li><a href="products.html">Branded Foods</a></li>
                <li><a href="household.html">Households</a></li>
            </ul>
        </div>
        <div class="col-md-3 w3_footer_grid">
            <h3>twitter posts</h3>
            <ul class="w3_footer_grid_list1">
                <li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Non numquam <a href="#">http://sd.ds/13jklf#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
                <li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Con numquam <a href="#">http://fd.uf/56hfg#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://fd.uf/56hfg#</a>quo nulla.</span></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
        <div class="agile_footer_grids">
            <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                <div class="w3_footer_grid_bottom">
                    <h4>100% безопасная оплата</h4>
                    <img src="/images/card.png" alt=" " class="img-responsive" />
                </div>
            </div>
            <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                <div class="w3_footer_grid_bottom">
                    <h5>connect with us</h5>
                    <ul class="agileits_social_icons">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://github.com/woodprop" class="github" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="wthree_footer_copy">
            <p>© 2020 Продуктовый Ларёк | Разработка <a href="http://kkokarev.ru/">Konstantin Kokarev</a></p>
        </div>
    </div>
</div>
<!-- //footer -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

