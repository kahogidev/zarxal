<?php

namespace app\modules\admin\widgets;

use yii\bootstrap5\Widget;

class Page extends Widget
{   public function run()
{
    return $this->render('page');
}

}