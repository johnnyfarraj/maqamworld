<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Φαλάχι";
$page_description = "Ικά Φαλάχι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Φαλάχι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/fallahi.php";
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
                        <h1>Ικά Φαλάχι 2/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/fallahi.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Φαλάχι</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/fallahi.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Το Ικά Φαλάχι είναι ένας γρήγορος Αιγυπτιακός ρυθμός για παραδοσιακή μουσική. Παρόλο που θα μπορούσε να φέρνει σε <a href="maqsum.php">Μακσούμ</a> παιγμένο στην διπλάσια ταχύτητα, το Φαλάχι έχει μία πολύ διαφορετική αίσθηση καθώς ρέει πολύ απαλά χωρίς μεγάλες αντιθέσεις (σε τονισμούς) μεταξύ των <strong>Ντουμ</strong> και <strong>Τακ</strong> χτυπημάτων.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/fallahi/el_binti_beida.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/fallahi/el_binti_beida.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>ιλ-Μπέντι Μπέιντα</b>
                                    <span>Φωνή και Μουσική Μέτκαλ Κανάουι</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/fallahi/ahom_ahom.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Χίζ Για Χομπ</b>
                                    <span>Φωνή Άχμαντ Ανταουία</span>
                                    <span>Μουσική Χασάν Αμπού ελ-Σοούντ</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/fallahi/salametha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαλαμέτχα Ούμου Χάσαν </b>
                                    <span>Φωνή Άχμαντ Ανταουία</span>
                                    <span>Μουσική Φαρούκ Σαλάμα</span>
                                </div>
                            </label>
                        </div>
                    </div>
                
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/fallahi.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Φαλάχι 2/4</b>
                                    <span>Επίδειξη στην τάμπλα από τον Φαϊζάλ Ζεϊντάν</span>
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