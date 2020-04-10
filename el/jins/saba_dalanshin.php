<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Σάμπα Νταλανσίν";
$page_description = "Τζινς Σάμπα Νταλανσίν";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζαζκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/saba_dalanshin.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Τζινς Σάμπα Νταλανσίν</h1>
                        <h3>Μία ξεχωριστή εκδοχή <a href="saba.php">Τζινς Σάμπα</a> με την τονική του στην 3η βαθμίδα</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/saba_dalanshin.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σάμπα Νταλανσίν</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/saba_dalanshin.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="35,70,12" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="86,70,12" href="#" alt="Σολ4♯" class="playNote" data-frequency="415" data-parent="#notation1"><!--ET???-->
					  <area shape="circle" coords="133,62,14" href="#" alt="Λα4" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="208,55,13" href="#" alt="Σι4<i class='icon-halfflat'></i>" class="playNote" data-frequency="477" data-parent="#notation1"><!--Bayati 2-->
					  <area shape="circle" coords="281,46,14" href="#" alt="Ντο5" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijaz Tonic-->
					  <area shape="circle" coords="355,38,13" href="#" alt="Ρε5♭" class="playNote" data-frequency="560  " data-parent="#notation1"><!--Hijaz 2-->
					  <area shape="circle" coords="432,29,13" href="#" alt="Μι5♮" class="playNote" data-frequency="660" data-parent="#notation1"><!--Hijaz 3-->
					  <area shape="circle" coords="509,21,13" href="#" alt="Φα5" class="playNote" data-frequency="695.3" data-parent="#notation1">

					</map>
                    <p>
                        To Τζινς Σάμπα Νταλανσίν είναι μία ειδική περίπτωση <a href="saba.php">Τζινς Σάμπα</a>, η οποία δεν έχει νότες γάμμαζ, και ως εκ τούτου είναι ακαθόριστου μεγέθους. Η μελωδία του είναι επικεντρωμένη γύρω από την τονική του, καταγεγραμμένη εδώ στον φθόγγο Ντο. Τα διαστήματα πάνω από την τονική είναι σχεδόν πανομοιότυπα με το <a href="hijaz.php">Τζινς Χιτζάζ</a>. Η νότα που είναι 2 βαθμίδες κάτω από την τονική (στην παρούσα περίπτωση η Λα) είναι μία δευτερεύουσα τονική.
                    </p>
                    <p>
                        To Τζινς Σάμπα Νταλανσίν προκύπτει στην οκτάβα του <a href="../maqam/rast.php">Μακάμ Ραστ</a>, όπου σε αυτήν την περίπτωση γίνεται γνωστό ως <a href="../maqam/dalanshin.php">Μακάμ Νταλανσίν</a>. Επίσης προκύπτει στην 5η βαθμίδα του <a href="../maqam/shawq_afza.php">Μακάμ Σάουκ Άφζα</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/saba_dalanshin/ya_mal_el_sham.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/saba_dalanshin/ya_mal_el_sham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Για Μαλ ελ-Σαμ</b>
                                    <span>Σαμπάχ Φαχρί</span>
                                    <span>Μουσική Άχμαντ Αμπού Χαλίλ αλ-Καμπάνι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/ja_jirat_al_sha3b_al_yamani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Κασίντα Για Τζίρατ αλ-Σάαμπ αλ-Ιαμάνι</b>
                                    <span>Χάσαν αλ-Χαφφάρ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/mala_el_kasat_khana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μάλα αλ-Κασάτ (Χάνα)</b>
                                    <span>Σαμπάχ Φαχρί</span>
                                    <span>Μουσική Μοχάμαντ Οθμάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/qanun_tqasim_rast.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τακσίμι Κανονάκι (από Λαϊάλι Ραστ)</b>
                                    <span>Αμπάς αλ-Μπλέιντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/ya_halawit_el_dunya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για Χαλάουτ ελ-Ντούνια</b>
                                    <span>Σάιεντ Μακάουι</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/saba_dalanshin/zahrit_el_janub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ισουάρετ ελ-Αρούς (1989)</b>
                                    <span>Φεϊρούζ</span>
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