<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Sikah Baladi";
$page_description = "Jins Sikah Baladi";
$page_keywords = "Jins Sikah Baladi, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "it/jins/sikah_baladi.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>Jins Sikah Baladi <span class="badge badge-custom">Nuovo</span></h1>
                        <h3>(dimensione indefinita)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Jins</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/sikah_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Sikah Baladi</a>
                    </div>
                    
                    
                     <div class="notation" id="notation1">
                        <img src="/note/jins/sikah_baladi.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="85,93,13" href="#" alt="Mi<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="315" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="163,85,13" href="#" alt="Fa<i class='icon-halfsharp'></i>↑" class="playNote" data-frequency="364" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="243,77,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="318,67,13" href="#" alt="La<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="425" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="395,60,13" href="#" alt="Si<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="485" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="473,51,13" href="#" alt="Do↓" class="playNote" data-frequency="515" data-parent="#notation1"><!-- variable -->
					</map>

                    <p>Il Jins Sikah Baladi non ha un <em>ghammaz</em>, e per questo non ha una dimensione definita. La sua melodia è incentrata sulla sua tonica, indicata qui come Sol. È molto difficile scrivere correttamente il Jins Sikah Baladi; è meglio imparare i suoi intervalli e la sua intonazione ad orecchio. Il Jins Sikah Baladi si presente sull'ottava del <a href="../maqam/sikah_baladi.php">Maqam Sikah Baladi</a>.
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
                                    <span>Hassan al-Haffar (Siria)</span>
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
                                    <b>Hakam Aleina el-Hawa (1973)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Baligh Hamdi</span>
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
                                    <span>Voce e musica di Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/sikah_baladi/fantasy_nahawand.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Fantaisie Nahawand</b>
                                    <span>Composizioni strumentali</span>
                                    <span>Musica di Muhammad Abdel Wahab</span>
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
                                    <b>Taqsim con l'Oud</b>
                                    <span>Wasla en <a href="../maqam/rast.php">Maqam Rast</a></span>
                                    <span>Ibrahim al-Haggar (Egitto)</span>
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
    
    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>