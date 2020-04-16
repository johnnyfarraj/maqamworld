<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "La Trompeta Árabe";
$page_description = "La Trompeta Árabe";
$page_keywords = "Instrumentos Arabizados, El Acordeón, La Guitarra Eléctrica, El Órgano Eléctrico (Org), El Piano, El Saxofón, El Teclado Oriental, La Trompeta";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "en/instr/trumpet.php";
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
                        <h1>La Trompeta Árabe</h1>
                        <h3>Una trompeta usada para tocar escalas de <a href="../maqam.php">Maqam</a> en árabe</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/trumpet.jpg" alt="La Trompeta Árabe">
                        <span>TODO Arabic Trumpet pioneer Sami al-Babli</span>
                    </div>

                    <p>
                        La trompeta árabe es una trompeta que se usa para tocar las escalas de <a href="../maqam.php">maqam</a> árabe. Algunos músicos logran eso al usar una trompeta equipada con una cuarta válvula (que puede producir cuartos de tono), otros lo logran al usar las diapositivas de la primera y tercera válvulas (disponibles en todas las trompetas profesionales).
                    </p>
                    <p>
                        La trompeta nunca se convirtió en un instrumento principal en la música árabe, y es el único instrumento Arabizado que nunca se presentó en la orquesta de Umm Kulthum. El pionero y pionero árabe más conocido es el egipcio Sami al-Babli, que actúa regularmente con el cantante <em>sha'bi</em>  Ahmed Adaweyya.
                    </p>
                    <p>
                        Hoy, dos jóvenes músicos de ascendencia árabe llevan adelante la trompeta árabe, y ambos lo hacen en un ambiente de jazz que combina armonía occidental con melodías de <a href="../maqam.php">maqam</a> árabe: <a href="http://www.amirelsaffar.com/" target="_blank">Amir Elsaffar</a> (Iraq / EE. UU.) E <a href="http://www.ibrahimmaalouf.com/" target="_blank">Ibrahim Maalouf</a> (Líbano / Francia).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=RqII6j4Hj_k">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/RqII6j4Hj_k/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sami al-Babli</b>
                                    <span>A rare video recording of Arabic trumpet pioneer Sami al-Babli (Egypt) doing a Taqsim in <a href="../maqam/nahawand.php">Maqam Nahawand</a> with Abdo Dagher.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=XVX7LaYvmnw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/XVX7LaYvmnw/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sami al-Babli</b>
                                    <span>Another rare video recording of Sami al-Babli doing a Taqsim in <a href="../maqam/saba.php">Maqam Saba</a> during the introduction to a song by <em>Sha‘bi</em> singer Ahmed Adaweyya. Al-Babli was regularly featured in Adaweyya's ensemble.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=OqV03upmhu0">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/OqV03upmhu0/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Amir Elsaffar</b>
                                    <span>Iraqi-American Trumpet and <em>Santur</em> player Amir Elsaffar in an NPR Music Field Recording playing one of his compositions which blend elements from the Arabic Maqam system and Jazz.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=DUa_srT-uL8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/DUa_srT-uL8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ibrahim Maalouf</b>
                                <span>Lebanese-French trumpet player Ibrahim Maalouf playing a cover of Umm Kukthum's song <strong>Alf Leila w Leila</strong> (1969, music by Baligh Hamdi) in a Jazz arrangement that nevertheless allows room for Arabic Maqam scales.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros instrumentos arabizados:</p>
                    <ul>
                       <li><a href="accordion.php">El Acordeón Árabe</a></li>
                       <li><a href="guitar.php">La Guitarra Eléctrica Árabe</a></li>
                       <li><a href="org.php">El Órgano Eléctrico Árabe</a></li>
                       <li><a href="keyboard.php">El Teclado Oriental</a></li>
                       <li><a href="piano.php">El Piano Árabe</a></li>
                       <li><a href="saxophone.php">El Saxofón Árabe</a></li>
                        <!--
                       <li><a href="trumpet.php">La Trompeta Árabe</a></li>
                        -->
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
