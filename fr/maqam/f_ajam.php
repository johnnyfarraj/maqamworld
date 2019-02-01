<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Famille du Maqam ‘Ajam";
$page_description = "Famille du Maqam ‘Ajam";
$page_keywords = "arabic, music, arab, world, maqam, ajam, family, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "fr"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "fr/maqam/f_ajam.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Maqamat</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Famille du Maqam ‘Ajam</h1>
                        <h3>Les Maqamat qui commencent par <a href="../jins/ajam.php">Jins ‘Ajam</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ajam.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de ‘Ajam</a>
                    </div>

                    <p>Famille du Maqam ‘Ajam is made of <em>maqamat</em> that start with <a href="../jins/ajam.php">Jins ‘Ajam</a>.</p>

                    <!-- TODO we need to format this list in a nice way -->
                    <ul>
                        <li><a href="ajam.php">Maqam ‘Ajam</a></li>
                        <li><a href="ajam_ushayran.php">Maqam ‘Ajam ‘Ouchayrane</a></li>
                        <li><a href="shawq_afza.php">Maqam Chaouq Afza</a></li>
                    </ul>
                    
                    <p>Other <em>maqam</em> families:</p>
                    <ul>
                        <li><a href="f_bayati.php">Famille du Maqam Bayati</a></li>
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
