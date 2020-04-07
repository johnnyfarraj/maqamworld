<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Σάουκ Άφζα";
$page_description = "Μακάμ Σάουκ Άφζα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Μακάμ Σάουκ Άφζα";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/shawq_afza.php";
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
                        <h1>Μακάμ Σάουκ Άφζα</h1>
                        <h3>Μέλος της <a href="f_ajam.php">Οικόγενειας Μακάμ Άτζαμ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/shawq_afza.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σάουκ Άφζα</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/shawq_afza.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια με το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="57,134,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="133,126,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="210,118,13" href="#" alt="Mi" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Ajam 3rd, tuned down from 330-->
					  <area shape="circle" coords="289,110,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="366,102,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1"><!-- Hijaz tonic -->
					  <area shape="circle" coords="442,93,13" href="#" alt="La♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
					  <area shape="circle" coords="519,85,13" href="#" alt="Si♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
					  <area shape="circle" coords="597,77,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="134,4,268,36" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="414,4,552,36" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
					</map>
                    <p>
                        Το Μακάμ Σάουκ Άφζα είναι η πιο κοινή παραλλαγή του <a href="ajam.php">Μακάμ Άτζαμ</a>. Η κλίμακά του αρχίζει με βάση το <a href="../jins/ajam.php">Τζινς Άτζαμ</a> στην τονική, καθώς το <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> στην 5η βαθμίδα είναι το χαρακτηριστικό του γνώρισμα, όπως επίσης μία συχνή μετατροπία σε <a href="../jins/saba_dalanshin.php">Τζινς Σάμπα Νταλανσίν</a> στην 3η / 5η βαθμίδα.
                    </p>

                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_ajam.php">Οικογένεια Μακάμ Άτζαμ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/shawq_afza/lissa_fakir.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/shawq_afza/lissa_fakir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Λίσα Φάκερ (1960)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ριάντ Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shawq_afza/3alallah_t3ud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Αλά Αλά Ταούντ (1970)</b>
                                    <span>Ουαντί αλ-Σάφι (Λίβανος )</span>
                                    <span>Μουσική Φαρίντ αλ-Άτρας</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shawq_afza/longa_ajam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Λόνγκα Άτζαμ</b>
                                    <span>Μουσική Αμπντού Ντάγερ</span>
                                    <span><img src="/img/cd.png"> Μάλικ αλ Τακασίμ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shawq_afza/zahrit_el_janub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Εσουάρετ ελ-Αρούς (1989)</b>
                                    <span>Φεϊρούζ (Λίβανος)</span>
                                    <span>Μουσική Φιλίμων Ουάχμπι</span>
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
