<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Wahda Kabira";
$page_description = "Iqa‘ Wahda Kabira";
$page_keywords = "musique arabe, mode arabe, maqam, jins, iqa‘, iqaa, rhythme, wahda kabira, wahda sunbati, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/wahda_kabira.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Wahda Kabira 8/4</h1>
                        <h3>(aussi appelé <strong>Wahda Soumbati</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/wahda_kabira.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Wahda Kabira</a>
                    </div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/wahda_sunbati.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Wahda Soumbati</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/wahda_kabira.png" class="img-fluid">
                    </div>

                    <p>Le Iqa‘ Wahda Kabira (<em>kabira</em> veut dire 'grande' en arabe), aussi appelé <strong>Wahda Soumbati</strong>, est une version ralentie sur deux mesures du <a href="wahda.php">Iqa‘ Wahda</a>. Il est très populaire dans la musique vocale et instrumentale de la moitié du 20ième siècle.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/wahda_kabira/khatwit_habibi.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/wahda_kabira/khatwit_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Khatwit Habibi (1953)</b>
                                    <span>Instrumental by Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_kabira/habibi_yis3ed.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Habibi Yis‘id Awqatou (1943)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_kabira/il_albi_yi3shaq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>El-Albi Yi‘shaq Koulli Gamil (1961)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Riyad al-Soumbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_kabira/tuta.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Touta</b>
                                    <span>Composition Instrumentale</span>
                                    <span>Musique de Farid al-Atrache</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_kabira/ya_bid3_el_ward.mp3 ">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Bid‘ el-Ward (1944)</b>
                                    <span>Asmahan</span>
                                    <span>Musique de Farid al-Atrache</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_kabira/sawa_rbina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sawa Rbina (1968)</b>
                                    <span>Fairouz (Liban)</span>
                                    <span>Musique et paroles des Frères Rahbani</span>
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

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>