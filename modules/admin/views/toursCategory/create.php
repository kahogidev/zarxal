<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\ToursCategory $model */

$this->title = 'Create Tours Category';
$this->params['breadcrumbs'][] = ['label' => 'Tours Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tours-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
