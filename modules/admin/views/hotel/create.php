<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Hotel $model */

$this->title = 'Create Hotel';
$this->params['breadcrumbs'][] = ['label' => 'Hotels', 'url' => ['index']];
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

