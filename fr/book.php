<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Publications";
$page_description = "MaqamWorld Publications - Inside Arabic Music";
$page_keywords = "musique arabe, maqam, jins, iqa‘, iqaa, rythme, oud, qanoun, nay, quart de ton, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "fr/book.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-9 ml-auto mr-auto">
                    <div class="heading text-center jins">
                        <h1>Inside Arabic Music</h1>
                        <h3>&copy; 2019 Johnny Farraj and Sami Abou Shumays</h3>
                        <h3>Oxford University Press</h3>
                    </div>
                    <div class="clearfix"></div>

                    <p>Je suis très heureux d'annoncer un nouveau livre <strong>Inside Arabic Music</strong> co-écrit avec mon ami Sami Abou Shumays (créateur de <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>). 
                      Ce nouveau livre a été publié par les <a href="http://oup.com" target="_blank">Presses de l'Université Oxford</a> en Août 2019, et sera une référence complète sur la musique arabe et accompagnera ce site web.
                    </p>
                    <p><strong>Inside Arabic Music</strong> a reçu une bourse en 2012 de <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target="_blank">la Fondation Arabe pour les Arts et la Culture</a>.
                    </p>
                    <p style="margin-bottom:40px;">
                    Vous pouvez commander une copie de <strong>Inside Arabic Music</strong> de chez <a href="https://www.amazon.com/Inside-Arabic-Music-Performance-Century/dp/0190658363/ref=sr_1_1" target="_blank">Amazon.com</a> 
                      ou directement de chez l'éditeur <a href="https://global.oup.com/academic/product/inside-arabic-music-9780190658366" target="_blank">Oxford University Press</a>.
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

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>
