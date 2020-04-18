<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "El Maqam Árabe";
$page_description = "El Maqam Árabe";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
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
              El Maqam árabe (Maqamat plural) es un sistema de escalas, frases melódicas habituales, posibilidades de modulación, técnicas de ornamentación y convenciones estéticas que juntas forman un rico marco melódico y tradición artística. El curso melódico del maqam (en música compuesta o improvisada) dentro de ese marco se llama <em>sayr</em> en árabe.
        </p>
          <p>
              Cada escala de maqam puede construirse encadenando dos (o en algunos casos, tres) fragmentos de escala o bloques de construcción llamados <a href="jins.php">Jins</a> (pl. Ajnas). El maqam obtiene sus intervalos, comportamiento melódico y estado de ánimo general de estos ajnas constituyentes. Los primeros jins siempre inician la escala maqam con su tónica en primer grado, y los segundos jins comienzan en el <em>ghammaz</em> (punto de modulación) de los primeros jins (generalmente su última nota). Si se usa un tercer jins, su tónica coincide con el ghammaz del segundo jins, y así sucesivamente. La nota inmediatamente debajo de la tónica se llama el tono principal.
            </p>
          <p>
              Tradicionalmente, cada maqam se basa en una escala. La primera nota en la escala se llama <em>tónica</em>. Las escalas de Maqam generalmente están compuestas por 7 notas que se repiten en la octava, aunque algunas escalas de Maqam pueden extenderse más allá de las 8 notas. Además, algunas escalas de maqam no alcanzan la equivalencia de octava en la octava nota.
            </p>
          <p>
              De acuerdo con la tradición, los maqamat se clasifican en familias según el hecho de compartir los mismos primeros jins (raíz). La raíz jins desempeña el papel más importante en la definición del carácter del maqam. El maqam más común en la rama usualmente comparte su nombre con los jins raíz. Los maqamat restantes en la misma familia se denominan maqamat de rama y se basan en el uso de un segundo jins (superior) diferente.
            </p>

          <p>
              Puede empezar su exploración de los maqamat por esas familias mencionadas aquí, o por medio del índice proveído aquí, de los varios maqamat.
        </p>

          <ul>
            <li><a href="maqam/f_ajam.php">Familia Maqam ‘Ajam</a></li>
            <li><a href="maqam/f_bayati.php">Familia Maqam Bayati</a></li>
            <li><a href="maqam/f_hijaz.php">Familia Maqam Hijaz</a></li>
            <li><a href="maqam/f_kurd.php">Familia Maqam Kurd</a></li>
            <li><a href="maqam/f_nahawand.php">Familia Maqam Nahawand</a></li>
            <li><a href="maqam/f_nikriz.php">Familia Maqam Nikriz</a></li>
            <li><a href="maqam/f_rast.php">Familia Maqam Rast</a></li>
            <li><a href="maqam/f_sikah.php">Familia Maqam Sikah</a></li>
          </ul>

            <p>
                Unos pocos <em>maqamat</em> no comparten su primero <em>jins</em> con ningún otro, y por lo tanto no son parte de una familia:
            </p>

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