<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Awj ‘Iraq";
$page_description = "Maqam Awj ‘Iraq";
$page_keywords = "arabic, music, arab, world, maqam, jins, sikah, awj iraq, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/awj_iraq.php";
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
                        <h1>Maqam Awj ‘Iraq</h1>
                        <h3>Smaller Text Here</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/awj_iraq.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Awj ‘Iraq</a>
                    </div>

                    <div class="notation">
                        <img src="/note/maqam/awj_iraq.png" class="img-fluid">
                    </div>

                    <p>Maqam Awj ‘Iraq is a version of Maqam Rahat al-Arwah/Maqam Huzam/Maqam ‘Iraq whose sayr starts at the octave tonic and descends to the tonic – though it shares most of the same ajnas as <a href="huzam.php">Maqam Huzam</a>.</p>

                    <p>Explore other maqamat in the <a href="f_sikah.php">Maqam Sikah Family</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/awj_iraq/ya_samiri_da3a_sabri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ya Samiri Da‘a Sabri</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/awj_iraq/hayya_wa_nadim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Hayya Wa Nadim</b>
                                    <span>Samer Nashar</span>
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
