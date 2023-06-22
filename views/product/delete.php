<?php

use yii\helpers\Html;

$this->title = 'Delete Product';
$this->params['breadcrumbs'][] = ['label' => 'Product List', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>Are you sure you want to delete this product?</p>

<?= Html::a('Confirm', ['delete', 'id' => $id], ['class' => 'btn btn-danger']) ?>
<?= Html::a('Cancel', ['index'], ['class' => 'btn btn-default']) ?>