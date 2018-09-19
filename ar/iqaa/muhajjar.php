<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع محجّر ١٤/٤";
$page_description = "إيقاع محجّر ١٤/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/muhajjar.php";
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
                        <h1>إيقاع مُحَجّر ١٤/٤</h1>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>
                    
                    <div class="notation">
                        <img src="../note/iqaa/muhajjar.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Muhajjar is a very popular <em>iqa‘</em> in the <a href="../form/vocal_comp.php#muwashah">Muwashah</a> repertoire. It is immediately recognizable by the 3 consecutive <em>dum</em>-s that open the measure. The word "muhajjar" in Arabic means made of/turned into stone.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/muhajjar/badat_min_al_khidri.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/muhajjar/badat_min_al_khidri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح بدت من الخدر</b>
                                    <span>فرقة الكندي</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/muhajjar/hajarni_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح هجرني حبيبي</b>
                                    <span>فرقة التراث (سوريا)</span>
                                    <span>بقيادة محمد حمّادية</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/muhajjar/hal_3ala_al_astar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح عل على الاستار</b>
                                    <span>فرقة مُرقس (لبنان)</span>
                                    <span><img src="/img/cd.png"> Cèdre</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/muhajjar/munyati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح منيتي عزّ اصطباري</b>
                                    <span>اوريانتاليا</span>
                                    <span>تلحين سيّد درويش (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/muhajjar/ya_tura_ba3da.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح يا تُرى بعد البِعاد</b>
                                    <span>فرقة الكندي</span>
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