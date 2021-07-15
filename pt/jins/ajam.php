<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins ‘Ajam";
$page_description = "Jins ‘Ajam";
$page_keywords = "arabic, music, arab, world, maqam, jins, ‘ajam, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "pt/jins/ajam.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Jins Index</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins ‘Ajam</h1>
                        <h3>Root jins of the <a href="../maqam/f_ajam.php">Maqam ‘Ajam Family</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Jins Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/ajam.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de ‘Ajam</a>
                    </div>

                    <p>Jins ‘Ajam has two versions:
                    </p>
                    <p><strong>The 5-note version</strong> of Jins ‘Ajam is the most common version, and is the first <em>jins</em> in <a href="../maqam/ajam.php">Maqam ‘Ajam</a> and <a href="../maqam/shawq_afza.php">Maqam Shawq Afza</a>. It is notated here with its tonic on C and its <em>ghammaz</em> on G.
                    </p>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/ajam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="49,119,12" href="#" alt="A3" class="playNote" data-frequency="220" data-parent="#notation1">
					  <area shape="circle" coords="126,111,12" href="#" alt="B3" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="209,103,14" href="#" alt="C4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="283,95,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="362,86,13" href="#" alt="E4" class="playNote" data-frequency="328" data-parent="#notation1"><!--variable, tuned down from 330-->
					  <area shape="circle" coords="439,78,13" href="#" alt="F4" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="518,70,14" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="590,62,12" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
					</map>

                    <p><strong>The 3-note version</strong> of Jins ‘Ajam occurs mostly when it is used as a secondary <em>jins</em>, for example on the 6<sup>th</sup> scale degree of <a href="../maqam/Bayati.php">Maqam Bayati</a>, <a href="../maqam/Saba.php">Maqam Saba</a> or <a href="../maqam/Kurd.php">Maqam Kurd</a>. This version is a carry over from <a href="../maqam/ajam_ushayran.php">Maqam ‘Ajam ‘Ushayran</a>. It is notated here with its tonic on B&#x266d;.
                    </p>

                    <div class="notation" id="notation2">
                        <img src="/note/jins/ajam-3-note.png" class="img-fluid" usemap="#notemap2">
                        <div class="shape"></div>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <!-- Copy this bit -->
                    <map name="notemap2">
					  <area shape="circle" coords="37,69,12"  href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation2">
					  <area shape="circle" coords="114,60,12" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation2">
					  <area shape="circle" coords="196,53,14" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation2">
					  <area shape="circle" coords="270,45,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation2">
					  <area shape="circle" coords="347,37,14" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation2">
					  <area shape="circle" coords="420,29,12" href="#" alt="E5♭" class="playNote" data-frequency="616.50" data-parent="#notation2">
					  <area shape="circle" coords="496,21,12" href="#" alt="F5" class="playNote" data-frequency="695.31" data-parent="#notation2">
					</map>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/ajam/aghadan_alqak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Jins ‘Ajam 5-note version examples</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="track" data-song="/audio/jins/ajam/aghadan_alqak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Aghadan Alqaka (1971)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Muhammad Abdel Wahab (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/el_bwab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Buwab (1994)</b>
                                    <span>Fairouz</span>
                                    <span>Música de Philemon Wehbe</span>
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
                                    <span>Warda</span>
                                    <span>Música de Muhammad Abdel Wahab (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/lissa_fakir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Lissa Fakir (1960)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/min_youm_furgak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Min Youm Furgak</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/til3it_ya_mahla_nurha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Til‘it Ya Mahla Nurha</b>
                                    <span>Muhammad Abdel Karim</span>
                                    <span>Música de Sayed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Jins ‘Ajam 3-note version examples</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="track" data-song="/audio/jins/ajam-3note/ba3id-3annak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ba‘id ‘Annak (1965)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Muhammad Abdel Wahab (Egito)</span>
                                    <span>3-note Jins ‘Ajam on the 6<sup>th</sup> degree of <a href="../maqam/kurd.php">Maqam Bayati</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam-3note/habba-fou2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Habba Fouq w Habba Taht</b>
                                    <span>Ahmad Adaweya</span>
                                    <span>Música de Mohamed el-Mesery</span>
                                    <span>3-note Jins ‘Ajam on the 6<sup>th</sup> degree of <a href="../maqam/saba.php">Maqam Saba</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam-3note/ahu-dalli-sar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ahu Da-lli Sar</b>
                                    <span>Nay Barghouthi</span>
                                    <span>Música de Sayed Darwish</span>
                                    <span>3-note Jins ‘Ajam on the 6<sup>th</sup> degree of <a href="../maqam/kurd.php">Maqam Kurd</a></span>
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

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>