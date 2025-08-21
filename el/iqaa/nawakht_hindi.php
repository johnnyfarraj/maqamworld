<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Ναουάχτ Χίντι";
$page_description = "Ικά Ναουάχτ Χίντι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Ναουάχτ Χίντι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/nawakht_hindi.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>Ναουάχτ Χίντι 16/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/nawakht_hindi.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ναουάχτ Χίντι</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/nawakht_hindi.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Το Ικά Ναουάχτ Χίντι είναι ένας πολύ διαδεδομένος ρυθμός στο ρεπερτόριο των <a href="../form/vocal_comp.php#muwashah">Μουασαχάτ</a>, και τείνει να παίζεται σε ήπια ταχύτητα.
                    </p>
                    
                    <div class="track" data-song="/audio/iqaa/nawakht_hindi/ya_3uyunan_ramiyat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Για Αϊούναν Ραμιάτ</b>
                                    <span>Σάμπρι αλ-Μουντάλαλ (Συρία)</span>
                                    <span>Μουσική Όμαρ αλ-Μπατς</span>
                                </div>
                            </label>
                        </div>
                    </div>
                
                    <div class="track" data-song="/audio/iqaa/nawakht_hindi/ya_hamam_al_ayk.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Ya Hamam al-Ayk</b>
                                    <span>Σύνολο αλ-Μπαχά, Χαλέπι</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/nawakht_hindi/ya_mukhjil_al_aqmar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Για Μούχζιλου αλ-Ακμάρ</b>
                                    <span>Ορχήστρα και Χορωδία Ραδιοφωνίας Τυνησίας</span>
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