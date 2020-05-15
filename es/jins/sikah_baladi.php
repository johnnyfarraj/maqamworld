<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Sikah Baladi";
$page_description = "Jins Sikah Baladi";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "es/jins/sikah_baladi.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>Jins Sikah Baladi</h1>
                        <h3>(tamaño indefinido)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sikah_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Sikah Baladi</a>
                    </div>
                    
                     <div class="notation" id="notation1">
                        <img src="/note/jins/sikah_baladi.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Haz clic en cada nota y mantenga presionado para oírla.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="85,93,13" href="#" alt="Mi<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="315" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="163,85,13" href="#" alt="Fa<i class='icon-halfsharp'></i>↑" class="playNote" data-frequency="364" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="243,77,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="318,67,13" href="#" alt="La<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="425" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="395,60,13" href="#" alt="Si<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="485" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="473,51,13" href="#" alt="Do↓" class="playNote" data-frequency="515" data-parent="#notation1"><!-- variable -->
					</map>

                    <p>
                        Jins Sikah Baladi no tiene <em>ghammaz</em>, y por lo tanto no tiene un tamaño definido. Su melodía se centra alrededor de su tónica, anotada aquí en G. Jins Sikah Baladi es muy difícil de anotar con precisión; en cambio, sus intervalos y entonación se aprenden mejor por el oído. Jins Sikah Baladi ocurre en la octava del <a href="../maqam/sikah_baladi.php">Maqam Sikah Baladi</a>.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/sikah_baladi/qasida_man_mithlukum.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/jins/sikah_baladi/qasida_man_mithlukum.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Qasida Man Mithlukum</b>
                                    <span>Hasan al-Haffar</span>
                                    <span><img src="/img/cd.png"> Muezzins D'Alep - Chants Religieux De L'Islam</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/sikah_baladi/hakam_3aleina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hakam ‘Aleina el-Hawa (1973)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/sikah_baladi/tal_intizari.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tal Intizari (1937)</b>
                                    <span>Voz y música por Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/sikah_baladi/fantasy_nahawand.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Fantasy Nahawand</b>
                                    <span>Composición Instrumental</span>
                                    <span>Música de Muhammad Abdel Wahab</span>
                                    <span><img src="/img/cd.png"> Qamar 14</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/sikah_baladi/tqasim_oud_rast.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim de Oud (de Wasla en Maqam Rast)</b>
                                    <span>Conjunto de Ibrahim al-Haggar</span>
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
    
    <?php include($ROOT . 'es/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>