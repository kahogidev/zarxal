<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Contacts $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="container-fluid">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-xl-9 col-lg-9">
            <div class="card">
                <div class="card-header">
                    <h1><?= Html::encode($this->title) ?></h1>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'addres')->textarea(['rows' => 6]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'first_phone')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'second_phone')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'third_phone')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'telegram_link')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'instagram_link')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'facebook_link')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'tweetter_link')->textInput(['maxlength' => true]) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>

