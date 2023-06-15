<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;


class AdminAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/admin-files';
    public $css = [

            "css/bootstrap-select.min.css",
            "css/swiper-bundle.min.css",
            "https://fonts.googleapis.com/css2?family=Material+Icons",
            "css/nouislider.min.css",
            "css/jquery.dataTables.min.css",
            "css/jquery-jvectormap.css",
            "css/buttons.dataTables.min.css",
            "css/bootstrap-datetimepicker.min.css",
            "css/tagify.css",
            "css/style.css",
            "css/animate.min.css",
            "css/aos.min.css",
            "css/perfect-scrollbar.css",
            "css/metisMenu.min.css",
            "css/uploadimage.css",


    ];
    public $js = [

        "js/global.min.js",
        "js/Chart.bundle.min.js",
        "js/bootstrap-select.min.js",
        "js/apexchart.js",
        "js/dashboard-1.js",
        "js/draggable.js",
        "js/tagify.js",
        "js/jquery.dataTables.min.js",
        "js/dataTables.buttons.min.js",
        "js/buttons.html5.min.js",
        "js/jszip.min.js",
        "js/datatables.init.js",
        "js/moment.js",
        "js/bootstrap-datetimepicker.min.js",
        "js/jquery.vmap.min.js",
        "js/jquery.vmap.world.js",
        "js/jquery.vmap.usa.js",
        "js/custom.js",
        "js/deznav-init.js",
        "js/demo.js",
        "js/styleSwitcher.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
