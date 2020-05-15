<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Ciftetelli";
$page_description = "Iqa‘ Ciftetelli";
$page_keywords = "Iqa‘ Ciftetelli, sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/ciftetelli.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Ciftetelli 8/4</h1>
                        <h3>(también se puede tocar en 4/4)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ciftetelli.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Ciftetelli</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/ciftetelli.png" class="img-fluid">
                    </div>

                    <p>
                        Iqa‘ Ciftetelli (pronunciado "shaftatalli" en árabe) es un <em>usul</em> turco que se hizo popular en la música árabe. Raramente se usa para melodías compuestas; en cambio, su uso principal es apoyar <a href="../form/improv.php">improvisaciones</a> (tanto vocales como instrumentales).
                    </p>

                    <p>
                        Ciftetelli generalmente tiene un ritmo lento y se extiende sobre dos compases de 4/4 (véase la notación), y puede tener el mismo tempo y movimiento que <a href="masmudi_kabir.php">Masmudi Kabir</a>. Alternativamente, se puede realizar más rápido y más ligero, en cuyo caso se puede anotar en 4/4 y se vuelve muy similar a <a href="wahda_w_nuss.php">Wahda wi Nuss</a> (más o menos alguna ornamentación).
                    </p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/ciftetelli_8_4/ishta2tillak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/ciftetelli_8_4/ishta2tillak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ishta'tillak (1962)</b>
                                    <span>Voz y música por Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_8_4/jaat_mu3adhibati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Ja'at Mu‘adhibati</b>
                                    <span>Fatima Serhan</span>
                                    <span><img src="/img/cd.png"> The Queen of Balady</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_8_4/layali_3abbas_blaydi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Layali Rast</b>
                                    <span>(de la cancion ‘Addini ya M‘addawi)</span>
                                    <span>‘Abbas al-Bleidi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_8_4/mawwal_khayri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Khullin Sagani Kasat al-Sabr</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_8_4/ya_dala3.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Dala‘ Dalla‘ (1974)</b>
                                    <span>Sabah</span>
                                    <span>Música de Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_8_4/qasida_3ayni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida ‘Ayni Li Ghayri Jamalikum</b>
                                    <span>Conjunto Al-Turath</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_8_4/tile3li_el_biki.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tile‘ Li el-Biki</b>
                                    <span>Fairouz</span>
                                    <span>Música de Philemon Wéhbe</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/ciftetelli.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Ciftetelli 8/4</b>
                                    <span>Demostración en el Tabla por Faisal Zedan</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Need some kind of divider here -->
                    <br>
                    <div class="heading jins text-center">
						<h3>Ejemplos de la forma más rápida de Iqa‘ Ciftetelli que se puede anotar en 4/4</h3>
                    </div>
                    <div class="clearfix"></div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/aziza.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Aziza (1955)</b>
                                    <span>Composición Instrumental</span>
                                    <span>Música de Muhammad Abdel Wahab (de la película <strong>‘Aziza</strong>)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/mawwal_khayri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Ya Man Bunudak Harir</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/nura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Nura Nura (1953)</b>
                                    <span>Voz y música por Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/taqsim_nay.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim de Nay en Maqam Bayati</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/tuta.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tuta</b>
                                    <span>Composición Instrumental</span>
                                    <span>Música de Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/ya_dara_duri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Dara Duri Fina</b>
                                    <span>Fairouz</span>
                                    <span>Música de Philemon Wéhbe</span>
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

    <?php include($ROOT . 'es/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>