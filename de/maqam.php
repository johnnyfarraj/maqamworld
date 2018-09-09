<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Der arabische Maqam";
$page_description = "Der arabische Maqam";
$page_keywords = "arabischen Musik, arabische Maqam, Jins, Ghammaz";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

 <body class="maqams-page">

  <?php
   $page = "de/maqam.php";
   include($ROOT . 'inc/menu.php');
  ?>

  <div class="page">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
          <?php include('sidemenu-maqam.php'); ?>
        </div>
        <div class="col-md-9 col-sm-9">

          <div class="heading text-center jins">
            <h1>Der arabische Maqam</h1>
            <h3>System von Skalen, gebräuchlichen melodischen Phrasen, Modulationsmöglichkeiten, </h3>
            <h3>Ornamentierungsvorgaben und ästhetischen Konventionen</h3>
          </div>
          <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
          <div class="clearfix"></div>

          <div class="text-center mt-2 mb-3">
            <a href="#" class="pronunciation btn btn-default" data-audio="/name/maqam.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache der Maqam/Maqamat</a>
          </div>

          <p>Der arabische Maqam (im Arabischen maskulin, im Deutschen auch im Neutrum gebräuchlich; Plural: Maqamat) ist ein System von Skalen, gebräuchlichen melodischen Phrasen, Modulationsmöglichkeiten, Ornamentierungsvorgaben und ästhetischen Vorgaben, die gemeinsam einen reichhaltigen melodischen Rahmen und Kunsttradition ausmachen. Der Melodieverlauf eines Maqams heißt arabischen Sayr. Das gilt sowohl für komponierte als auch für improvisierte Musik. </p>

          <p>Jede Maqamskala lässt sich bilden, indem man zwei oder manchmal auch drei Skalenfragmente namens <a href="jins.php">Jins</a> (Plural: Ajnas) aneinanderhängt. Diesen konstituierenden Ajnas verdankt der Maqam seine Intervalle, sein Melodieverhalten und Stimmung. Das erste <em>Jins</em> beginnt die Leiter auf seinem eigenen Grundton als erster Stufe. Das zweite <em>Jins</em> beginnt am <em>Ghammaz</em> (Modulationspunkt) des ersten <em>Jins</em>. Das ist gewöhnlich die Schlussnote des ersten <em>Jins</em>. Falls ein drittes <em>Jins</em> benutzt wird, entspricht sein Grundton dem <em>Ghammaz</em> des zweiten <em>Jins</em> und so fort. Der Ton unter dem Grundton wird Leitton genannt.</p>

          <p>Traditionell basiert jeder Maqam auf einer Leiter. Der erste Ton wird Tonika genannt. Maqamskalen bestehen gewöhnlich aus sieben Tönen, die sich ab der Oktave wiederholen. Einige wenige Maqamskalen erstrecken sich aber auch über mehr als eine Oktave. Manch andere wiederum haben keine Oktavgleichheit.</p>

          <p>Traditionell werden Maqamat in Familien eingeteilt. Die Zugehörigkeit zur Familie hängt vom Grundton ab. Der Wurzel-Maqam spielt die wichtigste Rolle für den Charakter des jeweiligen Maqam. Der gebräuchlichste Maqam hat gewöhnlich denselben Namen wie das zugehörige <em>Jins</em>. Die übrigen Maqamat heißen Zweig-Maqamat und unterscheiden sich im zweiten, oberen <em>Jins</em>.</p>

          <p>Sie können Maqamat nach Familien erkunden oder auch einzeln, indem Sie das Maqam-Verzeichnis benutzen. </p>

          <ul>
            <li><a href="maqam/f_ajam.php">Maqam-‘Ajam-Familie</a></li>
            <li><a href="maqam/f_bayati.php">Maqam-Bayati-Familie</a></li>
            <li><a href="maqam/f_hijaz.php">Maqam-Hijaz-Familie</a></li>
            <li><a href="maqam/f_kurd.php">Maqam-Kurd-Familie</a></li>
            <li><a href="maqam/f_nahawand.php">Maqam-Nahawand-Familie</a></li>
            <li><a href="maqam/f_nikriz.php">Maqam-Nikriz-Familie</a></li>
            <li><a href="maqam/f_rast.php">Maqam-Rast-Familie</a></li>
            <li><a href="maqam/f_sikah.php">Maqam-Sikah-Familie</a></li>
          </ul>

          <p>Einige wenige Maqamat teilen ihr erstes Jins nicht mit anderen. Daher bilden sie keine Familien. Diese sind:</p>

          <ul>
            <li><a href="maqam/jiharkah.php">Maqam Jiharkah</a></li>
            <li><a href="maqam/lami.php">Maqam Lami</a></li>
            <li><a href="maqam/saba.php">Maqam Saba</a></li>
            <li><a href="maqam/saba_zamzam.php">Maqam Saba Zamzam</a></li>
            <li><a href="maqam/sikah_baladi.php">Maqam Sikah Baladi</a></li>
          </ul>

        </div>
        <div class="col-sm-12">
          <?php include($ROOT . 'inc/768x90.php'); ?>
        </div>
      </div>
    </div>
  </div>

  <?php include($ROOT . 'de/footer.php'); ?>
  <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

 </body>
</html>