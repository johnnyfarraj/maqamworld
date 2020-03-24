<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Pubblicazioni";
$page_description = "MaqamWorld Pubblicazioni - Inside Arabic Music";
$page_keywords = "Inside Arabic Music, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
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
                        <h3>&copy; 2019 Johnny Farraj e Sami Abu Shumays</h3>
                        <h3>Oxford University Press</h3>
                    </div>
                    <div class="clearfix"></div>

                    <p>Sono felice di annunciare la pubblicazione del libro intitolato <strong>Inside Arabic Music</strong> scritto con il mio amico Sami Abu Shumays (creatore di <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>).
                    Questo nuovo libro è stato pubblicato dalla <a href="http://global.oup.com" target="_blank">Oxford University Press</a> a Agosto 2019.
                    Il libro è un riferimento completo sulla musica araba e Il Mondo del Maqam sarà il suo sito web di accompagnamento.
                    </p>
                    <p>
                    Il libro è un progetto finanziato nel 2012 dalla <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target="_blank">Fondazione Araba per l'Arte e la Cultura</a>. 
                    </p>
                    <p>Potete ordinare una copia del libro <strong>Inside Arabic Music</strong> su <a href="https://www.amazon.com/Inside-Arabic-Music-Performance-Century/dp/0190658363/ref=sr_1_1" target="_blank">Amazon.com</a> o direttamente dall'editore, <a href="https://global.oup.com/academic/product/inside-arabic-music-9780190658366" target="_blank">Oxford University Press</a>.
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

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>
