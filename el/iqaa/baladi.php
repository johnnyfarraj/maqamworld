<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Μπάλαντι";
$page_description = "Ικά Μπάλαντι (Μασμούντι Σαγίρ)";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Μπάλαντι, Μασμούντι Σαγίρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/baladi.php";
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
                        <h1>Ικά Μπάλαντι 4/4</h1>
                        <h3>(επίσης λέγεται και <strong>Μασμούντι Σαγίρ</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μπάλαντι</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/baladi.png" class="img-fluid">
                    </div>

                    <p>
                        Το Ικά Μπάλαντι είναι ένας πολύ κοινός ρυθμός στο φωνητικό ρεπερτόριο της Μέσης Ανατολής. Επίσης λέγεται και <strong>Μασμούντι Σαγίρ</strong>, “Σαγίρ” στα Αραβικά σημαίνει “μικρό”, έτσι ώστε να διακρίνεται από το <a href="masmudi_kabir.php">Μασμούντι Καμπίρ</a>, το οποίο ολοκληρώνεται σε δύο μέτρα 4/4 αντί για ένα. Το Μπάλαντι μετατρέπεται συχνά σε <a href="maqsum.php">Μακσούμ</a> και αντιστρόφως, όπως και σε <a href="malfuf.php">Μαλφούφ</a> (χρησιμοποιώντας 2 μέτρα Μαλφούφ μέσα σε ένα μέτρο μπάλαντι).
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/baladi/aziza.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/baladi/aziza.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Αζίζα (1955)</b>
                                    <span>Οργανική Σύνθεση</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                    <span>(από την ταινία <strong>Αζίζα</strong>)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/baladi/halummu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>HΧαλούμου Λι</b>
                                    <span>Χάσαν αλ-Χαφφάρ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/baladi/malik_ya_hilwa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Καντ Μάλεκ Για Χέλουα</b>
                                    <span>Μοχάμαντ Χαΐρι (Συρία)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/baladi.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Μπάλαντι 4/4</b>
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