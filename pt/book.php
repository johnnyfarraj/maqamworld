<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Publicações";
$page_description = "Publicações - Inside Arabic Music";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "pt/book.php";
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

                    <p>Estou feliz de anunciar o lançamento recente do meu livro <strong>Inside Arabic Music</strong> (Por Dentro da Música Árabe), co-escrito com meu amigo Sami Abu Shumays (criador do <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>). Este novo livro foi publicado pela Oxford University Press em agosto de 2019. O livro é uma referência completa em música árabe, e o Mundo do Maqam será seu site parceiro.
                    </p>
                    
                    <p>O livro <strong>Inside Arabic Music</strong> recebeu fomento do <a href="http://arabculturefund.org/grantept/grantee.php?id=333" target="_blank">Fundo Árabe pelas Artes e Cultura (AFAC)</a> em 2012.
                    </p>
                    
                    <p style="margin-bottom:40px;">
                    Você pode encomendar uma cópia pela <a href="https://www.amazon.com/Inside-Arabic-Music-Performance-Century/dp/0190658363/ref=sr_1_1" target="_blank">Amazon.com</a> (link does not work) ou diretamente com a <a href="https://global.oup.com/academic/product/inside-arabic-music-9780190658366" target="_blank">Oxford University Press</a>.
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

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>
