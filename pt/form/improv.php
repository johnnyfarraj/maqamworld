<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Improvised Forms";
$page_description = "Improvised Forms";
$page_keywords = "arabic, music, arab, world, maqam, jins, improvised forms, rast, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, taqsim, layali, mawwal, qasida";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "pt/form/improv.php";
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
                        <h1>Improvised Forms</h1>
                        <h3>The Taqsim, Layali, Mawwal and Qasida</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Form Index</a>
                    <div class="clearfix"></div>

                    <p>Improvised forms are the most immediate vehicle for a <em>mutrib</em> (singer) or an instrumentalist to connect with their audience while exploring and working with a <a href="../maqam.php">maqam</a>'s <em>sayr</em>. </p>

                    <div id="layali" class="heading jins text-center full-width">
                        <h3>The Layali</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/layali.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Layali</a>
                    </div>
                    <p> The Layali form is a vocal solo improvisation on the phrase "Ya Layl Ya ‘Ayn" (O Night, O Eye), where "layali" is the Arabic plural of the word "layl". This is a traditional phrase that is not used for its literal meaning any more, but has become more of a vocal filler and a vehicle for vocal ornamentations. </p>
                    <p>
                        Layali can stand alone but more commonly they are used as a prelude for the next vocal form (e.g. Mawwal, Qasida, or even a <a href="vocal_comp.php">composed vocal form</a>). In that case they serve as a warm up, and help the singer get immersed in the <a href="../maqam.php">maqam</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=wOlB3-EiweY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/wOlB3-EiweY/hqdefault.jpg">
                                    </div>
                                </div>
                             <div class="info">
                                    <b>Dawr Kadni el-Hawa</b>
                                    <span>Marie Jubran's recording of <a href="vocal_comp.php#dawr">Dawr</a> <strong>Kadni el-Hawa</strong> (music by Muhammad ‘Uthman) starts with a <a href="../instr/qanun.php">qanun</a> taqsim followed by layali in <a href="../maqam/nahawand.php">Maqam Nahawand</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D0DQxDwgDw8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D0DQxDwgDw8/hqdefault.jpg">
                                    </div>
                                </div>
                             <div class="info">
                                    <b>Taqtuqa Leh Ya Banafseg</b>
                                    <span>Saleh Abdel Hayy's recording of <strong>Taqtuqa Leh Ya Banafseg</strong> (music by Riyad al-Sunbati) is a long <a href="vocal_comp.php#wasla">Wasla</a> that starts with an <a href="../instr/oud.php">oud</a> <a href"#taqsim">Taqsim</a>, a <a href="ottoman.php/samai">Sama‘i</a>, a <a href="../instr/qanun.php">qanun</a> Taqsim, a recap of the Sama‘i's <em>taslim</em>, then a <em>Layali</em>, all in <a href="../maqam/rast.php">Maqam Rast</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TE7Y7bzgbns">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TE7Y7bzgbns/hqdefault.jpg">
                                    </div>
                                </div>
                             <div class="info">
                                    <b>Muhammad Khayri - Layali</b>
                                    <span>Aleppan singer Muhammad Khayri starts his <a href="vocal_comp.php#wasla">Wasla</a> in <a href="../maqam/rast.php">Maqam Rast</a> with a Layali before proceeding to an <a href="#qasida">improvised Qasida</a>, then some <a href="vocal_comp.php#qadd">Qudud</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="mawwal" class="heading jins text-center full-width">
                        <h3>The Mawwal</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mawwal.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Mawwal</a>
                    </div>
                    <p> The Mawwal (plural <em>Mawawil</em>) is a solo vocal improvisation on a colloquial Arabic poem. For example, the poem could be in the Egyptian, Lebanese, Syrian or Iraqi dialects. As with other vocal improvisational forms, the mawwal is a vehicle for showcasing the <a href="../maqam.php">maqam</a>'s <em>sayr</em>, as well as the singer's beautiful voice and ornamentation technique.
                    </p>
                    <p> One important type of mawwal is the "Baghdadi Mawwal", also called <em>Sab‘awi</em> (from <em>sab‘a</em>, seven) because it comprises 7 lines that rhyme as A, A, A, B, B, B, A. The Baghdadi Mawwal is very popular in the Aleppan repertoire, alonside the <a href="vocal_comp.php#muwashah">Muwashahat</a> and <a href="vocal_comp.php#qadd">Qudud</a> forms.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zX7gJKlDDyY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zX7gJKlDDyY/hqdefault.jpg">
                                    </div>
                                </div>
                             <div class="info">
                                    <b>Sadduk ‘Anni el-‘Ida</b>
                                    <span>Aleppan singer Muhammad Khayri starts his <a href="vocal_comp.php#wasla">Wasla</a> in <a href="../maqam/bayati.php">Maqam Bayati</a> with a <a href="ottoman.php/samai">Sama‘i</a>, followed by <strong>Mawwal Sadduk ‘Anni el-‘Ida</strong></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=8MMxY_CIi_I">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/8MMxY_CIi_I/hqdefault.jpg">
                                    </div>
                                </div>
                             <div class="info">
                                    <b>Ashki Li Min el-Hawa</b>
                                    <span><strong>Mawwal Ashki Li Min el-Hawa</strong> in <a href="../maqam/kurd.php">Maqam Kurd</a>, by Muhammad Abdel Wahab (1931).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=2iMNi2qeA7w">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/2iMNi2qeA7w/hqdefault.jpg">
                                    </div>
                                </div>
                             <div class="info">
                                    <b>Min Youm Firgak</b>
                                    <span><strong>Mawwal Baghdadi Min Youm Firgak</strong> by Sabah Fakhri.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>The Improvised Qasida</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qasida.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Qasida</a>
                    </div>
                    <p> The Qasida (plural <em>Qasa'id</em>) is a metered poem in classical Arabic. It can be used in a composed form (see the <a href="vocal_comp.php#qasida">composed qasida</a>) or, in this case, used in an improvised form.  The improvised <em>qasida</em> is identical to a Mawwal in how it features a <a href="../maqam.php">maqam</a>'s <em>sayr</em>, and the singer's skills and artistry.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=GJPYRZwdbhw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/GJPYRZwdbhw/hqdefault.jpg">
                                    </div>
                                </div>
                             <div class="info">
                                    <b>Ya Man Yara Admu‘i</b>
                                    <span>Muhammad Khayri's Qasida <strong>Ya Man Yara Admu‘i</strong> in <a href="../maqam/rast.php">Maqam Rast</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=U0OWUGYqjZo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/U0OWUGYqjZo/hqdefault.jpg">
                                    </div>
                                </div>
                             <div class="info">
                                    <b>Qul Lil-Maliha</b>
                                <span>Sabah Fakhri's signature Qasida <strong>Qul Lil-Maliha</strong> in <a href="../maqam/huzam.php">Maqam Huzam</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqsim" class="heading jins text-center full-width">
                        <h3>The Taqsim</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/taqsim.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Taqsim</a>
                    </div>
                    <p> The Taqsim (plural <em>Taqasim</em>) is an instrumental improvisation guided by a traditional framework that very closely follows a <a href="../maqam.php">maqam</a>'s <em>sayr</em> (including intonation, phrasing and modulation). The <em>taqsim</em> also showcases the beauty of the instrument, its ornamentation possibilities, and the performer's skills, technique and personal voice.
                    </p>
                    <p> The <em>taqsim</em> must follow a narrative arc and consist of sections separated by mini cadences and brief pauses. The <em>taqsim</em> can be a stand-alone piece, or it could be embedded in a song or a <a href="vocal_comp.php#wasla">wasla</a>.
                    </p>
                    <p> The most popular and widespread <em>taqsim</em> instrument is the <a href="../instr/oud.php">oud</a>, along with the <a href="../instr/violin.php">violin</a>, <a href="../instr/nay.php">nay</a> and <a href="../instr/qanun.php">qanun</a>. Arabized instruments like the <a href="../instr/accordion.php">accordion</a> can also be used for a <em>taqsim</em>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=-Atnx8aRrIg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/-Atnx8aRrIg/hqdefault.jpg">
                                    </div>
                                </div>
                             <div class="info">
                                    <b>‘Aboud Abdel ‘Al</b>
                                    <span><a href="../instr/violin.php">Violin</a> Taqsim in <a href="../maqam/bayati.php">Maqam Bayati</a> by Aboud Abdel ‘Al, preceded by <a href="../ottoman.php#samai">Sama‘i</a> Bayati Ibrahim al-‘Aryan</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7iB4JFYArFg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7iB4JFYArFg/hqdefault.jpg">
                                    </div>
                                </div>
                             <div class="info">
                                    <b>‘Amer ‘Ammuri</b>
                                    <span>Taqsim Oud by ‘Amer ‘Ammuri (Syria) in <a href="../maqam/huzam.php">Maqam Huzam</a> during a concert by Sabah Fakhri.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore other groups of forms:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Vocal Composed Forms</a></li>
                        <li><a href="instr_comp.php">Instrumental Composed Forms</a></li>
                        <li><a href="ottoman.php">Ottoman Instrumental Forms</a></li>
                        <!-- Improvised Forms -->
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
