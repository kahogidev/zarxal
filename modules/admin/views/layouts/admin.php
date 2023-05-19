<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AdminAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AdminAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body data-typography="poppins" data-theme-version="light" data-layout="vertical" data-nav-headerbg="black"
      data-headerbg="color_1">

<?php $this->beginBody() ?>

<div id="preloader">
    <div class="lds-ripple">
        <div></div>
        <div></div>
    </div>
</div>

<div id="main-wrapper">
    <?= \app\modules\admin\widgets\Navbar::widget() ?>
    <?= \app\modules\admin\widgets\Sidebar::widget() ?>
    <div class="content-body">
        <?= \app\modules\admin\widgets\Page::widget() ?>
        <div class="container-fluid">
            <?= $content ?>
        </div>
    </div>
    <div class="footer">
        <div class="copyright">
            <p>Copyright © Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2023</p>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
