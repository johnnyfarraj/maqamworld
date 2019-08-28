<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Maqam Arabo";
$page_description = "Il Maqam Arabo";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

 <body class="maqams-page">

  <?php
   $page = "it/maqam.php";
   include($ROOT . 'inc/menu.php');
  ?>

  <div class="page">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
          <?php include('sidemenu-maqam.php'); ?>
        </div>
        <div class="col-md-9 col-sm-9">

          <div class="heading text-center jins">
            <h1>Il Maqam Arabo</h1>
            <h3>Un sistema di scale, frasi melodiche abituali, possibilità di modulazione, norme di abbellimento e convenzioni estetiche</h3>
          </div>
          <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
          <div class="clearfix"></div>

          <div class="text-center mt-2 mb-3">
            <a href="#" class="pronunciation btn btn-default" data-audio="/name/maqam.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Maqam/Maqamat</a>
          </div>

          <p>Il Maqam Arabo (plurale <em>maqamat</em>) è un sistema di scale, frasi melodiche abituali, possibilità di modulazione, norme di abbellimento e convenzioni estetiche che insieme formano una ricca struttura melodica e una tradizione artistica. Il svolgimento della melodia del <em>maqam</em> (sia nella musica composta che improvvisata) con questa struttura è chiamata <sayr>sayr</sayr> in Arabo.</p>

          <p>Ogni maqam può essere costruito unendo insieme due (o in alcuni casi tre) frammenti di scale o blocchi chiamati <a href="jins.php">jins</a> (plurale <em>ajnas</em>). Il <em>maqam</em> deriva i suoi intervalli, il suo comportamento melodico e il suo "umore" dagli <em>ajnas</em> che lo costituiscono. Il primo jins inizia sempre il <em>maqam</em> con la sua tonica sul primo grado, e il secondo <em>jins</em> inizia sul <em>ghammaz</em> (punto di modulazione) del primo <em>jins</em> (di cui solitamente è l'ultima nota). Se vi è anche un terzo jins la sua tonica coinciderà con il <em>ghammaz</em> del secondo jins e così via. La nota subito prima della tonica è chiamata "la sensibile".</p>

          <p>Tradizionalmente ogni <em>maqam</em> è basato su una scala. La prima nota della scala è chiamata tonica. La scala del <em>maqam</em> è solitamente formata da 7 note che si ripetono all’ottava superiore, anche se alcuni <em>maqam</em> presentano anche più di 8 note. Inoltre alcuni maqam non raggiungono l'ottava equivalente sull'ottava nota.</p>

          <p>Secondo la tradizione, i <em>maqamat</em> sono classificati in famiglie in base al primo jins (fondamentale) che condividono. Il <em>jins</em> fondamentale ha un ruolo importante nel definire il carattere del <em>maqam</em>. Il <em>maqam</em> più popolare all'interno della famiglia di solito ha lo stesso nome del primo <em>jins</em>. Gli altri <em>maqamat</em> sono chiamati <em>maqamat</em> derivati, e sono basati sull'uso di un secondo (superiore) <em>jins</em>.</p>

            <p>Puoi iniziare a scoprire i <em>maqamat</em> in base alla famiglia, o uno per volta, utilizzando <strong>l'indice</strong>.
            </p>

          <ul>
            <li><a href="maqam/f_ajam.php">Famiglia Maqam ‘Ajam</a></li>
            <li><a href="maqam/f_bayati.php">Famiglia Maqam Bayati</a></li>
            <li><a href="maqam/f_hijaz.php">Famiglia Maqam Hijaz</a></li>
            <li><a href="maqam/f_kurd.php">Famiglia Maqam Kurd</a></li>
            <li><a href="maqam/f_nahawand.php">Famiglia Maqam Nahawand</a></li>
            <li><a href="maqam/f_nikriz.php">Famiglia Maqam Nikriz</a></li>
            <li><a href="maqam/f_rast.php">Famiglia Maqam Rast</a></li>
            <li><a href="maqam/f_sikah.php">Famiglia Maqam Sikah</a></li>
          </ul>

          <p>Alcuni maqam non condividono il primo jins con nessun altro maqam e per questo non fanno parte di alcuna famiglia. Questi sono: </p>

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

  <?php include($ROOT . 'it/footer.php'); ?>
  <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

 </body>
</html>