<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ottoman Instrumental Forms";
$page_description = "Ottoman Instrumental Composed Forms";
$page_keywords = "arabic, music, arab, world, maqam, jins, ottoman instrumental composed forms, samai, sama'i, longa, bashraf, khana, taslim, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "pt/form/ottoman.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Form Index</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Ottoman Instrumental Composed Forms</h1>
                        <h3>The Sama‘i, Longa and Bashraf</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Form Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/khana.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Khana</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/taslim.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Taslim</a>
                    </div>

                    <p>Three instrumental composed forms were borrowed from Turkish/Ottoman music and are still
                        part of Arabic music today: the Sama‘i, the Longa and the Bashraf. The Sama‘i has survived the best of the three, as Arab musicians continue to compose in this form into the 21<sup>st</sup> century.
                    </p>
                    <p>All three forms are based on a repeating refrain called "<em>taslim</em>" and a number of different verses called "<em>khana</em>". The three compositions are also anchored in a <a href="../maqam.php">maqam</a> and feature that <em>maqam</em>'s <em>sayr</em> as well as its popular modulations. For this reason, the <em>maqam</em> (and the composer) are part of the composition's name.
                    </p>

                    <div id="samai" class="heading jins text-center full-width">
                        <h3>The Sama‘i</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/samai.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Sama‘i</a>
                    </div>
                    <p> The Sama‘i is an instrumental composed form consisting of four <em>khana</em>-s, each followed by the same <em>taslim</em>. The structure of a Sama‘i is K1, T, K2, T, K3, T, K4, T. All sections are composed in the <a href="../iqaa/samai_thaqil.php">Iqa‘ Sama‘i Thaqil</a>, except the 4<sup>th</sup> <em>khana</em> which is usually composed in a short odd rhythmic cycle like <a href="../iqaa/samai_saraband.php">Iqa‘ Sama‘i Saraband</a> or <a href="../iqaa/samai_darij.php">Iqa‘ Sama‘i Darij</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=5s1KylUC9_Q">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/5s1KylUC9_Q/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Bayati - Ibrahim al-‘Aryan</b>
                                    <span>Sama‘i in <a href="../maqam/bayati.php">Maqam Bayati</a> by Ibrahim al-‘Aryan (Egypt), recorded by the Tunisian Radio Orchestra.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=uNncmnhL05k">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/uNncmnhL05k/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Hijazkar Kurd - Rawhi al-Khammash</b>
                                    <span></span>
                                    <span>Sama‘i in <a href="../maqam/hijazkar_kurd.php">Maqam Hijazkar Kurd</a> by Rohi al-Khammash (Palestine/Iraq), featuring <a href="../iqaa/jurjina.php">Iqa‘ Jurjina</a> in the 4<sup>th</sup> khana.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IQkQoZcC0jk">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IQkQoZcC0jk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Kurd - ‘Abdu Dagher</b>
                                    <span></span>
                                    <span>Sama‘i in <a href="../maqam/kurd.php">Maqam Kurd</a> by ‘Abdu Dagher (Egypt), which features a long <a href="instr_comp.php#muqaddima">muqaddima</a> (composed introduction).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_OZo-QBb6jY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_OZo-QBb6jY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Rast - George Michel</b>
                                    <span>Sama‘i in <a href="../maqam/rast.php">Maqam Rast</a> by George Michel (Egypt), recorded by the Tunisian Radio Orchestra.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=opETYjZGZtM">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/opETYjZGZtM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Nawa Athar - Jamil ‘Uways</b>
                                    <span>Sama‘i in <a href="../maqam/nawa_athar.php">Maqam Nawa Athar</a> by Jamil ‘Uways (Syria).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="longa" class="heading jins text-center full-width">
                        <h3>The Longa</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/longa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Longa</a>
                    </div>
                    <p> The Longa is the second most popular Ottoman instrumental form. It is usually composed in the short and jumpy  <a href="../iqaa/fox.php">Iqa‘ Fox</a> for the <em>khana</em>-s, and <a href="../iqaa/malfuf.php">Iqa‘ Malfuf</a> for the <em>taslim</em>.
                    </p>
                    <p> Many longas from the Ottoman era used semitonal maqamat like <a href="../maqam/nahawand.php">Nahawand</a>, <a href="../maqam/hijaz.php">Hijaz</a> and <a href="../maqam/nikriz.php">Nikriz</a>, and used melodies that evoked Eastern European music. A lot of Arab composers still follow that same approach.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=JnTGci4VSXo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/JnTGci4VSXo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Longa Farahfaza - Riyad al-Sunbati</b>
                                    <span>Longa in <a href="../maqam/nahawand.php">Maqam Farahfaza</a> by Riyad al-Sunbati (Egypt), recorded by the Simon Shaheen Ensemble.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7aVU7mPkCTs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7aVU7mPkCTs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Longa ‘Ajam - ‘Abdu Daghir</b>
                                    <span>Longa in <a href="../maqam/ajam.php">Maqam ‘Ajam</a> by ‘Abdu Daghir (Egypt), recorded by his ensemble.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=oa5fAO1YXSY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/oa5fAO1YXSY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Longa Nahawand - Dr. Alfred Gamil</b>
                                    <span>Longa in <a href="../maqam/nahawand.php">Maqam Nahawand</a> by Dr. Alfred Gamil (Egypt), recorded by his ensemble.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="bashraf" class="heading jins text-center full-width">
                        <h3>The Bashraf</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bashraf.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Bashraf</a>
                    </div>
                    <p> The bashraf is the least widespread Ottoman instrumental form, and remains mostly in the realm of music lesson and instrumental exercises. The bashraf consists of 4 <em>khana</em>-s, each followed by the same <em>taslim</em>, and is rarely composed by Arab musicians.
                    </p>
                    <p> Unlike the sama‘i, the bashraf usually follows one single <a href="../iqaa.php">iqa‘</a> throughout the composition, in most cases an even metered <a href="../iqaa.php">iqa‘</a> such as <a href="../iqaa/masmudi_kabir.php">Masmudi Kabir (8/4)</a>, <a href="../iqaa/mukhammas.php">Mukhammas (16/4)</a>, Shanbar (24/4), Dawr al-Kabir (28/4), or longer Ottoman rhythmic cycles.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=NmNMjWyhiyE">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/NmNMjWyhiyE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Bashraf Farahfaza</b>
                                    <span>Bashraf in <a href="../maqam/nahawand.php">Maqam Farahfaza</a> by Ismail Hakki Bey (Ottoman), recorded by the Simon Shaheen ensemble.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=aZY8TuOB68w">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/aZY8TuOB68w/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Bashraf Kara Batak Sikah (1929)</b>
                                    <span>Bashraf Kara Batak in <a href="../maqam/sikah.php">Maqam Sikah</a>, recorded in 1929 by Sami al-Shawwa (Syria) on <a href="../instr/violin.php">violin</a> and Muhammad al-Qasabgi (Egypt) on <a href="../instr/oud.php">oud</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- add Bashraf Rast Tatyos Effendi -->

                    <p>Explore other groups of forms:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Vocal Composed Forms</a></li>
                        <li><a href="instr_comp.php">Instrumental Composed Forms</a></li>
                        <li><a href="improv.php">Improvised Forms</a></li>
                    </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
