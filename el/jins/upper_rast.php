<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Άνω Ραστ";
$page_description = "Τζινς Άνω Ραστ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζασκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/upper_rast.php";
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
                        <h1>Τζινς Άνω Ραστ</h1>
                        <h3>Μία 4χορδη εκδοχή του <a href="rast.php">Τζινς Ραστ</a> με την τονική στην κορυφή</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/rast.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ραστ</a>
                    </div>

                  
                     <div class="notation" id="notation1">
                        <img src="/note/jins/upper_rast.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="61,84,12" href="#" alt="Φα4♮" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="144,75,13" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="219,67,13" href="#" alt="Λα4" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="297,58,13" href="#" alt="Σι4<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
					  <area shape="circle" coords="378,50,14" href="#" alt="Ντο5" class="playNote" data-frequency="521.48" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="448,42,12" href="#" alt="Ρε5" class="playNote" data-frequency="586.66" data-parent="#notation1">
					 
					  </map>

                    <p>
                        To Τζινς Άνω Ραστ είναι μία 4χορδη εκδοχή του <a href="rast.php">Τζινς Ραστ</a>, με το ασυνήθιστο χαρακτηριστικό (κοινό με το <a href="upper_ajam.php">Τζινς Άνω Άτζαμ</a>) το ότι η τονική του είναι η τελευταία βαθμίδα στην διαδοχή αντί να είναι η πρώτη. Στην παρούσα καταγραφή του έχει την νότα γαμάζ στον φθόγγο Σολ και την τονική στον φθόγγο Ντο. To Τζινς Άνω Ραστ είναι το δεύτερο Τζινς στo <a href="../maqam/rast.php">Μακάμ Ραστ</a> και επίσης λαμβάνει χώρο στην 5η βαθμίδα του <a href="../maqam/jiharkah.php">Μακάμ Τζιχάρκα</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/upper_rast/ya_shadi_al_alhan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/upper_rast/ya_shadi_al_alhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Για Σάντι αλ-Αλχάν</b>
                                    <span>Σαμπάχ Φαχρί</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_rast/atani_zamani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Ατάνι Ζαμάνι</b>
                                    <span>Σαμπάχ Φαχρί</span>
                                    <span>Μουσική Μοχάμαντ Οθμάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_rast/dhabiyun-min-al-turki.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Δάμπιον Μιν αλ-Τούρκι</b>
                                    <span>Άχμαντ Σούκρι</span>
                                    <span>(άγνωστος συνθέτης)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_rast/hann_el_hadid.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Χαν ελ-Χαντίντ (1974)</b>
                                    <span>Ζοζέφ Σακρ</span>
                                    <span>Μουσική Ζιάντ Ραχμπάνι</span>
                                    <span>Από το Μιούζικαλ <strong>Ναζλ ελ-Σουρούρ</strong></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_rast/aruh_li_min.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Αρούχ Λι Μιν (1958)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ριάντ αλ-Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_rast/asamina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ασαμίνα</b>
                                    <span>Φεϊρούζ</span>
                                    <span>Μουσική Φιλίμων Ουάχμπι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_rast/hayrana_leh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Χαϊράνα Λε (1930)</b>
                                    <span>Λέιλα Μουράντ</span>
                                    <span>Μουσική Νταούντ Χόσνι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/upper_rast/min_3azzibak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μιν Αζίμπακ (1931)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
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
