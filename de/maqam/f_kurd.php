<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam-Kurd-Familie";
$page_description = "Maqam-Kurd-Familie";
$page_keywords = "arabic, music, arab, world, maqam, kurd, family, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "de/maqam/f_kurd.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Maqam-Kurd-Familie</h1>
                        <h3>Maqamat, die mit <a href="../jins/kurd.php">Jins Kurd</a> beginnen</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <audio id="pronunciation" controls style="display: none;">
                            <source src="/name/kurd.mp3" type="audio/mp3">
                        </audio>
                        <a href="#" class="pronunciation btn btn-default"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Kurd</a>
                    </div>

                    <p>Die Maqam-Kurd-Familie besteht aus Maqamat, die mit <a href="../jins/kurd.php">Jins Kurd</a> beginnen.</p>

                    
                    <ul>
                        <li><a href="kurd.php">Maqam Kurd</a></li>
                        <li><a href="hijazkar_kurd.php">Maqam Hijazkar Kurd</a></li>
                    </ul>

                    <p>Andere Maqam-Familien:</p>
                    <ul>
                        <li><a href="f_ajam.php">Maqam-‘Ajam-Familie</a></li>
                        <li><a href="f_bayati.php">Maqam-Bayati-Familie</a></li>
                        <li><a href="f_hijaz.php">Maqam-Hijaz-Familie</a></li>
                        <li><a href="f_nahawand.php">Maqam-Nahawand-Familie</a></li>
                        <li><a href="f_nikriz.php">Maqam-Nikriz-Familie</a></li>
                        <li><a href="f_rast.php">Maqam-Rast-Familie</a></li>
                        <li><a href="f_sikah.php">Maqam-Sikah-Familie</a></li>
                    </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
