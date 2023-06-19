<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Faq $model */

$this->title = 'FAQ yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Faqs', 'url' => ['index']];
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


