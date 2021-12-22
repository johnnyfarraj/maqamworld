<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Athar Kurd";
$page_description = "Maqam Athar Kurd";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "pt/maqam/athar_kurd.php";
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
                        <h1>O Maqam Athar Kurd</h1>
                        <h3>Um membro da <a href="f_nikriz.php">Família do Maqam Nikriz</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/athar_kurd.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Athar Kurd</a>
                    </div>


                      <div class="notation" id="notation1">
                        <img src="/note/maqam/athar_kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clique nas notas e mantenha pressionado o mouse para ouvi-las tocar.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="63,131,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                      <area shape="circle" coords="141,123,13" href="#" alt="Ré♭" class="playNote" data-frequency="274" data-parent="#notation1">
                      <area shape="circle" coords="218,115,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
                      <area shape="circle" coords="296,107,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1">
                      <area shape="circle" coords="373,99,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="450,91,13" href="#" alt="Lá♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
                      <area shape="circle" coords="528,83,13" href="#" alt="Si♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
                      <area shape="circle" coords="605,75,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="115,5,294,34" href="../jins/athar_kurd.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="337,144,483,175" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
	               </map>

                    <p>
                        O Maqam Athar Kurd é um maqam muito raro que parece ser um desenvolvimento do século XX. Sua escala começa com <a href="../jins/athar_kurd.php">Jins Athar Kurd</a> na tônica seguido por <a href="../jins/hijazkar.php">Jins Hijazkar</a> centrado em torno do 5º grau.
		            </p>
                    <p>
                        A escala Maqam Athar Kurd é um híbrido entre o <a href="nawa_athar.php">Maqam Nawa Athar</a> e o <a href="kurd.php">Maqam Kurd</a>, daí o nome.
		            </p>
                    
                    <p>Explore outros maqamat na <a href="f_nikriz.php">Família do Maqam Nikriz</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/athar_kurd/raydak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/athar_kurd/raydak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya Msafir wi Albi Ma‘ak (1950)</b>
                                    <span>Leila Murad</span>
                                    <span>Música de Ahmad Sidqi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/el_hana_wel_widd.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Hana wel-Widd (1975)</b>
                                    <span>Leila Murad</span>
                                    <span>Música de Abdel Mun‘im al-Hariri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/ya_fagr_nurak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Fagr Nurak Hall wi Ban (c.1952)</b>
                                    <span>Vocais de Baligh Hamdi</span>
                                    <span>Música de Yusef Shawqi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/el_hobb_kida.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Hobb Kida (1959)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/maqam/athar_kurd/samai_athar_kurd.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Hijazkar Kurd</b>
                                    <span>Conjunto Al-Kindi</span>
                                    <span><img src="/img/cd.png"> The Whirling Dervishes of Damascus Vol. 2</span>
                                    <span>Música de Salah al-Mahdi (Tunisia)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/taqsim_oud_sunbati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim de Oud</b>
                                    <span>Riyad al-Sunbati</span>
                                    <span><img src="/img/cd.png"> Taqaseem Oud</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/athar_kurd/taqsim_oud_athar_kurd.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim de Oud no Maqam Athar Kurd</b>
                                    <span>Muhammad Qadri Dalal</span>
                                    <span><img src="/img/cd.png"> Maqamat Insolites</span>
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
