<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Hatcha‘";
$page_description = "Iqa‘ Hatcha‘";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, hachaa, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "pt/iqaa/hachaa.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘at</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>O Iqa‘ Hatcha‘ 4/4</h1>
                        <h3>(também pode ser tocado em 2/4 e 6/4)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hachaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Hatcha‘</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/hachaa_4_4.png" class="img-fluid">
                    </div>

                    <p>O Iqa‘ Hatcha‘ em 4/4 é muito popular na música sufi, especialmente em peças que utilizam somente instrumentos de percussão. Embora a versão em 4/4 seja de longe a mais prevalente, ela é uma adaptação de um <em>iqa‘</em> mais folclórico de mesmo nome em 2/4. Uma adaptação rara é a versão em 6/4 utilizada pelo compositor Baligh Hamdi em “Alf Leila w Leila”, de Umm Kulthum.
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
                                    <span>Sheikh Hamza Shakkur e Conjunto Al-Kindi</span>
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
                                    <span>Sheikh Habboush e Conjunto Al-Kindi</span>
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
                                    <span>Música de Riyad al-Sunbati</span>
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
                                    <span>Música de Muhammad al-Mugi</span>
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

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/hachaa_4_4.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Hatcha‘ 4/4</b>
                                    <span>Demonstração em Tabla por Faisal Zedan</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Exemplos da 2/4 forma de Iqa‘ Hatcha‘</h3>
                    </div>
                    <br>

                    <div class="notation">
                        <img src="/note/iqaa/hachaa_2_4.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_2_4/3al_maya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Al-Maya</b>
                                    <span>Diyab Mashhur</span>
                                    <span>(Canção popular síria)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/hachaa_2_4.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Hatcha‘ 2/4</b>
                                    <span>Demonstração em Tabla por Faisal Zedan</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Exemplos da 6/4 forma de Iqa‘ Hatcha‘</h3>
                    </div>
                    <br>

                    <div class="notation">
                        <img src="/note/iqaa/hachaa_6_4.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_6_4/alf_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Alf Leila w leila (1969)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Baligh Hamdi (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/hachaa_6_4.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Hatcha‘ 6/4</b>
                                    <span>Demonstração em Tabla por Faisal Zedan</span>
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
    
    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>