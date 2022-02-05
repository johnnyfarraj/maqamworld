<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Sazkar";
$page_description = "Jins Sazkar";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "pt/jins/sazkar.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins Sazkar</h1>
                        <h3>Uma variação do <a href="rast.php">Jins Rast</a> com uma 2<sup>a</sup> aumentada</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/sazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Sazkar</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/sazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clique nas notas e segure usando o mouse para ouví-las tocar.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="68,106,12" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="139,98,14" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="213,89,13" href="#" alt="Ré♯" class="playNote" data-frequency="310" data-parent="#notation1"><!-- var sikah leading tone-->
					  <area shape="circle" coords="290,82,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320"  data-parent="#notation1"><!-- var -->
					  <area shape="circle" coords="368,73,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="447,65,14" href="#" alt="Sol " class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="519,57,12" href="#" alt="Lá♮" class="playNote" data-frequency="440" data-parent="#notation1">
					</map>

                    <p>Jins Sazkar é um jins de 5 notas. Está escrito aqui com sua tônica em Do e seu <em>ghammaz</em> em Sol. Jins Sazkar é o primeiro jins no <a href="../maqam/kirdan.php">Maqam Sazkar</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/sazkar/ya_dala3_sabah.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track" data-song="/audio/jins/sazkar/mudnaka.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Mudnaka Gafahu Marqaduhu (1938)</b>
                                    <span>Voz e música por Muhammad Abdel Wahab (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/jins/sazkar/ya_dala3_sabah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya Dala‘ Dalla‘ (1974)</b>
                                    <span>Sabah</span>
                                    <span>Música de Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

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