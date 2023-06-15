<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="main-wrapper">

    <div class="content-body">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h1><?= Html::encode($this->title) ?></h1>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">

                                <?php $form = ActiveForm::begin(); ?>

                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'first_name')->textInput(['class'=>'form-control','maxlength' => true]) ?>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'phone')->textInput() ?>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'telegram')->textInput() ?>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'telegram')->textInput() ?>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'telegram')->textInput() ?>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'position_id')->textInput() ?>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'mahalla_id')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'status')->textInput() ?>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'creator')->textInput() ?>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
                                    </div>

                                    <div class="form-group">
                                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                                    </div>
                                </div>

                                <?php ActiveForm::end(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

































</div>
