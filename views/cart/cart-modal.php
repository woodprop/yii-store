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
    </tr>
    </thead>
    <tbody>
        <?php foreach ($session['cart'] as $product): ?>
        <tr>
            <td><?= \yii\helpers\Html::img("@web/images/products/{$product['img']}", ['class' => 'cart-thumbnail']) ?></td>
            <td><?= $product['title'] ?></td>
            <td class="text-center"><?= $product['qty'] ?></td>
            <td><?= $product['price'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php else: ?>
<h3>Корзина пуста...</h3>
<?php endif; ?>