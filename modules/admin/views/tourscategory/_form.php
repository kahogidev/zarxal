<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tourscategory $model */
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
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <?php $languages = ['uz', 'en', 'ru'] ?>

                        <?php foreach ($languages as $key => $language): ?>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link <?= $key != 0 ? ' ' : 'active' ?>"
                                        id="<?= $language ?>-tab"
                                        data-bs-toggle="tab"
                                        data-bs-target="#<?= $language ?>" type="button" role="tab"
                                        aria-controls="<?= $language ?>"
                                        aria-selected="true"><?= $language ?>
                                </button>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="basic-form">
                        <div class="tab-content" id="myTabContent">
                            <?php foreach ($languages as $key => $language): ?>
                                <div class="tab-pane <?= $key != 0 ? ' ' : 'show active' ?>" id="<?= $language ?>" role="tabpanel"aria-labelledby="<?= $language ?>-tab">
                                    <div class="mb-3 col-md-6">
                                            <?= $form->field($model, 'name[' . $language . ']')->textInput(['maxlength' => true]) ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="basic-form">
                        <div class="row">
                            <div class="mb-3 col-md-6">
                                <?= $form->field($model, 'status')->textInput() ?>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div class="upload-options">
                                    <label class="btn-dark">
                                        <?= $form->field($model, 'images')->label(false)->fileInput(['accept'=>'image/*', 'class'=>'btn btn-primary image-upload ']) ?>
                                    </label>
                                </div>
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











