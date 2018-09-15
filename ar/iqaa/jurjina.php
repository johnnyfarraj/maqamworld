<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع جرجينا ١٠/٨";
$page_description = "إيقاع جرجينا ١٠/٨";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, jurjina, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/jurjina.php";
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
                        <h1>إيقاع جُرجِينا ١٠/٨</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>
                    
                    <div class="notation">
                        <img src="../note/iqaa/jurjina.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Jurjina is a widely used <em>iqa‘</em> in Iraq and Iran, as well as in the Turkish and the Kurdish repertoires, both in the folk and classical genres. It is infrequently used in the Near Eastern repertoire.               
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/jurjina/yammul_3uyun.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/jurjina/yammul_3uyun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya Umm il-'Uyun il-Sud</b>
                                    <span>Nazem al-Ghazali</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/jurjina/ya_hulu_al_lama.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Hulu al-Lama</b>
                                    <span>Lutfi Bshnaq</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/jurjina/tal_intizari.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tal Intizari (1937)</b>
                                    <span>Muhammad Abdel Wahab and Laila Murad</span>
                                    <span>Music by Muhammad Abdel Wahab</span>
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