<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Veröffentlichungen";
$page_description = "Maqam-Wely Veröffentlichungen - Inside Arabic Music";
$page_keywords = "Maqam-Welt, Inside Arabic Music";
$page_language = "de"; // en / ar / de <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "de/book.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-9 ml-auto mr-auto">
                    <div class="heading text-center jins">
                        <h1>Inside Arabic Music</h1>
                        <h3>&copy; Johnny Farraj und Sami Abu Shumays</h3>
                        <h3>Oxford University Press</h3>
                    </div>
                    
                    <div class="clearfix"></div>

                    <p>Ich freue mich, das Erscheinen eines Buches ankündigen zu können, das ich gemeinsam mit meinem Freund Sami Abu Shumays (Schöpfer von <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>) geschrieben habe.
                    Es trägt den Titel <strong>Inside Arabic Music</strong> und wurde im August 2019 von <a href="http://oup.com" target="_blank">Oxford University Press</a> veröffentlicht.
                    Dieses Buch wird eine vollständige Referenz zur arabischen Musik sein und diese Website begleiten.
                    </p>
                    
                    <p>Das Buchprojekt wurde vom <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target=_blank>Arab Fund for Arts and Culture</a> gefördert. 
                    </p>
                    
                    <p style="margin-bottom:40px;">
                    Sie können eine Kopie des Buches bei <a href="https://www.amazon.com/Inside-Arabic-Music-Performance-Century/dp/0190658363/ref=sr_1_1" target="_blank">Amazon.com</a> oder direkt beim <a href="https://global.oup.com/academic/product/inside-arabic-music-9780190658366" target="_blank">Oxford University Press</a> bestellen.
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

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>