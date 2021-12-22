<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Família do Maqam Bayati";
$page_description = "Família do Maqam Bayati";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "pt/maqam/f_bayati.php";
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

                    <div class="heading text-center jins">
                        <h1>Família do Maqam Bayati</h1>
                        <h3>Maqamat que começam com o <a href="../jins/bayati.php">Jins Bayati</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/bayati.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Bayati</a>
                    </div>

                    <p>A Família do Maqam Bayati compreende os maqamat que começam com o <a href="../jins/bayati.php">Jins Bayati</a>.</p>

                    <ul>
                        <li><a href="bayati.php">Maqam Bayati</a></li>
                        <li><a href="bayati_shuri.php">Maqam Bayati Shuri</a></li>
                        <li><a href="husayni.php">Maqam Husayni</a></li>
                        <li><a href="bayati.php">Maqam Muhayyar</a></li>
                    </ul>

                    <p>Outras famílias de maqamat:</p>
                    <ul>
                        <li><a href="f_ajam.php">Família do Maqam ‘Ajam</a></li>
                        <!-- <li><a href="f_bayati.php">Família do Maqam Bayati</a></li> -->
                        <li><a href="f_hijaz.php">Família do Maqam Hijaz</a></li>
                        <li><a href="f_kurd.php">Família do Maqam Kurd</a></li>
                        <li><a href="f_nahawand.php">Família do Maqam Nahawand</a></li>
                        <li><a href="f_nikriz.php">Família do Maqam Nikriz</a></li>
                        <li><a href="f_rast.php">Família do Maqam Rast</a></li>
                        <li><a href="f_sikah.php">Família do Maqam Sikah</a></li>
                    </ul>

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
