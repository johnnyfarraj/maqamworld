<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Οικογένεια Μακάμ Σίκα";
$page_description = "Οικογένεια Μακάμ Σίκα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Μακάμ Σίκα, Μακάμ Χουζάμ, Μακάμ Ράχατ αλ-Αρουάχ, Μακάμ Ιράκ, ακάμ Μουσταάρ, Μακάμ Μπαστανικάρ, Μακάμ Αούτζ Ιράκ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/f_sikah.php";
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
                        <h1>Οικογένεια Μακάμ Σίκα</h1>
                        <h3>Μακαμάτ που αρχίζουν με <a href="../jins/sikah.php">Τζινς Σίκα</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sikah.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σίκα</a>
                    </div>

                    <p>Η οικόγενεια των μακάμ Σίκα αποτελείται από μακαμάτ που αρχίζουν με <a href="../jins/sikah.php">Τζινς Σίκα</a>.
                    </p>
                    
                    <ul>
                        <li><a href="sikah.php">Μακάμ Σίκα</a></li>
                        <li><a href="huzam.php">Μακάμ Χουζάμ</a></li>
                        <li><a href="huzam.php">Μακάμ Ράχατ αλ-Αρουάχ</a></li>
                        <li><a href="iraq.php">Μακάμ Ιράκ</a></li>
                        <li><a href="awj_iraq.php">Μακάμ Αούτζ Ιράκ</a></li>
                        <li><a href="bastanikar.php">Μακάμ Μπαστανικάρ</a></li>
                        <li><a href="mustaar.php">Μακάμ Μουσταάρ</a></li>
                    </ul>

                    <p>Άλλες οικογένειες μακάμ:</p>
                    <ul>
                        <li><a href="f_ajam.php">Οικογένεια Μακάμ Άτζαμ</a></li>
                        <li><a href="f_bayati.php">Οικογένεια Μακάμ Μπαϊάτι</a></li>
                        <li><a href="f_hijaz.php">Οικογένεια Μακάμ Χιτζάζ</a></li>
                        <li><a href="f_kurd.php">Οικογένεια Μακάμ Κουρντ</a></li>
                        <li><a href="f_nahawand.php">Οικογένεια Μακάμ Ναχαουάντ</a></li>
                        <li><a href="f_nikriz.php">Οικογένεια Μακάμ Νικρίζ</a></li>
                        <li><a href="f_rast.php">Οικογένεια Μακάμ Ραστ</a></li>
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
