<?php

use app\models\Mahalla;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\MahallaSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Mahalla';
$this->params['breadcrumbs'][] = $this->title;
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
<div class="container-fluid ">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive dz-card" id="bootstrap-table5">
                    <div class="card-header flex-wrap d-flex justify-content-between  border-0 margin">
                                <div>
                                    <p class="card-title" style="font-size: 50px"><?= Html::encode($this->title) ?></p>
                                </div>
                                <ul class="nav nav-tabs dzm-tabs" id="myTab-1" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button   class=" btn btn-secondary" ><?= Html::a('Mahalla yaratish', ['create'],['style' =>'color:white;font-weight:bold']) ?></button>
                                    </li>
                                </ul>
                            </div>
                    <div class="card-body">
                        <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            'id',
                            'name',
                            'status',
                            [
                                'class' => 'yii\grid\ActionColumn',
                                'header' => 'Amallar',
                                'headerOptions' => ['style' => 'text-align:center'],
                                'template' => '{buttons}',
                                'contentOptions' => ['style' => 'min-width:150px;max-width:150px;width:150px', 'class' => 'v-align-middle'],
                                'buttons' => [
                                    'buttons' => function ($url, $model) {
                                        $controller = Yii::$app->controller->id;
                                        $code = <<<BUTTONS
                                                <div class="btn-group flex-center">
                                                    <a href="/admin/{$controller}/update?id={$model->id}" class="btn btn-light"><img style="width: 15px;" src="/admin-files/icons/edit-blue.svg" alt=""></i></a>
                                                    <a href="/admin/{$controller}/delete?id={$model->id}" id="{$controller}{$model->id}" data-postID="{$model->id}" data-postType="{$controller}" class="btn btn-primary "><img style="width: 15px;" src="/admin-files/icons/trash-white.svg" alt=""></a>
                                                </div>
                BUTTONS;
                                        return $code;
                                    }

                                ],
                            ],
                        ],
                    ]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



