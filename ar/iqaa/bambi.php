<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Bambi";
$page_description = "Iqa‘ Bambi";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, bambi, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/bambi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 order-sm-2">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <?php include($ROOT . 'inc/sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9 order-sm-1">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Bambi 8/4</h1>
                        <h3>Smaller Text Here</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bambi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Bambi</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/bambi_f1.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Bambi is a stretched-out Egyptian 8/4 iqa‘ that beautifully accompanies improvisations and sparse vocal sections. It is customary to start playing Bambi from the 7<sup>th</sup> beat (the <em>dum</em> before last), thereby emphacizing the 3 consecutive <em>dum</em>-s that start each cycle. An alternate form of Bambi actually starts the measure with the 3 consecutive <em>dum</em>-s. 
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
                                    <b>Taqasim on the Beat</b>
                                    <span>Simon Shaheen</span>
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
                                    <b>Mawwal Ya Man Bunudak Harir</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/bambi_form1/gafnuhu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Gafnuhu ‘Allam al-Ghazal (1933)</b>
                                    <span>Vocals and Music by Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>


                    <!-- Need some kind of divider here to start the Form 2  examples -->
                    <div class="heading jins text-center">
                        <h3>Examples of the second form of Iqa‘ Bambi</h3>
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
                                    <span>Warda</span>
                                    <span>Music by Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/bambi_form2/alf_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Alf Leila w Leila (1969)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Baligh Hamdi</span>
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
                                    <span>Fairouz</span>
                                    <span>Music by Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/bambi_form2/layali_lubnan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Layali Lubnan (1954)</b>
                                    <span>Instrumental Composition</span>
                                    <span>Music by Muhammad Abdel Wahab</span>
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
    
  </body>
</html>