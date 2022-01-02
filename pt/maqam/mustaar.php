<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Musta‘ar";
$page_description = "Maqam Musta‘ar";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "pt/maqam/mustaar.php";
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
                        <h1>O Maqam Musta‘ar</h1>
                        <h3>Um membro da <a href="f_sikah.php">Família do Maqam Sikah</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/mustaar.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Musta‘ar</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/mustaar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clique nas notas e mantenha pressionado o mouse para ouvi-las tocar.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="78,125,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="155,117,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="233,108,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="309,100,13" href="#" alt="Lá♮" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="388,92,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="465,84,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="543,76,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
					  <area shape="circle" coords="619,67,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="640" data-parent="#notation1"><!-- var -->
                        <!-- Links -->
                      <area shape="rect" coords="73,13,226,41" href="../jins/mustaar.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="258,13,433,41" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="488,5,597,34" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>
                        O Maqam Musta‘ar é extremamente raro enquanto <em>maqam</em> independente, mas mais comum como um jins, ou como um <em>sayr</em> parcial dentro do <a href="huzam.php">Maqam Huzam</a> e do <a href="sikah.php">Maqam Sikah</a>. Sua escala começa com o <a href="../jins/mustaar.php">Jins Musta‘ar</a> na tônica, seguido pelo <a href="../jins/nahawand.php">Jins Nahawand</a> no 3º grau, e pelo <a href="../jins/rast.php">Jins Rast</a> no 6º grau.
                    </p>
                    <p>Explore outros maqamat na <a href="f_sikah.php">Família do Maqam Sikah</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/mustaar/aktiblak_gawabat.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/mustaar/aktiblak_gawabat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Aktiblak Gawabat</b>
                                    <span>Leila Murad</span>
                                    <span>Música de Muhammad al-Mugi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/mustaar/haramuha_minni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Haramuha Minni</b>
                                    <span>Fathiya Ahmad</span>
                                    <span>Música de Muhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/mustaar/raqq_el_habib.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Raqq el-Habib (1944)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Muhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/mustaar/ya_3adhili_la_talumni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Ya ‘Adhili La Talumni (1924)</b>
                                    <span>Sheikh Abu el-‘Ila Muhammad</span>
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
