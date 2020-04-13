<?php
/**
 * @var $session
 */
if (isset($session['cart'])): ?>
<table class="table table-striped">
    <thead>
    <tr>
        <th></th>
        <th>Название</th>
        <th>Количество</th>
        <th>Цена</th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($session['cart'] as $id => $product): ?>
        <tr>
            <td><?= \yii\helpers\Html::img("@web/{$product['img']}", ['class' => 'cart-thumbnail']) ?></td>
            <td><?= $product['title'] ?></td>
            <td class="text-center"><?= $product['qty'] ?></td>
            <td><?= $product['price'] ?></td>
            <td><div class="cart-del-item-btn" data-id="<?= $id ?>">×</div></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    <div class="text-right">Всего <?= $session['cart-qty'] ?> товаров на сумму <?= $session['cart-total'] ?> &#8381;</div>
<?php else: ?>
<h3>Корзина пуста...</h3>
<?php endif; ?>