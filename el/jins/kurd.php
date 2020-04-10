<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Κουρντ";
$page_description = "Τζινς Κουρντ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζασκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/kurd.php";
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
                        <h1>Τζινς Κουρντ</h1>
                        <h3>Ρίζα Τζινς της <a href="../maqam/f_kurd.php">οικογένειας Μακάμ Κουρντ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/kurd.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Κουρντ</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/jins/kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="37,97,12" href="#" alt="Ντο4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="109,89,14" href="#" alt="Ρε4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="183,81,13" href="#" alt="Μι4♭" class="playNote" data-frequency="308.25" data-parent="#notation1"><!--minor 2nd-->
					  <area shape="circle" coords="261,73,13" href="#" alt="Φα4♮" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="339,65,14" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="411,57,12" href="#" alt="Λα4" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="488,49,12" href="#" alt="Σι4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">

					</map>
                    <p>
                        To Τζινς Κουρντ είναι ένα 4χορδο. Στην παρούσα καταγραφή του έχει την τονική στον φθόγγο Ρε και την νότα <em>γάμμαζ</em> στο Σολ. To Τζινς Κουρντ είναι το πρώτο Τζινς στo <a href="../maqam/kurd.php">Μακάμ Κουρντ</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/kurd/3awwidti_3eini.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/kurd/3awwidti_3eini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Αουίνττι Αΐνι (1957)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ριάντ Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/hayyarti_albi_intro.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Χαϊάρτι Άλμπι Μάακ (1961)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ριάντ Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/hibbi_zurni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Χίμπι Ζούρνι Μα Ταϊάσαρ</b>
                                    <span>Κάρεμ Μαχμούντ</span>
                                    <span>Μουσική Νταρουίς αλ-Χαρίρι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/inta_omri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Έντα Ούμρι (1964)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/mshghoul.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μασγούλ Αλέκ</b>
                                    <span>Φωνή και μουσική Κάρεμ Μαχμούντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/ya_bahjet_el_rouh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Για Μπαχτζέτ αλ-Ροχ</b>
                                    <span>Σαμπάχ Φαχρί</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/kurd/ya_zalimni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για Ζαλίμνι (1951)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ριάντ Σουνμπάτι</span>
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