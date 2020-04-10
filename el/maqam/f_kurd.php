<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Οικογένεια Μακάμ Κουρντ";
$page_description = "Οικογένεια Μακάμ Κουρντ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Οικογένεια Μακάμ Κουρντ, Μακάμ Χιτζαζκάρ Κουρντ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/f_kurd.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Οικογένεια Μακάμ Κουρντ</h1>
                        <h3>Μακαμάτ που αρχίζουν με <a href="../jins/kurd.php">Τζινς Κουρντ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <audio id="pronunciation" controls style="display: none;">
                            <source src="/name/kurd.mp3" type="audio/mp3">
                        </audio>
                        <a href="#" class="pronunciation btn btn-default"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Κουρντ</a>
                    </div>

                    <p>Η οικογένεια των μακάμ Κουρντ αποτελείται από μακαμάτ που αρχίζουν με <a href="../jins/kurd.php">Τζινς Κουρντ</a>.
                    </p>

                    <ul>
                        <li><a href="kurd.php">Μακάμ Κουρντ</a></li>
                        <li><a href="hijazkar_kurd.php">Μακάμ Χιτζαζκάρ Κουρντ</a></li>
                    </ul>

                    <p>Άλλες οικογένειες μακάμ:</p>
                    <ul>
                        <li><a href="f_ajam.php">Οικογένεια Μακάμ Άτζαμ</a></li>
                        <li><a href="f_bayati.php">Οικογένεια Μακάμ Μπαϊάτι</a></li>
                        <li><a href="f_hijaz.php">Οικογένεια Μακάμ Χιτζάζ</a></li>
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
