<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam ‘Iraq";
$page_description = "Maqam ‘Iraq";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "pt/maqam/iraq.php";
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
                        <h1>O Maqam ‘Iraq</h1>
                        <h3>Um membro da <a href="f_sikah.php">Família do Maqam Sikah</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/iraq.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de ‘Iraq</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/maqam/iraq.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clique nas notas e mantenha pressionado o mouse para ouvi-las tocar.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="73,140,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!-- Sikah tonic variable-->
                      <area shape="circle" coords="150,132,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                      <area shape="circle" coords="227,124,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="304,116,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- Bayati 2 variable -->
                      <area shape="circle" coords="381,108,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="459,100,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="536,90,13" href="#" alt="Lá" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="614,83,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
                        <!-- Links -->
                      <area shape="rect" coords="83,4,204,32" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="276,5,403,33" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="485,5,592,33" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
	               </map>

                    <p>
                        O Maqam ‘Iraq é um raro membro da <a href="f_sikah.php">Familia Sikah</a>, mas é mais comum enquanto modulação no sayr do <a href="huzam.php">Maqam Huzam</a>. Sua escala começa com o Jins inicial <a href="../jins/sikah.php">Sikah</a> na tônica Si<i class="icon-halfflat"></i>, seguido pelo <a href="../jins/bayati.php">Jins Bayati</a> no 3º grau, e então pelo <a href="../jins/rast.php">Jins Rast</a> no 6º grau.
                    </p>
                    <p>Explore outros maqamat na <a href="f_sikah.php">Família do Maqam Sikah</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/iraq/jayin_ya_arz_el_jabal.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/iraq/jayin_ya_arz_el_jabal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Jayin ya Arz el-Jabal</b>
                                    <span>Wadih al-Safi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/maqam/iraq/jalla_man_ansha_jamalak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Jalla Man Ansha Jamalak</b>
                                    <span>Conjunto Ornina (Síria)</span>
                                    <span>Regente: Dr. Muhammad Qadri Dalal</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/iraq/samai_iraq_yussuf_basha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i ‘Iraq</b>
                                    <span>Orquestra de Radio Tunecina</span>
                                    <span>Música de Yusuf Basha</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/iraq/el_hali_taabani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Hali Ta‘bani Ya Layla</b>
                                    <span>Joseph Saqr</span>
                                    <span>Música de Ziad Rahbani</span>
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
