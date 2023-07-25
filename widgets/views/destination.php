<div class="section-title-hp2 text-center section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1><?= Yii::t("app", "dest1")?></h1>
                <h1><?= Yii::t("app", "dest2")?></h1>
            </div>
        </div>
    </div>
</div>
<div class="destinations-honeymoon-area text-center hp2-area-bg section-padding-hp2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="destination-honeymoon-carousel owl-carousel">




<!--                    <div class="destinations-honeymoon-single-item">-->
<!--                        <div class="destination-honeymoon-bg1">-->
<!--                            <img src="/frontend-files/img/destination-honeymoon-bg2.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="destination-honeymoon-text">-->
<!--                            <h4>Penang, malaysia</h4>-->
<!--                            <h3>$510</h3>-->
<!--                        </div>-->
<!--                    </div>-->



                    <?php if (!empty($models)):?>
                        <?php foreach ($models as $model): ?>
                            <div class="destinations-honeymoon-single-item">
<!--                                <div class="destination-honeymoon-bg1">-->
<!--                                    <img src="/uploads/tours/--><?php //=\app\models\Tours::findOne(Yii::$app->user->getId())->id?><!--/--><?php //=\app\models\Tours::findOne(Yii::$app->user->getId())->id?><!--/--><?php //=\app\models\Tours::findOne(Yii::$app->user->getId())->images?><!--" alt="">-->
<!--                                </div>-->
                                <div class="destination-honeymoon-text">
                                    <h4><?=$model->title[Yii::$app->language]?></h4>
                                    <h3><?=$model->price[Yii::$app->language]?></h3>
                                </div>
                            </div>

                        <?php endforeach; ?>
                    <?php endif; ?>

<!--                    <div class="destinations-honeymoon-single-item">-->
<!--                        <div class="destination-honeymoon-bg1">-->
<!--                            <img src="/frontend-files/img/destination-honeymoon-bg2.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="destination-honeymoon-text">-->
<!--                            <h4>AArhus, denmark</h4>-->
<!--                            <h3>$780</h3>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="destinations-honeymoon-single-item">-->
<!--                        <div class="destination-honeymoon-bg1">-->
<!--                            <img src="/frontend-files/img/destination-honeymoon-bg2.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="destination-honeymoon-text">-->
<!--                            <h4>western iceland</h4>-->
<!--                            <h3>$1300</h3>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="destinations-honeymoon-single-item">-->
<!--                        <div class="destination-honeymoon-bg1">-->
<!--                            <img src="/frontend-files/img/destination-honeymoon-bg2.jpg" alt="">-->
<!--                        </div>-->
<!--                        <div class="destination-honeymoon-text">-->
<!--                            <h4>AArhus, denmark</h4>-->
<!--                            <h3>$780</h3>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
    </div>
</div>

<div class="world-out-there-area hp2-area-bg hp2-area-bg-right section-padding-hp2">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="world-out-there-left">
                    <h1><?= Yii::t("app", "why_us2")?></h1> <br>
                    <p><?= Yii::t("app", "why_us1")?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="world-out-there-right">
                    <a href="https://www.youtube.com/watch?v=vQVwkyn3-F8&t=1s" class="mfp-iframe world-out-video-btn">See this video <i class="zmdi zmdi-play-circle-outline"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>