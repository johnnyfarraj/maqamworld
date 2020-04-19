<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Nairuz/ Maqam Yakah";
$page_description = "Maqam Nairuz/ Maqam Yakah";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "es/maqam/nairuz.php";
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
                        <h1>Maqam Nairuz</h1>
                        <h1>Maqam Yakah</h1>
                        <h3>Un miembro de la <a href="f_rast.php">Familia Maqam Rast</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nairuz.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Nairuz</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/yakah.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Yakah</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/maqam/nairuz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Haz clic en cada nota y mantenga presionado para oírla.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="74,135,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
					  <area shape="circle" coords="150,126,13" href="#" alt="Re" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="228,118,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="305,110,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="383,102,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="459,93,13" href="#" alt="La<i class='icon-halfflat'></i>" class="playNote" data-frequency="426.67" data-parent="#notation1"><!-- Bayat 2nd, tuned up from A4♭=420 -->
					  <area shape="circle" coords="537,85,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="615,77,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="164,5,275,34" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="438,5,570,34" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>
                        Maqam Nairuz comienza con la raíz <a href="../jins/rast.php">Jins Rast</a> en el tónico, seguido de <a href="../jins/bayati.php">Jins Bayati</a> en el quinto grado.
                    </p>
                    <p>
                        Maqam Nairuz es bastante raro por sí mismo, pero es prominente <em>sayr</em> dentro de <a href="suznak.php">Maqam Suznak</a>/<a href="rast.php">Maqam Rast</a>, debido a la afinidad entre <a href="../jins/bayati.php">Jins Bayati</a> y <a href="../jins/hijaz.php">Jins Hijaz</a> en el quinto grado.
                    </p>
                    
                    <p>
                        <strong>Maqam Yakah</strong> es una versión arcaica de Maqam Nairuz, basada en la nota Sol3 en la escala arcaica de 24 tonos árabe (llamada <strong>Yakah</strong>) en lugar de la nota Do4.
                    </p>

                    <p>Explora otros maqamat en la <a href="f_rast.php">Familia Maqam Rast</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/nairuz/ya_hilalan.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/nairuz/ya_hilalan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ya Hilalan</b>
                                    <span>Firqat al-Musiqa al-Arabiyya (Egypt)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nairuz/mubarqa3ul_jamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Mubarqa'u al-Jamal</b>
                                    <span>Hasan al-Haffar</span>
                                    <span>Music by ‘Umar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nairuz/asl_il_gharam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Asl il-Gharam (1945)</b>
                                    <span>Nour el-Hoda</span>
                                    <span>Music by Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/nairuz/ghannili.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ghannili Shwayy Shwayy (1945)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Zakariyya Ahmad</span>
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
