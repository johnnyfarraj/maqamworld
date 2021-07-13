<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Μουσταάρ";
$page_description = "Τζινς Μουσταάρ";
$page_keywords = "Μακάμ, Τζινς Μουσταάρ, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζασκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/mustaar.php";
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
                        <h1>Τζινς Μουσταάρ</h1>
                        <h3>Μία παραλλαγή <a href="sikah.php">Τζινς Σίκα</a> με οξυμένη τη 2η βαθμίδα</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/mustaar.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μουσταάρ</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/mustaar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="66,91,12" href="#" alt="Ρε4♯" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="147,84,14" href="#" alt="Μι4<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="233,76,13" href="#" alt="Φα4♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="307,68,14" href="#" alt="Σολ4" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="383,59,13" href="#" alt="Λα4♮" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="449,52,13" href="#" alt="Σι4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">

					</map>
                    <p>To Τζινς Μουσταάρ είναι ένα 3χορδο. Στην παρούσα καταγραφή του έχει την τονική στον φθόγγο Μι<i class="icon-halfflat"></i> (μισή ύφεση - χαμηλωμένο κατα το ήμισι), και την νότα γαμάζ στο Σολ. To Τζινς Μουσταάρ είναι το πρώτο Τζινς στο <a href="../maqam/mustaar.php">Μακάμ Μουσταάρ</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/mustaar/raqq_il_habib.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/mustaar/raqq_il_habib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ρακ ελ-Χαμπίμπ (1944)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Μοχάμαντ αλ-Κασάμπζι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/sahran-li-wahdi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαχράν λι-Ουάχντι (1950)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ριάντ αλ-Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/aruh_li_min.mp3">
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

                    <div class="track" data-song="/audio/jins/mustaar/habbeit_wala_banshi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Χαμπέιτ Ουάλα Μπάνσι Αλάια (1930)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Μοχάμαντ αλ-Κασάμπζι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/huwwa_el_hobb_le3ba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Χούα ελ-Χομπ Λίμπα</b>
                                    <span>Αζίζα Τζαλάλ</span>
                                    <span>Μουσική Μοχάμαντ αλ-Μούγκι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/mawwal_qadi_el_gharam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μαουάλ Κάντι αλ-Γαράμ</b>
                                    <span>Αμπντέλ Ηάι Χίλμι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/oud_taqsim_sikah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τακσίμ Ούτι σε Μακάμ Σίκα</b>
                                    <span>Ριάντ αλ-Σουνμπάτι</span>
                                    <span><img src="/img/cd.png"> Takaseem</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/qanun_taqsim_sikah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τακσίμ Κανονάκι σε Μακάμ Σίκα</b>
                                    <span>Ιμάντ Μούλκι</span>
                                    <span>Μουσικό Σύνολο αλ-Τουράθ</span>
                                    <span><img src="/img/cd.png"> Gardens of Jasmin - Maqam Huzam</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mustaar/qasida_qul_lil_maliha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Κασίντα Κουλ Λιλ-Μαλίχα</b>
                                    <span>Σαμπάχ Φαχρί</span>
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