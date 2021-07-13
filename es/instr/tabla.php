<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "La Tabla";
$page_description = "La Tabla";
$page_keywords = "El Daf, El Katem, El Mazhar Egipcio, El Riq, Los Sagat, La Tabla, El Tabl Baladi";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "es/instr/tabla.php";
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
                        <h1>La Tabla</h1>
                        <h3>Un tambor de mano. También se llama Derbakki o Darbuka</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabla.jpg" alt="La Tabla">
                        <span>Tabla de cuerpo de aluminio con cabeza de plástico de Gawharet El-Fan, Egipto. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/tabla.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Tabla</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/dirbakki.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Derbakki</a>
                    </div>

                    <p>
                        La Tabla (también llamada <em>Derbakki</em> en los dialectos levantinos o <em>Darbuka</em> en los países occidentales) es un tambor en forma de copa con la piel fijada en un lado.
                    </p>
                    <p>
                        Las tablas tradicionales están hechas de arcilla y tienen la piel de pez o cabra pegada y sujeta firmemente con un sistema de hilos tejidos. Las tablas modernas tienen un cuerpo de aluminio con una cabeza de plástico reemplazable y ajustable (Mylar).
                    </p>
                    <p>
                        La tabla es un instrumento muy popular en la música folk y pop, y es especialmente popular en el género de danza del vientre. Se utiliza hasta cierto punto en géneros más clásicos.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dpSa2SEnFh8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dpSa2SEnFh8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Hossam Ramzi</b>
                                    <span>El veterano egipcio Tablista Hossam Ramzi habla sobre el instrumento en una entrevista en Analogue to Digital Music Expo, 2013.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=KmnkOfE6G58">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/KmnkOfE6G58/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sa‘id al-Artist</b>
                                    <span>Maestro de tabla egipcia y profesor Sa‘id el-Artist con su conjunto de percusión.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros instrumentos de percusión:</p>
                    <ul>
                        <li><a href="riqq.php">El Riq</a></li>
                        <!--
                        <li><a href="tabla.php">La Tabla</a></li>
                        -->
                        <li><a href="tabl_baladi.php">El Tabl Baladi</a></li>
                        <li><a href="daff.php">El Daf</a></li>
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
