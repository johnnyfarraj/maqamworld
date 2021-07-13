<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Ciclos Rítmicos Árabes";
$page_description = "Ciclos Rítmicos Árabes: El Iqa‘";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <?php include('sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Ciclos Rítmicos Árabes</h1>
                        <h3>El Iqa‘</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/iqaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Iqa‘/Iqa‘at</a>
                    </div>

                    <p>
                        La música árabe se compone sobre ciclos rítmicos llamados <em>iqa‘at</em> (singular <em>iqa‘</em> ), que son patrones de ritmos que repiten cada compás. Una composición puede alternar entre muchos iqa‘at diferentes. Cada iqa’ se define utilizando un compás prototípico y los dos sonidos básicos: <strong>dum</strong> (grave y resonante) y <strong>tak</strong> (seco y agudo).
                    </p>
                    <p>
                        El <em>Iqa‘</em> anotado sirve como un esqueleto o un prototipo de cómo realizarlo. En práctica, los percusionistas adornan un iqa’ (lo desarrollan) con ritmos adicionales: <strong>dum</strong>, <strong>tak</strong> y cualquier otro sonido que el instrumento pueda producir. Esa ornamentación depende mucho del género de la música árabe, el arreglo estético deseado, el instrumento en sí, el tamaño de la sección rítmica y el estilo personal del percusionista.
                    </p>
                    <p>
                        Los <em>iqa‘at</em> árabes existen en muchos compases diferentes, que pueden ser pares o impares. Los compases más pequeños (2/4, 3/4, 4/4, 6/4 y 8/4) se utilizan principalmente en la música folclórica, el género tarab de mediados del siglo XX y la música popular contemporánea. Los <em>iqa‘at</em> más largos (7/8, 9/8, 10/8 hasta 32/4) se usan principalmente en el género vocal tradicional <a href="form/vocal_comp.php#muwashah">Muwashahat</a>.
                    </p>

                    <p>Puede comenzar a explorar una muestra de iqa‘at árabes usando el Índice de Iqa‘ (ordenado alfabéticamente) o usando la tabla a continuación (ordenada por número de tiempos por compás):
                    </p>

                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/ayyub.php">Ayub 2/4</a></li>
                                    <li><a href="iqaa/malfuf.php">Malfuf 2/4</a></li>
                                    <li><a href="iqaa/fox.php">Fox 2/4</a></li>
                                    <li><a href="iqaa/karachi.php">Karachi 2/4</a></li>
                                    <li><a href="iqaa/fallahi.php">Fallahi 2/4</a></li>
                                    <li><a href="iqaa/wahda_saghira.php">Wahda Saghira 2/4</a></li>
                                    <li><a href="iqaa/samai_darij.php">Sama‘i Darij 3/4</a></li>
                                    <li><a href="iqaa/samai_saraband.php">Sama‘i Saraband 3/8</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/maqsum.php">Maqsum 4/4</a></li>
                                    <li><a href="iqaa/baladi.php">Baladi 4/4</a></li>
                                    <li><a href="iqaa/saidi.php">Sa‘idi 4/4</a></li>
                                    <li><a href="iqaa/wahda.php">Wahda 4/4</a></li>
                                    <li><a href="iqaa/wahda_w_nuss.php">Wahda wi Nuss 4/4</a></li>
                                    <li><a href="iqaa/rumba.php">Rumba 4/4</a></li>
                                    <li><a href="iqaa/zaffa.php">Zaffa 4/4</a></li>
                                    <li><a href="iqaa/hachaa.php">Hacha‘ 4/4</a></li>
                                    <li><a href="iqaa/nawari.php">Nawari 4/4</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/thurayya.php">Thuraya 5/8</a></li>
                                    <li><a href="iqaa/sudasi.php">Sudasi 6/4</a></li>
                                    <li><a href="iqaa/yuruk_semai.php">Yuruk Semai 6/8</a></li>
                                    <li><a href="iqaa/dawr_hindi.php">Dawr Hindi 7/8</a></li>
                                    <li><a href="iqaa/nawakht.php">Nawakht 7/4</a></li>
                                    <li><a href="iqaa/masmudi_kabir.php">Masmudi Kabir 8/4</a></li>
                                    <li><a href="iqaa/ciftetelli.php">Ciftetelli 8/4</a></li>
                                    <li><a href="iqaa/wahda_kabira.php">Wahda Kabira 8/4</a></li>
                                    <li><a href="iqaa/bambi.php">Bambi 8/4</a></li>
                                    <li><a href="iqaa/katakufti.php">Katakufti 8/8</a></li>
                                    <li><a href="iqaa/aqsaq.php">Aqsaq 9/8</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/mudawwar.php">Mudawwar Shami 10/4</a></li>
                                    <li><a href="iqaa/jurjina.php">Jurjina 10/8</a></li>
                                    <li><a href="iqaa/samai_thaqil.php">Sama‘i Thaqil 10/8</a></li>
                                    <li><a href="iqaa/awis.php">`Awis 11/8</a></li>
                                    <li><a href="iqaa/mudawwar.php">Mudawwar Masri 12/4</a></li>
                                    <li><a href="iqaa/dharafat.php">Dharafat 13/8</a></li>
                                    <li><a href="iqaa/murabbaa.php">Murabba‘ 13/4</a></li>
                                    <li><a href="iqaa/muhajjar.php">Muhajjar 14/4</a></li>
                                    <li><a href="iqaa/mukhammas.php">Mukhammas 16/4</a></li>
                                    <li><a href="iqaa/khosh_rang.php">Khosh Rang 17/8</a></li>
                                    <li><a href="iqaa/awfar.php">Awfar Masri 19/4</a></li>
                                    <li><a href="iqaa/fakhit.php">Fakhit 20/4</a></li>
                                    <li><a href="iqaa/sittatu_ashar.php">Sittatu ‘Ashar Masri 32/4</a></li>
                                    <li><a href="iqaa/warshan_arabi.php">Warshan ‘Arabi 32/4</a></li>
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