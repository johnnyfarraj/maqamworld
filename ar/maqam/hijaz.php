<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Hijaz";
$page_description = "Maqam Hijaz";
$page_keywords = "arabic, music, arab, world, maqam, jins, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/hijaz.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/ajam.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 order-sm-2">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <?php include($ROOT . 'inc/sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9 order-sm-1">

                    <div class="heading jins text-center">
                        <h1>Maqam Hijaz</h1>
                        <h3>Smaller Text Here</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijaz.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Hijaz</a>
                    </div>

                    <div class="notation">
                        <img src="/note/maqam/hijaz.png" class="img-fluid">
                    </div>

                    <p>Maqam Hijaz is the main maqam in the Hijaz Family. </p>

                    <p>Explore other maqamat in the <a href="f_hijaz.php">Maqam Hijaz Family</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/hijaz/mahtiyali.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/hijaz/mahtiyali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ma-Htiyali</b>
                                    <span>Al Turath Ensemble</span>
                                    <span><img src="/img/cd.png"> The Music In Spanish Al Andalus - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/badri_ader.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Badri Adir</b>
                                    <span>Orientalia</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/mudnaka.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mudnaka Gafahu Marqaduhu (1938)</b>
                                    <span>Vocals and Music by Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/hibbina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hibbina (1975)</b>
                                    <span>Vocals and Music by Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/foug_el_nakhal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Foug el-Nakhal</b>
                                    <span>Munir Bashir and Omar Bashir</span>
                                    <span>(Traditional Iraqi Folklore)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/qasida_mawlaya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qasida Mawlaya Ajfani</b>
                                    <span>Sabah Fakhri</span>
                                    <span>From Fasil Isqi al-‘Itash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/qadduka_al_mayyas.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qadduka al-Mayyas</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Nagham al-Ams Vol. 14 Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/samai_hijaz.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Hijaz</b>
                                    <span>Al-Turath Ensemble</span>
                                    <span>Music by Muhammad ‘Abdu</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/dulab_nay_taqsim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab and Nay Taqsim Hijaz</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Nagham al-Ams Vol. 14 Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/dulab_hijaz_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab Hijaz</b>
                                    <span>Sabah Fakhri</span>
                                    <span><img src="/img/cd.png"> Mawawil and Mouwashahat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12 order-sm-3">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php include($ROOT . 'inc/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
    <script>
        $(document).ready(function() {
            /* pronunciation */
            const pronunciation = new Plyr('#pronunciation', {
                controls: []
            });
            $(".pronunciation").click(function(e) {
                e.preventDefault();
                pronunciation.stop();
                pronunciation.play();
            });

            /* Initialisation of the player */
            const player = new Plyr('#player', {
                controls: ['play', 'progress', 'current-time', 'mute', 'volume']
            });
            player.on('play', function() {
                pronunciation.pause();
            })
            pronunciation.on('play', function() {
                player.pause();
            })

            /* On Track change */
            $("input[name=song]").change(function() {
                $(".track").removeClass("active");
                $(this).parents(".track").addClass("active");

                /* We get the Song location from the Data-song attribute */
                var songLocation = $(this).parents(".track").data("song");
                /* We get the Song title from our sibling element */
                var songTitle = $(this).siblings(".info").children("b").text();

                /* We stop the player */
                player.stop();
                /* We change the song */
                player.source = {
                    type: 'audio',
                    title: songTitle,
                    sources: [{
                        src: songLocation,
                        type: 'audio/mp3',
                    }],
                };
                /* We start the player */
                player.play();
            })
        })

    </script>
</body>

</html>
