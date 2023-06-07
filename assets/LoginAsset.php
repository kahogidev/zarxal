<?php

namespace app\assets;

use yii\web\AssetBundle;

class LoginAsset extends AssetBundle

{
    public $basePath = '@webroot';
    public $baseUrl = '@web/admin-files';
    public $css = [

        "css/login/animate.css",
        "css/login/animsition.min.css",
        "css/login/select2.min.css",
        "css/login/util.css",
        "css/login/main.css",
        "css/login/hamburgers.min.css",
        "css/login/daterangepicker.css",



    ];
    public $js = [

        "js/login/animsition.min.js",
        "js/login/select2.min.js",
        "js/login/popper.js",
        "js/login/moment.min.js",
        "js/login/daterangepicker.js",
        "js/login/countdowntime.js",
        "js/login/main.js",


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}