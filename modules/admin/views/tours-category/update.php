<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ToursCategory $model */
/** @var app\models\ToursCategory $nameValues */

$this->title = 'Update Tours Category: ' . $model->getName();
$this->params['breadcrumbs'][] = ['label' => 'Tours Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tours-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'nameValues' => $nameValues
    ]) ?>

</div>
