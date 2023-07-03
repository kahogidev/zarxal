<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Clients $model */

$this->title = $model->client_firstname. ' ' .$model->client_lastname ;

\yii\web\YiiAsset::register($this);
?>
<div class="clients-view my-5">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'client_lastname',
            'client_firstname',
            'client_passport_series',
            'client_passport_number',
            'client_phone',
            'tour_id',
            'sum_pay',
            'sum_cash',
            'sum_credit',
            'created_at:datetime',
            'updated_at:datetime',
            'status',
        ],
    ]) ?>

</div>
