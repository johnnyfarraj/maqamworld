<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Ναχαουάντ";
$page_description = "Τζινς Ναχαουάντ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζασκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/nahawand.php";
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
                        <h1>Τζινς Ναχαουάντ</h1>
                        <h3>Ρίζα Τζινς της <a href="../maqam/f_nahawand.php">οικογένειας Μακάμ Ναχαουάντ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nahawand.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ναχαουάντ</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/nahawand.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="62,118,12" href="#" alt="Λα3♭" class="playNote" data-frequency="209" data-parent="#notation1"><!-- fine tune up from 205.5-->
					  <area shape="circle" coords="113,118,12" href="#" alt="Λα3♮" class="playNote" data-frequency="220" data-parent="#notation1">
					  <area shape="circle" coords="162,110,12" href="#" alt="Σι3♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="230,102,14" href="#" alt="Ντο4" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="306,94,13" href="#" alt="Ρε4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="383,86,13" href="#" alt="Μι4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="460,78,13" href="#" alt="Φα4" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="539,69,14" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1">
				      <area shape="circle" coords="611,60,12" href="#" alt="Λα4♭" class="playNote" data-frequency="411" data-parent="#notation1">
					</map>

                    <p>
                        To Τζινς Ναχαουάντ είναι ένα 5χορδο. Στην παρούσα καταγραφή του έχει την τονική στον φθόγγο Ντο και την νότα γαμάζ στον φθόγγο Σολ. To τζινς Ναχαουάντ είναι το πρώτο τζινς στο <a href="../maqam/nahawand.php">Μακάμ Ναχαουάντ</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/nahawand/alf_leila_w_leila.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/nahawand/alf_leila_w_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Αλφ Λέιλα ου Λέιλα (1969)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Μπαλίγ Χάμντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/balad_el_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μπάλαντ ελ-Μαχμπούμπ</b>
                                    <span>Οργανική Σύνθεση</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/darit_el_ayyam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντάριτ ελ-Αϊάμ (1970)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/dawr_ahibb_ashufak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντάουρ Αχέμπ Ασούφακ Κούλι Ιόμ (1930)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/gaddidti_hubbak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Γκαντίνττι Χόμπακ Λε (1952)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ριάντ αλ-Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/ya_dunya_ya_gharami.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για Ντούνια Για Γαράμι (1938)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand/ya_habibi_kullama.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για Χαμπίμπι Κουλάμα Χάμπα αλ-Χάουα (2000)</b>
                                    <span>Φεϊρούζ</span>
                                    <span>Μουσική αδερφοί  Ραχμπάνι</span>
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