<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Η Τάμπλα";
$page_description = "Η Τάμπλα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Κρουστά, Το Ρεκ, Η Τάμπλα, Το Ταμπλ Μπάλαντι, Το Νταφ, Το Αιγυπτιακό Μάζχαρ, Το Κάτεμ, Τα Σαγκάτ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "el/instr/tabla.php";
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
                        <h1>Η Τάμπλα</h1>
                        <h3>Λέγεται επίσης και "Ντιρμπέκι" ή "Νταρμπούκα"</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Όργανα</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabla.jpg" alt="Η Τάμπλα">
                        <span>Τάμπλα με αλουμινένιο σώμα και πλαστικό δέρμα, κατασκευή Γκαοχαρέτ Ελ-Φαν, Αίγυπτος. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/tabla.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά της Τάμπλα</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/dirbakki.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά της Ντιρμπέκι</a>
                    </div>

                    <p> 
                        Η Τάμπλα (λέγεται επίσης και “Ντιρμπέκι” στις Αραβικές διαλέκτους των χωρών του Λεβάντε ή Νταρμπούκα στις δυτικές χώρες) είναι ένα κρουστό σε σχήμα κύπελλου με δέρμα σταθεροποιημένο στην μία του άκρη.
                    </p>
                    <p>
                        Οι παραδοσιακές Τάμπλες είναι φτιαχμένες από πηλό και έχουν δέρμα ψαριού ή κατσίκας κολυμμένο πάνω και τεντωμένο σφιχτά με ένα σύστημα πλέξης με σχοινιά ή χοντρές κλωστές. Οι μοντέρνες τάμπλες έχουν σώμα από αλουμίνιο και δέρμα από πλαστικό (Mylar) που αντικαθίσταται και κουρδίζεται.
                    </p>
                    <p> 
                        Η Τάμπλα είναι πολύ διαδεδομένο όργανο στην παραδοσιακή και ποπ Αραβική μουσική, και είναι ειδικά διαδεδομένο στο είδος του χορού της κοιλιάς. Χρησιμοποιείται σε κάποιο βαθμό και σε πιο κλασσικά είδη Αραβικής μουσικής.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dpSa2SEnFh8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dpSa2SEnFh8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Χουσσάμ Ράμζι</b>
                                    <span>Ο βετεράνος Αιγύπτιος παίχτης της Τάμπλας Χουσσάμ Ράμζι μιλάει σχετικά με το όργανο σε συνέντευξη στην Analogue to Digital Music Expo, 2013.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=KmnkOfE6G58">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/KmnkOfE6G58/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Σαΐντ αλ-Αρτίστ</b>
                                    <span>Ο Αιγύπτιος μάστερ και διδάσκων της Τάμπλας Σαΐντ αλ-Αρτίστ με την ορχήστρα κρουστών του.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Εξερευνήστε άλλα κρουστά όργανα:</p>
                    <ul>
                        <li><a href="riqq.php">Το Ρεκ</a></li>
                        <!-- <li><a href="tabla.php">Η Τάμπλα</a></li> -->
                        <li><a href="tabl_baladi.php">Το Ταμπλ Μπάλαντι</a></li>
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
