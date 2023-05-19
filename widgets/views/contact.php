<div class="contact-page-conent-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-7">
                <div class="contact-page-form">
                    <h3><?= Yii::t("app", "contact1")?></h3>
                    <form action="https://formspree.io/rabukushia@gmail.com" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="contact-us-name"><?= Yii::t("app", "name1")?></label>
                                <input id="contact-us-name" name="contact-us-name" type="text">
                            </div>
                            <div class="col-md-6">
                                <label for="contact-us-email"><?= Yii::t("app", "email1")?></label>
                                <input id="contact-us-email" name="contact-us-email" type="email">
                            </div>
                        </div>
                        <label for="contact-us-subject">Subject*</label>
                        <input id="contact-us-subject" name="contact-us-suject" type="text">
                        <label for="contact-us-message">Message*</label>
                        <textarea name="contact-us-message" id="contact-us-message" cols="30" rows="10"></textarea>
                        <button type="submit" class="pink-btn" style="background-color: #f6b31b;"><?= Yii::t("app", "send1")?></button>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-5">
                <div class="contact-us-right-area">
                    <h3><?= Yii::t("app", "contact2")?></h3>
                    <a class="contact-info-box" href="#"><i class="zmdi zmdi-home"></i>6281 Liana Extensions, Lemkeport,
                        NY 01688-8754</a>
                    <a class="contact-info-box" href="#"><i class="zmdi zmdi-phone"></i>(517) 548-4152 <br>(229) 469-5358</a>
                    <a class="contact-info-box" href="#"><i class="zmdi zmdi-email"></i>toni14@hotmail.com <br>zoey.friesen@hotmail.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--contact-page-conent-area end -->
<!--contact-map-area start -->
<div class="contact-map-area padding-bottom">
    <div id="googleMap" style="width:100%;height:500px"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD7CQl6fRhagGok6CzFGOOPne2X1u1spoA"></script>
    <!--map.js -->
    <script src="frontend-files/js/map.js"></script>
</div>