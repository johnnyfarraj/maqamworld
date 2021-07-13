<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "El Violin Árabe";
$page_description = "El Violin Árabe";
$page_keywords = "Instrumentos Árabes Tradicionales, El Buzuq, El Nay, El Oud, El Qanun, El Violin";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "es/instr/violin.php";
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
                        <h1>El Violin Árabe</h1>
                        <h3><em>Kamanja</em> o <em>Kaman</em> en árabe</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/violin.jpg" alt="The Violin">
                        <span>&copy; 2018 MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/kamanja.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Kamanja</a>
                    </div>

                    <p>
                        El violín (llamado <em>kamanja</em> o <em>kaman</em> en árabe) se incorporó al conjunto árabe hacia fines del siglo XIX y reemplazó las variedades indígenas de violines como el kamanja, la <em>rababa</em> y la <em>jowza</em>. Si bien se puede argumentar que el violín es el ejemplo más obvio de un instrumento Arabizado, durante mucho tiempo se ha naturalizado y ha adquirido su propia afinación, técnica de juego y estilo de ornamentación. El sonido del violín árabe es tan esencial para la música árabe como la del <a href="oud.php">oud</a> y el <a href="qanun.php">qanun</a>.
                    </p>
                    <p>
                        Aunque se usan varias afinaciones, la afinación árabe tradicional está en cuartos y quintos (G3, D4, G4, D5). Como instrumento sin trastes, el violín puede producir todos los tonos de entonación del sistema árabe <a href="../maqam.php">maqam</a>.
                    </p>
                    <p>
                        El estilo de juego del violín árabe es muy adornado, con diapositivas, trinos, vibrato amplio y paradas dobles, a menudo usando una cuerda abierta como un drone. El timbre del violín árabe varía desde rico y cálido, similar al sonido del violín occidental, hasta nasal y penetrante.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_ZWvLygSqkY&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_ZWvLygSqkY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sami al-Shawwa</b>
                                    <span>Uno de los pioneros del violín árabe de principios del siglo XX, el violinista sirio Sami al-Shawwa (también conocido como el Príncipe del violín) tocando un Taqsim de violín en <a href="../maqam/hijazkar.php">Maqam Hijazkar</a>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=bmtF02i7Oh8&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/bmtF02i7Oh8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ahmad al-Hifnawi</b>
                                    <span>El violinista egipcio Ahmad al-Hifnawi (que tocó el primer violín en la orquesta de Umm Kulthum) tocando la composición instrumental tradicional <strong>Tahmila Rast (Suznak)</strong>, que incluye muchas improvisaciones. El conjunto también presenta a George Michel en Oud, Mahmud ‘Effat en Nay y Hassan Anwar en Riq.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=-Atnx8aRrIg&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/-Atnx8aRrIg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Abbud Abdel ‘Al</b>
                                    <span>El violinista palestino-libanés Abbud Abdel ‘Al tocando un Taqsim de violín en <a href="../maqam/bayati.php">Maqam Bayati</a> sobre <a href="../iqaa/samai.php">Iqa‘ Sama‘i Thaqil</a> (grabado en la televisión libanesa).
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IQkQoZcC0jk&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IQkQoZcC0jk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>‘Abdu Dagher</b>
                                    <span>El violinista egipcio ‘Abdu Dagher y su conjunto tocando su composición instrumental Sama‘i <a href="../maqam/kurd.php">Maqam Kurd</a>, incluyendo los solos de violín y qanun.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=2jVRlAbqscg&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/2jVRlAbqscg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Simon Shaheen</b>
                                    <span>El violinista palestino Simon Shaheen tocando un Taqsim de violín en <a href="../maqam/rast.php">Maqam Rast</a> sobre <a href="../iqaa/rumba.php">Iqa‘ Rumba</a>, que termina con la segunda mitad de la composición instrumental de Riyad al-Sunbati Longa <a href="../maqam/nahawand.php">Farahfaza</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros instrumentos tradicionales:</p>
                    <ul>
                        <li><a href="oud.php">El Oud</a></li>
                        <li><a href="nay.php">El Nay</a></li>
                        <li><a href="qanun.php">El Qanun</a></li>
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
