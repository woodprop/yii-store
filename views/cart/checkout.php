<?php
/**
 * @var $session
 */
?>
<!-- products-breadcrumb -->
<div class="products-breadcrumb">
    <div class="container">
        <ul>
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="<?= \yii\helpers\Url::home() ?>">Главная</a><span>|</span></li>
            <li>Оформление заказа</li>
        </ul>
    </div>
</div>
<!-- //products-breadcrumb -->
<div class="banner">
    <?= $this->render('//layouts/inc/sidebar') ?>
    <div class="w3l_banner_nav_right">
        <?php if (isset($_SESSION['cart'])): ?>
<!-- ---------- checkout start ---------- -->
        <div class="privacy about">
            <h3>Оформление заказа</h3>

            <div class="checkout-right">
                <h4>В Вашей корзине: <span>3 Products</span></h4>
                <table class="timetable_sub">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Изображение</th>
                        <th>Количество</th>
                        <th>Название</th>

                        <th>Цена</th>
                        <th>Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?php $idx = 0; ?>
                        <?php foreach ($_SESSION['cart'] as $id => $product): ?>
                        <?php $idx++; ?>
                        <tr class="rem1">
                        <td class="invert"><?= $idx ?></td>
                        <td class="invert-image">
                            <a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $id]) ?>">
                                <?= \yii\helpers\Html::img("@web/images/products/{$product['img']}", ['alt' => '', 'class' => 'img-responsive']) ?>
                            </a>
                        </td>
                        <td class="invert">
                            <div class="quantity">
                                <div class="quantity-select">
                                    <div class="entry value-minus">&nbsp;</div>
                                    <div class="entry value"><span><?= $product['qty'] ?></span></div>
                                    <div class="entry value-plus active">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert"><?= $product['title'] ?></td>

                        <td class="invert"><?= $product['price'] ?></td>
                        <td class="invert">
                            <div class="rem">
                                <div class="close1"> </div>
                            </div>

                        </td>
                    </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="checkout-left">
                <div class="col-md-4 checkout-left-basket">
                    <h4>В корзине:</h4>
                    <ul>
                        <?php foreach ($_SESSION['cart'] as $product): ?>
                        <li><?= $product['title'] ?><span><?= $product['price'] * $product['qty'] ?> &#8381;</span></li>
                        <?php endforeach; ?>
                        <li>Итого: <span><?= $_SESSION['cart-total'] ?> &#8381;</span></li>
                    </ul>
                </div>
                <div class="col-md-8 address_form_agile">
                    <h4>Данные покупателя:</h4>
                    <form action="payment.html" method="post" class="creditly-card-form agileinfo_form">
                        <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                            <div class="information-wrapper">
                                <div class="first-row form-group">
                                    <div class="controls">
                                        <label class="control-label">Имя, Фамилия:</label>
                                        <input class="billing-address-name form-control" type="text" name="name" placeholder="Имя, Фамилия">
                                    </div>
                                    <div class="w3_agileits_card_number_grids">
                                        <div class="w3_agileits_card_number_grid_left">
                                            <div class="controls">
                                                <label class="control-label">Телефон:</label>
                                                <input class="form-control" type="text" placeholder="Телефон">
                                            </div>
                                        </div>
                                        <div class="w3_agileits_card_number_grid_right">
                                            <div class="controls">
                                                <label class="control-label">Адрес: </label>
                                                <input class="form-control" type="text" placeholder="Адрес">
                                            </div>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Город:</label>
                                        <input class="form-control" type="text" placeholder="Город">
                                    </div>
                                    <div class="controls">
                                        <label class="control-label">Тип адреса:</label>
                                        <select class="form-control option-w3ls">
                                            <option>Домашний</option>
                                            <option>Рабочий</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="submit check_out">Delivery to this Address</button>
                            </div>
                        </section>
                    </form>
                    <div class="checkout-right-basket">
                        <a href="payment.html">Make a Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
<!-- ---------- checkout end ---------- -->
        <?php else: ?>
        <h3>Корзина пуста...</h3>
        <?php endif; ?>
    </div>

    <div class="clearfix"></div>
</div>


