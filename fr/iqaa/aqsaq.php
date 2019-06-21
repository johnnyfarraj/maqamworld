<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Aqsaq";
$page_description = "Iqa‘ Aqsaq";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, aqsaq, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/aqsaq.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Aqsaq 9/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/aqsaq.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Aqsaq</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/aqsaq_f1.png" class="img-fluid">
                    </div>

                    <p>Le Iqa‘ Aqsaq est très populaire dans le genre vocal du <a href="../form/vocal_comp.php#muwashah">Mouachah</a>. Il est comme le <a href="samai_thaqil.php">Iqa‘ Sama‘i Thaqil</a>, moins un temps, et peut être joué immédiatement avant ou après dans une <a href="../form/vocal_comp.php#wasla">Wasla</a>, sans interruption.
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
                                    <b>Mouachah Ma-htiyali</b>
                                    <span>Louis Hage &amp; Aïda Chalhoub Ziadé</span>
                                    <span><img src="/img/cd.png"> Mouachah - Chants Arabo-andalous</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/ana_min_wajdi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ana Min Wajdi Ana</b>
                                    <span>Aïcha Redouane (Maroc)</span>
                                    <span><img src="/img/cd.png"> Égypte</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/jalla_man_bil_husni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Jalla Man Bil Housni Sawwar</b>
                                    <span>Ensemble Abdel Halim Noueirah (Égypte)</span>
                                    <span>Musique de Kamel al-Khula‘i</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/bashraf_bulbul_al_afrah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Bashraf Boulboul al-Afrah</b>
                                    <span>Ensemble Morkos (Liban)</span>
                                    <span><img src="/img/cd.png"> Cèdre</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Need some kind of divider here to start the Form 2  examples -->
                    <br>
                    <div class="heading jins text-center">
                        <h3>La seconde forme de Iqa‘ Aqsaq</h3>
                    </div>
                    <div class="notation">
                        <img src="/note/iqaa/aqsaq_f2.png" class="img-fluid">
                    </div>
					<br>
                    <p>Une forme alternative de Iqa‘ Aqsaq est possible, ou le soupir sur le 6<sup>ième</sup> temps est remplacé par un autre <em>doum</em>, créant ainsi une séquence de deux <em>doums</em> consécutifs qui évoquent le <a href="samai_thaqil.php">Iqa‘ Sama‘i Thaqil</a>.
					</p>
					<br>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/ma_htiyali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ma-htiyali</b>
                                    <span>Ensemble Al-Tourath (Syrie)</span>
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
                                    <b>Mouachah Ayyouha al-Saqi</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span>Musique de Majdi al-‘Aqili</span>
                                    <span><img src="/img/cd.png"> Beiteddine Festival Vol. 1</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/azzibuni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah ‘Adhibouni</b>
                                    <span>Ensemble Al-Kindi (Syrie/France)</span>
                                    <span>Musique de Omar al-Batch</span>
                                    <span><img src="/img/cd.png"> The Aleppian Music Room Vol. 1 - Hijazkar Kurd &amp; Saba</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/bi_abi_bahil_jamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Bi Abi Bahi al-Jamal</b>
                                    <span>Mouhammad Khayri (Syrie)</span>
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

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>