<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ToursCategory $model */
/** @var app\models\ToursCategory $nameValues */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tours-category-form">
    <?php
//    print_r($nameValues); die();
    $languages = Yii::$app->params['languages'];

    $i = 0
    ?>
    <?php $form = ActiveForm::begin(); ?>
    <ul class="nav nav-tabs">
        <?php foreach ($languages as $language => $label) { ?>
            <li class="<?= ($i == 0) ? 'active' : '' ?>"><a data-bs-toggle="tab" aria-expanded="false"
                                                            class="nav-link"
                                                            href="#<?= $language ?>"><?= $label ?></a>
            </li>
            <?php $i++;
        } ?>
    </ul>
    <div class="tab-content">
        <?php $j = 0;
        foreach ($languages

        as $language => $label) { ?>
        <div id="<?= $language ?>" class="tab-pane  <?= ($j == 0) ? 'active' : '' ?>">

            <?= $form->field($model, 'translate_name['.$language.']')->textInput(['maxlength' => true,'value' => (!empty($nameValues[$language]) ? $nameValues[$language] : '')])->label(false) ?>

            <?= $form->field($model, 'images')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'status')->textInput() ?>
        </div>
            <?php $j++;
        } ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
