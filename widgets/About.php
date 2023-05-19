<?php

namespace app\widgets;

use yii\bootstrap5\Widget;
class About extends  Widget
{
    public function run()
    {
        return $this->render('about');
    }
}