<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam ‘Ajam ‘Ushayran";
$page_description = "Maqam ‘Ajam ‘Ushayran";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "pt/maqam/ajam_ushayran.php";
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
                        <h1>O Maqam ‘Ajam ‘Ushayran</h1>
                        <h3>Um membro da <a href="f_ajam.php">Família do Maqam ‘Ajam</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/ajam_ushayran.mp3"><i class="fa fa-fw fa-volume-up"></i>Pronúncia de ‘Ajam ‘Ushayran</a>
                    </div>

                      <div class="notation" id="notation1">
                        <img src="/note/maqam/ajam_ushayran.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clique nas notas e mantenha pressionado o mouse para ouvi-las tocar.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="66,85,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="144,93,13" href="#" alt="Lá" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="221,101,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="298,109,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="376,118,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
                      <area shape="circle" coords="453,126,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="530,134,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                      <area shape="circle" coords="608,142,13" href="#" alt="Si♭" class="playNote" data-frequency="231.77" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="60,7,232,36" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="470,6,595,35" href="../jins/ajam.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="272,155,390,184" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">
		          </map>

                    <p>
                        O Maqam ‘Ajam‘ Ushayran é uma versão arcaica do <a href="ajam.php">Maqam ‘Ajam</a> com um <em>sayr</em> diferente, e também tem uma ênfase tonal completamente diferente. Em vez de tonificar seu 5º grau da escala (para iniciar o próximo jins), ele toniciza seu 3º e 6º graus da escala.
                    </p>
                    <p>
                        A escala Maqam ‘Ajam‘ Ushayran começa com o Jins inicial <a href="../jins/ajam.php">‘Ajam</a> na tônica, seguido pelo Jins Kurd no 3º grau, em seguida, <a href="../jins/nahawand.php">Jins Nahawand</a> começando no 6º grau.
                    </p>
                    
                    <p>Explore outros maqamat na <a href="f_ajam.php">Família do Maqam ‘Ajam</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/ajam_ushayran/ayqadha_al_hubbu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/ajam_ushayran/ayqadha_al_hubbu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ayqadha al-Hubbu Fu'adi</b>
                                    <span>Hassan al-Haffar</span>
                                    <span><img src="/img/cd.png"> The Aleppo Suites Vol.2</span>
                                    <span>Música de Bahjat Hassan</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam_ushayran/da3i_al_hawa_qad_sah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Da‘i al-Hawa Qad Sah</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Música de Omar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam_ushayran/il_hubbi_fi_albi_amana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Hobbi Fi Albi Amana</b>
                                    <span>Fathiya Ahmad</span>
                                    <span>Música de Muhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ajam_ushayran/ma_li_3ayni_absarat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ma Li ‘Ayni Absarat</b>
                                    <span>Sabah Fakhri</span>
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
