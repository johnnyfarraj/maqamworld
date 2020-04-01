<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Αούτζ Ιράκ";
$page_description = "Μακάμ Αούτζ Ιράκ";
$page_keywords = "musique arabe, mode arabe, maqam, jins, sikah, awj iraq, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/awj_iraq.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Μακάμ Αούτζ Ιράκ</h1>
                        <h3>Μέλος της <a href="f_sikah.php">Οικόγενειας Μακάμ Σίκα</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/awj_iraq.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Αούτζ Ιράκ</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/awj_iraq.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια με το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="54,69,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
					  <area shape="circle" coords="123,77,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="212,85,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
					  <area shape="circle" coords="289,93,13" href="#" alt="La♯" class="playNote" data-frequency="463.54" data-parent="#notation1"><!-- B4♭ -->
					  <area shape="circle" coords="367,102,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="444,110,13" href="#" alt="Fa♯" class="playNote" data-frequency="372" data-parent="#notation1"><!-- Hijaz 3 down from 375 -->
					  <area shape="circle" coords="521,117,13" href="#" alt="Mi♭" class="playNote" data-frequency="312" data-parent="#notation1"><!-- Hijaz 2 up from 308.25 -->
					  <area shape="circle" coords="599,126,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="676,134,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="752,142,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!--variable-->
                       <!-- Links -->
                      <area shape="rect" coords="75,7,191,37" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="415,7,550,37" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="615,7,740,37" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>Le Maqam Aouj 'Iraq est une version du <a href="huzam.php">Μακάμ Ράχατ αλ-Αρουάχ/Μακάμ Χουζάμ</a> et du <a href="iraq.php">Μακάμ Ιράκ</a>, avec un <em>sayr</em> qui commence sur la tonique à l'octave supérieure et redescend vers la tonique. Il partage la plupart de ses ajnas avec le <a href="huzam.php">Μακάμ Χουζάμ</a>.
                    </p>
                    <p>Le Maqam Aouj 'Iraq  commence avec le jins de base <a href="../jins/sikah.php">Sikah</a> sur la tonique, suivi du <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> sur le 3<sup>ième</sup> degré, puis d'un autre Τζινς Σίκα sur le 8<sup>ième</sup> degré.
                    </p>

                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_sikah.php">Οικογένεια Μακάμ Σίκα</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Ya Samiri Da‘a Sabri</b>
                                    <span>Interprétation de Mouhammad Khayri (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/awj_iraq/hayya_wa_nadim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Hayya Wa Nadim</b>
                                    <span>Interprétation de Samer Nachar (Syrie)</span>
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

    <?php include($ROOT . 'el/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
