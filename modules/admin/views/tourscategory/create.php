<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tourscategory $model */

$this->title = 'Create Tourscategory';
$this->params['breadcrumbs'][] = ['label' => 'Tourscategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tourscategory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
