<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Μπαϊάτι";
$page_description = "Τζινς Μπαϊάτι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζαζκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/bayati.php";
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
                        <h1>Τζινς Μπαϊάτι</h1>
                        <h3>Ρίζα Τζινς της <a href="../maqam/f_bayati.php">οικογένειας Μακάμ Μπαϊάτι</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bayati.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μπαϊάτι</a>
                    </div>

                    <!-- Copy this too, just change the image SRC -->
                    <div class="notation" id="notation1">
                        <img src="/note/jins/bayati.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <!-- Copy this bit -->
                    <map name="notemap">
					  <area shape="circle" coords="71,105,12" href="#" alt="Σι3<i class='icon-halfflat'></i>" class="playNote" data-frequency="243" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="151,96,12" href="#" alt="Ντο4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="235,88,14" href="#" alt="Ρε4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="311,79,13" href="#" alt="Μι4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="392,71,13" href="#" alt="Φα4" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="472,63,14" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="547,53,12" href="#" alt="Λα4" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="626,45,12" href="#" alt="Σι4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					</map>

                    <p>
                        To Τζινς Μπαϊάτι είναι ένα 4χορδο. Στην παρούσα καταγραφή του έχει την τονική στον φθόγγο Ρε και την νότα <em>γάμμαζ</em> στο Σολ. To Τζινς Μπαϊάτι είναι το πρώτο Τζινς στo <a href="../maqam/bayati.php">Μακάμ Μπαϊάτι</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/bayati/3alalla_t3ud.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/bayati/3alalla_t3ud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Αλά Αλά Ταούντ (1970)</b>
                                    <span>Ουαντί αλ-Σάφι</span>
                                    <span>Μουσική Φαρίντ αλ-Άτρας</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/bayati/3ataba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ατάμπα – Μαλαφφάτ (1995)</b>
                                    <span>Ζοζέφ Σακρ</span>
                                    <span>Μουσική Ζιάντ Ραχμπάνι</span>
                                    <span><img src="/img/cd.png"> Bema Enno</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/bayati/3awwidti_3eini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Αουίνττι  Αΐνι (1957)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ριάντ αλ-Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/bayati/el_ward_gamil.mp3">
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
                    <div class="track" data-song="/audio/jins/bayati/ba3id_3annak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μπαΐντ Άννακ (1965) </b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Μπαλίγ Χάμντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/bayati/lamma_3al_bab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Λάμμα αλ-Μπάαμπ</b>
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