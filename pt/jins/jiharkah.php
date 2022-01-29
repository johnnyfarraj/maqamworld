<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Jiharkah";
$page_description = "Jins Jiharkah";
$page_keywords = "arabic, music, arab, world, maqam, jins, ‘ajam, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "pt/jins/jiharkah.php";
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
                        <h1>Jins Jiharkah</h1>
                        <h3>A 5-note jins</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/jiharkah.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Jiharkah</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/jins/jiharkah.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clique nas notas e segure usando o mouse para ouví-las.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="27,91,12" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="106,82,12" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="321.33" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="187,74,14" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="262,66,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="340,58,13" href="#" alt="Lá♮↓" class="playNote" data-frequency="433" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="417,50,13" href="#" alt="Si♭↓" class="playNote" data-frequency="454" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="496,42,14" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">

					</map>
                    <p>Jins Jiharkah is a 5-note <em>jins</em>. It is notated here with its tonic on F and its <em>ghammaz</em> on C. The 3<sup>rd</sup> and 4<sup>th</sup> degrees are usually played lower than notated. Jins Jiharkah is the first <em>jins</em> in <a href="../maqam/jiharkah.php">Maqam Jiharkah</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/jiharkah/sultan_al_milah.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/jiharkah/sultan_al_milah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Anta Sultan al-Milah</b>
                                    <span>Sabah Fakhri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/jiharkah/3awwidti_3eini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Awwidti ‘Eini (1957)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/jiharkah/shams_il_asil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Shams el-Asil (1958)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/jiharkah/taqsim_oud_rast.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b><a href="../form/improv.php#taqsim">Taqsim</a> Oud in Maqam Rast</b>
                                    <span>Ibrahim al-Haggar</span>
                                    <span>Wasla in <a href="../maqam/rast.php">Maqam Rast</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/jiharkah/ya_mal_el_sham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Mal il-Sham</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Música de Ahmad Abu Khalil al-Qabbani</span>
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