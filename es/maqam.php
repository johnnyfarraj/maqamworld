<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "El Maqam Árabe";
$page_description = "El Maqam Árabe";
$page_keywords = "TODO arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

 <body class="maqams-page">

  <?php
   $page = "es/maqam.php";
   include($ROOT . 'inc/menu.php');
  ?>

  <div class="page">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
          <?php include('sidemenu-maqam.php'); ?>
        </div>
        <div class="col-md-9 col-sm-9">

          <div class="heading text-center jins">
            <h1>El Maqam Árabe</h1>
              <h3>Un sistema de escalas, frases melódicas típicas, posibles modulaciones,</h3>
              <h3>normas de ornamentación, y convenciones estéticas</h3>
          </div>
          <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
          <div class="clearfix"></div>

          <div class="text-center mt-2 mb-3">
            <a href="#" class="pronunciation btn btn-default" data-audio="/name/maqam.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Maqam / Maqamat</a>
          </div>

          <p>
              El Maqam Arabe (plural: maqamat) es un sistema de escalas, frases melódicas típicas, posibles modulaciones, normas de ornamentación, y convenciones estéticas las cuales se juntan para formar una estructura melódica rica y una tradición artística. La onda melódica de esos cambios o modulaciones en el maqam (ya sea el contexto compuesto o improvisado) se llama <em>sayr</em> en árabe.
        </p>

          <p>
              Se puede construir cada maqam o escala encadenando dos o a veces tres fragmentos que se llaman <a href="jins.php">jins</a> (plural: <em>ajnas</em>). El maqam deriva sus intervalos, su comportamiento melódico, y su humor general por parte de aquellos ajnas constituyentes. El primer <em>jins</em> siempre empieza la escala maqam con su tónico, la primera nota del <em>jins</em>, y el segundo <em>jins</em> empieza desde el ghammaz (punto de modulación) del primer <em>jins</em> (generalmente, la última nota). Si se utiliza un tercer <em>jins</em>, su tónico también coincide con el ghammaz del segundo, etc. Y la nota inmediatamente por debajo del primer tónico se llama el tono <em>leading tone</em>.
            </p>

          <p>
              Cada maqam está basada en una cierta escala. La primera nota en la escala se llama el <em>tónico</em>. Las escalas maqam están generalmente constituidas por siete notas las cuales se repiten en la octava, aunque algunas escalas maqam puedan extenderse más de ocho notas. También, algunas escalas maqam no llegan a la octava en la octava nota.
            </p>

          <p>
              Según la tradición, se clasifican los maqamat por familias que comparten el mismo primer jins (o raíz). Este jins raíz juega el papel más grande en definir el cáracter del maqam. El maqam más común en la rama comparte el mismo nombre que el jins raíz. Los demás maqamat en la familia se llaman maqamat ramas, y se basan en el uso de un jins segundo diferente por encima del primero.
            </p>

          <p>Usted puede empezar su exploración de los maqamat por esas familias mencionadas aquí, o por medio del índice proveído aquí, de los varios maqamat.</p>

          <ul>
            <li><a href="maqam/f_ajam.php">La Familia del Maqam ‘Ajam</a></li>
            <li><a href="maqam/f_bayati.php">La Familia del Maqam Bayati</a></li>
            <li><a href="maqam/f_hijaz.php">La Familia del Maqam Hijaz</a></li>
            <li><a href="maqam/f_kurd.php">La Familia del Maqam Kurd</a></li>
            <li><a href="maqam/f_nahawand.php">La Familia del Maqam Nahawand</a></li>
            <li><a href="maqam/f_nikriz.php">La Familia del Maqam Nikriz</a></li>
            <li><a href="maqam/f_rast.php">La Familia del Maqam Rast</a></li>
            <li><a href="maqam/f_sikah.php">La Familia del Maqam Sikah</a></li>
          </ul>

            <p>Unos pocos <em>maqamat</em> no comparten su primero <em>jins</em> con ningún otro, y por lo tanto no son parte de una familia:</p>

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

  <?php include($ROOT . 'es/footer.php'); ?>
  <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

 </body>
</html>