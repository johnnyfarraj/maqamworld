<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "El Acordeón Árabe";
$page_description = "El Acordeón Árabe";
$page_keywords = "Instrumentos Arabizados, El Acordeón, La Guitarra Eléctrica, El Órgano Eléctrico (Org), El Piano, El Saxofón, El Teclado Oriental, La Trompeta";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "es/instr/accordion.php";
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
                        <h1>El Acordeón Árabe</h1>
                        <h3>Un acordeón modificado para incluir notas de cuarto tono</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/accordion.jpg" alt="El Acordeón Árabe">
                        <span>Faruq Salama tocando el acordeón en "Ya Msahharni" de Umm Kulthum, Cairo, 1971</span>
                    </div>

                    <p>
                        El Acordeón llegó a la escena musical árabe en Egipto a principios del siglo XX, y se usó originalmente sin ninguna alteración para agregar un sabor extraño a la música (por ejemplo, en "Sahirtu" de Muhammad Abdel Wahab en 1935). Más tarde, se modificó para agregar nuevas notas (los "cuartos tonos") que le permitieron tocar muchas más escalas del <a href="../maqam.php">maqam</a> árabe con una entonación lo suficientemente buena.
                    </p>
                    <p>
                        El acordeón es extremadamente popular en los géneros <em>Raqs Sharqi</em> (danza del vientre) y <em>Sha‘bi</em>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_0JgmVgSa94&t=376s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_0JgmVgSa94/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Msahharni</b>
                                    <span>Faruq Salama, pionero egipcio del acordeón árabe, toca la introducción de la canción <strong>Ya Msahharni</strong> de Umm Kulthum, Cairo, 1971, musica de Sayed Makkawi.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=qhFLg5RQjQk">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/WLQD2L5TiTM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Entrevista de Faruq Salama</b>
                                    <span>Entrevista de Faruq Salama sobre su experiencia tocando el acordeón árabe con la orquesta de Umm Kulthum.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=1nUqK5wLiME">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/1nUqK5wLiME/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Fifi ‘Abdou</b>
                                    <span>Un clip de baile de la bailarina egipcia Fifi ‘Abdou que se abre con un acordeón árabe.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=oANW6M63pRE">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/oANW6M63pRE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>Ahmed ‘Adaweya</b>
                                <span>La canción <strong>Ya Hilu el-Malamih</strong> (en el estilo egipcio <em>Sha‘bi</em>) de Ahmed ‘Adaweya, acompañada por una bailarina belly.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://youtu.be/7f5a9BhGios?t=650s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7f5a9BhGios/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Elias Lammam</b>
                                <span>La orquesta árabe national (EE.UU.) tocando la composición instrumental <strong>Kahramana</strong> de Farid al-Atrash, en un arreglo en que se resalta el acordeón árabe, con otros instrumentos árabes tradicionales.</span>
                                </div>
                            </label>
                        </div>
                    </div>


                    <p>Explore otros instrumentos arabizados:</p>
                    <ul>
                        <!--
                       <li><a href="accordion.php">El Acordeón Árabe</a></li>
                        -->
                       <li><a href="guitar.php">La Guitarra Eléctrica Árabe</a></li>
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
