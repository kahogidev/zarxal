<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Clients $model */
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
                                <?= $form->field($model, 'client_lastname')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'client_firstname')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'client_full_name')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'client_live_address')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'client_passport_series')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'client_passport_number')->textInput() ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'client_passport_given_date')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'client_passport_given_by')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'client_passport_jshir_number')->textInput(['maxlength' => true]) ?>
                            </div>

                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'client_phone')->textInput() ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'tour_id')->textInput() ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'sum_pay')->textInput() ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'sum_cash')->textInput() ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'sum_credit')->textInput() ?>
                            </div>
<!--                            <div class="mb-3 col-md-6">-->
<!--                                --><?//= $form->field($model, 'created_at')->textInput() ?>
<!--                            </div>-->
<!--                            <div class="mb-3 col-md-6">-->
<!--                                --><?//= $form->field($model, 'updated_at')->textInput() ?>
<!--                            </div>-->
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'status')->textInput() ?>
                            </div>

                        </div>
                        <div class="form-group">
                            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php ActiveForm::end(); ?>

</div>
