<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "O Maqam Árabe";
$page_description = "O Maqam Árabe";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

 <body class="maqams-page">

  <?php
   $page = "pt/maqam.php";
   include($ROOT . 'inc/menu.php');
  ?>

  <div class="page">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice dos Maqamat</a>
          <?php include('sidemenu-maqam.php'); ?>
        </div>
        <div class="col-md-9 col-sm-9">

          <div class="heading text-center jins">
            <h1>O Maqam Árabe</h1>
            <h3>Um sistema de escalas, frases melódicas típicas, possibilidades de modulação, normas de ornamentação e convenções estéticas</h3>
          </div>
          <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice dos Maqamat</a>
          <div class="clearfix"></div>

          <div class="text-center mt-2 mb-3">
            <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/maqam.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Maqam/Maqamat</a>
          </div>

          <p>O Maqam árabe (plural Maqamat) é um sistema de escalas, frases melódicas habituais, possibilidades de modulação, técnicas de ornamentação e convenções estéticas que, juntas, formam uma rica estrutura melódica e tradição artística. O percurso melódico do <em>maqam</em> (tanto em música composta quanto em improvisada) dentro dessa estrutura é chamado de <em>sayr</em> em árabe.</p>

          <p>Cada escala <em>maqam</em> pode ser construída juntando dois (ou, em alguns casos, três) fragmentos de escala ou blocos de construção chamados <a href="jins.php">jins</a> (pl. ajnas). O <em>maqam</em> obtém seus intervalos, seu comportamento melódico e seu humor geral a partir destes ajnas constituintes. O primeiro <em>jins</em> sempre inicia a escala <em>maqam</em> com sua tônica no primeiro grau, e o segundo <em>jins</em> começa no <em>ghammaz</em> (ponto de modulação) do primeiro <em>jins</em> (geralmente sua última nota). Se um terceiro <em>jins</em> for usado, sua tônica coincidirá com o <em>ghammaz</em> do segundo <em>jins</em>, e assim por diante. A nota imediatamente abaixo da tônica é chamada de sensível.</p>

          <p>Tradicionalmente, cada <em>maqam</em> é baseado em uma escala. A primeira nota da escala é chamada de tônica. As escalas <em>maqam</em> são geralmente compostas por 7 notas que se repetem na oitava, embora algumas escalas <em>maqam</em> possam se estender para além de 8 notas. Além disso, algumas escalas <em>maqam</em> não alcançam equivalência de oitava na 8ª nota.</p>

          <p>De acordo com a tradição, os <em>maqamat</em> são classificados em famílias com base no compartilhamento do mesmo <em>jins</em> inicial (mesma raiz). O <em>jins</em> inicial desempenha o papel mais importante na definição do caráter do <em>maqam</em>. O <em>maqam</em> mais comum da família geralmente compartilha seu nome com o <em>jins</em> inicial. Os demais <em>maqamat</em> na mesma família são chamados de <em>maqamat</em> ramificados e são baseados no uso de um segundo <em>jins</em> (superior) diferente.</p>

          <p>Você pode começar a explorar os maqamat por família, ou um de cada vez, usando o Índice dos Maqamat.</p>

          <ul>
            <li><a href="maqam/f_ajam.php">Família do Maqam ‘Ajam</a></li>
            <li><a href="maqam/f_bayati.php">Família do Maqam Bayati</a></li>
            <li><a href="maqam/f_hijaz.php">Família do Maqam Hijaz</a></li>
            <li><a href="maqam/f_kurd.php">Família do Maqam Kurd</a></li>
            <li><a href="maqam/f_nahawand.php">Família do Maqam Nahawand</a></li>
            <li><a href="maqam/f_nikriz.php">Família do Maqam Nikriz</a></li>
            <li><a href="maqam/f_rast.php">Família do Maqam Rast</a></li>
            <li><a href="maqam/f_sikah.php">Família do Maqam Sikah</a></li>
          </ul>

          <p>Alguns maqamat não compartilham seu jins inicial com outros maqamat, e portanto não pertencem a nenhuma família. Eles são:</p>

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

  <?php include($ROOT . 'pt/footer.php'); ?>
  <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

 </body>
</html>