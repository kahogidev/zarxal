<div class="header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="header-top-left">
                    <a href="tel:(265)-920-8721"><i class="zmdi zmdi-phone"></i> (265) 920-8721</a>
                    <a href="mailto:rolfson.alvis@hotmail.com"><i class="zmdi zmdi-email"></i>rolfson.alvis@hotmail.com</a>
                    <a href="#"><i class="zmdi zmdi-time"></i>Mon-Sat 8.00 - 18.00 Sunday CLOSED </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="header-top-right text-right">
                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                    <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                    <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                    <a href="#"><i class="zmdi zmdi-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--header-top-area end -->
<!--welcome-area start -->
<div class="welcome-area hp2-welcome-area">
    <div class="header-area header-absolute">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-6">
                    <div class="logo">
                        <a href="index-2.html"><img src="frontend-files/img/logo-hp2.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="mainmenu">
                        <ul id="slicknav-menu-list">

                            <?php if (!empty($models)):?>
                                <?php foreach ($models as $model): ?>
                                    <li>
                                        <a style="" href="<?=$model->link?>">
                                            <?=$model->name[Yii::$app->language]?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>



                            <!--                            <li><a href="index-2.html">Home</a></li>-->
<!--                            <li><a href="tours.html">Tours</a></li>-->
<!--                            <li><a href="about-us.html">About</a></li>-->
<!--                            <li><a href="destinations.html">Destination</a></li>-->
<!--                            <li><a href="team-member.html">Team</a></li>-->
<!--                            <li><a href="#">Page</a></li>-->
<!--                            <li><a href="blog-medium.html">Blog</a></li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-md-2 col-sm-8 col-xs-6">
                    <div class="header-right">
                        <ul class="language-selector">
                            <li><a href="#" class="header-flug" style="font-weight:bold;"><i style="margin-right:5px;" class="fa-solid fa-earth-americas"></i><?=Yii::$app->language?><i class="zmdi zmdi-chevron-down"></i></a>
                                <ul>
                                        <?php
                                            foreach (Yii::$app->params['languages'] as $key => $value) {
                                                echo " <li><a style='color:white;font-weight: bold;'  href='" . \yii\helpers\Url::current(['language' => $value]) . "'>$value</a></li>";
                                            }
                                        ?>
                                </ul>
                            </li>
                        </ul>

                        <a href="<?=\yii\helpers\Url::to(["admin/user"])?>"><i class="fa-solid fa-user fa-1x"></i></a>

                    </div>
                    <div class="slicknav-menu-wrap"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="slider-area text-center owl-carousel hp2-slider-area">
        <div class="single-slide-item single-slide-item-bg1" data-dot="1">
            <div class="single-slide-item-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1><?= Yii::t("app", "slider1")?> </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-item single-slide-item-bg2" data-dot="2">
            <div class="single-slide-item-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1><?= Yii::t("app", "slider2")?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slide-item single-slide-item-bg3" data-dot="3">
            <div class="single-slide-item-table-cell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <h1><?= Yii::t("app", "slider3")?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>