<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mahalla $model */

$this->title = 'Create Mahalla';
$this->params['breadcrumbs'][] = ['label' => 'Mahallas', 'url' => ['index']];
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
