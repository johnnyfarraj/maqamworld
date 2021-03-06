<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Hijaz";
$page_description = "Maqam Hijaz";
$page_keywords = "arabic, music, arab, world, maqam, jins, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "de/maqam/hijaz.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Hijaz</h1>
                        <h3>Ein Mitglied der <a href="f_hijaz.php">Maqam-Hijaz-Familie</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijaz.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Hijaz</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/hijaz.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Klicken Sie auf die Noten und halten Sie sie mit der Maus, um sie zu hören.</p>
                    </div>

                    <map name="notemap">
		  <area shape="circle" coords="59,128,13" href="#" alt="D4" class="playNote" data-frequency="293.33" data-parent="#notation1">
		  <area shape="circle" coords="137,120,13" href="#" alt="E4♭" class="playNote" data-frequency="315" data-parent="#notation1"><!-- Hijaz 2 -->
		  <area shape="circle" coords="214,112,13" href="#" alt="F4♯" class="playNote" data-frequency="375" data-parent="#notation1"><!-- Hijaz 3 -->
		  <area shape="circle" coords="292,104,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
		  <area shape="circle" coords="369,95,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
		  <area shape="circle" coords="445,88,13" href="#" alt="B4♭" class="playNote" data-frequency="463.54" data-parent="#notation1">
		  <area shape="circle" coords="524,78,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
		  <area shape="circle" coords="601,70,13" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
	      <area shape="circle" coords="677,104,13" href="#" alt="G4" class="playNote" data-frequency="391.11" data-parent="#notation1">
	  <area shape="circle" coords="754,95,13" href="#" alt="A4" class="playNote" data-frequency="440" data-parent="#notation1">
	  <area shape="circle" coords="833,87,13" href="#" alt="B4<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
                      <area shape="circle" coords="909,78,13" href="#" alt="C5" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="987,70,13" href="#" alt="D5" class="playNote" data-frequency="586.66" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="118,5,236,36" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="354,5,530,36" href="../jins/nahawand.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="775,5,886,36" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
		     </map>

                    <p>Maqam Hijaz ist der Haupt-Maqam in der <a href="f_hijaz.php">Hijaz-Familie</a>. Seine Leiter beginnt mit Wurzel-<a href="../jins/hijaz.php">Jins Hijaz</a> auf der Tonika. Es folgt entweder <a href="../jins/nahawand.php">Jins Nahawand</a> oder <a href="../jins/rast.php">Jins Rast</a> auf der vierten Stufe.</p>

                    <p>Erkunden Sie andere Maqamat der <a href="f_hijaz.php">Maqam-Hijaz-Familie</a>.</p>

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
                                    <span><img src="/img/cd.png"> The Music In Spanish Al Andalus (Hijaz)</span>
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
                                    <span>Musik mit Gesang von Muhammad Abdel Wahab</span>
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
                                    <span>Musik mit Gesang von Farid al-Atrash</span>
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
                                    <span>(irakisches Volkslied)</span>
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
                                    <span>Fasil Isqi al-‘Itash</span>
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
                                    <span>Musik von Muhammad ‘Abdu</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijaz/dulab_nay_taqsim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dulab und Nay-Taqsim im Maqam Hijaz</b>
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
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'de/footer.php'); ?>
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
