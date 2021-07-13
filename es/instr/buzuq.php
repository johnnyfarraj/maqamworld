<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "El Buzuq";
$page_description = "El Buzuq";
$page_keywords = "Instrumentos Árabes Tradicionales, El Buzuq, El Nay, El Oud, El Qanun, El Violin";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "es/instr/buzuq.php";
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
                        <h1>El Buzuq</h1>
                        <h3>Un pequeño laúd con un largo cuello con trastes</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/buzuq.jpg" alt="El Buzuq">
                        <span>Dos buzuqs hechos en Líbano. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/buzuq.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Buzuq</a>
                    </div>

                    <p>
                        El Buzuq es un instrumento de cuerda en la familia <a href="oud.php">oud</a> con un cuerpo más pequeño y un cuello más largo y preocupado. Tiene una forma más cercana al griego <em>Bouzouki</em> y al turco <em>Saz</em>. El Buzuq es originalmente un instrumento folklórico del Mediterráneo oriental (Palestina, Jordania, Líbano y Siria) que generalmente se toca solo. Pero está en la lista junto con los otros instrumentos tradicionales porque cruzó a la música pop árabe hacia mediados del siglo XX. Desde entonces, ha aparecido en muchas grabaciones y actuaciones en vivo como parte del conjunto árabe.
                    </p>
                    <p>
                        El tradicional Buzuq tenía dos hileras de cuerdas de metal, una doble (Do-4) y una triple (Sol-3), tocadas con una pieza delgada de cuerno o un plectro de plástico. Hoy en día, los buzuqs se hacen con tres cursos de cadenas para ampliar su rango. Las cuerdas de metal, junto con las clavijas de afinación metálicas (idénticas a las de una guitarra) le dan al instrumento una calidad de sonido brillante, mientras que la distribución de trastes cubre los tonos de cuarto más comunes. Esto y el hecho de que el jugador puede mover los trastes ligeramente para afinar su tono permite al buzuq abordar las escalas del <a href="../maqam.php">maqam</a> más comunes con una precisión aceptable.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=isAhZyRcA0M&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/isAhZyRcA0M/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhyiddin Ba‘yun</b>
                                    <span>Muhyiddin Ba‘yun, cantante libanés quien toca el buzuq, en un <a href="../form/improv.php#taqsim">taqsim</a> buzuq en <a href="../maqam/bayati.php">Maqam Bayati</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IhiVXmTMihk&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IhiVXmTMihk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhammad Abdel Karim</b>
                                    <span>
                                        El sirio Buzuqista Muhammad Abdel Karim (apodado el Príncipe del Buzuq) en un Taqsim de Buzuq. Abdel Karim dejó muchas grabaciones, y su estilo era suave y meditativo.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TpNCZQguy9k&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TpNCZQguy9k/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Matar Muhammad</b>
                                    <span>
                                        El virtuoso libanés del Buzuq, Matar Muhammad, toca un taqsim de Buzuq en un concierto en vivo. El taqsim de Muhammad puso a el Buzuq a la par de cualquiera de los otros instrumentos árabes tradicionales por su complejidad, técnica, ornamentación, modulaciones de maqam y longitud.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IH9ONkilJkE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IH9ONkilJkE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zoro Yussef</b>
                                    <span>El instrumentista de Buzuq libanés-kurdo Zoro Yussef (Zoro Seîd Yûsiv) toca un taqsim de Buzuq en <a href="../maqam/rast.php">Maqam Rast</a>, grabado en vivo en la televisión libanesa.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dPdFIgFkkog&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dPdFIgFkkog/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Marhabtayn</b>
                                    <span>La diva libanesa Sabah en su canción <strong>Marhabtayn</strong> (grabada en vivo en Kuwait) presentando Buzuq en su orquesta (dirigida por el violinista Abbud Abdel ‘Al).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros instrumentos tradicionales:</p>
                    <ul>
                        <li><a href="oud.php">El Oud</a></li>
                        <li><a href="qanun.php">El Qanun</a></li>
                        <li><a href="nay.php">El Nay</a></li>
                        <li><a href="violin.php">El Violin Árabe</a></li>
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
