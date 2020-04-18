<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Sikah";
$page_description = "Jins Sikah";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "es/jins/sikah.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins Sikah</h1>
                        <h3>Raíz de la <a href="../maqam/f_sikah.php">Familia Maqam Sikah</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sikah.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Sikah</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/jins/sikah.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Haz clic en cada nota y mantenga presionado para oírla.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="37,97,12" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="96,89,12" href="#" alt="Re♮" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="134,89,12" href="#" alt="Re♯" class="playNote" data-frequency="310" data-parent="#notation1"><!-- leading tone -->
					  <area shape="circle" coords="198,81,14" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable 318~324-->
					  <area shape="circle" coords="273,72,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="351,65,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="425,56,12" href="#" alt="La♭" class="playNote" data-frequency="422" data-parent="#notation1"><!-- fine tuned up from 411-->
					</map>

                    <p>
                        El Jins Sikah es un jins de 3 notas. Se escribe aquí con su tónico en <strong>Mi</strong><i class='icon-halfflat'></i> y su <em>ghammaz</em> en <strong>Sol</strong>. Jins Sikah es el primer jins en <a href="../maqam/sikah.php">Maqam Sikah</a>, <a href="../maqam/huzam.php">Maqam Huzam</a>, <a href="../maqam/iraq.php">Maqam ‘Iraq</a> y <a href="../maqam/bastanikar.php">Maqam Bastanikar</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/sikah/el_ward_gamil.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/sikah/el_ward_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>il-Ward Gamil (1946)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Zakariyya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/sikah/abuz_zulof.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hayhat Yabu al-Zuluf</b>
                                    <span>Sabah</span>
                                    <span>(Lebanese Folklore)</span>
                                </div>
                            </label>
                        </div>
                    </div>

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