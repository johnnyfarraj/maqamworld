<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Hussayni";
$page_description = "Maqam Hussayni";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "pt/maqam/husayni.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>O Maqam Hussayni</h1>
                        <h3>Um membro da <a href="f_bayati.php">Família do Maqam Bayati</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/husayni.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Hussayni</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/husayni.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clique nas notas e mantenha pressionado o mouse para ouvi-las tocar.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="55,95,13" href="#" alt="Lá" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="131,87,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="480" data-parent="#notation1"><!--Bayati LA 2nd, variable -->
                      <area shape="circle" coords="183,87,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="233,79,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="313,71,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
                      <area shape="circle" coords="391,103,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="470,111,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="551,121,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- Bayati RE 2nd, variable -->
                      <area shape="circle" coords="630,129,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
                       <!-- Links -->
		              <!-- Hussayni is not a Jins, it's a special case (documented in IAM)
                        <area shape="rect" coords="116,8,304,39" href="../jins/husayni.php" class="mapLink" data-parent="#notation1">
		              -->
                      <area shape="rect" coords="450,8,580,39" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>
                        O Maqam Hussayni não é muito comum enquanto <em>maqam</em> independente na tradição árabe, apesar de seu <em>sayr</em> (com ênfase no 5º grau enquanto nota de tensão, resolvendo-se no 4º grau) ser obrigatório dentro do <a href="bayati.php">Maqam Bayati</a>. Na música folclórica da região mais ampla, esta é na verdade a variante mais comum do Bayati, com sua escala começando com o Jins inicial <a href="../jins/bayati.php">Bayati</a> na tônica.
                    </p>
                    <p>Explore outros maqamat na <a href="f_bayati.php">Família do Maqam Bayati</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/husayni/billadhi_askara.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/husayni/billadhi_askara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Bil-ladhi Askara</b>
                                    <span>Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Nagham al-Ams Vol. 12 (Bayati)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/hal_3ala_al_astar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hal ‘Ala al-Astar</b>
                                    <span>Ghada Shbeir</span>
                                    <span><img src="/img/cd.png"> Al Muwashahat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/khala_al_3idhar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Khala al-‘Idhar</b>
                                    <span>Khaled al-Hafez</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/nura_nura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Nura Nura (1953)</b>
                                    <span>Música e Vocais de Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/husayni/samai_bayati_khana2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Bayati Ibrahim al-‘Aryan (Khana 2)</b>
                                    <span>Conjunto Salah ‘Arram (Egito)</span>
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
