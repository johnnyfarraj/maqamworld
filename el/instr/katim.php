<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Το Κάτεμ";
$page_description = "Το Κάτεμ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Κρουστά, Το Ρεκ, Η Τάμπλα, Η Τάμπλα Μπάλαντι, Το Νταφ, Το Αιγυπτιακό Μάζχαρ, Το Κάτεμ, Τα Σαγκάτ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "el/instr/katim.php";
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
                        <h1>Το Κάτεμ</h1>
                        <h3>Un tambour sur cadre de support rythmique</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Λίστα μουσικών οργάνων</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/katim.jpg" alt="Katim">
                        <span>Un Katèm accordable à peau de plastique. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/katim.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Katèm</a>
                    </div>

                    <p> Το Κάτεμ (du verbe <em>katama</em>, 'assourdir' ou 'étouffer') est un tambour sur cadre lourd qui produit un son étouffé. Το Κάτεμ est généralement posé entre les genoux du musicien et est fait pour être joué avec les mains plutôt qu'avec les doigts. La plupart des Katèms actuels ont des peaux de plastiques et sont accordables. Le rôle du Katèm est de supporter les autres instruments de la section rythmique en accentuant les sons <em>doum</em> et <em>tak</em> de base avec beaucoup d'ornementation.</p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=cU1uHX74qkE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/cU1uHX74qkE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zaffa (fête de mariage)</b>
                                    <span>Une Zaffa égyptienne (fête de mariage) avec un grand groupe de percussionnistes utilisant une combinaison de <a href="mazhar.php">Mazhars</a> égyptiens, de Katèms et de <a href="tabla.php">Tablas</a>, tous munis de peaux synthétiques.</span>
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
                        <li><a href="mazhar.php">Το Αιγυπτιακό Μάζχαρ</a></li>
                        <!-- <li><a href="katim.php">Το Κάτεμ</a></li> -->
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
