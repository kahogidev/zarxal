<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tourscategory $model */

$this->title = 'Update Tourscategory: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tourscategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tourscategory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
