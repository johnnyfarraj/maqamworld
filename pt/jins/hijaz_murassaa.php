<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Hijaz Murassa‘";
$page_description = "Jins Hijaz Murassa‘";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "pt/jins/hijaz_murassaa.php";
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
                        <h1>Jins Hijaz Murassa‘ <span class="badge badge-custom">Novo</span></h1>
                        <h3>Uma variação do <a href="hijaz.php">Jins Hijaz</a> com uma 5<sup>a</sup> rebaixada</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/hijaz_murassaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Hijaz Murassa‘</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/jins/hijaz_murassaa.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clique nas notas e segure usando o mouse para ouví-las tocar.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="43,106,12" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="88,106,12" href="#" alt="Do♯" class="playNote" data-frequency="281.24" data-parent="#notation1"><!-- fine tune-->
					  <area shape="circle" coords="143,98,14" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="217,89,13" href="#" alt="Mi♭" class="playNote" data-frequency="315" data-parent="#notation1"><!-- fine tune-->
					  <area shape="circle" coords="294,81,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1"><!-- fine tune-->
					  <area shape="circle" coords="373,73,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="450,65,12" href="#" alt="Lá♭" class="playNote" data-frequency="422" data-parent="#notation1">
					</map>

                    <p>
                        Jins Hijaz Murassa‘ é um <em>jins</em> de 4 notas. Está representado aqui com sua tônica em Ré e seu <em>ghammaz</em> em Sol. Jins Hijaz Murassa‘ não é parte de nenhuma escala de <em>maqam</em> e geralmente ocorre como uma modulação do <a href="hijaz.php">Jins Hijaz</a>, principalmente em <a href="../maqam/hijazkar.php">Maqam Hijazkar</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/hijaz_murassaa/ana_fintizarak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/hijaz_murassaa/ana_fintizarak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ana Fi-ntizarak (1943)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música por Zakariyya Ahmad (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="track" data-song="/audio/jins/hijaz_murassaa/el-hobb-mahush-bis-sahl.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr el-Hobb Ma Hush Bis-Sahl</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Música de Dawud Husni (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="track" data-song="/audio/jins/hijaz_murassaa/badru_timmin_oud.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Badru Timmin (Oud <a href="../form/improv.php#taqsim">Taqsim</a>)</b>
                                    <span>Ghada Shbeir</span>
                                    <span>Música de Sheikh Mursi al-Hariri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/badru_timmin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Badru Timmin Haza Husnan</b>
                                    <span>Voz e música por Sheikh Mursi al-Hariri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/laha_badrut_timm.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Laha Badru-t-Tim</b>
                                    <span>Vocais de Sheikh Mahmud Subh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/mala_el_kasat_khana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Mala al-Kasat (khana)</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Música de Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/qadduka_al_mayyas.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qadduka al-Mayyas</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/zarani_al_mahbub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Zarani al-Mahbub</b>
                                    <span>Salatin Al-Tarab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/zahr_el_laymun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Zahr El-Laymoun (1997)</b>
                                    <span>Sonia M'Barek</span>
                                    <span><img src="/img/cd.png"> Tawchih &copy; 1997</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/hijaz_murassaa/maqam_isba3ain.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal in Maqam Isba‘ayn</b>
                                    <span>Sonia M'Barek</span>
                                    <span><img src="/img/cd.png"> Tawchih &copy; 1997</span>
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