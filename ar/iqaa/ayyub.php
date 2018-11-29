<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع ايّوب ٢/٤";
$page_description = "إيقاع ايّوب ٢/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/ayyub.php";
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
                        <h1>إيقاع ايّوب ٢/٤</h1>
                        <h3>يُسمّى ايضاً "<em>الزار</em>"</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/ayyub.png" class="img-fluid">
                    </div>

                    <h5>غالباً ما يستعمل إيقاع ايّوب في الموسيقى الصوفية، ويستعمل احياناً في الموسيقى الشعبية وفي موسيقى الرقص الشرقي. احساس هذا الإيقاع سريع وقصير ودائري.
                    </h5>
                    <h5>
                    ويسمّى إيقاع أيّوب ايضاً بالزار، نسبةً الى الطقوس الشعبية في مصر التي تصاحبها ايقاعات صاخبة على الدفوف.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/ayyub/atani_zamani.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/ayyub/atani_zamani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح اتاني زماني بما ارتضيه</b>
                                    <span>نور الدين خورشيد ودراويش دمشق</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ayyub/ya_man_nasha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح يا من نشا</b>
                                    <span>فرقة سليم سحاب للموشحات (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ayyub/tajallat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>انشودة تجلّت وانجلت ليلاً</b>
                                    <span>غناء الشيخ حمزة شكّور (دمشق)</span>
                                    <span>فرقة الكندي (سوريا - فرنسا)</span>
                                    <span>بقيادة جوليان جلال الدين وايس (فرنسا)</span>
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