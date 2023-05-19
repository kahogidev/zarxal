<?php

use app\models\Hotel;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\HotelSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Hotels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-xl-12">
    <div class="card dz-card" id="bootstrap-table2">


        <div class="card-header flex-wrap d-flex justify-content-between  border-0">
            <div>
                <h1 class="card-title"><?= Html::encode($this->title) ?></h1>

            </div>
            <ul class="nav nav-tabs dzm-tabs" id="myTab-1" role="tablist">
                <li class="nav-item" role="presentation">
                    <button   class=" btn btn-secondary" ><?= Html::a('Create Hotels', ['create'],['style' =>'color:white;font-weight:bold']) ?></button>
                </li>

            </ul>
        </div>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'country',
            'name',
            'images',
            'status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Hotel $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>

    </div>
</div>
