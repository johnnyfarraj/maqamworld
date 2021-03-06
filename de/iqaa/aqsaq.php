<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Aqsaq";
$page_description = "Iqa‘ Aqsaq";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, aqsaq, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/aqsaq.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Aqsaq 9/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/aqsaq.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Aqsaq</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/aqsaq_f1.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Aqsaq (türkisch "aksak", was hinkend bedeutet) ist sehr populär im vokalen <a href="../form/vocal_comp.php#muwashah">Muwashah</a>-Genre. Er ist einen Schlag kürzer als <a href="samai_thaqil.php">Iqa‘ Sama‘i Thaqil</a>. Er kann jedoch manchmal in nahtlosem Anschluss in einem Wasla direkt vor oder nach einem Stück in diesem Iqa‘ gespielt werden. 
                    </p>
                    <p>Eine Variante des Aqsaq ersetzt die Pause auf dem sechsten Schlag durch ein weiteres Dum. Dadurch kommen zwei Dums hinter einander, wodurch der <a href="samai_thaqil.php">Iqa‘ Sama‘i Thaqil</a> entsteht.
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
                                    <b>Muwashah Ma-htiyali</b>
                                    <span>Louis Hage und Aida Chalhoub</span>
                                    <span><img src="/img/cd.png"> Mouwashah - Chants Arabo-andalous</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/ana_min_wajdi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ana Min Wajdi Ana</b>
                                    <span>Aicha Redouane</span>
                                    <span><img src="/img/cd.png"> Egypte</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/jalla_man_bil_husni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Jalla Man Bil Husni Sawwar</b>
                                    <span>Abdel Halim Noueira Ensemble</span>
                                    <span>Musik von Kamel al-Khula‘i</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/el_sama3_wel_rah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah el-Sama‘ wel-Rah</b>
                                    <span>Ibrahim el-Haggar</span>
                                    <span>Musik von Dawud Husni</span>
                                </div>
                            </label>
                        </div>
                    </div>
                   
                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/bashraf_bulbul_al_afrah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Bashraf Bulbul al-Afrah</b>
                                    <span>Ensemble Morkos</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Need some kind of divider here to start the Form 2  examples -->
                    <p></p>

                    <div class="heading jins text-center">
                        <h3>Beispiele für die zweite Form von Iqa‘ Aqsaq</h3>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/aqsaq_f2.png" class="img-fluid">
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
                                    <b>Muwashah Ayyuha al-Saqi</b>
                                    <span>Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Beiteddine Festival Vol. 1</span>
                                    <span>Musik von Majdi al-‘Aqili</span>
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
                                    <span>Musik von ‘Umar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/bi_abi_bahil_jamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Bi Abi Bahi al-Jamal</b>
                                    <span>Muhammad Khayri</span>
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

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>