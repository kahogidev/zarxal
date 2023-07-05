<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Clients $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="clients-view">

    <h1><?= Html::encode($this->title) ?></h1>
    <a href="<?=\yii\helpers\Url::to(['pdf', 'id'=>$model->id])?>" style="cursor: pointer"><i class="bx bxs-file-pdf" style="padding: 0.375rem 0.75rem; font-size: 2.5rem;"></i>download</a>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <button   class=" btn btn-warning" ><?= Html::a('Pdf yuklash', ['pdf', 'id' => $model->id],['style' =>'color:white;font-weight:bold']) ?></button>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'client_lastname',
            'client_firstname',
            'client_full_name',
            'client_passport_series',
            'client_passport_number',
            'client_passport_given_date',
            'client_passport_given_by',
            'client_passport_jshir_number',
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
