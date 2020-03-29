<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Το Αιγυπτιακό Μάζχαρ";
$page_description = "Το Αιγυπτιακό Μάζχαρ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Κρουστά, Το Ρεκ, Η Τάμπλα, Η Τάμπλα Μπάλαντι, Το Νταφ, Το Αιγυπτιακό Μάζχαρ, Το Κάτεμ, Τα Σαγκάτ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "el/instr/mazhar.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Λίστα μουσικών οργάνων</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Το Αιγυπτιακό Μάζχαρ</h1>
                        <h3>Un tambour sur cadre lourd et profond muni de cymbales</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Λίστα μουσικών οργάνων</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/egy_mazhar.jpg" alt="Egyptian Mazhar">
                        <span>Un Mazhar égyptien accordable à peau de plastique. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mazhar.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Mazhar</a>
                    </div>

                    <p> Le Mazhar égyptien est un tambour sur cadre très lourd avec de larges cymbales. Il est fait pour marteler lourdement dans une section rythmique forte et diverse telle que celle utilisée lors des Zaffas (processions de mariage) dans laquelle le <a href = "../iqaa/zaffa.php">Iqa‘ Zaffa</a> est utilisé.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=RGcnL3QG6DE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/RGcnL3QG6DE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zaffa (fête de mariage)</b>
                                    <span>Une Zaffa égyptienne (fête de mariage) avec un grand groupe de percussionnistes utilisant une combinaison de Mazhars égyptiens, des <a href="katim.php">Katèms</a> et de <a href="tabla.php">Tablas</a>, tous munis de peaux synthétiques.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Εξερευνήστε άλλα κρουστά όργανα:</p>
                    <ul>
                        <li><a href="riqq.php">Το Ρεκ</a></li>
                        <li><a href="tabla.php">Η Τάμπλα</a></li>
                        <li><a href="tabl_baladi.php">Η Τάμπλα Μπάλαντι</a></li>
                        <li><a href="daff.php">Το Νταφ</a></li>
                        <!-- <li><a href="mazhar.php">Το Αιγυπτιακό Μάζχαρ</a></li> -->
                        <li><a href="katim.php">Το Κάτεμ</a></li>
                        <li><a href="sagat.php">Τα Σαγκάτ</a></li>
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
