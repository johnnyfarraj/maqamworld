<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Νάουαρι";
$page_description = "Ικά Νάουαρι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Νάουαρι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/nawari.php";
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
                        <h1>Ικά Νάουαρι 4/4</h1>
                        <h3>(επίσης λέγεται και <strong>Κατακούφτι</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nawari.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Νάουαρι</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/nawari.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Το Ικά Νάουαρι είναι μία παραλλαγή του ρυθμού <a href="saidi.php">Ικά Σαΐντι</a> και <a href="baladi.php">Μπάλαντι</a>, πρωταρχικά χρησιμοποιημένος στην Λεβαντίνικη (Χώρες του Λεβάντε) παραδοσιακή μουσική και στον ομαδικό χορό Ντέμπκε.
                    </p>
                    
                    <p>
                        Το Ικά Νάουαρι συχνά  λέγεται και <strong>Κατακούφτι</strong> από τους κρουστούς, παρόλο που το πραγματικό <a href="katakufti.php">Ικά Κατακούφτι</a> έχει διαφορετικό αριθμό χτύπων στο μέτρο. Ο λόγος ύπαρξης διαφορετικού ονόματος είναι επειδή το <a href="katakufti.php">Ικά Κατακούφτι</a> ακούγεται ακριβώς όπως το Νάουαρι όταν αρχίζει από το τελευταίο χτύπο του μέτρου που είναι <strong>Τακ</strong>.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/nawari/ya_3ein_mulayyitein.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/nawari/ya_3ein_mulayyitein.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Για Αΐν Μουλαϊτέν</b>
                                    <span>Σαμίρα Ταουφίκ</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/nawari/dal3ona.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Νταλαούνα (παραδοσιακό)</b>
                                    <span>(ερμηνευτής άγνωστος)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/nawari/el_funun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Έναρξη της Έκστασης</b>
                                    <span>Σύνολο Ελ-Φανούν</span>
                                    <span><img src="/img/cd.png"> Zaghareed: Music From The Palestinian Holy Land</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/nawari.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Νάουαρι 4/4</b>
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