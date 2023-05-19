<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends Controller
{
    public $layout='admin';

    public function actionIndex()
    {
        return $this->render('index');
    }
}
