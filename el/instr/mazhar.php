<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Το Αιγυπτιακό Μάζχαρ";
$page_description = "Το Αιγυπτιακό Μάζχαρ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Κρουστά, Το Ρεκ, Η Τάμπλα, Το Ταμπλ Μπάλαντι, Το Νταφ, Το Αιγυπτιακό Μάζχαρ, Το Κάτεμ, Τα Σαγκάτ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "el/instr/mazhar.php";
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
                        <h1>Το Αιγυπτιακό Μάζχαρ</h1>
                        <h3>Ένα βαρύ και βαθύ τύμπανο με κύμβαλα</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Όργανα</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/egy_mazhar.jpg" alt="Μιgyptian Mazhar">
                        <span>Κουρδιστό Αιγυπτιακό Μάζχαρ με πλαστικό δέρμα. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mazhar.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Mazhar</a>
                    </div>

                    <p>
                        Το Αιγυπτιακό Μάζχαρ είναι ένα πολύ βαρύ τύμπανο με μεγάλα κύμβαλα. Είναι σχεδιασμένο για βαρύ χτύπημα σε δυνατά και πολυποίκικιλα ρυθμικά σύνολα, όπως αυτά της γαμήλιας συνοδείας (Ζάφα), όπου ο ρυθμός είναι <a href = "../iqaa/zaffa.php">Ικά Ζάφα</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=RGcnL3QG6DE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/RGcnL3QG6DE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ζάφα (Αιγυπτιακός γάμος)</b>
                                    <span>Αιγυπτιακός γάμος (Ζάφα) με ένα μεγάλο συγκρότημα κρουστών χρησιμοποιώντας ένα συνδυασμό από Αιγυπτιακά Μάζχαρ, <a href="katim.php">Κάτεμ</a> και <a href="tabla.php">Τάμπλα</a>, ολα με συνθετικά δέρματα.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Εξερευνήστε άλλα κρουστά όργανα:</p>
                    <ul>
                        <li><a href="riqq.php">Το Ρεκ</a></li>
                        <li><a href="tabla.php">Η Τάμπλα</a></li>
                        <li><a href="tabl_baladi.php">Το Ταμπλ Μπάλαντι</a></li>
                        <li><a href="daff.php">Το Νταφ</a></li>
                        <!-- <li><a href="mazhar.php">Το Αιγυπτιακό Μάζχαρ</a></li> -->
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
