<?php

namespace app\widgets;

use yii\bootstrap5\Widget;
class Banner extends Widget
{
    public function run()
    {
        return $this->render('banner');
    }
}