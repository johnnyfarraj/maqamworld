<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Inside Arabic Music";
$page_description = "Inside Arabic Music";
$page_keywords = "musique arabe, maqam, jins, iqa‘, iqaa, rythme, oud, qanun, nay, quart de ton, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "it/book.php";
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

                    <p>Je suis heureux d'annoncer mon nouveau livre co-écrit par moi (Johnny Farraj) et mon ami Sami Abou Shumays (le créateur de <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>). Ce nouveau livre porte le titre de <strong>INSIDE ARABIC MUSIC</strong> et devrait être publié par les <a href="http://oup.com" target="_blank">Presses de l'Université Oxford</a> en Août 2019. Ce livre sera une référence complète sur la musique arabe et accompagnera ce site web. Le projet pour ce livre a reçu une bourse en 2012 de <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target="_blank">la Fondation Arabe pour les Arts et la Culture</a>.
                    </p>
                    <p style="margin-bottom:40px;"> Je partagerai plus d'information à propos du livre quand il sera disponible.</p>
                    
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

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>