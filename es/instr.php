<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Instrumentos Musicales Árabes";
$page_description = "Instrumentos Musicales Árabes";
$page_keywords = "Instrumentos Árabes Tradicionales, Arabizados y de Percusión, El Acordeón, El Buzuq, El Daf, La Guitarra Eléctrica, El Katem, El Nay, El Mazhar Egipcio, El Órgano Eléctrico (Org), El Oud, El Piano, El Qanun, El Riq, Los Sagat, El Saxofón, La Tabla, El Tabl Baladi, El Teclado Oriental, La Trompeta, El Violin";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "es/instr.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <?php include('sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Instrumentos Musicales Árabes</h1>
                        <h3>Instrumentos Tradicionales, Arabizados y de Percusión</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/takht.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Takht</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sahb.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Sahb</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/naqr.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Naqr</a>
                    </div>

                    <p id="takht">
                        El conjunto instrumental árabe tradicional o <em>takht</em> consta de cuatro instrumentos melódicos principales: <a href="instr/oud.php">el oud</a>, <a href="instr/nay.php">el nay</a>, <a href="instr/qanun.php">el qanun</a> y <a href="instr/violin.php">el violín</a>, y un instrumento de percusión principal: <a href="instr/riqq.php">el riq</a>. A veces, el riqq se complementa / sustituye con <a href="instr/tabla.php">la tabla</a> o <a href="instr/daff.php">El Daf</a> (tambor de marco), y los instrumentos melódicos se complementan con <a href="instr/buzuq.php">el buzuq</a>.
                    </p>
                    <p>
                        Estilísticamente, los instrumentos melódicos se dividen en dos familias: <em>sahb</em> (tirar o estirar) y <em>naqr</em> (arrancar o martillar). El violín y el nay caen bajo sahb, el oud y el qanun caen bajo naqr. Las dos familias están destinadas a complementarse entre sí para crear un sonido más rico y completo.
                    </p>
                    <p>
                        Los instrumentos arabizados son instrumentos no árabes que entraron al conjunto de música árabe en el siglo XX y se convirtieron en parte del sonido de la música árabe de ese período. La mayoría de estos instrumentos fueron usados por primera vez en Egipto, donde los músicos desarrollaron nuevos estilos de ornamentación y técnicas de interpretación que hacían que estos instrumentos suenen "árabes". Algunos instrumentos arabizados se modificaron para tocar notas adicionales y entregar una versión suficientemente cercana de la correcta entonación del sonido de los <a href="../maqam.php">maqamat</a> árabes. Otros fueron utilizados como instrumentos de 12 tonos de temperamento igual sin ninguna alteración.
                    </p>
                    <p>
                        Estos incluyen <a href="instr/piano.php">el piano</a>, <a href="instr/piano.php">el piano eléctrico</a>, <a href="instr/org.php">el órgano eléctrico</a>, <a href="instr/keyboard.php">el teclado oriental</a>, <a href="instr/accordion.php">el acordeón</a>, <a href="instr/guitar.php">la guitarra eléctrica</a> y el bajo eléctrico (con trastes). Algunos de estos instrumentos pueden modificarse para producir cuartos de tono. Los conjuntos de batería y la percusión electrónica también se utilizan comúnmente con la música pop / dance árabe contemporánea.
                    </p>
                    <p>
                        La flauta, <a href="instr/saxophone.php">el saxofón</a>, el clarinete y <a href="instr/trumpet.php">la trompeta</a> no son instrumentos de temperamento igual y permiten un mayor control sobre el tono que los anteriores. Están acostumbrados a varias extensiones en la música árabe, especialmente en los estilos modernos de fusión de jazz árabe.
                    </p>
                    <p>
                        <a href="instr/violin.php">El violín</a>, la viola, el violonchelo y el contrabajo son muy utilizados en la música árabe, especialmente en conjuntos grandes como la Orquesta de Umm Kulthum y la Orquesta de Diamantes en Egipto. Siendo todos sin trastes, estos instrumentos pueden usarse cómodamente para realizar las escalas de <a href="maqam.php">maqam</a> en árabe.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/rosette_khalaf.png" alt="Oud Rosette Khalaf">
                                <div class="card-body">
                                    <h5 class="card-title">Instrumentos Tradicionales</h5>
                                    <p class="card-text"><a href="instr/oud.php">El Oud</a></p>
                                    <p class="card-text"><a href="instr/qanun.php">El Qanun</a></p>
                                    <p class="card-text"><a href="instr/nay.php">El Nay</a></p>
                                    <p class="card-text"><a href="instr/violin.php">El Violin Árabe</a></p>
                                    <p class="card-text"><a href="instr/buzuq.php">El Buzuq</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_girgi.png" alt="Oud Rosette Nahhat">
                                <div class="card-body">
                                    <h5 class="card-title">Instrumentos Arabizados</h5>
                                    <p class="card-text"><a href="instr/accordion.php">El Acordeón Árabe</a></p>
                                    <p class="card-text"><a href="instr/guitar.php">La Guitarra Eléctrica Árabe</a></p>
                                    <p class="card-text"><a href="instr/org.php">El Órgano Eléctrico Árabe</a></p>
                                    <p class="card-text"><a href="instr/keyboard.php">El Teclado Oriental</a></p>
                                    <p class="card-text"><a href="instr/piano.php">El Piano Árabe</a></p>
                                    <p class="card-text"><a href="instr/saxophone.php">El Saxofón Árabe</a></p>
                                    <p class="card-text"><a href="instr/trumpet.php">La Trompeta Árabe</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/vergara.png" alt="Oud Rosette Vergara">
                                <div class="card-body">
                                    <h5 class="card-title">Instrumentos de Percusión</h5>
                                    <p class="card-text"><a href="instr/riqq.php">El Riq</a></p>
                                    <p class="card-text"><a href="instr/tabla.php">TLa Tabla</a></p>
                                    <p class="card-text"><a href="instr/tabl_baladi.php">El Tabl Baladi</a></p>
                                    <p class="card-text"><a href="instr/daff.php">El Daf</a></p>
                                    <p class="card-text"><a href="instr/mazhar.php">El Mazhar Egipcio</a></p>
                                    <p class="card-text"><a href="instr/katim.php">El Katem</a></p>
                                    <p class="card-text"><a href="instr/sagat.php">Los Sagat</a></p>
                                </div>
                            </div>
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
