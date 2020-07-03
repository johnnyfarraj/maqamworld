<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "El Nay";
$page_description = "El Nay";
$page_keywords = "Instrumentos Árabes Tradicionales, El Buzuq, El Nay, El Oud, El Qanun, El Violin";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "es/instr/nay.php";
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
                        <h1>El Nay</h1>
                        <h3>Una flauta soplada</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/nay.jpg" alt="El Nay">
                        <span>Un conjunto de 7 nayat libaneses hecho por Atif Wehbi. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nay.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Nay</a>
                    </div>

                    <p>
                        El Nay (Farsi para "caña") es una flauta soplada, de extremo abierto, oblicua, hecha de caña. Ellos no fueron conocidos en el Cercano Oriente desde la antigüedad. Tiene nueve articulaciones y generalmente tiene 6 agujeros en la parte delantera para que jueguen los dedos y 1 agujero debajo para el pulgar. Se juega con las yemas de los dedos. Los nays vienen en diferentes longitudes, cada uno sintonizado a un tono específico y con el nombre de la nota producida con el primer agujero para el dedo abierto (D4 para el nay más usado; Nota más baja: C4).
                    </p>
                    <p>
                        Aunque muy simple, el nay es uno de los instrumentos árabes más difíciles de tocar. Un buen jugador puede producir una gran variedad de sonidos líquidos y adornos; Es un instrumento extremadamente conmovedor. Su timbre poético lo hace especialmente adecuado para los efectos melancólicos que expresan alegría y anhelo. Es el único instrumento de viento utilizado en la música del arte árabe, muy apreciado por su sonido cálido y entrecortado y sus sutiles inflexiones tonales y dinámicas.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=JhOs_1SodTA&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/JhOs_1SodTA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sayed Salem</b>
                                    <span>Sayed Salem (Egipto), miembro de mucho tiempo de la Orquesta de Umm Kulthum (Egipto) en un solo de Nay durante su canción <strong>Ba‘id ‘Annak</strong> (1965, música de Baligh Hamdi).
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D2oBZADKIS4&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D2oBZADKIS4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Mahmud ‘Effat</b>
                                    <span>El veterano instrumentista y profesor de nay, Mahmud ‘Effat (Egipto), antiguo miembro de la Orquesta Diamante en un Taqsim del Nay en <a href="../maqam/saba.php">Maqam Saba</a>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=5OflJML1yF8&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/5OflJML1yF8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Reda Bdeir</b>
                                    <span>Reda Bdeir (Egipto) tocando la canción Kulli Da Kan Leh (1954, música de Muhammad Abdel Wahab).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=CozVcLFpOeM&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/CozVcLFpOeM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Michael Ibrahim</b>
                                    <span>Michael Ibrahim (Siria), director de la Orquesta Árabe Nacional (EE. UU.) En un Taqsim en El Nay en <a href="../maqam/saba.php">Maqam Saba</a> durante una presentación en vivo de la OAN.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros instrumentos tradicionales:</p>
                    <ul>
                        <li><a href="oud.php">El Oud</a></li>
                        <li><a href="qanun.php">El Qanun</a></li>
                        <li><a href="violin.php">El Violin Árabe</a></li>
                        <li><a href="buzuq.php">El Buzuq</a></li>
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
