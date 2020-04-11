<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "H Hλεκτρική Κιθάρα";
$page_description = "H Hλεκτρική Κιθάρα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Αραβοποιημένα όργανα, Το Αραβικό Ακκορντεόν, H Hλεκτρική Κιθάρα, Τo Αραβικό Όργανο, To Ανατολίτικο Αρμόνιο, To Αραβικό Πιάνο, Το Αραβικό Σαξόφωνο, Η Αραβική Τρομπέτα";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "el/instr/guitar.php";
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
                        <h1>H Hλεκτρική Κιθάρα</h1>
                        <h3>Παίζει μελωδία και απλές συγχορδίες</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Όργανα</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/guitar.jpg" alt="La Guitare Électriqu">
                        <span>Ομάρ Χόρσιντ, ο πρωτοπόρος της ηλεκτρικής κιθάρας στην Αίγυπτο</span>
                    </div>

                    <p>
                        Η ηλεκτρική κιθάρα πρωτοχρησιμοποιήθηκε στην Αραβική μουσική στα τέλη της δεκαετίας του ’60 στην Αίγυπτο, από τον Ομάρ Χόρσιντ. Σε μερικές ηλεκτρικές κιθάρες εφαρμόστηκαν έξτρα τάστα (όπως το <a href="buzuq.php">μπούζουκ</a>) ώστε να παίζονται κάποια από τα Αραβικά <a href="../maqam.php">μακάμια</a> με μόρια του τόνου. Κυρίως όμως η ηλεκτρική κιθάρα χρησιμοποιήθηκε χωρίς καμία τεχνική επέμβαση ή ηχητικές παραμορφώσεις, βασίζοντας την Αραβικότητα της στην μελωδική διάνθηση. Η χρήση  της ηλεκτρικής κιθάρας ήταν συνδυαστικά μελωδίες και απλές συγχορδίες (π.χ. ματζόρε, μινόρε).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3uBB1pxeirw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3uBB1pxeirw/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ομάρ Χόρσιντ</b>
                                    <span>Ο πρωτοπόρος της ηλεκτρικής κιθάρας Ομάρ Χόρσιντ παίζει το τραγούδι της Ουμ Κουλθούμ <strong>Ντάριτ Ελ-Αϊάμ</strong> (1970, σε μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dyCtzKJ9SCY&t=185s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dyCtzKJ9SCY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Συνέντευξη με τον Ομάρ Χόρσιντ</b>
                                    <span>Συνέντευξη με τον Ομάρ Χόρσιντ σχετικά με την εμπειρία του παίζοντας την ηλεκτρική κιθάρα με την ορχήστρα της Ουμ Κουλθούμ.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Εξερευνήστε άλλα αραβοποιημένα όργανα:</p>
                    <ul>
						<li><a href="accordion.php">Το Αραβικό Ακκορντεόν</a></li>
                    	<!--
						<li><a href="guitar.php">H Hλεκτρική Κιθάρα</a></li>
						-->
						<li><a href="org.php">Τo Αραβικό Όργανο</a></li>
						<li><a href="keyboard.php">To Ανατολίτικο Αρμόνιο</a></li>
						<li><a href="piano.php">To Αραβικό Πιάνο</a></li>
						<li><a href="saxophone.php">Το Αραβικό Σαξόφωνο</a></li>
						<li><a href="trumpet.php">Η Αραβική Τρομπέτα</a></li>
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
