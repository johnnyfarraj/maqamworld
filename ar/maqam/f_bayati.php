<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Bayati Family";
$page_description = "Maqam Bayati Family";
$page_keywords = "arabic, music, arab, world, maqam, bayati, family, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/f_bayati.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 order-sm-2">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <?php include($ROOT . 'inc/sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9 order-sm-1">

                    <div class="heading text-center jins">
                        <h1>Maqam Bayati Family</h1>
                        <h3>Smaller Text Here</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bayati.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Bayati</a>
                    </div>

                    <p>Maqam Bayati Family is made of maqamat that all start with <a href="../jins/bayati.php">Jins Bayati</a>.</p>

                    <!-- TODO we need to format this list in a nice way -->
                    <ul>
                        <li><a href="bayati.php">Maqam Bayati</a></li>
                        <li><a href="bayati_shuri.php">Maqam Bayati Shuri</a></li>
                        <li><a href="husayni.php">Maqam Husayni</a></li>
                    </ul>

                </div>
                <div class="col-sm-12 order-sm-3">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php include($ROOT . 'inc/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
</body>

</html>
