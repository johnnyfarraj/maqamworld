<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Άνω Άτζαμ";
$page_description = "Τζινς Άνω Άτζαμ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζασκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/upper_ajam.php";
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
                        <h1>Τζινς Άνω Άτζαμ</h1>
                        <h3>Μία 4χορδη εκδοχή του <a href="ajam.php">Τζινς Άτζαμ</a> με την τονική στην κορυφή</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ajam.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Άτζαμ</a>
                    </div>
                    
                    
                     <div class="notation" id="notation1">
                        <img src="/note/jins/upper_ajam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="68,81,12" href="#" alt="Φα4♮" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="149,73,13" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="225,65,13" href="#" alt="Λα4" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="304,56,13" href="#" alt="Σι4" class="playNote" data-frequency="495" data-parent="#notation1">
					  <area shape="circle" coords="383,49,14" href="#" alt="Ντο5" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="455,40,12" href="#" alt="Ρε5" class="playNote" data-frequency="586.66" data-parent="#notation1">
					</map>
                    
                    <p>
                        To Τζινς Άνω Άτζαμ είναι μία 4χορδη εκδοχή του <a href="ajam.php">Τζινς Άτζαμ</a>, με το ασυνήθιστο χαρακτηριστικό (κοινό με το <a href="upper_rast.php">Τζινς Άνω Ραστ</a>) το ότι η τονική του είναι η τελευταία βαθμίδα στην διαδοχή αντί να είναι η πρώτη. Στην παρούσα καταγραφή του έχει την νότα <em>γαμμάζ</em> στον φθόγγο Σολ και την τονική στον φθόγγο Ντο. To Τζινς Άνω Άτζαμ είναι το δεύτερο Τζινς στo <a href="../maqam/ajam.php">Μακάμ Άτζαμ</a> και επίσης λαμβάνει χώρο στην 3η βαθμίδα του <a href="../maqam/bayati.php">Μακάμ Μπαϊάτι</a>.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/upper_ajam/zayy_el_hawa.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/jins/upper_ajam/zayy_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ζάι ελ-Χάουα (1970)</b>
                                    <span>Αμπντέλ Χαλίμ Χάφεζ</span>
                                    <span>Μουσική Μπαλίγ Χάμντι</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/upper_ajam/lissa_fakir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Λίσα Φάκερ (1963)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ριάντ αλ-Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/huwwa_sahih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Χούα Σαχέχ ελ-Χάουα Γαλάμπ (1960)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/min_youm_furgak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μαουάλ Μιν Ιόμ Φοργκάκ</b>
                                    <span>Σαμπάχ Φαχρί</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_ajam/nixon.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαράφτ Για Νίξον Μπάμπα (1974)</b>
                                    <span>Φωνή και μουσική Σέιχ Ιμάμ</span>
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