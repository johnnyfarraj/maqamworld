<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Η Τάμπλα Μπάλαντι";
$page_description = "Η Τάμπλα Μπάλαντι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Κρουστά, Το Ρεκ, Η Τάμπλα, Η Τάμπλα Μπάλαντι, Το Νταφ, Το Αιγυπτιακό Μάζχαρ, Το Κάτεμ, Τα Σαγκάτ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "el/instr/tabl_baladi.php";
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
                        <h1>Η Τάμπλα Μπάλαντι</h1>
                        <h3>Grand Tambour Villageois avec peau sur les deux côtés</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Λίστα μουσικών οργάνων</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabl_baladi.jpg" alt="Tabl Baladi">
                        <span>Un Tabl Baladi à peau de chèvre. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/tabl_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Tabl baladi</a>
                    </div>

                    <p> Η Τάμπλα Μπάλαντι est un grand tambour villageois fait d'un cadre de bois avec des peaux lourdes sur les deux côtés. Il est attaché à l'épaule du musicien avec une ceinture et est joué à l'aide de deux bâtons: le bâton épais est pour les sons dum, joués avec la main dominante tandis que le bâton mince est pour les sons tak joués avec l'autre main.
                    </p>

                    <p>Η Τάμπλα Μπάλαντι est idéal pour la musique jouée en extérieur dans les villages (<em>baladi</em> veut dire villageois) et peut donner le rythme pour des danses en ligne telles que le <em>Dabké</em> à côté d'instruments très forts en volume tels que le <em>Mizmar</em>. Η Τάμπλα Μπάλαντι ne joue pas de rythmes très complexes ou ornementés et est idéal pour des <a href="../iqaa.php">iqa‘at</a> lourds en 4/4 tels que le <a href="../iqaa/baladi.php">Baladi</a>, le <a href="../iqaa/saidi.php">Saïdi</a> et particulièrement le <a href="../iqaa/nawari.php">Nawari</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D6Ex5WiW6vc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D6Ex5WiW6vc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Tabl Baladi et Mizmar</b>
                                    <span>Le joueur de Tabl Baladi arméno-libanais Setrak Sarkissian commence à jouer le rythme pour la chanson <strong>‘al-‘Ein Moulayyitein</strong> chantée par la chanteuse Samira Tawfiq, accompagné au Riqq et Tabl Baladi. Enregistré à la Télévision Libanaise avec le violoniste Rafik Hobeika dirigeant l'orchestre.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Εξερευνήστε άλλα κρουστά όργανα:</p>
                    <ul>
                        <li><a href="riqq.php">Το Ρεκ</a></li>
                        <li><a href="tabla.php">Η Τάμπλα</a></li>
                        <!-- <li><a href="tabl_baladi.php">Η Τάμπλα Μπάλαντι</a></li> -->
                        <li><a href="daff.php">Το Νταφ</a></li>
                        <li><a href="mazhar.php">Το Αιγυπτιακό Μάζχαρ</a></li>
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
