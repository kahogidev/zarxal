<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>


    <span class="login100-form-title p-b-26">Admin</span>
    <span class="login100-form-title p-b-48">
        <img style="width: 20%;" src="/admin-files/icons/user-solid.svg" alt="">

    </span>
<?php  $form = ActiveForm::begin([
    'id' => 'login-form',
    'fieldConfig' => [
        'template' => "{label}\n{input}\n{error}",
        'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
        'inputOptions' => ['class' => 'col-lg-12 form-control'],
        'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
    ],
]); ?>

    <div class="wrap-input100 validate-input" >
        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('Username') ?>
    </div>

    <div class="wrap-input100 validate-input" >
        <?= $form->field($model, 'password')->passwordInput()->label('Password') ?>
    </div>


<?= $form->field($model, 'rememberMe')->checkbox([
    'template' => "<div class=\"custom-control custom-checkbox\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
]) ?>


    <div class="container-login100-form-btn mt-4">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <div class="login100-form">
                <?= Html::submitButton('Login', ['class' => 'login100-form-btn', 'name' => 'login-button', 'style'=>'']) ?>
            </div>
        </div>
    </div>


<?php ActiveForm::end(); ?>