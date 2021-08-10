<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Formas Improvisadas";
$page_description = "Formas Improvisadas";
$page_keywords = "arabic, music, arab, world, maqam, jins, improvised forms, rast, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, taqsim, layali, mawwal, qasida";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "pt/form/improv.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Formas</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Formas Improvisadas</h1>
                        <h3>O Taqsim, as Layali, o Mawwal e a Qasida</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Formas</a>
                    <div class="clearfix"></div>

                    <p>
                        Formas improvisadas são o veículo mais imediato para que um <em>mutrib</em> (cantor) ou um instrumentista se conectem com sua audiência enquanto exploram e trabalham com um sayr de um <a href="../maqam.php">maqam</a>.
                    </p>

                    <div id="layali" class="heading jins text-center full-width">
                        <h3>As Layali</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/layali.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Layali</a>
                    </div>
                    <p>
                        A forma Layali é uma improvisação vocal solo da frase "<strong>Ya Layl Ya ‘Ayn</strong>" (Oh Noite, Oh Olho), onde "layali" é o plural Árabe da palavra "<em>layl</em>". Essa é uma frase tradicional que não é mais usada pelo seu sentido literal, mas se tornou mais um preenchimento vocal e um veículo para ornamentações vocais.
                    </p>
                    <p>
                        As Layali podem ser executadas sozinhas, porém são geralmente utilizadas como prelúdio para a próxima forma vocal (por exemplo, Mawwal, Qasida, ou até uma <a href="vocal_comp.php">forma vocal composta</a>. Nesse caso eles funcionam como um aquecimento, e ajudam o cantor a imergir no <a href="../maqam.php">maqam</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=wOlB3-EiweY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/wOlB3-EiweY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr Kadni el-Hawa</b>
                                    <span>A gravação de Marie Jubran do <a href="vocal_comp.php#dawr">Dawr</a> Kadni el-Hawa (música por Muhammad ‘Uthman) começa com um taqsim qanun(link) seguido por layali em <a href="../maqam/nahawand.php">Maqam Nahawand</a>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D0DQxDwgDw8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D0DQxDwgDw8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Taqtuqa Leh Ya Banafseg</b>
                                    <span>A gravação de Saleh Abdel Hayy de <strong>Taqtuqa Leh Ya Banafseg</strong> (música por Riyad al-Sunbati) é uma canção <a href="vocal_comp.php#wasla">Wasla</a> que começa com um Taqsim <a href="../instr/oud.php">oud</a>, um <a href="ottoman.php/samai">Sama‘i</a>, um Taqsim <a href="../instr/qanun.php">qanun</a>, uma recapitulação do <em>taslim</em> do Sama‘i, depois <em>Layali</em>, tudo em <a href="../maqam/rast.php">Maqam Rast</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TE7Y7bzgbns">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TE7Y7bzgbns/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhammad Khayri - Layali</b>
                                    <span>O cantor Muhammad Khayri, natural de Alepo, começa sua <a href="vocal_comp.php#wasla">Wasla</a> em <a href="../maqam/rast.php">Maqam Rast</a> com Layali antes de proceder a uma <a href="#qasida">Qasida improvisada</a>, depois um pouco de <a href="vocal_comp.php#qadd">Qudud</a>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="mawwal" class="heading jins text-center full-width">
                        <h3>O Mawwal</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/mawwal.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Mawwal</a>
                    </div>
                    <p> 
                        O Mawwal (plural <em>Mawawil</em>) é uma improvisação solo vocal sobre um poema Árabe coloquial. Por exemplo, o poema pode estar nos dialetos Egípcio, Libanês, Sírio or Iraquiano. Como com outras formas vocais improvisadas, o mawwal é um veículo para demonstrar o sayr do <a href="../maqam.php">maqam</a>, bem como a técnica de ornamentação e a bela voz do cantor.
                    </p>
                    <p> 
                        Um tipo importante de mawwal é o “Baghdadi Mawwal”, também chamado de <em>Sab‘awi</em> (de <em>sab‘a</em>, sete) porque consiste em 7 linhas com rimas A, A, A, B, B, B, A. O Baghdadi Mawwal é muito popular no repertório de Alepo, junto com as formas <a href="vocal_comp.php#muwashah">Muwashahat</a> e <a href="vocal_comp.php#qadd">Qudud</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zX7gJKlDDyY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zX7gJKlDDyY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sadduk ‘Anni el-‘Ida</b>
                                    <span>O cantor Muhammad Khayri, natural de Alepo, começa sua <a href="vocal_comp.php#wasla">Wasla</a> em <a href="../maqam/bayati.php">Maqam Bayati</a> com um <a href="ottoman.php/samai">Sama‘i</a>, seguida por <strong>Mawwal Sadduk ‘Anni el-‘Ida</strong>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=8MMxY_CIi_I">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/8MMxY_CIi_I/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ashki Li Min el-Hawa</b>
                                    <span><strong>Mawwal Ashki Li Min el-Hawa</strong> em <a href="../maqam/kurd.php">Maqam Kurd</a>, por Muhammad Abdel Wahab (1931).
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=2iMNi2qeA7w">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/2iMNi2qeA7w/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Min Youm Firgak</b>
                                    <span><strong>Mawwal Baghdadi Min Youm Firgak</strong> por Sabah Fakhri.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>A Qasida Improvisada</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/qasida.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Qasida</a>
                    </div>
                    <p> A Qasida (plural <em>Qasa'id</em>) é um poema metrado em Árabe clássico. Pode ser usada numa forma composta (veja a <a href="vocal_comp.php#qasida">qasida composta</a>) ou, nesse caso, usada numa forma improvisada. A qasida improvisada é idêntica a um Mawwal em como ela utiliza o <em>sayr</em> de um <a href="../maqam.php">maqam</a> e as habilidades artísticas e maestria do cantor.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=GJPYRZwdbhw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/GJPYRZwdbhw/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Man Yara Admu‘i</b>
                                    <span>Qasida <strong>Ya Man Yara Admu‘i</strong> de Muhammad Khayri em <a href="../maqam/rast.php">Maqam Rast</a>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=U0OWUGYqjZo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/U0OWUGYqjZo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Qul Lil-Maliha</b>
                                <span>A famosa Qasida <strong>Qul Lil-Maliha</strong> de Sabah Fakhri, em <a href="../maqam/huzam.php">Maqam Huzam</a>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqsim" class="heading jins text-center full-width">
                        <h3>O Taqsim</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/taqsim.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Taqsim</a>
                    </div>
                    <p> 
                        O Taqsim (plural <em>Taqasim</em>) é uma improvisação instrumental guiada por uma estrutura tradicional que segue de perto o sayr de um <a href="../maqam.php">maqam</a> (incluindo entonação, fraseado e modulação). O <em>taqsim</em> também demonstra a beleza do instrumento, suas possibilidades de ornamentação, e a habilidade, técnica e voz pessoal do instrumentista.
                    </p>
                    <p> 
                        O <em>taqsim</em> precisa seguir um arco narrativo e consiste em seções separadas por mini cadências e pausas breves. O taqsim pode ser uma peça por si só, ou pode estar incluída numa canção ou <a href="vocal_comp.php#wasla">wasla</a>.
                    </p>
                    <p> 
                        O instrumento de <em>taqsim</em> mais popular e disseminado é o <a href="../instr/oud.php">oud</a>, junto com o <a href="../instr/violin.php">violino</a> o <a href="../instr/nay.php">nay</a> e o <a href="../instr/qanun.php">qanun</a>. Instrumentos arabizados como o <a href="../instr/accordion.php">acordeão</a> também podem ser usados para <em>taqsim</em>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=-Atnx8aRrIg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/-Atnx8aRrIg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>‘Aboud Abdel ‘Al</b>
                                    <span>Taqsim de <a href="../instr/violin.php">Violino</a> em <a href="../maqam/bayati.php">Maqam Bayati</a> por Aboud Abdel ‘Al, precedido pelo <a href="../ottoman.php#samai">Sama‘i</a> Bayati Ibrahim al-‘Aryan.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7iB4JFYArFg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7iB4JFYArFg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>‘Amer ‘Ammuri</b>
                                    <span>Taqsim Oud por ‘Amer ‘Ammuri (Síria) em <a href="../maqam/huzam.php">Maqam Huzam</a> durante concerto por Sabah Fakhri.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore outros grupos de formas:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Formas Vocais Compostas</a></li>
                        <li><a href="instr_comp.php">Formas Instrumentais Compostas</a></li>
                        <li><a href="ottoman.php">Formas Instrumentais Otomanas</a></li>
                        <!-- Formas Improvisadas -->
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
