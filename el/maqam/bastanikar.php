<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Μπαστανικάρ";
$page_description = "Μακάμ Μπαστανικάρ";
$page_keywords = "musique arabe, mode arabe, maqam, jins, sikah, bastanikar, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/bastanikar.php";
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
                        <h1>Μακάμ Μπαστανικάρ</h1>
                        <h3>Μέλος της <a href="f_sikah.php">Οικόγενειας Μακάμ Σίκα</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bastanikar.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μπαστανικάρ</a>
                    </div>


                      <div class="notation" id="notation1">
                        <img src="../note/maqam/bastanikar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια με το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="85,147,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="243" data-parent="#notation1"><!-- variable -->
					  <area shape="circle" coords="162,139,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="239,131,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="316,123,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="394,114,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="470,106,13" href="#" alt="Sol♭" class="playNote" data-frequency="368" data-parent="#notation1"><!-- Hijaz 2- tuned up from 365.32 -->
					  <area shape="circle" coords="548,98,13" href="#" alt="La♮" class="playNote" data-frequency="437" data-parent="#notation1"><!-- hijaz 3 tuned down from 440-->
					  <area shape="circle" coords="625,90,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="702,82,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="781,74,13" href="#" alt="Ré♭" class="playNote" data-frequency="548" data-parent="#notation1">
					  <area shape="circle" coords="857,65,13" href="#" alt="Mi♮" class="playNote" data-frequency="660" data-parent="#notation1">
					  <area shape="circle" coords="934,57,13" href="#" alt="Fa" class="playNote" data-frequency="695.3" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="93,10,213,40" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="320,10,462,40" href="../jins/saba.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="432,149,570,177" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="700,2,845,31" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">

				      </map>

                    <p>
                        Το Μακάμ Μπαστανικάρ είναι ουσιαστικά <a href="../jins/sikah.php">Τζινς Σίκα</a> ακολουθούμενο από το <a href="saba.php">Μακάμ Σάμπα</a>. Η κλίμακά του αρχίζει με βάση Ζινς Σίκα στην τονική, έπειτα <a href="../jins/saba.php">Τζινς Σάμπα</a> στην 3η βαθμίδα, αλληλοεπικαλυπτόμενο από <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> στην 5η βαθμίδα, και τέλος <a href="../jins/nikriz.php">Τζινς Νικρίζ</a> στην οκτάβα.
                    </p>

                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_sikah.php">Οικογένεια Μακάμ Σίκα</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/bastanikar/zalamu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/bastanikar/zalamu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ζαλαμού (1957)</b>
                                    <span>Αμπντέλ Χαλίμ Χάφεζ (Αίγυπτος)</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/ahl_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Αχλ ελ-Χάουα (1958)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/inti_fakrani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Έντι Φακράνι (1938)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Μοχάμαντ αλ-Κασάμπζι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/anshidi_ya_saba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Ανσίντι Για Σάμπα</b>
                                    <span>Εθνική Αραβική Ορχήστρα Παλαιστίνης</span>
                                    <span>Μαέστρος: Ράμζι Αμπου Ρεντουάν</span>
                                    <span>Μουσική Γιάχια αλ-Σαούντι</span>‘
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/aqbal_al_subhu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Ακμπάλα αλ-Σούμπχου Ιουγάνι</b>
                                    <span>Μουσικό Σύνολο Ορμίνα (Συρία)</span>
                                    <span>Μαέστρος: Δρ. Μοχάμαντ Κάντρι Νταλάλ</span>
                                    <span>Μουσική Μπάκρι αλ-Κούρντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/nuzhatul_arwahi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Νουζχάτου αλ-Αρουάχι Μπάντρι</b>
                                    <span>(άγνωστος ερμηνευτής)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/taqsim_oud_dalal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τακσίμι Ούτι σε Μακάμ Μπαστανικάρ</b>
                                    <span>Μοχάμαντ Κάντρι Νταλάλ</span>
                                    <span><img src="/img/cd.png"> Maqams Insolites</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/bastanikar/taqsim_oud_sunbati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τακσίμι Ούτι σε <a href="../maqam/sikah.php">Μακάμ Σίκα</a></b>
                                    <span>Ριάντ αλ-Σουνμπάτι</span>
                                    <span><img src="/img/cd.png"> Taqaseem Oud</span>
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
