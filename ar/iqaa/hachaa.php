<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع هچع ٤/٤";
$page_description = "إيقاع هچع ٤/٤";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, hachaa, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/hachaa.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>إيقاع هَچَع ٤/٤</h1>
                        <h3>(يُلفظ هَتشَع او هَجَع)</h3>
                        <h3>(also in 2/4 and 6/4)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/hachaa_4_4.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Hacha‘ in 4/4 is very popular in Sufi music, especially in pieces that only use percussion instruments. Although the 4/4 version is by far the most prevalent, it is an adaptation of a more folkloric <em>iqa‘</em> by the same name in 2/4. A rare adaptation is the 6/4 version used by composer Baligh Hamdi in Umm Kulthum's "Alf Leila w Leila".
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
                                    <span>Sheikh Hamza Shakkur &amp; Ensemble Al Kindi</span>
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
                                    <b>Subhana</b>
                                    <span>Sheikh Habboush &amp; Ensemble Al Kindi</span>
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
                                    <b>il-Albi Yi‘shaq Kulli Gamil (1961)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Riyad al-Sunbati</span>
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
                                    <span>Abdel Halim Hafez</span>
                                    <span>Music by Muhammad al-Mugi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/qul_lil_maliha_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Qul Lil-Maliha</b>
                                    <span>Sabah Fakhri</span>
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
                                    <span>Hassan al-Haffar</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Need some kind of divider here -->
                    <div class="heading jins text-center">
                        <h3>Examples of the 2/4 form of Iqa‘ Hacha‘</h3>
                    </div>

                    <div class="notation">
                        <img src="../note/iqaa/hachaa_2_4.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_2_4/3al_maya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Al-Maya</b>
                                    <span>Diyab Mashhur</span>
                                    <span>(Syrian Folk Song)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Need some kind of divider here -->
                    <div class="heading jins text-center">
                        <h3>Examples of the 6/4 form of Iqa‘ Hacha‘</h3>
                    </div>

                    <div class="notation">
                        <img src="../note/iqaa/hachaa_6_4.png" class="img-fluid">
                    </div>


                    <div class="track" data-song="/audio/iqaa/hachaa_6_4/alf_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Alf Leila w leila (1969)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Baligh Hamdi</span>
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
    
    <?php include($ROOT . 'ar/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>