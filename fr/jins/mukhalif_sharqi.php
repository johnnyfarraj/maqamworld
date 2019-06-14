<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins Moukhalef Sharqi";
$page_description = "Jins Moukhalef Sharqi";
$page_keywords = "musique arabe, maqam, instruments, jins moukhalef sharqui, iqa‘, iqaa, rythme, oud, qanoun, nay, quart de ton, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "fr/jins/mukhalif_sharqi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins Moukhalef Sharqi <span class="badge badge-custom">Nouveau</span></h1>
                        <h3>Une variation du <a href="sikah.php">Jins Sikah</a> avec une tierce abaissée</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Ajnas</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mukhalif_sharqi.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Moukhalef Sharqi</a>
                    </div>
                    <div class="notation" id="notation1">
                        <img src="/note/jins/mukhalif_sharqi.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="80,87,14" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!--variable-->
					  <area shape="circle" coords="155,79,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="233,70,13" href="#" alt="Sol♭" class="playNote" data-frequency="365.32" data-parent="#notation1">

					</map>
                    <p>Le Jins Moukhalef Sharqi  n'a pas de <em>ghammaz</em> et donc pas de taille définie. Il est noté ici avec sa tonique sur Mi<i class="icon-halfflat"></i>. Le Jins Moukhalef Sharqi  ne fait partie d'aucun <em>maqam</em> et apparaît généralement comme une modulation à partir du <a href="sikah.php">Jins Sikah</a>.
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/mukhalif_sharqi/emta_el_hawa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/jins/mukhalif_sharqi/emta_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Dawr Emta el-Hawa (1936)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/ghannili.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ghannili Chwayy Chwayy (1945)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Zakaria Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/raqsat_al_sus.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Raqsat al-Sous (1974)</b>
                                    <span>Musique des Frères Rahbani (Liban)</span>
                                    <span>De l'opérette "Loulou"</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/lisan_el_dam3i.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Lisan el-Dam‘i</b>
                                    <span>Youssof al-Manyalawi (Égypte)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/mahtiyali_khana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ma-htiyali (khana)</b>
                                    <span>Aïcha Redouane (Maroc/France)</span>
                                    <span><img src="/img/cd.png"> Arabesques Vocales &copy; 2000</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/muwashah_ya_samiri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ya Samiri Da‘a Sabri</b>
                                    <span>Mouhammad Khayri (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/tahmila_suznak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tahmila Rast (Suznak)</b>
                                    <span>Aïcha Redouane (Maroc/France)</span>
                                    <span><img src="/img/cd.png"> Arabesques Vocales &copy; 2000</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/ya_sahib_el_gamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya ‘Ammi Ya Saheb el-Gamal</b>
                                    <span>Interprétation et Musique de Ahmed Adaweyah</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/abdu_daghir_violin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim au Violon</b>
                                    <span>Abdou Dagher (Égypte)</span>
                                    <span><img src="/img/cd.png"> Al-Gibali</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/el_layli_mish_bukra.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Layli Ma Birda Bukra</b>
                                    <span>Interprétation et Musique de Wadih al-Safi (Liban)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/ib3id_3anni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ib‘id ‘Anni ‘Ouyounak</b>
                                    <span>Yasmine al-Khayyam (Égypte)</span>
                                    <span>Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/mukhalif_sharqi/ib3id_3anni_nay.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ib‘id ‘Anni ‘Ouyounak (Solo de Nay)</b>
                                    <span>Yasmine al-Khayyam (Égypte)</span>
                                    <span>Musique de Mouhammad Abdel Wahab</span>
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