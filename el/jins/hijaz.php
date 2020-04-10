<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Χιτζάζ";
$page_description = "Τζινς Χιτζάζ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζαζκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/hijaz.php";
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
                        <h1>Τζινς Χιτζάζ</h1>
                        <h3>Ρίζα Τζινς της <a href="../maqam/f_hijaz.php">οικογένειας Μακάμ Χιτζάζ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijaz.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Χιτζάζ</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/jins/hijaz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="95,104,12" href="#" alt="Σι3<i class='icon-halfflat'></i>" class="playNote" data-frequency="243" data-parent="#notation1"><!- variable ->
					  <area shape="circle" coords="173,96,12" href="#" alt="Ντο4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="255,89,14" href="#" alt="Ρε4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="330,80,13" href="#" alt="Μι4♭" class="playNote" data-frequency="315" data-parent="#notation1"><!- variable Hijaz 2nd x1.0738->
					  <area shape="circle" coords="408,71,13" href="#" alt="Φα4♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="486,64,14" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="559,55,12" href="#" alt="Λα4" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="636,46,12" href="#" alt="Σι4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					</map>

                    <p>
                        To Τζινς Χιτζάζ είναι ένα 4χορδο. Στην παρούσα καταγραφή του έχει την τονική στον φθόγγο Ρε και την νότα <em>γάμμαζ</em> στο Σολ. To διάστημα μεταξύ της 2ης και 3ης βαθμίδας παίζεται συνήθως μικρότερο από την παρούσα καταγραφή του οξύνοντας ελαφρά την 2η και βαρύνοντας ελαφρά την 3η βαθμίδα (όχι τόσο όμως όσο στο Τούρκικο Χιτζάζ).  To Τζινς Χιτζάζ είναι το πρώτο Τζινς στα <a href="../maqam/hijaz.php">μακάμ Χιτζάζ</a>, <a href="../maqam/hijazkar.php">μακάμ Χιτζαζκάρ</a> και <a href="../maqam/zanjaran.php">μακάμ Ζαντζαράν</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/hijaz/ana_fintizarak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/hijaz/ana_fintizarak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Άνα Φινταζάρακ (1943)</b>
                                    <span>Ουμ Κουλθούμ </span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz/aghadan_alqak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Άγανταν Αλκάκ (1971)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz/bi_karm_el_lulu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μπι Καρμ ελ-Λούλου</b>
                                    <span>Φεϊρούζ</span>
                                    <span>Μουσική Φιλίμων Ουάχμπι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz/el_awwila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ελ-Αουίλα Φιλ-Γαράμ (1944)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz/el_ward_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ελ-Ουάρντ Γκαμίλ (1946)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
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