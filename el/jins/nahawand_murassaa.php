<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Ναχαουάντ  Μουράσα";
$page_description = "Τζινς Ναχαουάντ  Μουράσα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζασκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/nahawand_murassaa.php";
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
                        <h1>Τζινς Ναχαουάντ  Μουράσα</h1>
                        <h3>Μία παραλλαγή του <a href="nahawand.php">Τζινς Ναχαουάντ</a> με χαμηλωμένη την 5η βαθμίδα</h3>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nahawand_murassaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ναχαουάντ  Μουράσα</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/nahawand_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="55,110,12" href="#" alt="Σι3♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="126,102,14" href="#" alt="Ντο4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="202,94,13" href="#" alt="Ρε4" class="playNote" data-frequency="293.33"  data-parent="#notation1">
					  <area shape="circle" coords="280,86,13" href="#" alt="Μι4♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="357,78,13" href="#" alt="Φα4" class="playNote" data-frequency="347.65" data-parent="#notation1"><!-Hijaz 1st-->
					  <area shape="circle" coords="434,70,13" href="#" alt="Σολ4♭" class="playNote" data-frequency="373.33" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="509,62,12" href="#" alt="Λα4♮" class="playNote" data-frequency="444" data-parent="#notation1"><!--var-->
					</map>

                    <p>Το Τζινς Ναχαουάντ  Μουράσα δεν έχει νότα <em>γαμάζ</em>, και ως εκ τούτου έχει απροσδιόριστο μέγεθος. Στην παρούσα καταγραφή του έχει την τονική στον φθόγγο Ντο. To Τζινς Ναχαουάντ Μουράσα είναι το πρώτο Τζινς στο <a href="../maqam/nahawand_murassaa.php">Μακάμ Ναχαουάντ Μουράσα</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/nahawand_murassaa/dulab_nahawand_murassaa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/nahawand_murassaa/dulab_nahawand_murassaa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ντουλάμπ Ναχαουάντ (από το Σιμπούνι Για Νας)</b>
                                    <span>Σαμπάχ Φαχρί</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/habbeit_gamalak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Χαμπέιτ Τζαμάλακ</b>
                                    <span>Λέιλα Μουράντ</span>
                                    <span>Μουσική Μοχάμαντ αλ-Κασάμπζι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/khusara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Χουσάρα (1957)</b>
                                    <span>Αμπντέλ Χαλίμ Χάφεζ</span>
                                    <span>Μουσική Μπαλίγ Χάμντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/taht_il_shibbak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Ταχτ ελ-Σίμπακ (Σόλο Ακκορντεόν)</b>
                                    <span>Φάτιμα Σερχάν</span>
                                    <span>Μουσική Αζίζ Οθμάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/nahawand_murassaa/ya_gari.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" checked>
                                <div class="info">
                                    <b>Μιν Χόμπι Φικ Για Γκάρι (1958)</b>
                                    <span>Χορέια Χάσαν</span>
                                    <span>Μουσική Μοχάμαντ αλ-Μούγκι</span>
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