<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τα Σαγκάτ";
$page_description = "Τα Σαγκάτ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Κρουστά, Το Ρεκ, Η Τάμπλα, Το Ταμπλ Μπάλαντι, Το Νταφ, Το Αιγυπτιακό Μάζχαρ, Το Κάτεμ, Τα Σαγκάτ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "el/instr/sagat.php";
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
                        <h1>Τα Σαγκάτ</h1>
                        <h3>Χάλκινα Ζήλια</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Όργανα</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/sagat.jpg" alt="Sagat">
                        <span>Ζευγάρι από χάλκινα ζήλια. &copy; MaqamWorld.</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sagat.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά των Σαγκάτ (Σατζάτ)</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/tura.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Τούρα</a>
                    </div>

                    <p>
                        Τα Σαγκάτ (εκτός Αιγύπτου λέγονται Σατζάτ) είναι χάλκινα κύμβαλα δακτύλων με διάμετρο 1.5 το 2 ίντσες (υπάρχουν και  μεγαλύτερα κύμβαλα σε διπλάσια διάμετρο και λέγονται Τούρα). Φοριούνται στον αντίχειρα και στο μεσσαίο δάκτυλο απο κάθε χέρι χρησιμοποιώντας ελαστικά σχοινάκια. Τα Σαγκάτ καμιά φορά λέγονται και Ζήλια από την Τουρκική ονομασία "zills".
                    </p>
                    <p>
                        Τα Σαγκάτ είναι πολύ διαδεδομένα ανάμεσα στις χορεύτριες του χορού της κοιλιάς καθώς τονίζουν και εμπλουτίζουν όμορφα στα άλλα κρουστά του συνόλου. Εξ αιτίας αυτού, αμέτρητα YouTube βίντεο υπάρχουν σχετικά με τεχνικές και επιδείξεις στα κύμβαλα δακτύλων.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=UpG__9CAiVE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/UpG__9CAiVE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Καρίμ Νάγκι</b>
                                    <span>Ο κρουστός Καρίμ Νάγκι (Αίγυπτος/ΗΠΑ) παίζει σόλο με Σαγκάτ. </span>
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
                        <li><a href="mazhar.php">Το Αιγυπτιακό Μάζχαρ</a></li>
                        <li><a href="katim.php">Το Κάτεμ</a></li>
                        <!-- <li><a href="sagat.php">Τα Σαγκάτ</a></li> -->
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
