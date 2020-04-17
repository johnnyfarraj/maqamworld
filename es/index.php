<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "El Mundo del Maqam";
$page_description = "El Mundo del Maqam";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";
include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "es/index.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="heading">
                        <h1>Bienvenido al nuevo <span>Mundo del Maqam</span></h1>
                        <h3>
                            El Mundo del Maqam es un recurso en línea dedicado a la enseñanza del sistema modal árabe Maqam, que es la base de la música árabe tradicional. Este sitio web cubre principalmente música de la parte del Mediterráneo oriental del mundo árabe (Egipto, Palestina, Jordania, Líbano y Siria), con un enfoque en el período de principios a mediados del siglo XX.
                        </h3>
                    </div>
                    <p>
                        Después de 17 años de funcionamiento, MaqamWorld se ha reconstruido con la ayuda de una subvención de 2016 del <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target="_blank">Fondo Árabe para las Artes y la Cultura (AFAC)</a>. 
                    </p>
                    <p>
                        MaqamWorld incluye las siguientes nuevas características:
                    </p>

                    <ul>
                        <li>Una traducción completa al
                            <a href="/en/index.php"><strong>inglés</strong></a>, 
                            <a href="/ar/index.php"><strong>árabe</strong></a>, 
                            <a href="/fr/index.php"><strong>francés</strong></a>, 
                            <a href="/it/index.php"><strong>italiano</strong></a>, 
                            <a href="/de/index.php"><strong>alemán</strong></a> y
                            <a href="/el/index.php"><strong>griego</strong></a>.
                        </li>
                        <li>Soporte de pantallas de todos los tamaños (especialmente teléfonos inteligentes).</li>
                        <li>Búsqueda de Google.</li>
                        <li>Contenido actualizado y más relevante.</li>
                        <li>Imágenes de mayor calidad y muestras de audio.</li>
                        <li>Mejores menús de navegación y submenús.</li>
                        <li>Notas cliqueables que generan sonido.</li>
                        <li>Una página "Contáctenos" para recibir comentarios del espectador.</li>
                    </ul>

                    <p>
                        Me complace anunciar la llegada de un libro coescrito con mi amigo Sami Abou Shumays (el creador de <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>). El libro se titula <a href="book.php">INSIDE ARABIC MUSIC</a>, y acaba de ser publicado en inglés por <a href="https://global.oup.com/academic/product/inside-arabic-music-9780190658366" target="_blank">Oxford University Press</a> en agosto de 2019. El libro será una referencia completa sobre la música árabe y este sitio web será su compañero. Este proyecto de libro también recibió una beca <a href="http://arabculturefund.org/" target="_blank">AFAC</a> en 2012.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/taoufiq_oud.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Maqam</h5>
                                    <p class="card-text">Aprenda sobre el sistema modal árabe <strong>Maqam</strong> con escalas anotadas y ejemplos registrados.
                                    </p>
                                    <a href="/es/maqam.php" class="btn btn-primary">Maqam<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_star.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Jins</h5>
                                    <p class="card-text">Aprende sobre los <strong>Jins</strong>, el fragmento de escala que es el bloque de construcción de cada Maqam.
                                    </p>
                                    <a href="/es/jins.php" class="btn btn-primary">Jins<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_round.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Ritmo</h5>
                                    <p class="card-text">Aprende sobre el ciclo rítmico árabe llamado <strong>Iqa</strong>, hecho de los sonidos primitivos <em>dum</em> y <em>tak</em>.
                                    </p>
                                    <a href="/es/iqaa.php" class="btn btn-primary">Ritmo<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_etching.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Formas</h5>
                                    <p class="card-text">Aprenda sobre las formas de la música árabe, llamadas <strong>Qawaleb</strong>, usadas tanto en la música vocal como en la instrumental, compuestas e improvisadas.
                                    </p>
                                    <a href="/es/forms.php" class="btn btn-primary">Formas<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_names.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Instrumentos</h5>
                                    <p class="card-text">Aprenda sobre los instrumentos árabes tradicionales, melódicos y de percusión, así como los instrumentos occidentales que han sido "arabizados".
                                    </p>
                                    <a href="/es/instr.php" class="btn btn-primary">Instrumentos<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/vladimir_tamari.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Publicaciones</h5>
                                    <p class="card-text">Conozca sobre el libro "<strong>Inside Arabic Music</strong>" (coautor con Sami Abu Shumays) que se publicó en agosto de 2019.
                                    </p>
                                    <a href="/es/book.php" class="btn btn-primary">Publicaciones<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-sm-3">
                    <div class="text-center">
                        <img src="http://placehold.it/160x600" alt="" class="d-none d-sm-block m-auto">
                        <img src="http://placehold.it/300x250" alt="" class="d-block d-sm-none ml-auto mr-auto mt-5">
                    </div>
                </div>-->
            </div>
                <?php include($ROOT . 'inc/768x90.php'); ?>
        </div>
    </div>

    <?php include($ROOT . 'es/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>
