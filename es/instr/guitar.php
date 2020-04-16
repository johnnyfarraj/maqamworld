<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "La Guitarra Eléctrica Árabe";
$page_description = "La Guitarra Eléctrica Árabe";
$page_keywords = "Instrumentos Arabizados, El Acordeón, La Guitarra Eléctrica, El Órgano Eléctrico (Org), El Piano, El Saxofón, El Teclado Oriental, La Trompeta";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "en/instr/guitar.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>La Guitarra Eléctrica Árabe</h1>
                        <h3>Toca melodía y acordes simples</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/guitar.jpg" alt="La Guitarra Eléctrica Árabe">
                        <span>TODO Omar Khorshid, the pioneer of Electric Guitar in Egypt</span>
                    </div> 

                    <p>
                        La guitarra eléctrica se usó por primera vez en la música árabe a fines de la década de 1960 en Egipto, y su pionero fue Omar Khorshid. Algunas guitarras eléctricas árabes fueron equipadas con trastes adicionales (a la manera del <a href="buzuq.php">buzuq</a>) para tocar algunas de las escalas de <a href="../maqam.php">maqam</a> árabe con cuartos de tono. Pero sobre todo la guitarra eléctrica se usó sin ninguna alteración o efecto, y adquirió su carácter árabe de su estilo de ornamentación. La guitarra eléctrica se utilizó para tocar una combinación de líneas melódicas y acordes simples (por ejemplo, mayor y menor).
                    </p>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=b9s1GvFSa68">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/b9s1GvFSa68/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Omar Khorshid</b>
                                    <span>Arabic Electric Guitar pioneer Omar Khorshid plays Umm Kukthum's song <strong>Aghadan Alqaka</strong> (1971, music by Muhammad Abdel Wahab).</span>
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
                                    <b>Omar Khorshid Interview</b>
                                    <span>Interview with Omar Khorshid about his experience playing La Guitarra Eléctrica Árabe with Umm Kulthum's Orchestra</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <p>Explore otros instrumentos arabizados:</p>
                    <ul>
                       <li><a href="accordion.php">El Acordeón Árabe</a></li>
                        <!-- 
                       <li><a href="guitar.php">La Guitarra Eléctrica Árabe</a></li>
                        -->
                       <li><a href="org.php">El Órgano Eléctrico Árabe</a></li>
                       <li><a href="keyboard.php">El Teclado Oriental</a></li>
                       <li><a href="piano.php">El Piano Árabe</a></li>
                       <li><a href="saxophone.php">El Saxofón Árabe</a></li>
                       <li><a href="trumpet.php">La Trompeta Árabe</a></li>
                   </ul>

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
