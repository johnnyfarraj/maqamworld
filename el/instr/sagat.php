<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Τα Σαγκάτ";
$page_description = "Τα Σαγκάτ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Κρουστά, Το Ρεκ, Η Τάμπλα, Η Τάμπλα Μπάλαντι, Το Νταφ, Το Αιγυπτιακό Μάζχαρ, Το Κάτεμ, Τα Σαγκάτ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "el/instr/sagat.php";
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
                        <h1>Τα Σαγκάτ</h1>
                        <h3>Cymbales en laiton tenues par les doigts</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Λίστα μουσικών οργάνων</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/sagat.jpg" alt="Sagat">
                        <span>Une paire de Sagat en laiton. &copy; MaqamWorld.</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sagat.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Sagat (Sajat)</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/tura.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Toura</a>
                    </div>

                    <p>Τα Σαγκάτs (appelées <em>Sajat</em> à l'extérieur de l'Égypte) sont des cymbales en laiton tenues par les doigts qui ont un diamètre de 3,5 à 5 centimètres (des cymbales pouvant être jusqu'à deux fois plus larges existent aussi et sont appelées <em>Toura</em>). Elles sont portées sur le pouce et le troisième doigt de chaque main à l'aide de bandes élastiques.
                    </p>
                    <p>Τα Σαγκάτs sont très populaires chez les <em>Raqs Charqi</em> professionnelles (les danseuses du ventre) parce qu'elles accentuent joliment et ajoutent de la couleur aux autres instruments de percussion de la section rythmique. Pour cette raison, beaucoup de vidéos YouTube existent sur les techniques de doigté pour les cymbales et sur la performance.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=UpG__9CAiVE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/UpG__9CAiVE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Karim Nagi</b>
                                    <span>Karim Nagi(percussionniste de l'Égypte/Etats-Unis) joue un solo de Sagat. </span>
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
                        <li><a href="katim.php">Το Κάτεμ</a></li>
                        <!-- <li><a href="sagat.php">Τα Σαγκάτ</a></li> -->
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
