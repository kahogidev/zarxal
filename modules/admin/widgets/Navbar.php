<?php

namespace app\modules\admin\widgets;
class Navbar extends \yii\bootstrap5\Widget
{
    public function run()
    {
        return $this->render('navbar');
    }
}