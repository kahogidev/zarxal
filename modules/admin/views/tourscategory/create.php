<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tourscategory $model */

$this->title = 'Tour paket kategoriya yaratish ';
$this->params['breadcrumbs'][] = ['label' => 'Tourscategories', 'url' => ['index']];
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


