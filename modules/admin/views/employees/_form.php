<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Employees $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="employees-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-xl-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Input Style</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'phone')->textInput() ?>

                            <?= $form->field($model, 'telegram')->textInput() ?>

                            <?= $form->field($model, 'position_id')->textInput() ?>

                            <?= $form->field($model, 'mahalla_id')->textInput(['maxlength' => true]) ?>
                        </div>
                        <div class="col-6">


                            <?= $form->field($model, 'status')->textInput() ?>

                            <?= $form->field($model, 'creator')->textInput() ?>

                            <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
