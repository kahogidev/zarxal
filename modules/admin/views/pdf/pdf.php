

<div class="container title">
    <div class="row align-items-center justify-content-center">
        <h2>Resume of <?=$model->client_firstname. ' ' .$model->client_lastname?></h2>

        <div class="w-100"></div>

    </div>
    <hr style="margin-top: 10px;">
</div>
<main class="container cv-page">
    <div class="row justify-content-center">
        <div class="head row justify-content-around rounded">
            <div class="left-side">
                <div class="photo rounded-circle d-flex align-items-center justify-content-center">

                </div>
            </div>
            <div class="personal-info rounded">
                <div class="name info-cel"> <?=$model->client_firstname. '' .$model->client_lastname?></div>
                <div class="profession info-cel">Passport seriya: <?=$model->client_passport_series?></div>
<!--                <div class="tel-number info-cel">Phone:  --><?//=$model->phone?><!--</div>-->
<!--                <div class="email info-cel">Email:  --><?//=$model->email?><!--</div>-->
            </div>
        </div>
<!--        <div class="w-100"></div>-->
<!--        <div class="user-text">-->
<!--            <div class="summary">-->
<!--                <h6 style="color: red;">School:</h6>-->
<!--                <p>--><?//=$model->school?><!--</p>-->
<!--            </div>-->
<!--            <div class="research">-->
<!--                <h6 style="color: red;">University:</h6>-->
<!--                <p>--><?//=$model->university?><!--</p>-->
<!--            </div>-->
<!--            <div class="research">-->
<!--                <h6 style="color: red;">Degree:</h6>-->
<!--                <p>--><?//=$model->degree?><!--</p>-->
<!--            </div>-->
<!--            <div class="experiences">-->
<!--                <h6 style="color: red;">Experience</h6>-->
<!--                <div class="exp-1">-->
<!--                    <h6>Company</h6>-->
<!--                    <p>--><?//=$model->company?><!--</p>-->
<!--                </div>-->
<!--                <div class="exp-2">-->
<!--                    <h6>Position</h6>-->
<!--                    <p>--><?//=$model->experience_title?><!-- </p>-->
<!--                    <ul>-->
<!--                        <li>Worked from --><?//=$model->from_year?><!-- to --><?//=$model->to_year?><!--</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--                <div class="exp-2">-->
<!--                    <h6 style="color: red;">Skills</h6>-->
<!---->
<!--                    <ul>-->
<!--                        <li>--><?//=$model->skill_first?><!--</li>-->
<!--                        <li>--><?//=$model->skill_second?><!--</li>-->
<!--                        <li>--><?//=$model->skill_third?><!--</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
    </div>
