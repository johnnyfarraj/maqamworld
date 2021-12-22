<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam ‘Ushaq Masri";
$page_description = "Maqam ‘Ushaq Masri";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "pt/maqam/ushaq_masri.php";
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
                        <h1>O Maqam ‘Ushaq Masri</h1>
                        <h3>Um membro da <a href="f_nahawand.php">Família do Maqam Nahawand</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/ushaq_masri.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de ‘Ushaq Masri</a>
                    </div>



                     <div class="notation" id="notation1">
                        <img src="/note/maqam/ushaq_masri.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clique nas notas e mantenha pressionado o mouse para ouvi-las tocar.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="55,131,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="131,123,13" href="#" alt="Mi" class="playNote" data-frequency="330" data-parent="#notation1">
                      <area shape="circle" coords="209,115,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="287,106,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="365,98,13" href="#" alt="Lá" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="441,90,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="480" data-parent="#notation1"><!-- Bayati 2nd var-->
                      <area shape="circle" coords="518,82,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="595,73,13" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="114,10,292,39" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="414,9,548,40" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
					</map>

                    <p>
                        Maqam 'Ushaq Masri es una variación de <a href="nahawand.php">Maqam Nahawand</a> con <a href="../jins/bayati.php">Jins Bayati</a> en el quinto grado, por encima de la raíz <a href="../jins/nahawand.php">Jins Nahawand</a> en el primer grado.
                    </p>

                    <p>Explore outros maqamat na <a href="f_nahawand.php">Família do Maqam Nahawand</a>.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/ushaq_masri/dawr_ahibb_ashufak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/ushaq_masri/dawr_ahibb_ashufak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Dawr Ahibb Ashufak (1930)</b>
                                    <span>Voz e música por Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ushaq_masri/ba3d_el_khisam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ba‘d el-Khisam</b>
                                    <span>Sheikh Abu el-‘Ila Muhammad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/ushaq_masri/layali_nahawand.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Layali Nahawand</b>
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
