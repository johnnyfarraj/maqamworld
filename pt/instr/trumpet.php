<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "O Trompete Árabe";
$page_description = "O Trompete Árabe";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, riqq, tabla, bendir, sagat, tabl baladi, violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/trumpet.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>O Trompete Árabe</h1>
                        <h3>Um Trompete usado para tocar escalas árabes <a href="../maqam.php">Maqam</a></h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/trumpet.jpg" alt="O Trompete Árabe">
                        <span>O pioneiro do Trompete Árabe Sami al-Babli</span>
                    </div>

                    <p>O Trompete Árabe é usado para tocar as escalas árabes <a href="../maqam.php">maqam</a>. Alguns músicos conseguem isso usando um trompete equipado com uma quarta válvula (que pode produzir quartos de tom), outros o fazem usando as varas na primeira e na terceira válvulas (disponíveis em todos os trompetes profissionais).
                    </p>
                    
                    <p>O trompete nunca chegou a se tornar um instrumento mainstream na música árabe, e é o único instrumento arabizado que nunca foi incluído na orquestra de Umm Kulthum. O mais conhecido trompetista árabe e pioneiro é o egípcio Sami al-Babli, que se apresentava regularmente com o cantor <em>Sha'bi</em> Ahmed Adaweyya.
                    </p>
                    
                    <p>Hoje em dia, dois jovens músicos de ascendência árabe levam adiante o Trompete Árabe, e ambos o fazem em uma roupagem de jazz que combina a harmonia ocidental com melodias <a href="../maqam.php">maqam</a> árabes: <a href="http://www.amirelsaffar.com/" target="_blank">Amir Elsaffar</a> (Iraque / EUA) e <a href="http://www.ibrahimmaalouf.com/" target="_blank">Ibrahim Maalouf</a> (Líbano / França).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=RqII6j4Hj_k">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/RqII6j4Hj_k/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Sami al-Babli</b>
                                    <span>Uma rara gravação em vídeo do pioneiro do trompete árabe Sami al-Babli (Egito) fazendo um Taqsim em <a href="../maqam/nahawand.php">Maqam Nahawand</a> com Abdo Dagher.
                                    </span>
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
                                </div>
                                <div class="info">
                                    <b>Sami al-Babli</b>
                                    <span>Outra rara gravação de vídeo de Sami al-Babli fazendo um Taqsim em <a href="../maqam/saba.php">Maqam Saba</a> durante a introdução de uma música do cantor de <em>Sha‘bi</em> Ahmed Adaweyya. Al-Babli participava regularmente do ensemble de Adaweyya.
                                    </span>
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
                                </div>
                                <div class="info">
                                    <b>Amir Elsaffar</b>
                                    <span>O instrumentista iraquiano-americano Amir Elsaffar, que toca Trompete e <em>Santur</em>, em uma gravação da National Public Radio (NPR) Music Field Recording tocando uma de suas composições que mesclam elementos do sistema árabe Maqam e do Jazz.
                                    </span>
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
                                </div>
                                <div class="info">
                                    <b>Ibrahim Maalouf</b>
                                    <span>O trompetista libanês-francês Ibrahim Maalouf toca um cover da canção <strong>Alf Leila w Leila</strong>, de Umm Kulthum (1969, música de Baligh Hamdi) em um arranjo de jazz que dá espaço para escalas árabes Maqam.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore outros instrumentos arabizados:</p>
                    <ul>
                       <li><a href="accordion.php">O Acordeão Árabe</a></li>
                       <li><a href="guitar.php">A Guitarra Elétrica</a></li>
                       <li><a href="org.php">O Org Árabe</a></li>
                       <li><a href="keyboard.php">O Teclado Oriental</a></li>
                       <li><a href="piano.php">O Piano Árabe</a></li>
                       <li><a href="saxophone.php">O Saxofone</a></li>
                        <!--
                       <li><a href="trumpet.php">O Trompete</a></li>
                        -->
                   </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
