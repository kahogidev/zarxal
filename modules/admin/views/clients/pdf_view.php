<?php

use yii\helpers\Html;
use yii\grid\GridView;


$this->title='pdf view';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="container">
    <h2><?=Html::encode($this->title)?></h2>

    <table id="customer">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Content</th>
        </tr>

        <?php foreach ($dataProvider->getModels() as $model) {?>

            <tr>
                <th><?=$model->id?></th>
                <th><?=$model->client_lastname?></th>
                <th><?=$model->client_firstname?></th>
                <th><?=$model->client_phone?></th>
                <th><?=$model->tour_id?></th>
                <th><?=$model->sum_pay?></th>
                <th><?=$model->sum_cash?></th>
                <th><?=$model->sum_credit?></th>

            </tr>


        <?php }?>

    </table>
</div>
