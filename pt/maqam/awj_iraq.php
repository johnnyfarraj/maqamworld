<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Awj ‘Iraq";
$page_description = "Maqam Awj ‘Iraq";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "pt/maqam/awj_iraq.php";
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
                        <h1>O Maqam Awj ‘Iraq</h1>
                        <h3>Um membro da <a href="f_sikah.php">Família do Maqam Sikah</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/awj_iraq.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Awj ‘Iraq</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/awj_iraq.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clique nas notas e mantenha pressionado o mouse para ouvi-las tocar.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="54,69,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
					  <area shape="circle" coords="123,77,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="212,85,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
					  <area shape="circle" coords="289,93,13" href="#" alt="Lá♯" class="playNote" data-frequency="463.54" data-parent="#notation1"><!-- B4♭ -->
					  <area shape="circle" coords="367,102,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="444,110,13" href="#" alt="Fa♯" class="playNote" data-frequency="372" data-parent="#notation1"><!-- Hijaz 3 down from 375 -->
					  <area shape="circle" coords="521,117,13" href="#" alt="Mi♭" class="playNote" data-frequency="312" data-parent="#notation1"><!-- Hijaz 2 up from 308.25 -->
					  <area shape="circle" coords="599,126,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="676,134,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="752,142,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!--variable-->
                       <!-- Links -->
                      <area shape="rect" coords="75,7,191,37" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="425,7,540,37" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="615,7,745,37" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>
                        O Maqam Awj ‘Iraq é uma versão do <a href="huzam.php">Maqam Rahat al-Arwah/Maqam Huzam</a> e <a href="iraq.php">Maqam ‘Iraq</a>, cujo <em>sayr</em> começa na oitava superior da tônica e desce até a tônica - embora compartilhe a maioria dos mesmos ajnas do <a href="huzam.php">Maqam Huzam</a>.
                    </p>
                    <p>
                        A escala do Maqam Awj ‘Iraq começa com o Jins inicial <a href="../jins/sikah.php">Sikah</a> na tônica, depois <a href="../jins/hijaz.php">Jins Hijaz</a> no 3º grau seguido por outro <a href="../jins/sikah.php">Jins Sikah</a> no 8º grau.
                    </p>

                    <p>Explore outros maqamat na <a href="f_sikah.php">Família do Maqam Sikah</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ya Samiri Da‘a Sabri</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/awj_iraq/hayya_wa_nadim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Haya Wa Nadim</b>
                                    <span>Samer Nashar</span>
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
