<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Αουίς";
$page_description = "Ικά Αουίς";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Αουίς";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/awis.php";
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
                        <h1>Ικά Αουίς 11/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/awis.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Αουίς</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/awis.png" class="img-fluid">
                    </div>

                    <p>
                        Το Ικά Αουίς περισσότερο χρησιμοποιείται στο είδος των <a href="../form/vocal_comp.php#muwashah">Μουασαχάτ</a>. Κάποια κομμάτια σε ρυθμό Αουίς αρχίζουν από τον 3ο χτύπο (το πρώτο τακ), όπως στο παράδειγμα <strong>Μουάσαχ Μουνιάτι Μαν Ρούμτου Κούρμπουχου</strong>. Ενώ το <strong>Μουάσαχ Χίμπι Νταάνι Λιλ-Ουισάλ</strong> αρχίζει με την μελωδία στο 11ο χτύπο (το τελευταίο τακ).
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/awis/hibbi_da3ani1.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/awis/hibbi_da3ani1.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Χίμπι Νταάνι Λιλ-Ουισάλ</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
                                    <span><img src="/img/cd.png"> Νάγαμ αλ-Αμς Vol. 2 - (Μπαϊάτι Σούρι)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/hibbi_da3ani2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Χίμπι Νταάνι Λιλ-Ουισάλ</b>
                                    <span>Μουάσαχ Τιφ Για Ντούρι Μπελ Κανάνι</span>
                                    <span>Μαέστρος: Άιντα Σαλχούμπ Ζιάντε</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah and Song series</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/munyati_man_rumtu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μουνιάτι Μαν Ρούμτου Κούρμπουχου</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span>Μουσική Όμαρ αλ-Μπατς</span>
                                    <span><img src="/img/cd.png"> Νάγαμ αλ-Αμς Vol. 9 - (Ραστ)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/munyati_sidul_milah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μουνιάτι Σίντου-λ-Μιλάχ</b>
                                    <span>(παιγμένο σε 11/4)</span>
                                    <span>Ο ψάλτης Μαχμούντ Φάρις</span>
                                    <span>Μουσική Όμαρ αλ-Μπατς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/ukhfi_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Ούχφι ελ-Χάουα (2019)</b>
                                    <span>Μουσική Δρ. Χάιαφ Γιασίν</span>
                                    <span>Ποίημα του Όμαρ Εμπν αλ-Φάρεντ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/awis.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Αουίς 11/8</b>
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