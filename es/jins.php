<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "El Jins";
$page_description = "El Jins";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "es/jins.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <?php include('sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>El Jins</h1>
                        <h3>Un fragmento de escala de 3, 4 o 5 notas</h3>
                        <h3>a partir de lo cual un Maqam está construido</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/jins.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Jins/Ajnas</a>
                    </div>

                    <p>
                        El Jins (plural Ajnas) es un fragmento de escala <a href="maqam.php">maqam</a> de 3, 4 o 5 notas. El <em>jins</em> es la unidad melódica básica en la música árabe, ya que un <em>maqam</em> es realmente un camino entre muchos ajnas. Cada <em>jins</em> se define por sus intervalos, que no cambian cuando se transpone y le dan su carácter distintivo y reconocible.
                    </p>
                    <p>
                        La tónica de un <em>jins</em> es la nota del énfasis melódico principal, la nota a la que la melodía regresa para su resolución. Esta suele ser la primera nota en la escala jins. El tono principal es la nota inmediatamente debajo de la tónica de un jins. El ghammaz es la nota más importante del énfasis melódico (además del tónico), así como el punto de partida más común de un nuevo <em>jins</em> (el cambio a un nuevo <em>jins</em> o <em>maqam</em> se llama modulación).
                    </p>
                    <p>
                        El tamaño de un <em>jins</em> es el número de notas entre el tónico y el <em>ghammaz</em>. Estas notas se denominan escala básica de los <em>jins</em> (o simplemente escala). Fuera de la escala básica (a cada lado) hay notas que forman parte del vocabulario melódico de los jins. Estas notas se llaman el equipaje jins. La escala básica más el equipaje <em>jins</em> conforman la escala extendida de los jins.
                    </p>
                    <p>
                        Cada <em>jins</em> muestra la escala básica anotada usando notas grandes, con la tónica y el <em>ghammaz</em> como notas completas. Las notas de equipaje de <em>jins</em> se muestran en un tamaño más pequeño y, a veces, un <em>jins</em> incluye múltiples opciones para algunas notas en el equipaje de jins.
                    </p>
                    <p>
                        Puede comenzar a explorar ajnas usando el Índice de Jins (ordenados alfabéticamente) o usando la tabla a continuación (agrupada por tamaño):
                    </p>
                    
                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="page-list-header">3 notas</div>
                                <!-- Header Cell: "3-note" -->
                                <ul class="page-list">
                                    <li><a href="jins/mustaar.php">Jins Musta‘ar</a></li>
                                    <li><a href="jins/sikah.php">Jins Sikah</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">4 notas</div>
                                <!-- Header Cell: "4-note" -->
                                <ul class="page-list">
                                   <li><a href="jins/upper_ajam.php">Jins ‘Ajam Alto</a></li>
                                   <li><a href="jins/bayati.php">Jins Bayati</a></li>
                                   <li><a href="jins/hijaz.php">Jins Hijaz</a></li>
                                   <li><a href="jins/hijaz_murassaa.php">Jins Hijaz Murassa‘</a></li>
                                   <li><a href="jins/kurd.php">Jins Kurd</a></li>
                                   <li><a href="jins/lami.php">Jins Lami</a></li>
                                   <li><a href="jins/upper_rast.php">Jins Rast Alto</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">5 notas</div>
                                <!-- Header Cell: "5-note" -->
                                <ul class="page-list">
                                    <li><a href="jins/ajam.php">Jins ‘Ajam</a></li>
                                    <li><a href="jins/ajam_murassaa.php">Jins ‘Ajam Murassa‘</a></li>
                                    <li><a href="jins/athar_kurd.php">Jins Athar Kurd</a></li>
                                    <li><a href="jins/jiharkah.php">Jins Jiharkah</a></li>
                                    <li><a href="jins/nahawand.php">Jins Nahawand</a></li>
                                    <li><a href="jins/nikriz.php">Jins Nikriz</a></li>
                                    <li><a href="jins/rast.php">Jins Rast</a></li>
                                    <li><a href="jins/sazkar.php">Jins Sazkar</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">(tamaño indefinido)</div>
                                <!-- Header Cell: "undefined size" -->
                                <ul class="page-list">
                                    <li><a href="jins/hijazkar.php">Jins Hijazkar</a></li>
                                    <li><a href="jins/mukhalif_sharqi.php">Jins Mukhalef Sharqi</a></li>
                                    <li><a href="jins/nahawand_murassaa.php">Jins Nahawand Murassa‘</a></li>
                                    <li><a href="jins/saba.php">Jins Saba</a></li>
                                    <li><a href="jins/saba_dalanshin.php">Jins Saba Dalanshin</a></li>
                                    <li><a href="jins/saba_zamzam.php">Jins Saba Zamzam</a></li>
                                    <li><a href="jins/sikah_baladi.php">Jins Sikah Baladi</a></li>
                                </ul>
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