<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Χιτζάζ Μουράσα";
$page_description = "Τζινς Χιτζάζ Μουράσα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζασκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/hijaz_murassaa.php";
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
                        <h1>Τζινς Χιτζάζ Μουράσα</h1>
                        <h3>Μία παραλλαγή του <a href="hijaz.php">Τζινς Χιτζάζ</a> με χαμηλωμένη 5η βαθμίδα</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/hijaz_murassaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Χιτζάζ Μουράσα</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/hijaz_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="43,106,12" href="#" alt="Ντο4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="88,106,12" href="#" alt="Ντο4♯" class="playNote" data-frequency="281.24" data-parent="#notation1"><!-- fine tune-->
					  <area shape="circle" coords="143,98,14" href="#" alt="Ρε4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="217,89,13" href="#" alt="Μι4♭" class="playNote" data-frequency="315" data-parent="#notation1"><!-- fine tune-->
					  <area shape="circle" coords="294,81,13" href="#" alt="Φα4♯" class="playNote" data-frequency="375" data-parent="#notation1"><!-- fine tune-->
					  <area shape="circle" coords="373,73,14" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="450,65,12" href="#" alt="Λα4♭" class="playNote" data-frequency="422" data-parent="#notation1">

					</map>
                    <p>
                        To Τζινς Χιτζάζ Μουράσα είναι ένα 4χορδο. Στην παρούσα καταγραφή του έχει την τονική στον φθόγγο Ρε και την νότα <em>γαμάζ</em> στον φθόγγο Σολ. To Τζινς Χιτζάζ Μουράσα δεν είναι μέρος κανενός μακάμ και συνήθως συμβαίνει ως μετατροπία από <a href="hijaz.php">Τζινς Χιτζάζ</a> περισσότερο σε <a href="../maqam/hijazkar.php">Μακάμ Χιτζασκάρ</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/hijaz_murassaa/ana_fintizarak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/hijaz_murassaa/ana_fintizarak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Άνα Φινταζάρακ (1943)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/el-hobb-mahush-bis-sahl.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντάουρ ελ-Χομπ Μα Χους Μπις-Σαχλ</b>
                                    <span>Σαμπάχ Φαχρί</span>
                                    <span>Μουσική Νταούντ Χόσνι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/badru_timmin_oud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μπάντρου Τίμμιν (Τακσίμ Ούτι)</b>
                                    <span>Γάντα Σμπίιρ</span>
                                    <span>Μουσική Σέιχ Μούσρι αλ-Χαρίρι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/badru_timmin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μπάντρου Τίμμιν Χάζα Χουσνάν</b>
                                    <span>Φωνή και μουσική Σέιχ Μούσρι αλ-Χαρίρι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/laha_badrut_timm.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Λάχα Μπάντρου-τ-Τιμ</b>
                                    <span>Φωνή Σέιχ Μαχμούντ Σουμπχ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/mala_el_kasat_khana.mp3">
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

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/qadduka_al_mayyas.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Καντουκάλ Μαϊάς</b>
                                    <span>Μοχάμαντ Χαΐρι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/zarani_al_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Ζαράνι αλ-Μαχμπούμπ</b>
                                    <span>Σαλατίν αλ Τάραμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/zahr_el_laymun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ζαχρ ελ-Λαϊμούν (1997)</b>
                                    <span>Σόνια Μμπάρεκ</span>
                                    <span><img src="/img/cd.png"> Tawchih &copy; 1997</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/maqam_isba3ain.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μαουάλ σε Μακάμ Ισμπαάιν</b>
                                    <span>Σόνια Μμπάρεκ</span>
                                    <span><img src="/img/cd.png"> Tawchih &copy; 1997</span>
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