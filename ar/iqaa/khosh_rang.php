<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع خوش رانك ١٧/٨";
$page_description = "إيقاع خوش رانك ١٧/٨";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/khosh_rang.php";
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
                        <h1>إيقاع خُوش رانْك ١٧/٨</h1>
                        <h3>(من عبارة فارسية تعني "لون جميل")</h3>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>
                    
                    <div class="notation">
                        <img src="../note/iqaa/khosh_rang.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Khosh Rang (also spelled Khush Rank) is a very rare <em>iqa‘</em> that is only used in one known <a href="../form/vocal_comp.php#muwashah">Muwashah</a> and a few rare modern compositions.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/khosh_rang/salla_fina_kindi.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/khosh_rang/salla_fina_kindi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Salla Fina al-Lahdha Hindiyya</b>
                                    <span>Ensemble Al-Kindi</span>
                                    <span><img src="/img/cd.png"> Les Croisades Sous Le Regard De l'Orient - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/khosh_rang/salla_fina_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Salla Fina al-Lahdha Hindiyya</b>
                                    <span>Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Nagham Al Ams Vol 08 - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/khosh_rang/tareq_abdallah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Khush-Rank (Oud and Riqq)</b>
                                    <span>Tarek Abdallah, Adel Shams El-Din</span>
                                    <span><img src="/img/cd.png"> Wasla (Suites musicales égyptiennes)</span>
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