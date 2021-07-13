<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Μουχάτζαρ";
$page_description = "Ικά Μουχάτζαρ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Μουχάτζαρ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/muhajjar.php";
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
                        <h1>Ικά Μουχάτζαρ 14/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/muhajjar.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μουχάτζαρ</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/muhajjar.png" class="img-fluid">
                    </div>

                    <p>
                        Το Ικά Μουχάτζαρ είναι πολύ δημοφιλής ρυθμός στο ρεπερτόριο <a href="../form/vocal_comp.php#muwashah">Μουάσαχ</a>. Είναι αμέσως αναγνωρίσιμο από τα 3 συνεχόμενα ντουμ που ανοίγουν το μέτρο. Η λέξη "Μουχάτζαρ" σημαίνει στα Αραβικά “πέτρινο”.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/muhajjar/badat_min_al_khidri.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/muhajjar/badat_min_al_khidri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Μπάντατ Μιν αλ-Χίντρι</b>
                                    <span>Μουσικό Σύνολο αλ-Κίντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/muhajjar/hajarni_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Ηατζάρνι Χαμπίμπι</b>
                                    <span>Μουσικό Σύνολο αλ-Τουράθ (Συρία)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/muhajjar/hal_3ala_al_astar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Χαλ Άλα αλ-Αστάρ</b>
                                    <span>Μουσικό Σύνολο Μόρκος (Λίβανος)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/muhajjar/munyati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μουνιάτι Άζζα Ιστιμπάρι</b>
                                    <span>Μουάσαχ Τιφ Για Ντούρι Μπελ Κανάνι</span>
                                    <span>Μαέστρος: Άιντα Σαλχούμπ Ζιάντε</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
                                    <span><img src="/img/cd.png"> Orientalia: Muwashah and Song series</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/muhajjar/ya_tura_ba3da.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Για Τούρα Μπάαντα αλ-Μπεάντι</b>
                                    <span>Μουσικό Σύνολο αλ-Κίντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/muhajjar.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Μουχάτζαρ 14/4</b>
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