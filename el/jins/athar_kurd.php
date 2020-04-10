<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Άθαρ Κουρντ";
$page_description = "Τζινς Άθαρ Κουρντ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζαζκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/athar_kurd.php";
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
                        <h1>Τζινς Άθαρ Κουρντ</h1>
                        <h3>Ένας συνδυασμός <a href="kurd.php">Τζινς Κουρντ</a> και <a href="nikriz.php"> Τζινς Νικρίζ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/athar_kurd.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Άθαρ Κουρντ</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/athar_kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="59,118,12" href="#" alt="Λα3♭" class="playNote" data-frequency="211" data-parent="#notation1"><!-- octave below A4b -->
					  <area shape="circle" coords="136,110,12" href="#" alt="Σι3♮" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="218,102,14" href="#" alt="Ντο4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="293,94,13" href="#" alt="Ρε4♭" class="playNote" data-frequency="274" data-parent="#notation1"> <!-- fine tune minor 2nd (see Kurd)-->
					  <area shape="circle" coords="370,86,13" href="#" alt="Μι4♭" class="playNote" data-frequency="309" data-parent="#notation1"><!-- minor 3rd -->
					  <area shape="circle" coords="447,77,13" href="#" alt="Φα4♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="526,69,14" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1"><!-- hijazkar tonic -->
					  <area shape="circle" coords="599,61,12" href="#" alt="Λα4♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- variable: Hijaz 2nd -->
					</map>

                    <p>
                        To Τζινς Άθαρ Κουρντ είναι ένα 5χορδο. Στην παρούσα καταγραφή του έχει την τονική στον φθόγγο Ντο και την νότα γάμμαζ στον φθόγγο Σολ. To Τζινς Άθαρ Κουρντ είναι το πρώτο τζινς στο <a href="../maqam/athar_kurd.php">Μακάμ Άθαρ Κουρντ</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/athar_kurd/habibaha.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/athar_kurd/habibaha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Χαμπίμπαχα (1965)</b>
                                    <span>Αμπντέλ Χαλίμ Χάφεζ</span>
                                    <span>Μουσική Μοχάμαντ αλ-Μούγκι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/athar_kurd/raydak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ραιντάκ (1950)</b>
                                    <span>Λέιλα Μουράντ</span>
                                    <span>Μουσική Άχμαντ Σίντκι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/athar_kurd/ya_fagr_nurak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για Φατζρ Νούρακ Χάλι ου Μπαν (c.1952)</b>
                                    <span>Μπαλίγ Χάμντι</span>
                                    <span>Μουσική Γιούσεφ Σάουκι</span>
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