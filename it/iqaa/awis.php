<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ ‘Awis";
$page_description = "Iqa‘ ‘Awis";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, ‘awis, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/awis.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ ‘Awis 11/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/awis.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di ‘Awis</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/awis.png" class="img-fluid">
                    </div>

                    <p>L'Iqa‘ ‘Awis è usato principalmente nel genere <a href="../form/vocal_comp.php#muwashah">Muwashah</a>. Alcuni ‘Awis iniziano sul terzo battito (il primo <em>tak</em>), come per esempio  "Muwashah Munyati Man Rumtu Qurbuhu". Mentre in "Muwashah Hibbi Da‘ani Lil-Wisal" la melodia inizia sull'undicesimo battito (l'ultimo <em>tak</em>).
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/awis/hibbi_da3ani1.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/awis/hibbi_da3ani1.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Hibbi Da‘ani Lil-Wisal</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Musica di Sayyed Darwish</span>
                                    <span><img src="/img/cd.png"> Nagham Al-Ams Vol.2 - Bayati Shuri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/munyati_man_rumtu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Munyati Man Rumtu Qurbuh</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Musica di Omar al-Batsh</span>
                                    <span><img src="/img/cd.png"> Nagham Al-Ams Vol.9 - Rast</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/munyati_sidul_milah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Munyati Sidu-l-Milah</b>
                                    <span>(è stata eseguita in 11/4)</span>
                                    <span>Il munshid Mahmud Fares</span>
                                    <span>Musica di Omar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/ukhfi_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ukhfi el-Hawa (2019)</b>
                                    <span>Gruppo del patrimonio musicale arabo (Libano)</span>
                                    <span>Musica di Dr. Hayaf Yassine</span>
                                    <span>Poesia di Omar Ibn al-Fared</span>
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

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>