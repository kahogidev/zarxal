<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Test $model */
/** @var app\models\Test $nameValues */

$this->title = 'Update Test: ';
$this->params['breadcrumbs'][] = ['label' => 'Tests', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->getName(), 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="test-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php print_r($nameValues); die();?>
    <?= $this->render('_form', [
        'model' => $model,
        'nameValues' => $nameValues
    ]) ?>

</div>
