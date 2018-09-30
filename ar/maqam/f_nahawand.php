<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Nahawand Family";
$page_description = "Maqam Nahawand Family";
$page_keywords = "arabic, music, arab, world, maqam, nahawand, family, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/f_nahawand.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Maqam Nahawand Family</h1>
                        <h3>Maqamat that start with <a href="../jins/nahawand.php">Jins Nahawand</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nahawand.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Nahawand</a>
                    </div>

                    <p>Maqam Nahawand Family is made of <em>maqamat</em> that start with <a href="../jins/nahawand.php">Jins Nahawand</a>.</p>

                    <!-- TODO we need to format this list in a nice way -->
                    <ul>
                        <li><a href="nahawand.php">Maqam Nahawand</a></li>
                        <li><a href="nahawand.php">Maqam Farahfaza</a></li>
                        <li><a href="nahawand_murassaa.php">Maqam Nahawand Murassa‘</a></li>
                        <li><a href="ushaq_masri.php">Maqam ‘Ushaq Masri</a></li>
                    </ul>

                    <p>Other <em>maqam</em> families:</p>
                    <ul>
                        <li><a href="f_ajam.php">Maqam ‘Ajam Family</a></li>
                        <li><a href="f_bayati.php">Maqam Bayati Family</a></li>
                        <li><a href="f_hijaz.php">Maqam Hijaz Family</a></li>
                        <li><a href="f_kurd.php">Maqam Kurd Family</a></li>
                        <li><a href="f_nikriz.php">Maqam Nikriz Family</a></li>
                        <li><a href="f_rast.php">Maqam Rast Family</a></li>
                        <li><a href="f_sikah.php">Maqam Sikah Family</a></li>
                    </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'ar/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
