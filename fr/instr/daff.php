<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Le Daff";
$page_description = "Le Daff";
$page_keywords = "arabe, musique, instruments, accord�on, bouzouk, daff, mazhar, guitare �lectrique, kat�m, nay, synth�tiseur oriental, orgue �lectrique, oud, �ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa�, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/daff.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Le Daff</h1>
                        <h3>Le tambour sur cadre g�n�rique</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/daff.jpg" alt="Daff">
                        <span>Trois Daffs � peaux de ch�vre et de cerf. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/daff.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Daff</a>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bendir.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de B�ndir</a>
                    </div>

                    <p> 'Daff' est un mot g�n�rique pour le tambour sur cadre en arabe, et plusieurs vari�t�s locales peuvent avoir d'autres noms, comme le <em>Mazhar</em> en Syrie et en �gypte, ou le <em>B�ndir</em> en Afrique du Nord.
                    </p>

                    <p> Le Daff a un cadre circulaire en bois qui a un diam�tre de 30 � 60 centim�tres (plus il est large, plus les fr�quences sont basses). Le cadre peut avoir 10 centim�tres de profondeur pour les petits diam�tres et 5 � 7 centim�tres de profondeur pour les plus grands diam�tres. La peau est g�n�ralement celle d'une ch�vre, d'un cerf ou autre peau naturelle, et est coll�e de fa�on permanente au cadre. Les Daffs modernes ont une peau de plastique et sont accordables.
                    </p>
                    <p>Le Daff est particuli�rement populaire dans la musique Soufie (dans laquelle c'est souvent le seul instrument qui accompagne le chant) et est aussi utilis� dans les genres classiques, folkloriques et populaires pour cr�er une section rythmique plus grande.
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
                                    <span>Le Daff est utilis� dans l'ensemble du <em>mounched</em> (chantre islamique) aleppin Hassan al-Haffar dans un concert enregistr� � Paris.</span>
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
                                    <span>La chanson de mariage <strong>Douqqou el-Mazaher</strong> ('jouez aux tambours') de Farid al-Atrache utilise plusieurs tambours sur cadre utilis�s dans les c�l�brations de mariage.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments de percussion:</p>
                    <ul>
                        <li><a href="riqq.php">Le Riqq</a></li>
                        <li><a href="tabla.php">La Tabla</a></li>
                        <li><a href="tabl_baladi.php">Le Tabl Baladi</a></li>
                        <!-- <li><a href="daff.php">Le Daff</a></li> -->
                        <li><a href="mazhar.php">Le Mazhar</a></li>
                        <li><a href="katim.php">Le Kat�m</a></li>
                        <li><a href="sagat.php">Les Sagat</a></li>
                   </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
