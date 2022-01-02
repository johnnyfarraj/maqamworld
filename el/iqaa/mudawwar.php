<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Μουντάουαρ";
$page_description = "Ικά Μουντάουαρ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Μουντάουαρ Μάσρι, Ικά Μουντάουαρ Σάμι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/mudawwar.php";
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
                        <h1>Ικά Μουντάουαρ Μάσρι 12/4</h1>
                        <h1>Ικά Μουντάουαρ Σάμι 10/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/mudawwar.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μουντάουαρ</a>
                    </div>

                    <p>
                        Το Ικά Μουντάουαρ είναι ένας πολύ διαδεδομένος ρυθμός στο <a href="../form/vocal_comp.php#muwashah">Μουάσαχ</a> ρεπερτόριο. Η λέξη "Μουντάουαρ" στα Αραβικά σημαίνει γύρος/ κυκλικός.
                    </p>
                    <p>
                        Χρησιμοποιούνται πολλές φόρμες του ρυθμού Μουντάουαρ, μεταξύ των οποίων το <strong>Μουντάουαρ Μάσρι</strong> (Αιγυπτιακός) σε 12/4 και <strong>Μουντάουαρ Σάμι</strong> (Δαμασκηνός/παν-Συριακός) σε 10/4.
                    </p>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Ικά Μουντάουαρ Μάσρι 12/4</h3>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/mudawwar_masri.png" class="img-fluid">
                    </div>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/mudawwar_12_4/adhkuru_al_hubba.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/mudawwar_12_4/adhkuru_al_hubba.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Άδκουρου αλ-Χίμπα</b>
                                    <span>Μουσικό Σύνολο Αμπντέλ Χαλίμ Νουέϊρα</span>
                                    <span>Μουσική Νταούντ Χόσνι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/mudawwar_12_4/fika_kullu_bayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Φίκα Κούλου Μα Άρα Χάσαν</b>
                                    <span>Σύνθεση σε <a href="../maqam/bayati.php">Μακάμ Μπαϊάτι</a></span>
                                    <span>Μουσικό Σύνολο Αμπντέλ Χαλίμ Νουέϊρα</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/mudawwar_masri.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Μουντάουαρ Μάσρι 12/4</b>
                                    <span>Επίδειξη στην τάμπλα από τον Φαϊζάλ Ζεϊντάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Ικά Μουντάουαρ Σάμι 10/4</h3>
                    </div>
                    <br>

                    <div class="notation">
                        <img src="/note/iqaa/mudawwar_shami.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/mudawwar_10_4/fika_kullu_hijaz_sarmini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Φίκα Κούλου Μα Άρα Χάσαν</b>
                                    <span>Σύνθεση σε <a href="../maqam/hijaz.php">Μακάμ Χιτζάζ</a></span>
                                    <span>Όμαρ αλ-Σαρμίνι</span>
                                    <span>Μουσικό Σύνολο αλ-Κίντι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/mudawwar_10_4/fika_kullu_hijaz_sabah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Φίκα Κούλου Μα Άρα Χάσαν</b>
                                    <span>Σύνθεση σε <a href="../maqam/hijaz.php">Μακάμ Χιτζάζ</a></span>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
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