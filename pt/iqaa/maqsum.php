<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Maqsum";
$page_description = "Iqa‘ Maqsum";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, maqsum, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "pt/iqaa/maqsum.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘at</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>O Iqa‘ Maqsum 4/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘at</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/maqsum.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Maqsum</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/maqsum.png" class="img-fluid">
                    </div>
                    
                    <p>O Iqa‘ Maqsum é, de longe, o <em>iqa‘</em> mais usado na música árabe. Ele se modula para outros <em>iqa‘at</em> 4/4, como <a href="baladi.php">Baladi</a> and <a href="wahda.php">Wahda</a>.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/maqsum/il_albi_yi3shaq.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/maqsum/il_albi_yi3shaq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>il-Alb Yi‘shaq Kulli Gamil (1961)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/maqsum/darit_il_ayyam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Daret el-Ayyam (1970)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Muhammad Abdel Wahab (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/maqsum/qariat_al_fingan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qari'at al-Fingan (1976)</b>
                                    <span>Abdel Halim Hafez</span>
                                    <span>Música de Muhammad al-Mugi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/maqsum/waraqu_al_asfar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Waraqu al-Asfar</b>
                                    <span>Fairouz</span>
                                    <span>Música de Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/maqsum/ya_libnan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Libnan Dakhl Trabak</b>
                                    <span>Sabah</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/maqsum/bahibb_el_gedid.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ana Bahibb el-Gedid</b>
                                    <span>Voz e música por Ahmad Adaweya</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/maqsum.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Maqsum 4/4</b>
                                    <span>Demonstração em Tabla por Faisal Zedan</span>
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
    
    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>