<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "عائلة مقام البياتي";
$page_description = "عائلة مقام البياتي";
$page_keywords = "arabic, music, arab, world, maqam, bayati, family, jins, iqa‘, iq, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
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
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>عائلة مقام البياتي</h1>
                        <h3>Maqamat that start with <a href="../jins/bayati.php">Jins Bayati</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                    <p>عائلة مقام البياتي is made of <em>maqamat</em> that start with <a href="../jins/bayati.php">Jins Bayati</a>.</h5>

                    <!-- TODO we need to format this list in a nice way -->
                    <ul>
                        <li><a href="bayati.php">مقام بياتي</a></li>
                        <li><a href="bayati_shuri.php">مقام بياتي شُوري</a></li>
                        <li><a href="husayni.php">مقام حُسيني</a></li>
                    </ul>

                    <h5>عائلات المقامات الاخرى:</h5>
                    <ul>
                        <li><a href="f_ajam.php">عائلة مقام العجم</a></li>
                        <li><a href="f_hijaz.php">عائلة مقام الحجاز</a></li>
                        <li><a href="f_kurd.php">عائلة مقام الكُرد</a></li>
                        <li><a href="f_nahawand.php">عائلة مقام النهاوند</a></li>
                        <li><a href="f_nikriz.php">عائلة مقام النِكريز</a></li>
                        <li><a href="f_rast.php">عائلة مقام الراست</a></li>
                        <li><a href="f_sikah.php">عائلة مقام السيكاه</a></li>
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
