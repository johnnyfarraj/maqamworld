<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Οικογένεια Μακάμ Άτζαμ";
$page_description = "Οικογένεια Μακάμ Άτζαμ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Άτζαμ, Μακάμ Άτζαμ Ουσαιράν, Μακάμ Σάουκ Άφζα";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/f_ajam.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Οικογένεια Μακάμ Άτζαμ</h1>
                        <h3>Μακαμάτ που αρχίζουν με <a href="../jins/ajam.php">Τζινς Άτζαμ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ajam.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Άτζαμ</a>
                    </div>

                    <p>La Οικογένεια Μακάμ Άτζαμ consiste des <em>maqams</em> qui commencent avec le <a href="../jins/ajam.php">Τζινς Άτζαμ</a>.</p>

                    
                    <ul>
                        <li><a href="ajam.php">Μακάμ Άτζαμ</a></li>
                        <li><a href="ajam_ushayran.php">Μακάμ Άτζαμ Ουσαιράν</a></li>
                        <li><a href="shawq_afza.php">Μακάμ Σάουκ Άφζα</a></li>
                    </ul>
                    
                    <p>Άλλες οικογένειες μακάμ:</p>
                    <ul>
                        <li><a href="f_bayati.php">Οικογένεια Μακάμ Μπαϊάτι</a></li>
                        <li><a href="f_hijaz.php">Οικογένεια Μακάμ Χιτζάζ</a></li>
                        <li><a href="f_kurd.php">Οικογένεια Μακάμ Κουρντ</a></li>
                        <li><a href="f_nahawand.php">Οικογένεια Μακάμ Ναχαουάντ</a></li>
                        <li><a href="f_nikriz.php">Οικογένεια Μακάμ Νικρίζ</a></li>
                        <li><a href="f_rast.php">Οικογένεια Μακάμ Ραστ</a></li>
                        <li><a href="f_sikah.php">Οικογένεια Μακάμ Σίκα</a></li>
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
