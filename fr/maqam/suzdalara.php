<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Suzdalara";
$page_description = "Maqam Suzdalara";
$page_keywords = "arabic, music, arab, world, maqam, jins, suzdalara, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "fr/maqam/suzdalara.php";
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
                        <h1>Maqam Suzdalara</h1>
                        <h3>A member of the <a href="f_rast.php">Maqam Rast Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/suzdalara.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Suzdalara</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/maqam/suzdalara.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="57,75,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="134,83,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="211,91,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="289,99,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="366,107,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="444,116,13" href="#" alt="E4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="521,123,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="598,133,13" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                      <!-- Links -->
                      <area shape="rect" coords="79,7,257,35" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="392,7,504,35" href="../jins/rast.php" class="mapLink" data-parent="#notation1">

                    </map>
                    <p>Maqam Suzdalara is quite archaic and almost non-existent as an independent maqam, although its sayr is obligatory within nearly every performance and song in every branch of <a href="rast.php">Maqam Rast</a>: the <a href="../jins/nahawand.php">Jins Nahawand</a> on the 5<sup>th</sup> degree of Maqam Rast is a universal transition device from other modulations, signaling the return to the root <a href="../jins/rast.php">Jins Rast</a> on the <em>tonic</em>.</p>

                    <p>Explore other maqamat in the <a href="f_rast.php">Maqam Rast Family</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/suzdalara/yana_yana.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/suzdalara/yana_yana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Yana Yana (1969)</b>
                                    <span>Sabah</span>
                                    <span>Music by Baligh Hamdi</span>
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
