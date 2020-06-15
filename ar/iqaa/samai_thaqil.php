<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع سماعي ثقيل ١٠/٨";
$page_description = "إيقاع سماعي ثقيل ١٠/٨";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/samai_thaqil.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>إيقاع سماعي ثَقيل ١٠/٨</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/samai_thaqil.png" class="img-fluid">
                    </div>

                    <h5>إيقاع سماعي ثَقيل (ويُسمّى باختصار "سماعي") هو من اهم الإيقاعات المستعملة في <a href="../form/vocal_comp.php#muwashah">قالب الموشّح </a> الغنائي، وهو الايقاع الأساسي في <a href="../form/ottoman.php#samai">قالب السماعي</a> الآلي التركي.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/samai_thaqil/samai_bayati_aryan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/samai_thaqil/samai_bayati_aryan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>سماعي بياتي ابراهيم العريان (مصر)</b>
                                    <span>فرقة تخت القاهرة</span>
                                    <span><img src="/img/cd.png"> موسيقى الاسلام - الجزء الاول (القاهرة)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/samai_thaqil/3atini_bikra_al_dinan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح عاطني بِكر الدنان</b>
                                    <span>فرقة سليم سحّاب (لبنان - مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/samai_thaqil/imlali_al_aqdah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح املا لي الاقداح صرفاً</b>
                                    <span>غناء الشيخ حمزة شكّور (دمشق)</span>
                                    <span>فرقة الكندي (سوريا - فرنسا)</span>
                                    <span>بقيادة جوليان جلال الدين فايس (فرنسا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/samai_thaqil/laha_badru_ttim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح لاح بدرُ التِمّ</b>
                                    <span>فرقة الموسيقى العربية (مصر)</span>
                                    <span>بقيادة عبد الحليم نويرة (مصر)</span>
                                    <span>الحان الشيخ محمود صُبح (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/samai_thaqil/mala_al_kasat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح ملا الكاسات</b>
                                    <span>فرقة الكندي (سوريا - فرنسا)</span>
                                    <span>بقيادة جوليان جلال الدين فايس (فرنسا)</span>
                                    <span>الحان محمد عثمان (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/samai_thaqil/rashiq_al_qadd.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح رشيق القدّ</b>
                                    <span>فرقة مُرقس (لبنان)</span>
                                    <span><img src="/img/cd.png"> Cèdre</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/samai_thaqil/talaffata_al_dhabiyu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح تلفّت الظبيُ</b>
                                    <span>فرقة الكندي (سوريا - فرنسا)</span>
                                    <span>بقيادة جوليان جلال الدين فايس (فرنسا)</span>
                                    <span>الحان الشيخ محمود صُبح (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/samai_thaqil/tarraza_al_rayhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح طرّز الريحان حلّة الورد</b>
                                    <span>فرقة مُرقس (لبنان)</span>
                                    <span><img src="/img/cd.png"> Cèdre</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/samai_thaqil/ya_ghusayn_al_ban.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح يا غصين البان</b>
                                    <span>صبري المدلل (سوريا)</span>
                                    <span>ألحان سيد درويش (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'ar/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>