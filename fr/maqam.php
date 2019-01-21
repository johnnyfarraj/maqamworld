<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Arabic Maqam";
$page_description = "Arabic Music Maqam Jins";
$page_keywords = "musique arabe, maqam, instruments, jins, iqa‘, iqaa, rythme, oud, qanoun, nay, quart de ton, tarab";
$page_language = "fr"; // YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

 <body class="maqams-page">

  <?php
   $page = "fr/maqam.php";
   include($ROOT . 'inc/menu.php');
  ?>

  <div class="page">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
          <?php include('sidemenu-maqam.php'); ?>
        </div>
        <div class="col-md-9 col-sm-9">

          <div class="heading text-center jins">
            <h1>The Arabic Maqam</h1>
            <h3>A system of scales, habitual melodic phrases, modulation possibilities, ornamentation norms, and aesthetic conventions</h3>
          </div>
          <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
          <div class="clearfix"></div>

          <div class="text-center mt-2 mb-3">
            <a href="#" class="pronunciation btn btn-default" data-audio="/name/maqam.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Maqam/Maqamat</a>
          </div>

          <p>The Arabic Maqam (plural Maqamat) is a system of scales, habitual melodic phrases, modulation possibilities, ornamentation techniques and aesthetic conventions that together form a rich melodic framework and artistic tradition. The <em>maqam</em>'s melodic course (in both composed or improvised music) within that framework is called <em>sayr</em> in Arabic.</p>

          <p>Each <em>maqam</em> scale can be built by chaining together two (or in some cases, three) scale fragments or building blocks called a <a href="jins.php">jins (pl. ajnas)</a>. The <em>maqam</em> gets its intervals, melodic behavior and overall mood from these constituent <em>ajnas</em>. The first <em>jins</em> always starts the <em>maqam</em> scale with its tonic at the 1<sup>st</sup> degree, and the second <em>jins</em> starts at the <em>ghammaz</em> (modulation point) of the first <em>jins</em> (usually its last note). If a third <em>jins</em> is used, its tonic coincides with the second <em>jins</em>’ <em>ghammaz</em>, and so on. The note immediately below the tonic is called the <em>leading tone</em>.</p>

          <p>Traditionally, each <em>maqam</em> is based on a scale. The first note in the scale is called the <em>tonic</em>. <em>Maqam</em> scales are usually made of 7 notes that repeat at the octave, although a few <em>maqam</em> scales may extend beyond 8 notes. In addition, a few <em>maqam</em> scales do not achieve octave equivalence at the 8<sup>th</sup> note. </p>

          <p>According to tradition, <em>maqamat</em> are classified into families based on sharing the same first (root) <em>jins</em>. The root <em>jins</em> plays the largest role in defining the <em>maqam</em>’s character. The most common <em>maqam</em> in the branch usually shares its name with the root <em>jins</em>. Remaining <em>maqamat</em> in the same family are called branch <em>maqamat</em>, and are based on the use of a different second (upper) <em>jins</em>.</p>

          <p>You can start exploring <em>maqamat</em> by family, or one at a time, by using the Maqam Index. </p>

          <ul>
            <li><a href="maqam/f_ajam.php">Maqam ‘Ajam Family</a></li>
            <li><a href="maqam/f_bayati.php">Maqam Bayati Family</a></li>
            <li><a href="maqam/f_hijaz.php">Maqam Hijaz Family</a></li>
            <li><a href="maqam/f_kurd.php">Maqam Kurd Family</a></li>
            <li><a href="maqam/f_nahawand.php">Maqam Nahawand Family</a></li>
            <li><a href="maqam/f_nikriz.php">Maqam Nikriz Family</a></li>
            <li><a href="maqam/f_rast.php">Maqam Rast Family</a></li>
            <li><a href="maqam/f_sikah.php">Maqam Sikah Family</a></li>
          </ul>

          <p>A few Maqamat do not share their first jins with any others and are therefore not part of a family. These are: </p>

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

  <?php include($ROOT . 'fr/footer.php'); ?>
  <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

 </body>
</html>