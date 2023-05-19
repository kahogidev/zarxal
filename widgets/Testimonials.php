<?php

namespace app\widgets;

use yii\bootstrap5\Widget;


class Testimonials extends Widget
{
    public function run()
    {
        return $this->render('testimonials');
    }
}