<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Θουράια (Ακσάκ Τούρκι)";
$page_description = "Ικά Θουράια (Ακσάκ Τούρκι)";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Θουράια, Ικά Ακσάκ Τούρκι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/thurayya.php";
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
                        <h1>Ικά Θουράια 5/8</h1>
                        <h3>(επίσης λέγεται και <strong>Ακσάκ Τούρκι</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/thurayya.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Θουράια</a>
                    </div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/aqsaq_turki.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ακσάκ Τούρκι</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/thurayya.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Το Ικά Θουράια διαφορτετικά λέγεται και <strong>Ακσάκ Τούρκι</strong>(τουρκικό Ακσάκ). Eίναι ένας πολύ σπάνιος ρυθμός, περισσότερο χρησιμοιείται στο φωνητικό είδος <a href="../form/vocal_comp.php#muwashah">Μουάσαχ</a>.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/thurayya/fil_roud_ana.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/thurayya/fil_roud_ana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Φιλ-Ροντ Άνα Σούφετ ιλ-Τζαμίλ</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span>Μουσική Όμαρ αλ-Μπατς</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/thurayya.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Θουράια 5/8</b>
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