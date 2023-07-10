<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $model */
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
                                        <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>
                                    </div>


                                </div>


                                    <div class="form-group">
                                        <?= Html::submitButton('Saqlash', ['class' => 'btn btn-dark']) ?>
                                    </div>
                                </div>


                            </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="box">
                        <div class="js--image-preview" style="background-image: url("<?=$model->getAvatarImage()?>")"></div>
                    <div class="upload-options">
                        <label class="btn-primary">
                            <?= $form->field($model, 'image')->label(false)->fileInput(['accept'=>'image/*', 'class'=>'btn btn-primary image-upload ']) ?>
                        </label>
                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?>




</div>





























</div>
