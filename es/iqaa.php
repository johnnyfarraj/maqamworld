<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Arabic Iqa‘at";
$page_description = "Arabic Music Rhythms Iqa‘ Iqa";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <?php include('sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Arabic Rhythmic Cycles</h1>
                        <h3>The Iqa‘</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘ Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/iqaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Iqa‘/Iqa‘at</a>
                    </div>

                    <p>Arabic music is composed over rhythmic cycles called <em>iqa‘at</em> (singular <em>iqa‘</em>), which are patterns of beats that repeat every measure. A composition can switch back and forth between many different iqa‘at. Each iqa‘ is defined using a prototypal measure and the two basic sounds: <em>dum</em> (bassy and sustained) and <em>tak</em> (dry and sharp).</p>

                    <p>The notated <em>iqa‘</em> is meant to be a skeleton or a prototype for how to perform it. In practice, percussionists ornament an <em>iqa‘</em> (flesh it out) with additional beats: <em>dum</em>-s, <em>tak</em>-s and whatever other sounds the instrument is able to produce. That ornamentation depends a lot on the genre of Arabic music, the desired arrangement aesthetic, the instrument itself, the size of the rhythm section, and on the percussionist’s personal style.</p>

                    <p>Arabic <em>iqa‘at</em> come is many different time signatures, which can be even as well as odd. The smaller time signatures (2/4, 3/4, 4/4, 6/4 and 8/4) are mostly used in folk music, the tarab genre of the mid-twentieth century and contemporary popular music. Longer <em>iqa‘at</em> (7/8, 9/8, 10/8 all the way to 32/4) are mostly used in the traditional Muwashahat vocal genre.</p>

                    <p>You can start exploring a sample of Arabic iqa‘at using the Iqa‘ Index (sorted alphabetically) or using the table below (sorted by number of beats per measure):</p>

                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/ayyub.php">Ayyub 2/4</a></li>
                                    <li><a href="iqaa/malfuf.php">Malfuf 2/4</a></li>
                                    <li><a href="iqaa/fox.php">Fox 2/4</a></li>
                                    <li><a href="iqaa/karachi.php">Karachi 2/4</a></li>
                                    <li><a href="iqaa/fallahi.php">Fallahi 2/4</a></li>
                                    <li><a href="iqaa/wahda_saghira.php">Wahda Saghira 2/4</a></li>
                                    <li><a href="iqaa/samai_darij.php">Sama`i Darij 3/4</a></li>
                                    <li><a href="iqaa/samai_saraband.php">Sama`i Saraband 3/8</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/maqsum.php">Maqsum 4/4</a></li>
                                    <li><a href="iqaa/baladi.php">Baladi 4/4</a></li>
                                    <li><a href="iqaa/saidi.php">Sa‘idi 4/4</a></li>
                                    <li><a href="iqaa/wahda.php">Wahda 4/4</a></li>
                                    <li><a href="iqaa/wahda_w_nuss.php">Wahda w-Nuss 4/4</a></li>
                                    <li><a href="iqaa/rumba.php">Rumba 4/4</a></li>
                                    <li><a href="iqaa/zaffa.php">Zaffa 4/4</a></li>
                                    <li><a href="iqaa/hachaa.php">Hacha` 4/4</a></li>
                                    <li><a href="iqaa/nawari.php">Nawari 4/4</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/thurayya.php">Thurayya 5/8</a></li>
                                    <li><a href="iqaa/sudasi.php">Sudasi 6/4</a></li>
                                    <li><a href="iqaa/yuruk_semai.php">Yuruk Semai 6/8</a></li>
                                    <li><a href="iqaa/dawr_hindi.php">Dawr Hindi 7/8</a></li>
                                    <li><a href="iqaa/nawakht.php">Nawakht 7/4</a></li>
                                    <li><a href="iqaa/masmudi_kabir.php">Masmudi Kabir 8/4</a></li>
                                    <li><a href="iqaa/ciftetelli.php">Ciftetelli 8/4</a></li>
                                    <li><a href="iqaa/wahda_kabira.php">Wahda Kabira 8/4</a></li>
                                    <li><a href="iqaa/bambi.php">Bambi 8/4</a></li>
                                    <li><a href="iqaa/katakufti.php">Katakufti 8/8</a></li>
                                    <li><a href="iqaa/aqsaq.php">Aqsaq 9/8</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/mudawwar.php">Mudawwar Shami 10/4</a></li>
                                    <li><a href="iqaa/jurjina.php">Jurjina 10/8</a></li>
                                    <li><a href="iqaa/samai_thaqil.php">Sama‘i Thaqil 10/8</a></li>
                                    <li><a href="iqaa/awis.php">`Awis 11/8</a></li>
                                    <li><a href="iqaa/mudawwar.php">Mudawwar Masri 12/4</a></li>
                                    <li><a href="iqaa/dharafat.php">Dharafat 13/8</a></li>
                                    <li><a href="iqaa/murabbaa.php">Murabba‘ 13/4</a></li>
                                    <li><a href="iqaa/muhajjar.php">Muhajjar 14/4</a></li>
                                    <li><a href="iqaa/mukhammas.php">Mukhammas 16/4</a></li>
                                    <li><a href="iqaa/khosh_rang.php">Khosh Rang 17/8</a></li>
                                    <li><a href="iqaa/awfar.php">Awfar Masri 19/4</a></li>
                                    <li><a href="iqaa/fakhit.php">Fakhit 20/4</a></li>
                                    <li><a href="iqaa/sittatu_ashar.php">Sittatu ‘Ashar Masri 32/4</a></li>
                                </ul>
                            </div>
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