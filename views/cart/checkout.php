<?php
/**
 * @var $session
 * @var $order \yii\db\ActiveRecord
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

<!-- ---------- checkout start ---------- -->
        <div class="privacy about">
            <h3>Оформление заказа</h3>
            <?= \app\widgets\Alert::widget() ?>
            <?php if (isset($_SESSION['cart'])): ?>
            <div class="checkout-right">
                <h4>Товаров в корзине: <span><?= $_SESSION['cart-qty'] ?></span></h4>
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
                                    <div class="entry value-minus" data-id="<?= $id ?>" data-qty="-1">&nbsp;</div>
                                    <div class="entry value"><span><?= $product['qty'] ?></span></div>
                                    <div class="entry value-plus" data-id="<?= $id ?>" data-qty="1">&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class="invert"><?= $product['title'] ?></td>

                        <td class="invert"><?= $product['price'] ?></td>
                        <td class="invert">
                            <div class="rem">
                                <a href="<?= \yii\helpers\Url::to(['cart/delete-item', 'id' => $id]) ?>" class="close1 checkout-delete-item-btn" data-id="<?= $id ?>"></a>
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
                    <?php $form = \yii\widgets\ActiveForm::begin() ?>
                        <?= $form->field($order, 'name') ?>
                        <?= $form->field($order, 'email') ?>
                        <?= $form->field($order, 'phone') ?>
                        <?= $form->field($order, 'address') ?>
                        <?= $form->field($order, 'comment')->textarea(['rows' => 5]) ?>
                        <?= \yii\helpers\Html::submitButton('Отправить заказ', ['class' => 'submit check_out']) ?>
                    <?php $form = \yii\widgets\ActiveForm::end() ?>

                </div>
                <div class="clearfix"> </div>
            </div>
            <?php else: ?>
                <h4>Корзина пуста...</h4>
            <?php endif; ?>
        </div>
<!-- ---------- checkout end ---------- -->

    </div>

    <div class="clearfix"></div>
</div>


