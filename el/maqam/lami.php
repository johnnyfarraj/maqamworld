<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Λάμι";
$page_description = "Μακάμ Λάμι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Μακάμ Λάμι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/lami.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Μακάμ Λάμι</h1>
                        <h3>(δεν αποτελεί μέρος κάποιας οικογένειας μακάμ)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/lami.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Λάμι</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/lami.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>
                     <map name="notemap">
					  <area shape="circle" coords="53,130,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="130,122,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="208,113,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="286,105,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="364,97,13" href="#" alt="La♭" class="playNote" data-frequency="420" data-parent="#notation1">
					  <area shape="circle" coords="440,88,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="517,80,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="594,72,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="98,8,222,37" href="../jins/lami.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="325,138,474,167" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">

				     </map>

                    <p>
                        Το μακάμ Λάμι είναι ένα σπάνιο μακάμ στην Μέση Ανατολή και ήταν δανεισμένο από το Ιρακινό ρεπερτόριο. Η κλίμακά του αρχίζει με <a href="../jins/lami.php">Τζινς Λάμι</a> στην τονική, ακολουθούμενο από <a href="../jins/kurd.php">Τζινς Κουρντ</a> στην 4η βαθμίδα.
                    </p>
                    <p>Το μακάμ Λάμι δεν αποτελεί μέρος κάποιας οικογένειας μακάμ.</p>


                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/lami/el_bortoqal.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/lami/el_bortoqal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>ελ-Μπορτοκάλ (1938)</b>
                                    <span>Φωνή Ραΐσα Αφίφι και Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/tislam_idein.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τέσλαμ Ιντέιν Έλι-Στάρα (c. 1960)</b>
                                    <span>Φωνή Μοχάμαντ Αμπντέλ Μουτάλιμπ</span>
                                    <span>Μουσική Μαχμούντ Κάμελ (Αίγυπτος)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/albi_bi_ulli_kalam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Άλμπι Μπι Ούλι Καλάμ (c.1954)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/ahmad_ya_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Άχμαντ Για Χαμπίμπι</b>
                                    <span>Φωνή και μουσική Σάμπρι αλ-Μουντάλαλ</span>
                                    <span><img src="/img/cd.png"> Songs from Aleppo</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/al_najmat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ελ-Ναζμάτ Σάρου Γίσαλου (1964)</b>
                                    <span>Ουαντί αλ-Σάφι (Λίβανος )</span>
                                    <span>Μουσική Μοχάμαντ Μόχσεν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/lami/gulli_ya_hilu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Γκούλι Για Χέλο</b>
                                    <span>Νάζεμ αλ-Γαζάλι (Ιράκ)</span>
                                    <span>(Παραδοσιακό Ιρακινό)</span>
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
