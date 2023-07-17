<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/frontend-files/';
    public $css = [
        'css/site.css',
        "css/bootstrap.min.css",
        "css/font-awesome.min.css",
        "css/material-design-iconic-font.min.css",
        "css/owl.carousel.min.css",
        "css/magnific-popup.css",
        "css/nice-select.css",
        "css/slicknav.min.css",
        "css/style.css",
        "css/responsive.css",
        "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css",
    ];
    public $js = [

        "js/jquery.min.js",
        "js/bootstrap.min.js",
        "js/owl.carousel.min.js",
        "js/magnific-popup-1.1.0.js",
        "js/jquery.nice-select.min.js",
        "js/jquery.waypoints.4.0.0.min.js",
        "js/jquery.counterup.min.js",
        "js/jquery.slicknav.min.js",
        "js/main.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
