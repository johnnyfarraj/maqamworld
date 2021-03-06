<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Famille du Maqam Bayati";
$page_description = " Famille du Maqam Bayati";
$page_keywords = "musique arabe, mode arabe, maqam, bayati, family, jins, iqa‘, iqaa, rhythme, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "fr/maqam/f_bayati.php";
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

                    <div class="heading text-center jins">
                        <h1>La Famille du Maqam Bayati</h1>
                        <h3>Les Maqams qui commencent avec le <a href="../jins/bayati.php">Jins Bayati</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bayati.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Bayati</a>
                    </div>

                    <p>La Famille du Maqam Bayati est faite de <em>maqams</em> qui commencent avec le <a href="../jins/bayati.php">Jins Bayati</a>.</p>

                    
                    <ul>
                        <li><a href="bayati.php">Maqam Bayati</a></li>
                        <li><a href="bayati_shuri.php">Maqam Bayati Chouri</a></li>
                        <li><a href="husayni.php">Maqam Houssayni</a></li>
                        <li><a href="bayati.php">Maqam Mouhayyar</a></li>
                    </ul>

                    <p>Les autres familles de <em>maqams</em>:</p>
                    <ul>
                        <li><a href="f_ajam.php">Famille du Maqam ‘Ajam</a></li>
                        <li><a href="f_hijaz.php">Famille du Maqam Hijaz</a></li>
                        <li><a href="f_kurd.php">Famille du Maqam Kurd</a></li>
                        <li><a href="f_nahawand.php">Famille du Maqam Nahawand</a></li>
                        <li><a href="f_nikriz.php">Famille du Maqam Nikriz</a></li>
                        <li><a href="f_rast.php">Famille du Maqam Rast</a></li>
                        <li><a href="f_sikah.php">Famille du Maqam Sikah</a></li>
                    </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
</body>

</html>
