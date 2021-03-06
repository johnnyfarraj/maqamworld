<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Katakufti";
$page_description = "Iqa‘ Katakufti";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, katakufti, nawari, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/katakufti.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Nawari 8/8</h1>
                        <h3>(auch <strong>Katakufti</strong> genannt)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/katakufti.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Nawari</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/nawari.png" class="img-fluid">
                    </div>

                    <p>Iqa‘at Katakufti (auch Nawari genannt) ist eine Variation auf <a href="saidi.php">Iqa‘ Sa‘idi</a> und <a href="baladi.php">Baladi</a>, die vor allem in der levantinischen Volksmusik und im Dabke-Reihentanz Verwendung findet.</p>

                    <!-- TODO -->
                    <p>Iqa‘ Nawari is often called <strong>Katakufti</strong> by percussionists, although the original <a href="katakufti.php">Iqa‘ Katakufti</a> has a different signature. The reason for this alternate name is because Iqa‘ Katakufti sounds exactly like Nawari when it is started from the last <em>tak</em>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/katakufti/ya_3ein_mulayyitein.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/katakufti/ya_3ein_mulayyitein.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ya ‘Ein Mulayyitein</b>
                                    <span>Samira Tawfiq</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/katakufti/dal3ona.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dal‘ona (traditional)</b>
                                    <span>(ausführender Musiker unbekannt)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/katakufti/el_funun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Initiation Of Ecstasy</b>
                                    <span>El-Funoun Ensemble</span>
                                    <span><img src="/img/cd.png"> Zaghareed: Music From The Palestinian Holy Land</span>
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

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>