<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Ciftetelli";
$page_description = "Iqa‘ Ciftetelli";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, ciftetelli, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/ciftetelli.php";
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
                        <h1>Iqa‘ Ciftetelli 8/4</h1>
                        <h3>(can also be played in 4/4)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ciftetelli.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Ciftetelli</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/ciftetelli.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Ciftetelli ist ein türkisches Usul (türkisch çiftetelli, wörtlich "doppelsaitig"), das in der arabischen Musik inzwischen sehr beliebt ist. Es wird sehr selten bei durchkomponierten Melodien benutzt, hingegen häufig bei vokalen und instrumentalen <a href="../form/improv.php">Improvisationen</a>. Der Ciftetelli hat ein langsames Tempo und erstreckt sich über zwei Viervierteltakte (siehe Notation). Er kann dasselbe Tempo wie <a href="masmudi_kabir.php">Masmudi Kabir</a> haben. Er kann aber auch schneller und flockiger gespielt werden. In diesem Fall lässt er sich in einem Viervierteltakt notieren und ähnelt sehr dem <a href="wahda_w_nuss.php">Wahda w-Nuss</a> (modulo Verzierungen).</p>

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
                                    <span>Musik mit Gesang von Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_8_4/jaat_mu3adhibati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasidat Ja'at Mu‘adhibati</b>
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
                                    <b>Layali Rast (from ‘Addini ya M‘addawi)</b>
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
                                    <span>Musik von Farid al-Atrash</span>
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
                                    <span>Al-Turath Ensemble</span>
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
                                    <span>Musik von Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- start the Ciftetelli 4/4 examples -->
                    <br>
                    <div class="heading jins text-center">
                        <h3>Beispiele für schnellen Ciftetelli in 4/4</h3>
                    </div>
                    <div class="clearfix"></div>


                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/aziza.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Aziza (1955)</b>
                                    <span>Instrumentalkomposition von Muhammad Abdel Wahab</span>
                                    <span>Aus dem Film <strong>‘Aziza</strong></span>
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
                                    <span>Musik mit Gesang von Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/taqsim_nay.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Nay Bayati</b>
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
                                    <span>Instrumentalkomposition von Farid al-Atrash</span>
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
                                    <span>Musik von Philemon Wehbe</span>
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