<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "La Tabla";
$page_description = "La Tabla";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Tabla, Dirbakki, Darbuka";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/tabla.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>La Tabla</h1>
                        <h3>Chiamata anche Dirbakki o Darbuka</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabla.jpg" alt="The Tabla">
                        <span>Un tabla con il corpo in alluminio e la pelle in plastica di <strong>Gawharet El-Fan</strong>, Egitto. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/tabla.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Tabla</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/dirbakki.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Dirbakki</a>
                    </div>

                    <p> 
                        La Tabla (anchye chiamato "dirbakki" in dialetto levantino o "darbuka" nelle regioni occidentali) è un tamburo a forma di calice, con la pelle fissata su un lato.
                    </p>
                    <p>
                        La Tabla tradizionali sono fatti di argilla e hanno la pelle di capra o pesce incollata e tenuta insieme saldamente con un sistema di intreccio dei fili. I tabla moderni sono costituiti da un corpo in alluminio e da una testa (Mylar) in plastica, sostituibile e accordabile.
                    </p>
                    <p>
                        La Tabla è uno strumento molto popolare nella musica folk e pop, ed è soprattutto popolare nella danza del ventre. È usato parzialmente nei generi più classici.
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
                                    <b>Houssam Ramzi</b>
                                    <span>L'esperto suonatore di tabla Hossam Ramzi (egiziano) parla dello strumento in un intervista a Anologue to Digital Music Expo, 2013.</span>
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
                                    <b>Saïd el-Artiste</b>
                                    <span>Il maestro egiziano di tabla Sa‘id al-Artist con il suo gruppo di percussioni.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti  a percussione:</p>
                    <ul>
                        <li><a href="riqq.php">Il Riqq</a></li>
                        <!-- <li><a href="tabla.php">La Tabla</a></li> -->
                        <li><a href="tabl_baladi.php">Il Tabl Baladi</a></li>
                        <li><a href="daff.php">Il Daff</a></li>
                        <li><a href="mazhar.php">Il Mazhar</a></li>
                        <li><a href="katim.php">Il Katem</a></li>
                        <li><a href="sagat.php">Le Sagat</a></li>
                   </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
