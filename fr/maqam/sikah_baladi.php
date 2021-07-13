<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Sikah Baladi";
$page_description = "Maqam Sikah Baladi";
$page_keywords = "musique arabe, mode arabe, maqam, jins, sikah baladi, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "fr/maqam/sikah_baladi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Sikah Baladi</h1>
                        <h3>(n'apartient pas à une famille de maqams)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Maqams</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/sikah_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Sikah Baladi</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/sikah_baladi.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clickez et appuyez sur chaque note à l'aide de la souris pour l'entendre jouer.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="69,90,13" href="#" alt="Do↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="149,98,13" href="#" alt="Si<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="227,106,13" href="#" alt="La<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="302,114,13" href="#" alt="Sol" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="381,122,13" href="#" alt="Fa<i class='icon-halfsharp'></i>↑" class="playNote" data-frequency="xxxx" data-parent="#notation1">
					  <area shape="circle" coords="462,131,13" href="#" alt="Mi<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="533,139,13" href="#" alt="Ré" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="605,147,13" href="#" alt="Do♯" class="playNote" data-frequency="xxx" data-parent="#notation1">
                      <area shape="circle" coords="672,147,13" href="#" alt="Do↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="737,155,13" href="#" alt="Si<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="817,164,13" href="#" alt="La<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="893,173,13" href="#" alt="Sol" class="playNote" data-frequency="xxx" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="174,8,374,38" href="../jins/sikah_baladi.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="675,16,874,46" href="../jins/sikah_baladi.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="272,184,636,213" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">

                      </map>
                    <p>Le Maqam Sikah Baladi est probablement le maqam arabe le plus difficile. Sa gamme (et son <em>sayr</em>) est en quelque sorte un hybride entre le <a href="huzam.php">Maqam Houzam</a> sur une note Sikah non conventionnelle, et du <a href="hijazkar.php">Maqam Hijazkar</a>. Les intervalles sont différents de ces derniers quoiqu'ils qu'ils sonnent un peu comme eux. Aucun des intervalles qui le composent ne correspond à une intonation juste ou à tempérament égale, ce qui rend ce maqam impossible à jouer sur un instrument autre qu'un <a href="../instr.php">instrument traditionnel arabe</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/sikah_baladi/sahirtu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/sikah_baladi/sahirtu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Sahirtou Minhou al-Layali (1935)</b>
                                    <span>Interprétation et Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/shams_el_asil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Chams el-Asil (1958)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Riyad al-Soumbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/el_hobb_kida.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Hobbi Kida (1959)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Riyad al-Soumbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/yalli_kan_yishgik_anini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Yalli Kan Yichgik Anini (1949)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Riyad al-Soumbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/aruh_li_min.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Arouh Li Min (1958)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Riyad al-Soumbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/kulli_da_kan_leh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Koulli Da Kan Leh (1954)</b>
                                    <span>Interprétation et Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/el_habib_el_maghul.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Habib el-Majhoul(1972)</b>
                                    <span>Interprétation et Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/taqsim_buzuq_matar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim au Bouzouk</b>
                                    <span>Matar Mouhammad (Lebanon)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/taqsim_qanun_salman_.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim au Qanoun</b>
                                    <span>Abraham Salman (Irak)</span>
                                    <span><img src="/img/cd.png"> Saltanah</span>
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
