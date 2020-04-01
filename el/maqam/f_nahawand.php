<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Οικογένεια Μακάμ Ναχαουάντ";
$page_description = "Οικογένεια Μακάμ Ναχαουάντ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Ναχαουάντ, Μακάμ Φαραχφάζα, Μακάμ Ναχαουάντ Μουράσα, Μακάμ Ουσάκ Μάσρι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/f_nahawand.php";
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
                        <h1>Οικογένεια Μακάμ Ναχαουάντ</h1>
                        <h3>Μακαμάτ που αρχίζουν με <a href="../jins/nahawand.php">Τζινς Ναχαουάντ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nahawand.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ναχαουάντ</a>
                    </div>

                    <p>Η οικόγενεια των μακάμ Ναχαουάντ αποτελείται από μακαμάτ που αρχίζουν με <a href="../jins/nahawand.php">Τζινς Ναχαουάντ</a>.
                    </p>

                    <ul>
                        <li><a href="nahawand.php">Μακάμ Ναχαουάντ</a></li>
                        <li><a href="nahawand.php">Μακάμ Φαραχφάζα</a></li>
                        <li><a href="nahawand_murassaa.php">Μακάμ Ναχαουάντ Μουράσα</a></li>
                        <li><a href="ushaq_masri.php">Μακάμ Ουσάκ Μάσρι</a></li>
                    </ul>

                    <p>Άλλες οικογένειες μακάμ:</p>
                    <ul>
                        <li><a href="family/ajam.php">Οικογένεια Μακάμ Άτζαμ</a></li>
                        <li><a href="family/bayati.php">Οικογένεια Μακάμ Μπαϊάτι</a></li>
                        <li><a href="family/hijaz.php">Οικογένεια Μακάμ Χιτζάζ</a></li>
                        <li><a href="family/kurd.php">Οικογένεια Μακάμ Κουρντ</a></li>
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
