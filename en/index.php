<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "";
$page_description = "";
$page_keywords = "";
$page_language = "en";
include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "en/index.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="heading">
                        <h1>Welcome to the new <span>MaqamWorld</span></h1>
                        <h3>MaqamWorld is an online resource dedicated to teaching the Arabic Maqam modal system, which is the foundation of traditional Arabic music. This website mainly covers music from the Eastern Mediterranean part of the Arab World (Egypt, Palestine, Jordan, Lebanon and Syria), with a focus on the early to mid-twentieth century period.</h3>
                    </div>

                    <p>
                    After 17 years in operation, MaqamWorld has been rebuilt with the help of a 2016 grant
                    from <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target="_blank">The Arab Fund for Arts and Culture (AFAC)</a>.
                    MaqamWorld includes the following new features:
                    </p>

                    <ul>
                        <li>A full translation to 
                            <a href="/ar/index.php"><strong>Arabic</strong></a>, 
                            <a href="/fr/index.php"><strong>French</strong></a>, 
                            <a href="/it/index.php"><strong>Italian</strong></a>,
                            <a href="/de/index.php"><strong>German</strong></a>,
                            <a href="/el/index.php"><strong>Greek</strong></a>,
                            <a href="/es/index.php"><strong>Spanish</strong></a> and
                            <a href="/pt/index.php"><strong>Portuguese</strong></a>.
                        </li>
                        <li>Support of displays of all sizes (especially smart phones).</li>
                        <li>Google Search.</li>
                        <li>Updated and more relevant content.</li>
                        <li>Higher quality images and audio samples.</li>
                        <li>Better navigation menus and sub-menus.</li>
                        <li>Clickable notes that generate sound.</li>
                        <li>A "Contact Us" page for viewer feedback.</li>
                    </ul>

                    <p>
                    If you like this website please check out the companion book <a href="book.php">INSIDE ARABIC MUSIC</a>, 
                    co-authored with my friend Sami Abu Shumays (creator of <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>).
                    The book is a comprehensive reference on Arabic Music and was released 
                    by <a href="https://global.oup.com/academic/product/inside-arabic-music-9780190658366" target="_blank">Oxford University Press</a> in August 2019.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/taoufiq_oud.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Maqam</h5>
                                    <p class="card-text">Learn about the Arabic Maqam modal system with notated scales and recorded examples.</p>
                                    <a href="/en/maqam.php" class="btn btn-primary">Maqam<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_star.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Jins</h5>
                                    <p class="card-text">Learn about the <b>Jins</b>, the scale fragment that is the building block of every Maqam.</p>
                                    <a href="/en/jins.php" class="btn btn-primary">Jins<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_round.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Rhythm</h5>
                                    <p class="card-text">Learn about the Arabic rhythmic cycle called <b>Iqa‘</b>, made of the primitive sounds <em>dum</em> and <em>tak</em>.</p>
                                    <a href="/en/iqaa.php" class="btn btn-primary">Iqa‘<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_etching.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Forms</h5>
                                    <p class="card-text">Learn about the Arabic music forms, called <b>Qawalib</b>, used in both vocal and instrumental music, composed and improvised.</p>
                                    <a href="/en/forms.php" class="btn btn-primary">Forms<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_names.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Instruments</h5>
                                    <p class="card-text">Learn about the traditional Arabic Instruments, melodic and percussion, as well as Western instruments that have been "Arabized".</p>
                                    <a href="/en/instr.php" class="btn btn-primary">Instruments<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/vladimir_tamari.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Publications</h5>
                                    <p class="card-text">Learn about the book <strong>Inside Arabic Music</strong> (co-authored with Sami Abu Shumays) that was published in August 2019.</p>
                                    <a href="/en/book.php" class="btn btn-primary">Publications<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-sm-3">
                    <div class="text-center">
                        <img src="http://placehold.it/160x600" alt="" class="d-none d-sm-block m-auto">
                        <img src="http://placehold.it/300x250" alt="" class="d-block d-sm-none ml-auto mr-auto mt-5">
                    </div>
                </div>-->
            </div>
                <?php include($ROOT . 'inc/768x90.php'); ?>
        </div>
    </div>

    <?php include($ROOT . 'en/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>
