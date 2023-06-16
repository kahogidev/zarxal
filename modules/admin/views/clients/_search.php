<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ClientsSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="clients-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'client_lastname') ?>

    <?= $form->field($model, 'client_firstname') ?>

    <?= $form->field($model, 'client_passport_series') ?>

    <?= $form->field($model, 'client_passport_number') ?>

    <?php // echo $form->field($model, 'client_phone') ?>

    <?php // echo $form->field($model, 'tour_id') ?>

    <?php // echo $form->field($model, 'sum_pay') ?>

    <?php // echo $form->field($model, 'sum_cash') ?>

    <?php // echo $form->field($model, 'sum_credit') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
