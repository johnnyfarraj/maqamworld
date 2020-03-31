<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Mousta‘ar";
$page_description = "Maqam Mousta‘ar";
$page_keywords = "musique arabe, mode arabe, maqam, jins, sikah, mustaar, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/mustaar.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Mousta‘ar (ou Moustaar)</h1>
                        <h3>Membre de la <a href="f_sikah.php">Famille du Maqam Sikah</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mustaar.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Mousta‘ar</a>
                    </div>
                    
                     <div class="notation" id="notation1">
                        <img src="../note/maqam/mustaar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="78,125,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="155,117,13" href="#" alt="Fa♯" class="playNote" data-frequency="375" data-parent="#notation1">
					  <area shape="circle" coords="233,108,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="309,100,13" href="#" alt="La♮" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="388,92,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="465,84,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="543,76,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
					  <area shape="circle" coords="619,67,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="640" data-parent="#notation1"><!-- var -->
                        <!-- Links -->
                      <area shape="rect" coords="62,13,233,41" href="../jins/mustaar.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="258,13,433,41" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="488,5,597,34" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      
					</map>
                    <p>Le Maqam Mousta‘ar est un maqam très rare en tant que maqam indépendant. Il est plus commun est tant que jins ou comme sayr utilisé à l'intérieur du <a href="huzam.php">Maqam Houzam</a> et du <a href="sikah.php">Maqam Sikah</a>. Sa gamme commence avec le Jins de base <a href="../jins/mustaar.php">Mousta‘ar</a> sur la tonique (Mi<i class="icon-halfflat"></i>), suivi du <a href="../jins/nahawand.php">Jins Nahawand</a> sur le 3<sup>ième</sup> degré,  et finalement du <a href="../jins/rast.php">Jins Rast</a> sur le 6<sup>ième</sup> degré.
                    </p>
                    <p>Explorez d'autres maqams dans la <a href="f_sikah.php">Famille du Maqam Sikah</a>.</p>

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
                                    <span>Leila Mourad (Égypte)</span>
                                    <span>Musique de Mouhammad al-Mougi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/mustaar/haramuha_minni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Haramouha Minni</b>
                                    <span>Fathiyya Ahmad (Égypte)</span>
                                    <span>Musique de Mouhammad al-Qasabgi</span>
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
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Mouhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/maqam/mustaar/ya_3adhili_la_talumni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Ya ‘Adhili La Taloumni (1924)</b>
                                    <span>Cheikh Abou el-Éla Mouhammad (Égypte)</span>
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
    
    <?php include($ROOT . 'el/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
</body>

</html>
