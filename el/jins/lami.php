<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Λάμι";
$page_description = "Τζινς Λάμι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζασκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/lami.php";
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
                        <h1>Τζινς Λάμι</h1>
                        <h3>Ένα 4χορδο Τζινς</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/lami.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Λάμι</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/jins/lami.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="51,93,14" href="#" alt="Ρε4" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="126,85,13" href="#" alt="Μι4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="202,77,13" href="#" alt="Φα4" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="281,69,14" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="356,61,13" href="#" alt="Λα4♭" class="playNote" data-frequency="411" data-parent="#notation1">
					  <area shape="circle" coords="433,53,13" href="#" alt="Σι4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">

					</map>
                    <p>
                        To Τζινς Λάμι είναι ένα 4χορδο. Στην παρούσα καταγραφή του έχει την τονική στον φθόγγο Ρε και την νότα γαμμάζ στον φθόγγο Σολ. ToΤζινς Λάμι είναι το πρώτο Τζινς στo <a href="../maqam/lami.php">Μακάμ Λάμι</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/lami/el_bortoqal.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/lami/el_bortoqal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>ελ-Μπορτοκάλ (1938)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/lami/ahmad_ya_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Άχμαντ Για Χαμπίμπι</b>
                                    <span>Φωνή και μουσική Σάμπρι αλ-Μουντάλαλ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/lami/el_najmat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ελ-Ναζμάτ (1964)</b>
                                    <span>Φωνή και μουσική Ουαντί αλ-Σάφι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/lami/gulli_ya_hilu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Γκούλι Για Χέλο</b>
                                    <span>Κάζεμ ελ-Σάχερ (Ιράκ)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/lami/qasidat_aqulu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Κασίντα Ακούλου Ούα Καντ Νάχατ Μπι Κούρμπι Χαμάματουν</b>
                                    <span>Νάζεμ αλ-Γαζάλι (Ιράκ)</span>
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