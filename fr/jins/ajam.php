<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins ‘Ajam";
$page_description = "Jins ‘Ajam";
$page_keywords = "musique arabe, maqam, instruments, jins ‘ajam, jins ajam, iqa‘, iqaa, rythme, oud, qanoun, nay, quart de ton, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "fr/jins/ajam.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins ‘Ajam</h1>
                        <h3>Jins de base de la <a href="../maqam/f_ajam.php">Famille du Maqam ‘Ajam</a></h3>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/ajam.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de ‘Ajam</a>
                    </div>

                    <p>Le Jins ‘Ajam existe en deux versions:
                    </p>
                    
                    <p>La première version est de <strong>5 notes</strong>. Elle est la plus commune et occupe le premier jins du <a href="../maqam/ajam.php">Maqam ‘Ajam</a> et du <a href="../maqam/shawq_afza.php">Maqam Chaouq Afza</a>. La version à 5-notes est notée ci-dessous avec sa tonique sur Do et son <em>ghammaz</em> sur Sol.
                    </p>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/ajam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <!-- Copy this bit -->
                    <map name="notemap">
					  <area shape="circle" coords="49,119,12" href="#" alt="La" class="playNote" data-frequency="220" data-parent="#notation1">
					  <area shape="circle" coords="126,111,12" href="#" alt="Si" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="209,103,14" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="283,95,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="362,86,13" href="#" alt="Mi" class="playNote" data-frequency="328" data-parent="#notation1"><!--variable, tuned down from 330-->
					  <area shape="circle" coords="439,78,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="518,70,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="590,62,12" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					</map>

                    <p>La seconde version est de <strong>3 notes</strong>, et existe comme <em>jins</em> secondaire, par example sur le 6<sup>ème</sup> degré du <a href="../maqam/Bayati.php">Maqam Bayati</a>, du <a href="../maqam/Saba.php">Maqam Saba</a> ou du <a href="../maqam/Kurd.php">Maqam Kurd</a>. Cette version à 3 notes est dérivée du <a href="../maqam/ajam_ushayran.php">Maqam ‘Ajam ‘Ouchayrane</a>. Elle est est notée ci-dessous avec sa tonique sur Si&#x266d;.
                    </p>

                    <div class="notation" id="notation2">
                        <img src="/note/jins/ajam-3-note.png" class="img-fluid" usemap="#notemap2">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap2">
					  <area shape="circle" coords="37,69,12"  href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation2">
					  <area shape="circle" coords="114,60,12" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation2">
					  <area shape="circle" coords="196,53,14" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation2">
					  <area shape="circle" coords="270,45,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation2">
					  <area shape="circle" coords="347,37,14" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation2">
					  <area shape="circle" coords="420,29,12" href="#" alt="Mi♭" class="playNote" data-frequency="616.50" data-parent="#notation2">
					  <area shape="circle" coords="496,21,12" href="#" alt="Fa" class="playNote" data-frequency="695.31" data-parent="#notation2">
					</map>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/ajam/aghadan_alqak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Examples de la version Jins ‘Ajam à 5 notes</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="track" data-song="/audio/jins/ajam/aghadan_alqak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Aghadane Alqaka (1971)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/el_bwab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Bouab (1994)</b>
                                    <span>Fairouz (Liban)</span>
                                    <span>Musique de Philémon Wéhbé</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/fi_youm_we_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Fi Youm we Leila (1978)</b>
                                    <span>Warda (France/Algérie)</span>
                                    <span>Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/lissa_fakir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Lissa Faker (1960)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Riyad al-Soumbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/min_youm_furgak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Min Youm Fourgak</b>
                                    <span>Mouhammad Khayri (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/til3it_ya_mahla_nurha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Til‘it Ya Mahla Nourha</b>
                                    <span>Mouhammad Abdel Karim</span>
                                    <span>Musique de Sayyed Darwich</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Examples de la version Jins ‘Ajam à 3 notes</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="track" data-song="/audio/jins/ajam-3note/ba3id-3annak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ba‘id ‘Annak (1965)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Baligh Hamdi</span>
                                    <span>Jins ‘Ajam à 3 notes sur le 6<sup>ème</sup> degré du <a href="../maqam/kurd.php">Maqam Bayati</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam-3note/habba-fou2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Habba Fouq wi Habba Taht</b>
                                    <span>Ahmad Adaweya</span>
                                    <span>Musique de Mouhammad el-Mesery</span>
                                    <span>Jins ‘Ajam à 3 notes sur le 6<sup>ème</sup> degré du <a href="../maqam/saba.php">Maqam Saba</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam-3note/ahu-dalli-sar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ahou Da-lli Sar</b>
                                    <span>Nay Barghouthi</span>
                                    <span>Musique by Sayyed Darwich</span>
                                    <span>Jins ‘Ajam à 3 notes sur le 6<sup>ème</sup> degré du <a href="../maqam/kurd.php">Maqam Kurd</a></span>
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