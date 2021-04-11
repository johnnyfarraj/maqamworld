<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Σουντάσι";
$page_description = "Ικά Σουντάσι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Σουντάσι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/sudasi.php";
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
                        <h1>Ικά Σουντάσι 6/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sudasi.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σουντάσι</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/sudasi.png" class="img-fluid">
                    </div>

                    <p>
                        Το Ικά Σουντάσι (του οποίου το όνομα σημαίνει βασισμένο στον αριθμό ”έξι”) είναι ένας πολύ διαδεδομένος ρυθμός για να συνοδεύσει παραδοσιακούς χορούς από το Λίβανο και Παλαιστίνη, όπως το <strong>Ντάμπκε. Μπορεί</strong> να μετατραπεί σε σε 3 συνεχόμενα μέτρα <a href="malfuf.php">Ικά Μαλφούφ</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/sudasi_f1/dal3ona.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/sudasi_f1/dal3ona.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Νταλαούνα</b>
                                    <span>Φεϊρούζ (Λίβανος)</span>
                                    <span>(Παραδοσιακό Λιβανέζικο τραγούδι)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sudasi_f1/ya_mahla_layali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για Μαχλά Λαϊάλι ελ-Χάουα (1963)</b>
                                    <span>Φεϊρούζ (Λίβανος)</span>
                                    <span>Μουσική και στίχοι από τους αδερφούς Ραχμπάνι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sudasi_f1/ya_7ajal_sannin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για Χάτζαλ Σαννίν (1965)</b>
                                    <span>Φεϊρούζ (Λίβανος)</span>
                                    <span>Μουσική και στίχοι από τους αδερφούς Ραχμπάνι</span>
                                    <span>Από την ταινία <strong>Μπαϊά ελ-Χαουάτεμ</strong></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/sudasi.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Σουντάσι 6/4</b>
                                    <span>Επίδειξη στην τάμπλα από τον Φαϊζάλ Ζεϊντάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Η δεύτερη φόρμα του Ικά Σουντάσι</h3>
                    </div>
                    <div class="notation">
                        <img src="/note/iqaa/sudasi-f2.png" class="img-fluid">
                    </div>
					<br>
                    <p>Μια εναλλακτική μορφή του Ικά Σουντάσι ξεκινά με 3 διαδοχικούς <em>ντουμ</em>, και χρησιμοποιείται συνήθως σε τραγούδια <em>Ντάμπκε</em> του Λιβάνου.
					</p>
					<br>

                    <div class="track" data-song="/audio/iqaa/sudasi_f2/ya_trab_3ayntura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για τραμπ Αϊντούρα</b>
                                    <span>Φεϊρούζ (Λίβανος)</span>
                                    <span>Μουσική και στίχοι από τους αδερφούς Ραχμπάνι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sudasi_f2/ya_b3albak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Για Μπαάλβακ</b>
                                    <span>Μουσική και στίχοι από Tania Saleh</span>
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