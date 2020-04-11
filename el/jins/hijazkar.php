<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τζινς Χιτζαζκά";
$page_description = "Τζινς Χιτζαζκά";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Άθαρ Κουρντ, Άνω Άτζαμ, Άνω Ραστ, Άτζαμ, Άτζαμ Μουράσα, Κουρντ, Λάμι, Μουχάλεφ Σάρκι, Μπαϊάτι, Ναχαουάντ, Ναχαουάντ Μουράσα, Νικρίζ, Ραστ, Σαζκάρ, Σάμπα, Σάμπα Ζάμζαμ, Σάμπα Νταλανσίν, Σίκα Μπάλαντι, Τζιχάρκα, Χιτζάζ, Χιτζάζ Μουράσα, Χιτζασκάρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins/hijazkar.php";
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
                        <h1>Τζινς Χιτζαζκάρ</h1>
                        <h3>(ακαθόριστο μέγεθος)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Χιτζασκάρ</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/jins/hijazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="70,68,13" href="#" alt="Λα4♭" class="playNote" data-frequency="420" data-parent="#notation1">
					  <area shape="circle" coords="149,60,13" href="#" alt="Σι4♮" class="playNote" data-frequency="493.33" data-parent="#notation1"><!-- vartiable -->
					  <area shape="circle" coords="227,51,14" href="#" alt="Ντο5" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="303,42,13" href="#" alt="Ρε5♭" class="playNote" data-frequency="554" data-parent="#notation1"><!-- Hijaz 2 tuned up from 548 -->
					  <area shape="circle" coords="380,35,13" href="#" alt="Μι5♮" class="playNote" data-frequency="656" data-parent="#notation1"><!-- Hijaz 3 tuned down from 660 -->
					  <area shape="circle" coords="457,26,13" href="#" alt="Φα5" class="playNote" data-frequency="695.3" data-parent="#notation1">

					</map>
                    <p>To Τζινς Χιτζασκάρ δεν έχει νότα <em>γαμμάζ</em>, και ως εκ τούτου έχει απροσδιόριστο μέγεθος. Η μελωδία του επικεντρώνεται γύρω από την τονική του, στην παρούσα καταγραφή του πάνω στον φθόγγο Ντο. To τζινς Χιτζασκάρ προκύπτει στην οκτάβα του <a href="../maqam/hijazkar.php">Μακάμ Χιτζασκάρ</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/hijazkar/ya_halawit_el_dunya.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/hijazkar/ya_halawit_el_dunya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Για Χαλάουτ ελ-Ντούνια</b>
                                    <span>Σάιεντ Μακάουι</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/badru_timmin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μπάντρου Τίμιν Χάζα Χουσνάν</b>
                                    <span>Γάντα Σμπίιρ</span>
                                    <span><img src="/img/cd.png"> Al Muwashahat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/hibbi_zurni_ma_tayassar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Χίμπι Ζούρνι Μα Ταϊάσαρ</b>
                                    <span>Κάρεμ Μαχμούντ</span>
                                    <span>Μουσική Νταρουίς αλ-Χαρίρι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/ramani_bi_sahmi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Ραμάνι Μπι Σάχμι Χαουάχου</b>
                                    <span>Σαμπάχ Φαχρί</span>
                                    <span>Μουσική Νταούντ Χόσνι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/ya_manta_wahishni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντάουρ Για Μάντα Ουαχίσνι</b>
                                    <span>Σαμπάχ Φαχρί</span>
                                    <span>Μουσική Μοχάμαντ Οθμάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/ya_nas_ana_mutti.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ντάουρ Για Νας Άνα Μούτετ Φι Χόμπι</b>
                                    <span>Γάντα Σμπίιρ</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijazkar/zahr_el_laymun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ζάχρ Ελ-Λαϊμούν (1997)</b>
                                    <span>Σόνια Μμπάρεκ</span>
                                    <span><img src="/img/cd.png"> Tawchih</span>
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