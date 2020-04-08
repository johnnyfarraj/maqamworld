<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Αϊγιούμπ";
$page_description = "Ικά Αϊγιούμπ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Αϊγιούμπ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/ayyub.php";
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
                        <h1>Ικά Αϊγιούμπ 2/4</h1>
                        <h3>(επίσης λέγεται και <strong>Ζαρ</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ayyub.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Αϊγιούμπ</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/ayyub.png" class="img-fluid">
                    </div>

                    <p>
                        Το Ικά Αϊούμπ (επίσης προφέρεται και Αγιούμπ) πρωτίστως χρησιμοποιείται στην Σούφικη μουσική και στον χορό της κοιλιάς (<em>Ρακς Σάρκι</em> - Belly Dance). To Αϊούμπ λέγεται μερικές φορές και Ζαρ στην Αίγυπτο, μετά από παραδοσιακή θεραπευτική τελετουργία οδηγούμενη από γυναίκες που παίζουν μεταφερόμενα στα χέρια κρουστά. Η αίσθηση του Αϊούμπ είναι γρήγορη, σύντομη και περιοδική.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/ayyub/atani_zamani.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/ayyub/atani_zamani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Ατάνι Ζαμάνι</b>
                                    <span>Νουρεντίν Χουρσίντ και οι Δερβίσιδες της Δαμασκού</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ayyub/ya_man_nasha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Για Μαν Νάσα</b>
                                    <span>Ρίμα Χσέις</span>
                                    <span>Ορχήστρα του Σαλίμ Σάχαμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ayyub/tajallat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τατζαλάτ Ουα-ντζάλατ Λάιλαν</b>
                                    <span>Σέιχ Χάμζα Σακούρ</span>
                                    <span>Σύνολο αλ-Κίντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/ayyub.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Αϊγιούμπ 2/4</b>
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