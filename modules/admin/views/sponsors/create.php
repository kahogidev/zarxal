<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Sponsors $model */

$this->title = 'Hamkorlar yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Sponsors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="positions-form">
    <div class="main-wrapper">
        <div class="content-body">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
        </div>
    </div>
</div>

