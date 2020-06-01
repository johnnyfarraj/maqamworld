<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Wahda Saghira";
$page_description = "Iqa‘ Wahda Saghira";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, wahda saghira, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "en"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "en/iqaa/wahda_saghira.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>Iqa‘ Wahda Saghira 2/4</h1>
                        <h3>(also called <strong>Wahda Basita</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/wahda_saghira.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Wahda Saghira</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/wahda_saghira.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Wahda Saghira is a simple 2/4 <em>iqa‘</em> used in both vocals and instrumental phrases. "Wahda" means one in Arabic, referring to the single <em>dum</em> per measure, while "saghira" means small. It is also known as Wahda Basita ("basita" is Arabic for simple).</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/wahda_saghira/darit_il_ayyam.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/wahda_saghira/darit_il_ayyam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Darit el-Ayyam (1970)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Muhammad Abdel Wahab (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_saghira/3ala_hisbi_widab_albi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Ala Hesb Widad Albi (1953)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Music by Baligh Hamdi (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_saghira/mudnaka.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Mudnaka (1938)</b>
                                    <span>Vocals and Music by Muhammad Abdel Wahab (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_saghira/nibtidi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Nibtidi Mnein el-Hikaya (1975)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Music by Muhammad Abdel Wahab (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_saghira/qal_eh_biyisaluni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qal Eh Biyis'aluni</b>
                                    <span>Warda</span>
                                    <span>Music by Sayed Makkawi</span>
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
    
    <?php include($ROOT . 'en/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>