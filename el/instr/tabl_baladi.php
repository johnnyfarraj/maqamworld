<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Το Ταμπλ Μπάλαντι (Νταούλι)";
$page_description = "Το Ταμπλ Μπάλαντι (Νταούλι)";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Κρουστά, Το Ρεκ, Η Τάμπλα, Το Ταμπλ Μπάλαντι, Το Νταφ, Το Αιγυπτιακό Μάζχαρ, Το Κάτεμ, Τα Σαγκάτ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "el/instr/tabl_baladi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Όργανα</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Το Ταμπλ Μπάλαντι (Νταούλι)</h1>
                        <h3>Μεγάλο Τύμπανο με δέρμα και στις δύο πλευρές</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Όργανα</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabl_baladi.jpg" alt="Tabl Μπάλαντι">
                        <span>Tάμπλ Μπάλαντι με δέρμα κατσίκας. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/tabl_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ταμπλ Μπάλαντι</a>
                    </div>

                    <p>
                        Το Ταμπλ Μπάλαντι (Νταούλι) είναι ένα μεγάλο τύμπανο με ξύλινο πλαίσιο και βαρύ δέρμα και στις δύο πλευρές. Κρεμιέται με μία ζώνη γύρω από τον ώμο του οργανοπαίχτη και παίζεται με δύο μπακέτες. Η χοντρή μπακέτα είναι για το χτύπημα “dum” από το βασικό χέρι, και η λεπτή για το χτύπημα “tak” από το άλλο χέρι.
                    </p>
                    <p>
                        Το Ταμπλ Μπάλαντι είναι ιδανική για εξωτερικούς χώρους, λ.χ. στα χωριά (“<em>μπάλαντι</em>” σημαίνει ντόπιο, εγχώριο, από το χωριό) και μπορεί να παρέχει τον παλμό για ομαδικά χορευτικά σύνολα όπως το “<em>Ντέπκε</em>” πλάι σε εξίσου δυνατά όργανα όπως το <em>Μιζμάρ</em>. Το Ταμπλ Μπάλαντι δεν παίζει πολύ <a href="../iqaa.php">περίπλοκους ρυθμούς</a> ή με διανθίσματα και είναι ιδανική αργούς ρυθμούς 4/4 όπως <a href="../iqaa/baladi.php">Ικά Μπάλαντι</a>, <a href="../iqaa/saidi.php">Ικά Σαΐντι</a> και ιδίως <a href="../iqaa/nawari.php">Ικά Νάουαρι</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D6Ex5WiW6vc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D6Ex5WiW6vc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ταμπλ Μπάλαντι με Μιζμάρ</b>
                                    <span>
                                        Ο Αρμενο-Λιβανέζος παίχτης της Ταμπλ Μπάλαντι Σετράκ Σαρκισσιάν ξεκινάει τον ρυθμό για την τραγουδίστρια Σαμίρα Ταουφίκ στο τραγούδι της “<strong>αλ-Αΐν Μουλαϊτέν</strong>”, συνοδευόμενη από Ρεκ και Ταμπλ Μπάλαντι. Ηχογραφημένο στην Λιβανική τηλεόραση με τον βιολιστή Ραφίκ Χομπέικα να διευθύνει την ορχρήστρα.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Εξερευνήστε άλλα κρουστά όργανα:</p>
                    <ul>
                        <li><a href="riqq.php">Το Ρεκ</a></li>
                        <li><a href="tabla.php">Η Τάμπλα</a></li>
                        <!-- <li><a href="tabl_baladi.php">Το Ταμπλ Μπάλαντι</a></li> -->
                        <li><a href="daff.php">Το Νταφ</a></li>
                        <li><a href="mazhar.php">Το Αιγυπτιακό Μάζχαρ</a></li>
                        <li><a href="katim.php">Το Κάτεμ</a></li>
                        <li><a href="sagat.php">Τα Σαγκάτ</a></li>
                   </ul>

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
