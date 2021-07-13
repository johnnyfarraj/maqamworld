<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Huzam/Rahat al-Arwah";
$page_description = "Maqam Huzam/Rahat al-Arwah";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "pt/maqam/huzam.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Huzam</h1>
                        <h1>Maqam Rahat al-Arwah</h1>
                        <h3>Un miembro de la <a href="f_sikah.php">Familia Maqam Sikah</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/huzam.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Huzam</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/rahat_al_arwah`.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Rahat al-Arwah</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/maqam/huzam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Haz clic en cada nota y mantenga presionado para oírla.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="70,125,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="322" data-parent="#notation1"><!--variable 318~324-->
                      <area shape="circle" coords="148,117,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="225,108,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="301,100,13" href="#" alt="La♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
                      <area shape="circle" coords="378,92,13" href="#" alt="Si♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
                      <area shape="circle" coords="455,84,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="533,76,13" href="#" alt="Re" class="playNote" data-frequency="586.66" data-parent="#notation1">
                      <area shape="circle" coords="610,68,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="644" data-parent="#notation1"><!--variable-->
                      <!-- Links -->
                      <area shape="rect" coords="78,13,200,43" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="277,13,395,43" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="484,7,591,35" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
                    </map>

                    <p>
                        Maqam Huzam es, por mucho, el <em>maqam</em> más común en la familia Sikah, y comienza en Mi<i class="icon-halfflat"></i>. Su escala comienza con la raíz <a href="../jins/sikah.php">Jins Sikah</a> en la tónica, seguida de <a href="../jins/hijaz.php">Jins Hijaz</a> en 4º grado y luego en <a href="../jins/rast.php">Jins Rast</a> en 6º grado.
                    </p>
                    <p>
                        La transposición de Maqam Huzam a Si<i class="icon-halfflat"></i> tiene su propio nombre: <strong>Maqam Rahat al-Arwah</strong>. Ambos maqamat tienen exactamente el mismo <em>sayr</em>.
                    </p>

                    <p>Explora otros maqamat en la <a href="f_sikah.php">Familia Maqam Sikah</a>.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/huzam/ya_ghusna_naqa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/huzam/ya_ghusna_naqa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ya Ghusna Naqa</b>
                                    <span>(Maqam Huzam)</span>
                                    <span>Firqat al-Musiqa al-Arabiya (Egipto)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/huzam/ayyuha_as_saqi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ayuha al-Saqi</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Música de Majdi al-‘Aqili</span>
                                    <span>Nagham Al Ams Vol. 13 Huzam</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/huzam/dawr_emta_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Emta el-Hawa (1936)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Zakariya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/huzam/marmar_zamani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Marmar Zamani</b>
                                    <span>Fairouz</span>
                                    <span>(tradicional)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Start Rahat al-Arwah section -->
                    <div class="heading jins text-center">
                        <h3>Ejemplos en Maqam Rahat al-Arwah</h3>
                    </div>
                    <div class="clearfix"></div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/el_wardi_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Ward Gamil (1947)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Zakariya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/ya_wahid_al_ghid.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Wahid al-Ghid</b>
                                    <span>Fairouz</span>
                                    <span><img src="/img/cd.png"> Andalousiyyat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/dawr_inta_fahim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Inta Fahim</b>
                                    <span>(Maqam Rahat al-Arwah)</span>
                                    <span>Música y Voz por Zakariya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/dulab_rahat_al_arwah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab Rahat al-Arwah</b>
                                    <span>Aicha Redouane</span>
                                    <span><img src="/img/cd.png"> Égypte</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/dulab_ayyuhal_saqi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab Rahat al-Arwah</b>
                                    <span>Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Live at Beiteddine</span>
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
