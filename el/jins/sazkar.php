<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Σαζκάρ";
$page_description = "Τζινς Σαζκάρ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζασκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/sazkar.php";
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
                        <h1>Τζινς Σαζκάρ</h1>
                        <h3>Μία παραλλαγή του <a href="rast.php">Τζινς Ραστ</a> με οξυμένη την 2η βαθμίδα</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σαζκάρ</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/sazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια με το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="68,106,12" href="#" alt="Σι3<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="139,98,14" href="#" alt="Ντο4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="213,89,13" href="#" alt="Ρε4♯" class="playNote" data-frequency="310" data-parent="#notation1"><!-- var sikah leading tone-->
					  <area shape="circle" coords="290,82,13" href="#" alt="Μι4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320"  data-parent="#notation1"><!-- var -->
					  <area shape="circle" coords="368,73,13" href="#" alt="Φα4" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="447,65,14" href="#" alt="Σολ4 " class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="519,57,12" href="#" alt="Λα4♮" class="playNote" data-frequency="440" data-parent="#notation1">

					</map>

                    <p>
                        To Τζινς Σαζκάρ είναι ένα 5χορδο. Στην παρούσα καταγραφή του έχει την τονική στον φθόγγο Ντο και την νότα <em>γάμμαζ</em> στον φθόγγο Σολ. To Τζινς Σαζκάρ είναι το πρώτο Τζινς στο <a href="../maqam/kirdan.php">Μακάμ Σαζκάρ</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/sazkar/ya_dala3_sabah.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track" data-song="/audio/jins/sazkar/mudnaka.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Κασίντα Μουντνάκα Γκάφαχου Μαρκάντουχου (1938)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/jins/sazkar/ya_dala3_sabah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Για Ντάλα Ντάλα (1974)</b>
                                    <span>Σαμπάχ</span>
                                    <span>Μουσική Φαρίντ αλ-Άτρας</span>
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