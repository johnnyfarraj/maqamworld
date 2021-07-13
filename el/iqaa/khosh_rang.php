<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Χος Ρανγκ";
$page_description = "Ικά Χος Ρανγκ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Χος Ρανγκ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/khosh_rang.php";
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
                        <h1>Ικά Χος Ρανγκ 17/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/khosh_rang.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Χος Ρανγκ</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/khosh_rang.png" class="img-fluid">
                    </div>
                    
                    <p>Το Ικά Χος Ρανγκ είναι ένας πολύ σπάνιος ρυθμός που χρησιμοποιείται σε ένα μόνο γνωστό <a href="../form/vocal_comp.php#muwashah">Μουάσαχ</a> και σε λίγες μοντέρνες συνθέσεις.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/khosh_rang/salla_fina_kindi.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/khosh_rang/salla_fina_kindi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Σάλα Φίνα αλ-Λάχδα Χιντία</b>
                                    <span>Μουσικό Σύνολο αλ-Κίντι</span>
                                    <span><img src="/img/cd.png"> Les Croisades Sous Le Regard De l'Orient - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/khosh_rang/salla_fina_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Σάλα Φίνα αλ-Λάχδα Χιντία</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span><img src="/img/cd.png"> Νάγαμ αλ-Αμς Vol. 08 - (Χιτζάζ)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/khosh_rang/tareq_abdallah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Xoς Ρανκ (Ούτι και Ρεκ)</b>
                                    <span>Τάρεκ Αμπντάλα, Άντελ Σαμς Ελ-Ντιν</span>
                                    <span><img src="/img/cd.png"> Wasla (Suites musicales égyptiennes)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/khosh_rang.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Χος Ρανγκ 17/8</b>
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