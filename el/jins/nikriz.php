<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Νικρίζ";
$page_description = "Τζινς Νικρίζ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζασκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/nikriz.php";
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
                        <h1>Τζινς Νικρίζ</h1>
                        <h3>Ρίζα Τζινς της <a href="../maqam/f_nikriz.php">οικογένειας Μακάμ Νικρίζ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/nikriz.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Νικρίζ</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/nikriz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="60,116,12" href="#" alt="Λα3♭" class="playNote" data-frequency="209" data-parent="#notation1"><!--fine tuned up from 205.5-->
					  <area shape="circle" coords="138,107,12" href="#" alt="Σι3♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="220,100,14" href="#" alt="Ντο4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="295,91,13" href="#" alt="Ρε4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="373,83,13" href="#" alt="Μι4♭" class="playNote" data-frequency="315" data-parent="#notation1">
					  <area shape="circle" coords="450,74,13" href="#" alt="Φα4♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="528,66,14" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					   <area shape="circle" coords="601,58,12" href="#" alt="Λα4♭" class="playNote" data-frequency="414" data-parent="#notation1"><!-- fine tuned up from 411-->
					  <area shape="circle" coords="640,58,12" href="#" alt="Λα4♮" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="678,50,12" href="#" alt="Σι4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">

					</map>
                    <p>
                        To Τζινς Νικρίζ είναι ένα 5χορδο. Στην παρούσα καταγραφή του έχει την τονική στον φθόγγο Ντο και την νότα γαμάζ στον φθόγγο Σολ. To Τζινς Νικρίζ είναι το πρώτο τζινς στο <a href="../maqam/nikriz.php">Μακάμ Νικρίζ</a> και <a href="../maqam/nawa_athar.php">Μακάμ Νάουα Άθαρ</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/nikriz/bayna_qasiyun_wa_rabwa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/nikriz/bayna_qasiyun_wa_rabwa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Μπέινα Κασιούν Ούα Ράμπουα</b>
                                    <span>Εθνική Ορχήστρα της Συρίας</span>
                                    <span>Μουσική Όμαρ αλ-Μπατς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nikriz/3awwidti_3eini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Αουίνττι Αΐνι (1957)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ριάντ αλ-Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nikriz/hawwil_ya_ghannam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Χάουελ Για Γανάαμ</b>
                                    <span>Νατζάχ Σαλάμ</span>
                                    <span>Μουσική Ελιά αλ-Μάτνι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nikriz/ba3id_annak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μπαΐντ Άνακ (1965)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Μπαλίγ Χάμντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nikriz/fi_youm_we_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Φι Ιόμ ου Λέιλα (1978)</b>
                                    <span>Ουάρντα</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nikriz/lamma_anakhu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Κασίντα Λάμα Ανάχου</b>
                                    <span>Σαμπάχ Φαχρί</span>
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