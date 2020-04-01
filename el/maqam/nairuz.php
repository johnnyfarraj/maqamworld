﻿<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Ναϊρούζ/ Μακάμ Γιάκα";
$page_description = "Μακάμ Ναϊρούζ/ Μακάμ Γιάκα";
$page_keywords = "musique arabe, mode arabe, maqam, jins, nairuz, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/nairuz.php";
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
                        <h1>Μακάμ Ναϊρούζ</h1>
                        <h1>Μακάμ Γιάκα</h1>
                        <h3>Μέλος της <a href="f_rast.php">Οικόγενειας Μακάμ Ραστ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nairuz.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ναϊρούζ</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/yakah.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Γιάκα</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="../note/maqam/nairuz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια με το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="74,135,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="150,126,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="228,118,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="305,110,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="383,102,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="459,93,13" href="#" alt="La<i class='icon-halfflat'></i>" class="playNote" data-frequency="426.67" data-parent="#notation1"><!-- Bayat 2nd, tuned up from A4♭=420 -->
					  <area shape="circle" coords="537,85,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="615,77,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="158,5,281,34" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="425,5,585,34" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>Le <strong>Maqam Nairuz</strong> commence avec le jins de base <a href="../jins/rast.php">Rast</a> sur la tonique, suivi du <a href="../jins/bayati.php">Τζινς Μπαϊάτι</a> sur le 5<sup>ième</sup> degré.
                    </p>
                    <p>Le Maqam Nairuz est assez rare en tant que maqam indépendant mais est utilisé souvent en tant que <em>sayr</em> à l'intérieur du <a href="suznak.php">Μακάμ Σουνζάκ</a>/<a href="rast.php">Μακάμ Ραστ</a> à cause des affinités entre le <a href="../jins/bayati.php">Τζινς Μπαϊάτι</a> et le <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> sur le 5<sup>ième</sup> degré de la gamme.
                    </p>
                    <p>Le <strong>Μακάμ Γιάκα</strong> est une version archaïque du Maqam Nairuz, construit sur la note Sol-3 dans la gamme de 24 notes arabe archaïque (note appelée <strong>Yakah</strong>) plutôt que sur la note Do-4.
                    </p>

                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_rast.php">Οικογένεια Μακάμ Ραστ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nairuz/ya_hilalan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/nairuz/ya_hilalan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Ya Hilalan</b>
                                    <span>Ensemble de la Musique Arabe (Égypte)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nairuz/mubarqa3ul_jamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Moubarqaou al-Jamal</b>
                                    <span>Hassan al-Haffar (Syrie)</span>
                                    <span>Musique de Omar al-Batch</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nairuz/asl_il_gharam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Asl el-Gharam (1945)</b>
                                    <span>Nour el-Hoda</span>
                                    <span>Musique de Mouhammad Outhman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nairuz/ghannili.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ghannili Chwayy Chwayy (1945)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Zakaria Ahmad</span>
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
