<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Familia Maqam Kurd";
$page_description = "Familia Maqam Kurd";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "es/maqam/f_kurd.php";
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
                        <h1>Familia Maqam Kurd</h1>
                        <h3>Maqamat que comienzan con <a href="../jins/kurd.php">Jins Kurd</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/kurd.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Kurd</a>
                    </div>

                    <p>La Familia Maqam Kurd esta hecha de <em>maqamat</em> que comienzan con <a href="../jins/kurd.php">Jins Kurd</a>.</p>

                    <ul>
                        <li><a href="kurd.php">Maqam Kurd</a></li>
                        <li><a href="hijazkar_kurd.php">Maqam Hijazkar Kurd</a></li>
                    </ul>

                    <p>Otras familias maqam:</p>
                    <ul>
                        <li><a href="f_ajam.php">Familia Maqam ‘Ajam</a></li>
                        <li><a href="f_bayati.php">Familia Maqam Bayati</a></li>
                        <li><a href="f_hijaz.php">Familia Maqam Hijaz</a></li>
                        <!-- <li><a href="f_kurd.php">Familia Maqam Kurd</a></li> -->
                        <li><a href="f_nahawand.php">Familia Maqam Nahawand</a></li>
                        <li><a href="f_nikriz.php">Familia Maqam Nikriz</a></li>
                        <li><a href="f_rast.php">Familia Maqam Rast</a></li>
                        <li><a href="f_sikah.php">Familia Maqam Sikah</a></li>
                    </ul>

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
