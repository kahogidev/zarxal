<?php

namespace app\widgets;


use yii\bootstrap5\Widget;

class Destination extends Widget
{
    public function run()
    {
        $models =\app\models\Tours::find()->where(["status"=>1])->all();
        return $this->render('destination',compact("models"));
    }
}