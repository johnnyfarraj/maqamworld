<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Bambi";
$page_description = "Iqa‘ Bambi";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, bambi, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/bambi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘at</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Bambi 8/4</h1>
                        <h3>(aussi appelé <strong>Bamb</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bambi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Bambi</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/bambi_f1.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Bambi est un <em>iqa‘</em> égyptien en 8/4 ralenti qui accompagne très bien les improvisations et  les sections vocales improvisées. Il est commun de commencer à jouer le Bambi sur le 7<sup>ième</sup>sup> temps (l'avant-dernier <em>doum</em>), en mettant de cette manière l'emphase sur les 3 <em>doums</em> consécutifs qui commencent chaque cycle. Une autre version du Bambi commence la mesure avec les 3 <em>doums</em> consécutifs.
					</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/bambi_form1/taqsim_oud_shaheen.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/bambi_form1/taqsim_oud_shaheen.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Taqasim rythmés</b>
                                    <span>Simon Shaheen (Palestine)</span>
                                    <span><img src="/img/cd.png"> Turath: Masterworks of the Middle East</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form1/mawwal_khayri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Ya Man Bounoudak Harir</b>
                                    <span>Mouhammad Khayri (Syrie)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form1/gafnuhu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Gafnouhou ‘Allam al-Ghazal (1933)</b>
                                    <span>Interprétation et Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>


                    <!-- Need some kind of divider here to start the Form 2  examples -->
                    <div class="heading jins text-center">
                        <h3>Examples de la seconde forme du Iqa‘ Bambi</h3>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/bambi_f2.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form2/andah_3aleik.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Andah ‘Aleik (1982)</b>
                                    <span>Warda (France/Algérie)</span>
                                    <span>Musique de Mouhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form2/alf_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Alf Leila wi Leila (1969)</b>
                                    <span>Oum Koulthoum (Égypte)</span>
                                    <span>Musique de Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form2/asamina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Asamina</b>
                                    <span>Fairouz (Liban)</span>
                                    <span>Musique de Philémon Wéhbé</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form2/layali_lubnan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Layali Loubnan (1954)</b>
                                    <span>Composition Instrumentale</span>
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

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>