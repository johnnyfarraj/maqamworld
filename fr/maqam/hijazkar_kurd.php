<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Hijazkar Kurd";
$page_description = "Maqam Hijazkar Kurd";
$page_keywords = "arabic, music, arab, world, maqam, jins, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "fr/maqam/hijazkar_kurd.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Hijazkar Kurd</h1>
                        <h3>A member of the <a href="f_kurd.php">Maqam Kurd Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijazkar_kurd.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Hijazkar Kurd</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/maqam/hijazkar_kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
		  <area shape="circle" coords="79,67,13" href="#" alt="E5♮" class="playNote" data-frequency="656" data-parent="#notation1"><!-- Hijaz 3 tune down from 660 -->
		  <area shape="circle" coords="158,75,13" href="#" alt="D5♭" class="playNote" data-frequency="554" data-parent="#notation1"><!-- Hijaz 2 tuned up from 548 -->
		  <area shape="circle" coords="234,85,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijazkar tonic -->
		  <area shape="circle" coords="313,93,13" href="#" alt="B4♮" class="playNote" data-frequency="493.33" data-parent="#notation1"><!-- vartiable -->
		  <area shape="circle" coords="365,93,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
		  <area shape="circle" coords="417,101,13" href="#" alt="A4♭" class="playNote" data-frequency="420" data-parent="#notation1">
		  <area shape="circle" coords="494,109,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
		<area shape="circle" coords="570,118,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
                       <area shape="circle" coords="649,126,13" href="#" alt="E4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
		  <area shape="circle" coords="728,134,13" href="#" alt="D4♭" class="playNote" data-frequency="274" data-parent="#notation1">
                      <area shape="circle" coords="803,142,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="170,8,322,38" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="634,11,746,40" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="323,146,495,172" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>Maqam Hijazkar Kurd is an archaic version of <a href="kurd.php">Maqam Kurd</a> with <a href="../jins/hijazkar.php">Jins Hijazkar</a> on the octave. Its scale starts with the root <a href="../jins/kurd.php">Jins Kurd</a> on the <em>tonic</em> followed by <a href="../jins/nahawand.php">Jins Nahawand</a> on the 4<sup>th</sup> degree.</p>

                    <p>Explore other maqamat in the <a href="f_kurd.php">Maqam Kurd Family</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/hijazkar_kurd/tif_ya_durri.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/hijazkar_kurd/tif_ya_durri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Tif Ya Durri</b>
                                    <span>Choir of the faculty of Music - Kaslik University (Lebanon)</span>
                                    <span>Conductor: Aïda Shalhoub Ziadé</span>
                                    <span>Music by Sayyed Darwish/‘Umar al-Batsh</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah and Song series</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar_kurd/hibbi_zurni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hibbi Zurni Ma Tayassar</b>
                                    <span>Choir of the faculty of Music - Kaslik University (Lebanon)</span>
                                    <span>Conductor: Aïda Shalhoub Ziadé</span>
                                    <span>Music by Darwish al-Hariri</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah and Song series</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar_kurd/ya_dhal_qawam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Dhal-Qawam al-Samhari</b>
                                    <span>Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Au Palais Des Congrès (1995)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar_kurd/izzay_tibi3ni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Izzay Tibi‘ni w-Ana Ashterik</b>
                                    <span>Saleh Abdel Hayy</span>
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
