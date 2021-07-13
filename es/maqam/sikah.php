<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Sikah";
$page_description = "Maqam Sikah";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "es/maqam/sikah.php";
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
                        <h1>Maqam Sikah</h1>
                        <h3>El principal <em>maqam</em> en la <a href="f_sikah.php">Familia Maqam Sikah</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/sikah.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Sikah</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="../note/maqam/sikah.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Haz clic en cada nota y mantenga presionado para oírla.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="83,127,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="322" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="159,118,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="237,110,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="314,102,13" href="#" alt="La♮" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="391,94,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
					  <area shape="circle" coords="470,85,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="546,77,13" href="#" alt="Re" class="playNote" data-frequency="586.66" data-parent="#notation1">
					  <area shape="circle" coords="623,69,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="644" data-parent="#notation1"><!--octave, variable -->
                      <!-- Links -->
                      <area shape="rect" coords="95,14,218,43" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="260,10,444,43" href="../jins/upper_rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="494,7,600,35" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>
                        Maqam Sikah es un miembro poco común de la familia Sikah. Su escala comienza con la raíz <a href="../jins/sikah.php">Jins Sikah</a> en la tónica, seguida de <a href="../jins/upper_rast.php">Jins Rast Alto</a> en el 3er grado (con su tónica en el 6º grado) y luego <a href="../jins/rast.php">Jins Rast</a> en el 6º grado (que es un <em>ghammaz</em> secundario).
                    </p>
                    
                    <p>Explora otros maqamat en la <a href="f_sikah.php">Familia Maqam Sikah</a>.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/sikah/jadakal_ghaithu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/sikah/jadakal_ghaithu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Jadaka al-Ghaithu</b>
                                    <span>Voz y música por Wajdi al-‘Aqili</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah/inti_fakrani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Inti Fakrani (1938)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Muhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah/il_ward_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Ward Gamil (1947)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Zakariya Ahmad</span>
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

    <?php include($ROOT . 'es/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
