<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Κατακούφτι";
$page_description = "Ικά Κατακούφτι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Κατακούφτι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/katakufti.php";
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
                        <h1>Ικά Κατακούφτι 8/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/katakufti.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Κατακούφτι</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/katakufti.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Το Ικά Κατακούφτι είναι ένας σπάνιος ρυθμός που χρησιμοιείται στο φωνητικό είδος <a href="../form/vocal_comp.php#muwashah">Μουάσαχ</a>.
                    </p>
                    <p>
                        Μία διαφορετική εκδοχή αυτού του ρυθμού αντικαθιστά την παύση στο 5ο χτύπο με ένα <strong>Ντουμ</strong>, δημιουργώντας 2 συνεχόμενα <strong>Ντουμ</strong> (παρόμοια με τη 2η εκδοχή του <a href="aqsaq.php">Ικά Ακσάκ</a>).
                    </p>
                    <p>
                        Η ονομασία <strong>Κατακούφτι</strong> είναι κάποιες φορές ως ένα διαφορετικό όνομα του <a href="nawari.php">Ικά Νάουαρι</a> επειδή ακούγεται όπως όταν το Κατακούφτι παίζεται σε 4/4 και αρχίζει από το τελευταίο χτύπο του μέτρου που είναι <strong>Τακ</strong>.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/katakufti/khadduka_al_naddi.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/katakufti/khadduka_al_naddi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Χάντουκα αλ-Νάντι</b>
                                    <span>Χάλεντ αλ-Χάφεζ (Συρία)</span>
                                    <span>Μουσική Όμαρ αλ-Μπατς</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/katakufti/ah_min_nari_jafahum.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Αχ Μιν Νάρι Τζαφάχουμ</b>
                                    <span>Σύνολο Νουρ αλ-Σάρκ</span>
                                    <span>Μουσική Σέιχ Αλί αλ-Νταρουίς</span>
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