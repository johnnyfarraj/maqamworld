<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Famiglia Maqam ‘Ajam";
$page_description = "Famiglia Maqam ‘Ajam";
$page_keywords = "musica tradizionale araba, famiglia, maqam, ajam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/f_ajam.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Famiglia Maqam ‘Ajam</h1>
                        <h3>Maqamat che inizia con il <a href="../jins/ajam.php">Jins ‘Ajam</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ajam.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di ‘Ajam</a>
                    </div>

                    <p>La Famiglia Maqam ‘Ajam comprende <em>maqamat</em> che iniziano con <a href="../jins/ajam.php">Jins ‘Ajam</a>.</p>

                    
                    <ul>
                        <li><a href="ajam.php">Maqam ‘Ajam</a></li>
                        <li><a href="ajam_ushayran.php">Maqam ‘Ajam ‘Ushayran</a></li>
                        <li><a href="shawq_afza.php">Maqam Shawq Afza</a></li>
                    </ul>
                    
                    <p>Altre famiglie del <em>maqam</em>:</p>
                    <ul>
                        <li><a href="f_bayati.php">Famiglia Maqam Bayati</a></li>
                        <li><a href="f_hijaz.php">Famiglia Maqam Hijaz</a></li>
                        <li><a href="f_kurd.php">Famiglia Maqam Kurd</a></li>
                        <li><a href="f_nahawand.php">Famiglia Maqam Nahawand</a></li>
                        <li><a href="f_nikriz.php">Famiglia Maqam Nikriz</a></li>
                        <li><a href="f_rast.php">Famiglia Maqam Rast</a></li>
                        <li><a href="f_sikah.php">Famiglia Maqam Sikah</a></li>
                    </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
</body>

</html>
