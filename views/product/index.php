<?php

use yii\helpers\Html;

$this->title = 'Product List';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<table>
    <thead>
        <tr>
            <th>SKU</th>
            <th>Name</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= Html::encode($product->sku) ?></td>
                <td><?= Html::encode($product->name) ?></td>
                <td><?= Html::encode($product->quantity) ?></td>
                <td>
                    <?= Html::a('Delete', ['delete', 'id' => $product->id], ['class' => 'btn btn-danger', 'data-confirm' => 'Are you sure you want to delete this product?']) ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
