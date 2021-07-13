<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Τζουρτζίνα";
$page_description = "Ικά Τζουρτζίνα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Τζουρτζίνα";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/jurjina.php";
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
                        <h1>Ικά Τζουρτζίνα 10/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/jurjina.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Τζουρτζίνα</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/jurjina.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Το Ικά Τζουρτζίνα είναι ένας ευρέως χρησιμοποιημένος ρυθμός στο Ιράκ και Ιράν, όπως επίσης στο Τουρκικό και Κουρδικό ρεπερτόριο, στην κατηγορία της παραδοσιακής και κλασσικής μουσικής μαζί. Παρόλο ο ρυθμός αυτός δεν χρησιμοποιείται συχνά στο ρεπερτόριο της μουσικής της Εγγύς Ανατολής, χρησιμοποιείται μερικές φορές στις συνθέσεις Μααλούφ της Τυνησίας.              
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/jurjina/yammul_3uyun.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/jurjina/yammul_3uyun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Για Ουμ ελ-Οϊούν ελ-Σουντ</b>
                                    <span>Νάζεμ αλ-Γαζάλι</span>
                                    <span>Μουσική Νάζεμ Ναϊμ</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/jurjina/ya_hulu_al_lama.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Για Χούλου αλ-Λάμα</b>
                                    <span>Λούφτι Μπουσνάκ (Τυνησία)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/jurjina/maluf_adir_rahati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Άντιρ Ραχάτι</b>
                                    <span>Τυνησιακό Μααλούφ</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/jurjina/maluf_ma_kuntu_adri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μα Κούντου Άντρι</b>
                                    <span>Τυνησιακό Μααλούφ</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/jurjina.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Τζουρτζίνα 10/8</b>
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