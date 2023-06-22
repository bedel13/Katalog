<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Create Product';
$this->params['breadcrumbs'][] = ['label' => 'Product List', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<h2>Форма создания нового товара</h2>
<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'image')->fileInput() ?>
<?= $form->field($model, 'sku')->textInput() ?>
<?= $form->field($model, 'name')->textInput() ?>
<?= $form->field($model, 'quantity')->textInput(['type' => 'number']) ?>
<?= $form->field($model, 'type')->textInput() ?>

<div class="form-group">
    <?= Html::submitButton('Добавить товар', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($model, 'sku')->textInput() ?>
<?= $form->field($model, 'name')->textInput() ?>
<?= $form->field($model, 'quantity')->textInput() ?>

<?= Html::submitButton('Create', ['class' => 'btn btn-primary']) ?>

<?php ActiveForm::end(); ?>
