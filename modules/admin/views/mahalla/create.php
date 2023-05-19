<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Mahalla $model */

$this->title = 'Create Mahalla';
$this->params['breadcrumbs'][] = ['label' => 'Mahallas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mahalla-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
