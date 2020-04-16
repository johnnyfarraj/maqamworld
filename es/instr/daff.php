<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "El Daf";
$page_description = "El Daf";
$page_keywords = "El Daf, El Katem, El Mazhar Egipcio, El Riq, Los Sagat, La Tabla, El Tabl Baladi";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "en/instr/daff.php";
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
                        <h1>El Daf</h1>
                        <h3>El tambor de marco genérico</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/daff.jpg" alt="Daf">
                        <span>TODO Three daf-s with goat and deer skins. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/daff.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Daf</a>
                    </div>
                    
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bendir.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Bendir</a>
                    </div>
                    
                    <p>
                        Daf es una palabra genérica para un tambor de marco en árabe, y las variedades locales pueden tener diferentes nombres como <em>mazhar</em> en Siria / Egipto o <em>bendir</em> en el norte de África.
                    </p>
                    <p>
                        El daf tiene un marco de madera circular que va desde 12 pulgadas de diámetro en el lado más pequeño a 24 pulgadas y más en el lado más grande (y más bajo). El marco puede tener una profundidad de aproximadamente 4 pulgadas para diámetros pequeños y de 2-3 pulgadas para diámetros más grandes. La piel es tradicionalmente de cabra, ciervo u otra piel natural, y está permanentemente pegada al armazón, mientras que los dafs modernos tienen piel de plástico y son ajustables.
                    </p>
                    <p>
                        El Daf es especialmente popular en la música Sufi (donde a menudo es el único instrumento que se usa para acompañar el canto), y también se usa en los géneros clásico, folk y pop para lograr una mayor sección de ritmo.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=FFViUJriwXE&t=515s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/FFViUJriwXE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Hassan al-Haffar's Ensemble</b>
                                    <span>El Daf is used in Aleppan <em>munshid</em> (Islamic cantor) Hassan al-Haffar's ensemble in a concert recorded live in Paris.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ya_3rWXI1is&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ya_3rWXI1is/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Duqqu el-Mazahir</b>
                                    <span>Farid al-Atrash's wedding song <strong>Duqqu el-Mazahir</strong> ("Play the frame drums", 1952) features a number of frame drums used in a wedding celebration.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros instrumentos de percusión:</p>
                    <ul>
                        <li><a href="riqq.php">El Riq</a></li>
                        <li><a href="tabla.php">La Tabla</a></li>
                        <li><a href="tabl_baladi.php">El Tabl Baladi</a></li>
                        <!-- 
                        <li><a href="daff.php">El Daf</a></li>
                        -->
                        <li><a href="mazhar.php">El Mazhar Egipcio</a></li>
                        <li><a href="katim.php">El Katem</a></li>
                        <li><a href="sagat.php">Los Sagat</a></li>                  
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
