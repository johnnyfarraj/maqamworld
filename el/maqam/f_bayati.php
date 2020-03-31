<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Οικογένεια Μακάμ Μπαϊάτι";
$page_description = " Οικογένεια Μακάμ Μπαϊάτι";
$page_keywords = "musique arabe, mode arabe, maqam, bayati, family, jins, iqa‘, iqaa, rhythme, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient, tarab";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/f_bayati.php";
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
                        <h1>La Οικογένεια Μακάμ Μπαϊάτι</h1>
                        <h3>Les Maqams qui commencent avec le <a href="../jins/bayati.php">Τζινς Μπαϊάτι</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bayati.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Bayati</a>
                    </div>

                    <p>La Οικογένεια Μακάμ Μπαϊάτι est faite de <em>maqams</em> qui commencent avec le <a href="../jins/bayati.php">Τζινς Μπαϊάτι</a>.</p>

                    
                    <ul>
                        <li><a href="bayati.php">Μακάμ Μπαϊάτι</a></li>
                        <li><a href="bayati_shuri.php">Μακάμ Μπαϊάτι Σούρι</a></li>
                        <li><a href="husayni.php">Μακάμ Χουσάινι</a></li>
                    </ul>

                    <p>Les autres familles de <em>maqams</em>:</p>
                    <ul>
                        <li><a href="family/ajam.php">Οικογένεια Μακάμ Άτζαμ</a></li>
                        <li><a href="family/hijaz.php">Οικογένεια Μακάμ Χιτζάζ</a></li>
                        <li><a href="family/kurd.php">Οικογένεια Μακάμ Κουρντ</a></li>
                        <li><a href="family/nahawand.php">Οικογένεια Μακάμ Ναχαουάντ</a></li>
                        <li><a href="family/nikriz.php">Οικογένεια Μακάμ Νικρίζ</a></li>
                        <li><a href="family/rast.php">Οικογένεια Μακάμ Ραστ</a></li>
                        <li><a href="family/sikah.php">Οικογένεια Μακάμ Σίκα</a></li>
                    </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php include($ROOT . 'el/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
</body>

</html>
