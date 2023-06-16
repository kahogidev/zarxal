<?php

use app\models\Testimonials;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TestimonialsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Testimonials';
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
                    <button   class=" btn btn-secondary" ><?= Html::a('Create Testimonials', ['create'],['style' =>'color:white;font-weight:bold']) ?></button>
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
            [ 'attribute' =>'images',
                'value' => function($data){
                    $image = \app\models\StaticFunctions::getImage('testimonials',$data->id, $data->images);
                    return "<img class='border-radius-10' src='$image' style='max-width: 100px;max-height:100px'>";
                },
                'format' => 'html'

            ],
            'name',
//            'email:email',
            'comment:ntext',

            //'status',
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
