<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Χουζάμ/Rahat al-Arwah";
$page_description = "Μακάμ Χουζάμ/Rahat al-Arwah";
$page_keywords = "musique arabe, mode arabe, maqam, jins, sikah, huzam, rahat al-arwah, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/huzam.php";
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
                        <h1>Μακάμ Χουζάμ</h1>
                        <h1>Μακάμ Ράχατ αλ-Αρουάχ</h1>
                        <h3>Membre de la <a href="f_sikah.php">Οικογένεια Μακάμ Σίκα</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/huzam.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Houzam</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/rahat_al_arwah`.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Rahat al-Arwah</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="../note/maqam/huzam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="70,125,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="322" data-parent="#notation1"><!--variable 318~324-->
                      <area shape="circle" coords="148,117,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="225,108,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="301,100,13" href="#" alt="La♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
                      <area shape="circle" coords="378,92,13" href="#" alt="Si♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
                      <area shape="circle" coords="455,84,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="533,76,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
                      <area shape="circle" coords="610,68,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="644" data-parent="#notation1"><!--variable-->
                      <!-- Links -->
                      <area shape="rect" coords="78,13,200,43" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="277,13,395,43" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="484,7,591,35" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
		</map>

                    <p>Le Μακάμ Χουζάμ est le maqam le plus courant de la <a href="f_sikah.php">Οικογένεια Μακάμ Σίκα</a>. Il commence sur Mi<i class="icon-halfflat"></i>. Sa gamme commence avec le jins de base <a href="../jins/sikah.php">Τζινς Σίκα</a> sur la tonique, suivi du <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> sur le 3<sup>ième</sup> degré,  et finalement du <a href="../jins/rast.php">Τζινς Ραστ</a> sur le 6<sup>ième</sup> degré.
                    </p>

                    <p>La transposition du Μακάμ Χουζάμ sur Si<i class="icon-halfflat"></i> porte le nom de <strong>Μακάμ Ράχατ αλ-Αρουάχ</strong>. Les deux <em>maqams</em> ont exactement le même <em>sayr</em>.</p>

                    <p>Explorez d'autres maqams dans la <a href="f_sikah.php">Οικογένεια Μακάμ Σίκα</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/huzam/ya_ghusna_naqa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/huzam/ya_ghusna_naqa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Ya Ghousna Naqa</b>
                                    <span>(Μακάμ Χουζάμ)</span>
                                    <span>Ensemble de la Musique Arabe (Égypte)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/huzam/ayyuha_as_saqi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ayyouha al-Saqi</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span>Musique de Majdi al-‘Aqili</span>
                                    <span><img src="/img/cd.png"> Nagham al-Ams Vol. 13 Houzam</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/huzam/dawr_emta_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Emta el-Hawa (1936)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/huzam/marmar_zamani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Marmar Zamani</b>
                                    <span>Fairouz (Liban)</span>
                                    <span>(chanson traditionnelle)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Start Rahat al-Arwah section -->
                    <div class="heading jins text-center">
                        <h3>Μακάμ Ράχατ αλ-Αρουάχ examples</h3>
                    </div>
                    <div class="clearfix"></div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/el_wardi_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Ward Gamil (1947)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/ya_wahid_al_ghid.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ya Wahid al-Ghid</b>
                                    <span>Fairouz (Liban)</span>
                                    <span><img src="/img/cd.png"> Andalousiyyat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/dawr_inta_fahim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Inta Fahim</b>
                                    <span>(Μακάμ Ράχατ αλ-Αρουάχ)</span>
                                    <span>Interprétation et Musique de Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/dulab_rahat_al_arwah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Doulab Rahat al-Arwah</b>
                                    <span>Aïcha Redouane (Maroc)</span>
                                    <span><img src="/img/cd.png"> Égypte</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/dulab_ayyuhal_saqi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Doulab Rahat al-Arwah</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                    <span><img src="/img/cd.png"> Festival de Beiteddine (Liban)</span>
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
