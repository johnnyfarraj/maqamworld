<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Άτζαμ Μουράσα";
$page_description = "Τζινς Άτζαμ Μουράσα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζασκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/ajam_murassaa.php";
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
                        <h1>Τζινς Άτζαμ Μουράσα</h1>
                        <h3>Μία παραλλαγή του <a href="ajam.php">Τζινς Άτζαμ</a> με οξυμένη την 4η βαθμίδα</sup></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ajam_murassaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Άτζαμ Μουράσα</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/ajam_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="53,86,12" href="#" alt="Μι4" class="playNote" data-frequency="330" data-parent="#notation1">
					  <area shape="circle" coords="136,78,14" href="#" alt="Φα4" class="playNote" data-frequency="347.65"  data-parent="#notation1">
					  <area shape="circle" coords="211,69,13" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="289,61,13" href="#" alt="Λα4" class="playNote" data-frequency="440" data-parent="#notation1"><!-- TODO should that be lowered a bit to match 'Ajam's 3rd? -->
					  <area shape="circle" coords="365,53,13" href="#" alt="Σι4♮" class="playNote" data-frequency="495" data-parent="#notation1">
					  <area shape="circle" coords="444,45,14" href="#" alt="Ντο5" class="playNote" data-frequency="521.5" data-parent="#notation1">
					  <area shape="circle" coords="518,37,12" href="#" alt="Ρε5" class="playNote" data-frequency="586.66" data-parent="#notation1">
					</map>

                    <p>
                        To Τζινς Άτζαμ Μουράσα είναι ένα 5χορδο. Στην παρούσα καταγραφή του έχει την τονική στον φθόγγο Φα και την νότα <em>γάμμαζ</em> στον φθόγγο Σολ. To Τζινς Άτζαμ Μουράσα δεν είναι μέρος κανενός μακάμ και συνήθως συμβαίνει ως μετατροπία από <a href="ajam.php">Τζινς Άτζαμ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/ajam_murassaa/kallili.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/ajam_murassaa/kallili.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Καλίλι Για Σούχουμπου</b>
                                    <span>Σαμπάχ Φαχρί</span>
                                    <span>Μουσική Μοχάμαντ Οθμάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/bein_shattein_w_mayya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μπεν Σατέν ου Μάια</b>
                                    <span>Muhammad Qandil</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/jins/ajam_murassaa/ya_ma3shar_al_nas.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μαουάλ Για Μάσαρ αλ-Νας</b>
                                    <span>Μοχάμαντ Χαΐρι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/3umri_fi_hubbihi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Κασίντα Ούμρι Φι Χόμπιχι Ινκάντα</b>
                                    <span>Μοχάμαντ Χαΐρι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/abdu_daghir_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τακσίμι Κανονάκι σε Μακάμ Άτζαμ</b>
                                    <span>Αμπντού Ντάγερ</span>
                                    <span><img src="/img/cd.png"> Al-Gibali</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/nibtidi_mnein_el_hikaya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Νιμπτίντι Μνέιν ελ-Χικάια (1975)</b>
                                    <span>Αμπντέλ Χαλίμ Χάφεζ</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/qariat_al_fingan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Κάριατ αλ-Φιντζάν (1976)</b>
                                    <span>Αμπντέλ Χαλίμ Χάφεζ</span>
                                    <span>Μουσική Μοχάμαντ αλ-Μούγκι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/sabbahti_min_3ishqak_abki.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντάουρ Σαμπάχτι Μιν Ίσκι Άμπκι</b>
                                    <span>Αμπντέλ Ηάι Χίλμι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/m_qadri_dalal_oud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τακσίμι Ούτι</b>
                                    <span>Μοχάμαντ Κάντρι Νταλάλ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam_murassaa/layali_zaman.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Λαϊάλι Ζαμάν</b>
                                    <span>Οργανική Σύνθεση Αμπντού Ντάγερ</span>
                                    <span>Ηχογραφημένο με την ορχήστρα του στην Όπερα του Καΐρου</span>
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