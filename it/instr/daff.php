<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Daff";
$page_description = "Il Daff";
$page_keywords = "arabe, musique, instruments, accordéon, buzuq, daff, mazhar, guitare électrique, katèm, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, tromba, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/daff.php";
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
                        <h1>Il Daff</h1>
                        <h3>Le tambour sur cadre générique</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/daff.jpg" alt="Daf">
                        <span>Trois Dafs à peaux de chèvre et de cerf. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/daff.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Daf</a>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bendir.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Béndir</a>
                    </div>

                    <p> 'Daf' est un mot générique pour le tambour sur cadre en arabe, et plusieurs variétés locales peuvent avoir d'autres noms, comme le <em>Mazhar</em> en Syrie et en Égypte, ou le <em>Béndir</em> en Afrique du Nord.
                    </p>

                    <p> Il Daf a un cadre circulaire en bois qui a un diamètre de 30 à 60 centimètres (plus il est large, plus les fréquences sont basses). Le cadre peut avoir 10 centimètres de profondeur pour les petits diamètres et 5 à 7 centimètres de profondeur pour les plus grands diamètres. La peau est généralement celle d'une chèvre, d'un cerf ou autre peau naturelle, et est collée de façon permanente au cadre. Les Dafs modernes ont une peau de plastique et sont accordables.
                    </p>
                    <p>Il Daf est particulièrement populaire dans la musique Soufie (dans laquelle c'est souvent le seul instrument qui accompagne le chant) et est aussi utilisé dans les genres classiques, folkloriques et populaires pour créer une section rythmique plus grande.
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
                                    <b>L'ensemble Hassan al-Haffar</b>
                                    <span>Il Daf est utilisé dans l'ensemble du <em>mounched</em> (chantre islamique) aleppin Hassan al-Haffar dans un concert enregistré à Paris.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dyNBVZAJKco&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dyNBVZAJKco/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Douqqou el-Mazaher</b>
                                    <span>La chanson de mariage <strong>Douqqou el-Mazaher</strong> ('jouez aux tambours') de Farid al-Atrache utilise plusieurs tambours sur cadre utilisés dans les célébrations de mariage.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments de percussion:</p>
                    <ul>
                        <li><a href="riqq.php">Il Riqq</a></li>
                        <li><a href="tabla.php">La Tabla</a></li>
                        <li><a href="tabl_baladi.php">Il Tabl Baladi</a></li>
                        <!-- <li><a href="daff.php">Il Daff</a></li> -->
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
