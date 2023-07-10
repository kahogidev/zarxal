<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Clients $model */


$this->params['breadcrumbs'][] = ['label' => 'Clients', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>


<div class="page-titles">
    <ol style="width: 100%;" class="breadcrumb">
        <li>
            <h5 class="bc-title">
                <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <a href="<?=Url::to(['/'])?>"> Bosh sahifa</a>
            </h5>
        </li>
        <li class="breadcrumb-item">
            <a href="<?=Url::to(['/admin'])?>">Admin/</a>
        </li>
        <li class="active"><?= $this->title?></li>

    </ol>

</div>


<div class="container">


                    <h1><?= Html::encode($this->title) ?></h1>
                <!--    <a href="--><?//=\yii\helpers\Url::to(['pdf', 'id'=>$model->id])?><!--" style="cursor: pointer"><i class="bx bxs-file-pdf" style="padding: 0.375rem 0.75rem; font-size: 2.5rem;"></i>download</a>-->
                    <div class="container mb-4">
                       <div class="row">
                           <div class="col-11">
                               <?= Html::a('Yangilash', ['Update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                               <?= Html::a("O'chirish", ['Delete', 'id' => $model->id], [
                                   'class' => 'btn btn-danger',
                                   'data' => [
                                       'confirm' => 'Are you sure you want to delete this item?',
                                       'method' => 'post',
                                   ],
                               ]) ?>

                           </div>
                           <div class="col-1 btn btn-dark">
                               <a href="<?=Url::to(['pdf','id'=>$model->id])?>"><img style="width:25px" src="/admin-files/icons/pdf.svg" alt=""></a>
                           </div>
                       </div>
                    </div>


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
</div>


