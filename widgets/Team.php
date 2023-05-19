<?php
namespace app\widgets;

use yii\bootstrap5\Widget;

class Team extends Widget
{
    public function run()
    {
        return $this->render('team');
    }
}