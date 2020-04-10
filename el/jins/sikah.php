<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Σίκα";
$page_description = "Τζινς Σίκα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζασκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/sikah.php";
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
                        <h1>Τζινς Σίκα</h1>
                        <h3>Ρίζα Τζινς της <a href="../maqam/f_sikah.php">οικογένειας Μακάμ Σίκα</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sikah.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σίκα</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/sikah.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="37,97,12" href="#" alt="Ντο4" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="96,89,12" href="#" alt="Ρε4♮" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="134,89,12" href="#" alt="Ρε4♯" class="playNote" data-frequency="310" data-parent="#notation1"><!-- leading tone -->
					  <area shape="circle" coords="198,81,14" href="#" alt="Μι4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="273,72,13" href="#" alt="Φα4" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="351,65,14" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="425,56,12" href="#" alt="Λα4♭" class="playNote" data-frequency="422" data-parent="#notation1"><!-- fine tuned up from 411-->


					</map>
                    <p>To Τζινς Σίκα είναι ένα 3χορδο. Στην παρούσα καταγραφή του έχει την τονική στον φθόγγο Μι<i class='icon-halfflat'></i> (μισή ύφεση) και την νότα γάμμαζ στον φθόγγο Σολ. To Τζινς Σίκα είναι το πρώτο Τζινς στα <a href="../maqam/sikah.php">Μακάμ Σίκα</a>, <a href="../maqam/huzam.php">Μακάμ Χουζάμ</a>, <a href="../maqam/iraq.php">Μακάμ Ιράκ</a> και <a href="../maqam/bastanikar.php">Μακάμ Μπαστανικάρ</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/sikah/el_ward_gamil.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/sikah/el_ward_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ιλ Ουάρντ Γκαμίλ (1946)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/sikah/abuz_zulof.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Χαϊχάτ Γιάμπου αλ-Ζούλουφ</b>
                                    <span>Σαμπάχ</span>
                                    <span>(Παραδοσιακό Λιβάνου)</span>
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