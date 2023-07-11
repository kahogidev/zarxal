<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Mahalla $model */
/** @var yii\widgets\ActiveForm $form */
?>


<div class="container-fluid">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-11">
            <div class="card">
                <div class="card-header">
                    <h1><?= Html::encode($this->title) ?></h1>
                </div>
                <div class="card-body">
                    <div class="basic-form">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'status')->textInput() ?>
                            </div>

                        </div>
                        <div class="form-group">
                            <?= Html::submitButton('Saqlash', ['class' => 'btn btn-dark']) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>






