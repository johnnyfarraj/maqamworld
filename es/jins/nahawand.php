<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Nahawand";
$page_description = "Jins Nahawand";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "en/jins/nahawand.php";
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
                        <h1>Jins Nahawand</h1>
                        <h3>Raíz de la <a href="../maqam/f_nahawand.php">Familia Maqam Nahawand</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nahawand.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Nahawand</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/nahawand.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Click on each note with the mouse and hold to hear it play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="62,118,12" href="#" alt="A3♭" class="playNote" data-frequency="209" data-parent="#notation1"><!-- fine tune up from 205.5-->
					  <area shape="circle" coords="113,118,12" href="#" alt="A3♮" class="playNote" data-frequency="220" data-parent="#notation1">
					  <area shape="circle" coords="162,110,12" href="#" alt="B3♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="230,102,14" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="306,94,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="383,86,13" href="#" alt="E4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="460,78,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="539,69,14" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
				      <area shape="circle" coords="611,60,12" href="#" alt="A4♭" class="playNote" data-frequency="411" data-parent="#notation1">
					</map>

                    <p>
                        El Jins Nahawand es un jins de 5 notas. Se escribe aquí con su tónico en <strong>Do</strong> y su <em>ghammaz</em> en <strong>Sol</strong>. Jins Nahawand es el primer jins en <a href="../maqam/nahawand.php">Maqam Nahawand</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/nahawand/alf_leila_w_leila.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/nahawand/alf_leila_w_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Alf Leila w Leila (1969)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/balad_el_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Balad el-Mahbub</b>
                                    <span>Instrumental Composition</span>
                                    <span>Music by Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/darit_el_ayyam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Darit el-Ayyam (1970)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/dawr_ahibb_ashufak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Ahibb Ashufak Kulli Youm (1930)</b>
                                    <span>Vocals and Music by Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/gaddidti_hubbak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Gaddidti Hubbak Leh (1952)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/ya_dunya_ya_gharami.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Dunya Ya Gharami (1938)</b>
                                    <span>Vocals and Music by Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/ya_habibi_kullama.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Habibi Kullama Habba al-Hawa (2000)</b>
                                    <span>Fairouz</span>
                                    <span>Music by Rahbani Brothers</span>
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