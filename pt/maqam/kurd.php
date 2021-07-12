<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Kurd";
$page_description = "Maqam Kurd";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "pt/maqam/kurd.php";
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
                        <h1>Maqam Kurd</h1>
                        <h3>El principal <em>maqam</em> en la <a href="f_kurd.php">Familia Maqam Kurd</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Maqamat</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/kurd.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Kurd</a>
                    </div>


                    <div class="notation" id="notation1">
                        <img src="/note/maqam/kurd.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Haz clic en cada nota y mantenga presionado para oírla.</p>
                    </div>
                     <map name="notemap">
					  <area shape="circle" coords="63,129,13" href="#" alt="Re" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="141,121,13" href="#" alt="Mi♭" class="playNote" data-frequency="308.25" data-parent="#notation1">
					  <area shape="circle" coords="218,112,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="296,104,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="373,96,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
					  <area shape="circle" coords="450,88,13" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
					  <area shape="circle" coords="528,80,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1">
					  <area shape="circle" coords="605,72,13" href="#" alt="Re" class="playNote" data-frequency="586.66" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="112,8,230,35" href="../jins/kurd.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="364,7,545,35" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">

				     </map>

                    <p>
                        Maqam Kurd es el principal <em>maqam</em> en la Familia Kurd. Su escala comienza con la raíz <a href="../jins/kurd.php">Jins Kurd</a> en la tónica, seguida de <a href="../jins/nahawand.php">Jins Nahawand</a> en el cuarto grado.
                    </p>

                    <p>Explora otros maqamat en la <a href="f_kurd.php">Familia Maqam Kurd</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/kurd/3awwedti_3eni.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/kurd/3awwedti_3eni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>‘Awwedti ‘Ayni (1958)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/ya_zalimni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Zalimni (1951)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/dulab_kurd_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab Kurd</b>
                                    <span>Conjunto Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Au Palais Des Congrès (1995)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/yamurru_3ujuban.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Yamurru ‘Ujuban</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Música de Omar al-Batsh</span>
                                    <span><img src="/img/cd.png"> Au Palais Des Congrès (1995)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/ya_bahjet_el_rouh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ya Bahjet el-Rouh</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Música de Sayed Darwish</span>
                                    <span><img src="/img/cd.png"> Au Palais Des Congrès (1995)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/mashghul.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mashghul ‘Aleik</b>
                                    <span>Karem Mahmud</span>
                                    <span>Música de Ahmad Sidqi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/sanatein.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sanatein</b>
                                    <span>Leila Mourad</span>
                                    <span>Música de Ra'uf Dhihni</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/samai_kurd_daghir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Kurd</b>
                                    <span>Abdu Dagher</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/samai_kurd_salman.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Kurd</b>
                                    <span>Abraham Salman</span>
                                    <span><img src="/img/cd.png"> Saltanah</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/kurd/3ichiqti_ruhak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr ‘Ishiqti Ruhak (1930)</b>
                                    <span>Música de Muhammad Abdel Wahab</span>
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
