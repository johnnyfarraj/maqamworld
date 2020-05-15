<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Publicaciónes de MaqamWorld";
$page_description = "Publicaciónes de MaqamWorld - Inside Arabic Music";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "es/book.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-9 ml-auto mr-auto">
                    
                    <div class="heading text-center jins">
                        <h1>Inside Arabic Music</h1>
                        <h3>D.R. &copy; 2019 Johnny Farraj y Sami Abu Shumays</h3>
                        <h3>Oxford University Press</h3>
                    </div>
                    
                    <div class="clearfix"></div>
                    <p>
                        Estoy feliz de anunciar la publicación de mi libro <strong>Inside Arabic Music</strong> (Adentro de la música árabe), co-autorizado entre yo y mi amigo Sami Abu Shumays (creador de <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>).
                    </p>
                    <p>
                        Este nuevo libro fue publicado de <a href="http://global.oup.com" target="_blank">Oxford University Press</a> en agosto de 2019. El libro es una referencia integral sobre la música árabe y <strong>El Mundo Del Maqam</strong> será su compañero como sitio de la red.
                    </p>
                    <p>
                        El proyecto del libro recibió una beca de 2012 del <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target="_blank">Fondo Árabe para las Artes y la Cultura</a>.
                    </p>
                    <p style="margin-bottom:40px;">
                        Puede pre-ordenar una copia de <strong>Inside Arabic Music</strong> desde <a href="https://www.amazon.com/Inside-Arabic-Music-Performance-Century/dp/0190658363/ref=sr_1_1" target="_blank">Amazon.com</a> o directamente desde la editorial <a href="https://global.oup.com/academic/product/inside-arabic-music-9780190658366" target="_blank">Oxford University Press</a>.
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

    <?php include($ROOT . 'es/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>
