<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Hacha‘";
$page_description = "Iqa‘ Hacha‘";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, hachaa, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa/hachaa.php";
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
                        <h1>Iqa‘ Hacha‘ 4/4</h1>
                        <h3>(also in 2/4 and 6/4)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hachaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Hacha‘</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/hachaa_4_4.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Hacha‘ in 4/4 is very popular in Sufi music, especially in pieces that only use percussion instruments. Although the 4/4 version is by far the most prevalent, it is an adaptation of a more folkloric <em>iqa‘</em> by the same name in 2/4. A rare adaptation is the 6/4 version used by composer Baligh Hamdi in Oum Koulthoum's "Alf Leila w Leila".
					</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/hachaa_4_4/hamza_shakkur.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/hachaa_4_4/hamza_shakkur.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Bi-Hamdika Ya Ilahi</b>
                                    <span>Cheikh Hamza Chakkour &amp; Ensemble Al-Kindi</span>
                                    <span><img src="/img/cd.png"> Whirling Dervishes of Damascus Vol. 1</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/habbush_sub7ana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Soubhana</b>
                                    <span>Cheikh Habboush &amp; Ensemble Al-Kindi</span>
                                    <span><img src="/img/cd.png"> Transe Soufie d'Aleppe Vol.2</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/il_alb_yi3shaq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>il-Albi Yi‘shaq Koulli Gamil (1961)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Riyad al-Soumbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/qariat_al_fingan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qari'at al-Fingan (1976)</b>
                                    <span>Abdel Halim Hafez (Égypte)</span>
                                    <span>Musique de Mouhammad al-Mougi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/qul_lil_maliha_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qassida Qul Lil-Maliha</b>
                                    <span>Sabah Fakhri (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/tala3a_al_badru.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tala‘a al-Badru ‘Alayna</b>
                                    <span>Hassan al-Haffar (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Need some kind of divider here -->
                    <div class="heading jins text-center">
                        <h3>Examples of the 2/4 form of Iqa‘ Hacha‘</h3>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/hachaa_2_4.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_2_4/3al_maya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Al-Maya</b>
                                    <span>Diyab Machhour</span>
                                    <span>(Folklore Syrien)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Need some kind of divider here -->
                    <div class="heading jins text-center">
                        <h3>Examples of the 6/4 form of Iqa‘ Hacha‘</h3>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/hachaa_6_4.png" class="img-fluid">
                    </div>


                    <div class="track" data-song="/audio/iqaa/hachaa_6_4/alf_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Alf Leila w leila (1969)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Baligh Hamdi</span>
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