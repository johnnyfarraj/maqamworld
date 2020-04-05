<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Σαφτατάλι";
$page_description = "Ικά Σαφτατάλι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/ciftetelli.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Ικά Σαφτατάλι 8/4</h1>
                        <h3>(can also be played in 4/4)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ciftetelli.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σαφτατάλι</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/ciftetelli.png" class="img-fluid">
                    </div>

                    <p>Ικά Σαφτατάλι (pronounced "shaftatalli" in Arabic) is a Turkish usul that became popular in Arabic music.
                    It is rarely used for composed melodies; instead, its primary use is to support <a href="../form/improv.php">improvisations</a> (both vocal and instrumental).</p>

                    <p>Σαφτατάλι is usually slow paced and stretched out over two 4/4 measures (see notation), and can share the same tempo and pace as <a href="masmudi_kabir.php">Μασμούντι Καμπίρ</a>. Alternatively, it can be performed faster and lighter,
                    in which case it can be notated in 4/4 and becomes very similar to <a href="wahda_w_nuss.php">Ουάχντα ου Νος</a> (plus or minus some ornamentation).</p>

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
                                    <span>Vocals and Music by Farid al-Atrash</span>
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
                                    <span>Music by Farid al-Atrash</span>
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
                                    <span>Μουσικό  Σύνολο Αλ-Τουράθ (Συρία)</span>
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
                                    <span>Music by Philemon Wehbe</span>
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
                                    <b>Ικά Σαφτατάλι 8/4</b>
                                    <span>Επίδειξη στην τάμπλα από τον Φαϊζάλ Ζεϊντάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Need some kind of divider here -->
                    <br>
                    <div class="heading jins text-center">
						<h3>Examples of the faster form of Ικά Σαφτατάλι that can be notated in 4/4</h3>
                    </div>
                    <div class="clearfix"></div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/aziza.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>‘Aziza (1955)</b>
                                    <span>Instrumental Composition</span>
                                    <span>Music by Muhammad Abdel Wahab (from the movie <strong>‘Aziza</strong>)</span>
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
                                    <span>Vocals and Music by Farid al-Atrash</span>
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
                                    <span>Instrumental Composition</span>
                                    <span>Music by Farid al-Atrash</span>
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
                                    <span>Music by Philemon Wehbe</span>
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

    <?php include($ROOT . 'el/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>