<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع ستّة عشر مصري ٣٢/٤";
$page_description = "إيقاع ستّة عشر مصري ٣٢/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/sittatu_ashar.php";
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
                        <h1>إيقاع ستّة عَشَر مَصري ٣٢/٤</h1>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/sittatu_ashar.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Sittatu ‘Ashar Masri ("sittatu ‘ashar" means sixteen, "masri" means Egyptian) is a rare <em>iqa‘</em> mostly used in the <a href="../form/vocal_comp.php#muwashah">Muwashah</a> vocal genre. It spans 8 measures of 4/4, bringing its time signature to 32/4.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/sittatu_ashar/badat_ghada.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/sittatu_ashar/badat_ghada.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Badat Min al-Khidri (khana)</b>
                                    <span>Ghada Shbeir</span>
                                    <span><img src="/img/cd.png"> Muwashahat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sittatu_ashar/badat_kaslik.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Badat Min al-Khidri (khana)</b>
                                    <span>Louis Hage and Aida Chalhoub</span>
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