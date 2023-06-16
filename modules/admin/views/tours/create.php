<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tours $model */

$this->title = 'Tourlar yaratish ';
$this->params['breadcrumbs'][] = ['label' => 'Tours', 'url' => ['index']];
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

