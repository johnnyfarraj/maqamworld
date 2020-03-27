<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Δημοσιεύσεις";
$page_description = "Ο Κόσμος των Μακάμ: Δημοσιεύσεις";
$page_keywords = "Μακάμ, Γένη, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "el/book.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-9 ml-auto mr-auto">
                    <div class="heading text-center jins">
                        <h1>Inside Arabic Music</h1>
                        <h3>&copy; 2019 Johnny Farraj &amp; Sami Abu Shumays</h3>
                        <h3>Oxford University Press</h3>
                    </div>
                    <div class="clearfix"></div>

                    <p>Με χαρά σας ανακοινώνω την επερχόμενη έκδοση ενός βιβλίου γραμμένο από εμένα (Γιάννης φαράζ) 
                    αι του φίλου μου Σάμι Σουμάις (δημιουργό του <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>).
                    Το επερχόμενο βιβλίο έχει τον τίτλο <strong>Inside Arabic Music</strong>, 
                    και θα εκδοθεί από το <a href="http://oup.com" target="_blank">Oxford University Press</a> τον Αύγουστο του 2019.
                    </p>
                    <p>
                    Η έργο του βιβλίου ήταν αποδέκτης με grant το 2012 από 
                    <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target="_blank">The Arab Fund For Arts and Culture</a>. 
                    </p>
                    <p style="margin-bottom:40px;">
                    Μπορείτε να παραγγείλετε το <strong>Inside Arabic Music</strong> από 
                    το <a href="https://www.amazon.com/Inside-Arabic-Music-Performance-Century/dp/0190658363/ref=sr_1_1" target="_blank">Amazon.com</a> 
                    ή κατευθείαν από τον εκδότη <a href="https://global.oup.com/academic/product/inside-arabic-music-9780190658366" target="_blank">Oxford University Press</a>.
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <a href="https://www.amazon.com/Inside-Arabic-Music-Performance-Century/dp/0190658363/ref=sr_1_1" target="_blank">
                                <img src="/img/inside_arabic_music_jacket.jpg" alt="Inside Arabic Music" class="img-fluid">
                            </a>
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
