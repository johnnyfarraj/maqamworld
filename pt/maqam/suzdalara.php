<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Suzdalara";
$page_description = "Maqam Suzdalara";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "pt/maqam/suzdalara.php";
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
                        <h1>O Maqam Suzdalara</h1>
                        <h3>Um membro da <a href="f_rast.php">Família do Maqam Rast</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/suzdalara.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Suzdalara</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/suzdalara.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clique nas notas e mantenha pressionado o mouse para ouvi-las tocar.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="57,75,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="134,83,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="211,91,13" href="#" alt="Lá" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="289,99,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="366,107,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="444,116,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="521,123,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="598,133,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1"><!--tonic-->
                      <!-- Links -->
                      <area shape="rect" coords="79,7,257,35" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="392,7,504,35" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                    </map>

                    <p>
                        O Maqam Suzdalara é bastante arcaico e quase inexistente como um maqam independente, apesar de seu sayr ser obrigatório em em quase todas as performances and canções em cada ramo do <a href="rast.php">Maqam Rast</a>: o <a href="../jins/nahawand.php">Jins Nahawand</a> no 5º grau do Maqam Rast é um dispositivo universal de transição a partir de outras modulações, sinalizando o retorno para o Jins inicial <a href="../jins/rast.php">Rast</a> na tônica.
                    </p>

                    <p>Explore outros maqamat na <a href="f_rast.php">Família do Maqam Rast</a>.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/suzdalara/yana_yana.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/suzdalara/yana_yana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Yana Yana (1969)</b>
                                    <span>Sabah</span>
                                    <span>Música por Baligh Hamdi</span>
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
