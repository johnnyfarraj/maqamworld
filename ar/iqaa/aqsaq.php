<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع اقصاق ٩/٨";
$page_description = "إيقاع اقصاق ٩/٨";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/aqsaq.php";
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
                        <h1>إيقاع اقْصَاق ٩/٨</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/aqsaq_f1.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Aqsaq is very popular in the <a href="../form/vocal_comp.php#muwashah">Muwashah</a> vocal genre. It is 1 beat short of <a href="samai_thaqil.php">Iqa‘ Sama‘i Thaqil</a> but sometimes it can be played immediately before or after a piece in that iqa‘ without interruption, during a Wasla. An alternate form of Aqsaq replaces the rest on the 6<sup>the</sup> beat with another <em>dum</em>, thereby creating a sequence of 2 consecutive <em>dum</em>-s that evokes <a href="samai_thaqil.php">Iqa‘ Sama‘i Thaqil</a>.
					</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/aqsaq_form1/ma_htiyali.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/aqsaq_form1/ma_htiyali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشح ما احتيالي</b>
                                    <span>الاب لويس الحاج وعايدة شلهوب</span>
                                    <span><img src="/img/cd.png">Mouwashah - Chants Arabo-andalous</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/ana_min_wajdi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح انا من وجدي انا</b>
                                    <span>عائشة رضوان</span>
                                    <span><img src="/img/cd.png">Egypte</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/jalla_man_bil_husni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح جلّ من بالحسن صوّر</b>
                                    <span>فرقة عبد الحليم نويرة (مصر)</span>
                                    <span>الحان كامل الخلعي</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/bashraf_bulbul_al_afrah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>بشرف بلبل الافراح</b>
                                    <span>فرقة مرقص (لبنان)</span>
                                    <span><img src="/img/cd.png">Cèdre</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Need some kind of divider here to start the Form 2  examples -->
                    <div class="clearfix"></div>
                    <div class="heading jins text-center">
                        <h3>Examples of the second form of Iqa‘ Aqsaq</h3>
                    </div>

                    <div class="notation">
                        <img src="../note/iqaa/aqsaq_f2.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/ma_htiyali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ma-htiyali</b>
                                    <span>Al-Turath Ensemble</span>
                                    <span><img src="/img/cd.png"> The Music In Spanish Al Andalus - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/ayyuha_al_saqi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ayyua al-Saqi</b>
                                    <span>Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Beiteddine Festival Vol. 1</span>
                                    <span>Music by Majdi al-‘Aqili</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/azzibuni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah ‘Adhibuni</b>
                                    <span>Ensemble Al-Kindi</span>
                                    <span><img src="/img/cd.png"> The Aleppian Music Room Vol. 1 - Hijazkar Kurd &amp; Saba</span>
                                    <span>Music by ‘Umar al-Batsh</span>
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