<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Ουαρσάν Άραμπι";
$page_description = "Ικά Ουαρσάν Άραμπι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Ουαρσάν Άραμπι ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/warshan_arabi.php";
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
                        <h1>Ικά Ουαρσάν Άραμπι  32/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/warshan_arabi.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ουαρσάν Άραμπι</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/warshan_arabi.png" class="img-fluid">
                    </div>

                    <p>
                        Το Ικά Ουαρσάν Άραμπι ("Άραμπι" σημαίνει Αραβικός) είναι ένας σπάνιος ρυθμός περισσότερο χρησιμοποιημένος στο φωνητικό είδος των <a href="../form/vocal_comp.php#muwashah">Μουασαχάτ</a>. Εκτείνεται σε 8 μέτρα 4/4, ανεβάζοντας τον αριθμό των παλμών σε 32/4.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/warshan_arabi/qatili_bi_ghunjil_alkindi.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/warshan_arabi/qatili_bi_ghunjil_alkindi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Κάτιλι μπι Γούνζι αλ-Κάχαλι</b>
                                    <span>Μουσικό Σύνολο αλ-Κίντι</span>
                                    <span><img src="/img/cd.png"> Les Croisades Sous Le Regard De l'Orient Part I - Maqam Bayati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/iqaa/warshan_arabi/ah_min_jour_el_ghawani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Άχι Μιν Ζούρι αλ-Γαουάνι</b>
                                    <span>Μουσικό Σύνολο Αμπντέλ Χαλίμ Νουέϊρα</span>
                                    <span>Μουσική Άχμαντ Αμπού Χαλίλ αλ-Καμπάνι</span>
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