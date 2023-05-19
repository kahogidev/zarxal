<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Contacts $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="contacts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'addres')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'first_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'second_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'third_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'telegram_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instagram_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'facebook_link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tweetter_link')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
