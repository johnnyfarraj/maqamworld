<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "عائلة مقام الحجاز";
$page_description = "عائلة مقام الحجاز";
$page_keywords = "عود,عائلة مقام الحجاز ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/f_hijaz.php";
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
                        <h1>عائلة مقام الحجاز</h1>
                        <h3>عائلة المقامات التي تبدأ 
                            <a href="../jins/hijaz.php">بجنس الحجاز</a></h3>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                    <h5>تتألف عائلة الحجاز من المقامات التي يبدأ سلّمها
                        <a href="../jins/hijaz.php">بجنس الحجاز</a>
                        (وهو جنس الأصل في هذه العائلة).
                        وتتفرّع هذه االمقامات من <a href="hijaz.php">مقام حجاز</a>، وهو المقام الاساسي في هذه العائلة.
                    </h5>

                    
                    <ul>
                        <li><h5><a href="hijaz.php">مقام حجاز</a></h5></li>
                        <li><h5><a href="hijazkar.php">مقام حجازكار</a></h5></li>
                        <li><h5><a href="hijazkar.php">مقام شَدّ عَرَبان</a></h5></li>
                        <li><h5><a href="hijazkar.php">مقام شاهناز</a></h5></li>
                        <li><h5><a href="hijazkar.php">مقام سوزدِل</a></h5></li>
                        <li><h5><a href="zanjaran.php">مقام زَنجَران</a></h5></li>
                    </ul>

                    <h5>عائلات المقامات الاخرى:</h5>
                    <ul>
                        <li><h5><a href="f_ajam.php">عائلة مقام العجم</a></h5></li>
                        <li><h5><a href="f_bayati.php">عائلة مقام البياتي</a></h5></li>
                        <li><h5><a href="f_kurd.php">عائلة مقام الكُرد</a></h5></li>
                        <li><h5><a href="f_nahawand.php">عائلة مقام النهاوند</a></h5></li>
                        <li><h5><a href="f_nikriz.php">عائلة مقام النِكريز</a></h5></li>
                        <li><h5><a href="f_rast.php">عائلة مقام الراست</a></h5></li>
                        <li><h5><a href="f_sikah.php">عائلة مقام السيكاه</a></h5></li>
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
