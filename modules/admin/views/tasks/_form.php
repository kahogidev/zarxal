<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tasks $model */
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
                                <?= $form->field($model, 'created_at')->textInput() ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'updated_at')->textInput() ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'begin_at')->textInput() ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'ended_at')->textInput() ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'employee_id')->textInput() ?>
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
