<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Formes Improvisées";
$page_description = "Formes Improvisées";
$page_keywords = "musique, arabe, formes, qawaleb, Le Taqsim, Le Mawwal, Les Layali, La Qassida";
$page_language = "fr"; // YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "fr/form/improv.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Formes</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Formes Improvisées</h1>
                        <h3>Le Taqsim, Le Mawwal, Les Layali, La Qassida</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Formes</a>
                    <div class="clearfix"></div>

                    <p>Les formes improvisées sont les véhicules les plus directs pour un <em>mutrib</em> (chanteur) ou un instrumentaliste de connecter avec son public en explorant et travaillant le <em>sayr</em> (comportement mélodique)  d'un <a href="../maqam.php">maqam</a>.
                    </p>

                    <div id="layali" class="heading jins text-center full-width">
                        <h3>Les Layali</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/layali.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Layali</a>
                    </div>
                    <p>
                        La forme Layali est une improvisation vocale en solo sur la phrase "Ya Layl Ya ‘Ayn" (O Nuit, O Œil). "Layali" est le pluriel arabe de "layl'". C'est une phrase traditionnelle qui n'est plus utilisée dans son sens littéral mais comme un patron sonore et un véhicule à l'improvisation.
                    </p>
                    <p>
                        Les Layalis peuvent être exécutées seuls mais sont généralement utilisés comme préludes pour la forme vocale qui suit, comme par exemple un Mawwal, une Qasida ou même une <a href="vocal_comp.php">forme vocale composée</a>. Dans ce dernier cas, les Layali servent à se réchauffer et aide le chanteur à s'immerger dans le <a href="../maqam.php">maqam</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=wOlB3-EiweY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/wOlB3-EiweY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr Kadni el-Hawa</b>
                                    <span>
                                        L'enregistrement de Marie Jubran du <a href="vocal_comp.php#dawr">Dawr</a> <strong>Kadni el-Hawa</strong> (musique de Mouhammad ‘Outhman) commence avec un taqsim de <a href="../instr/qanun.php">qanoun</a> suivi d'un layali dans le <a href="../maqam/nahawand.php">Maqam Nahawand</a>.
                                    </span>
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
                                </div><!--
                             --><div class="info">
                                    <b>Taqtouqa Leh Ya Banafseg</b>
                                    <span>
                                        L'enregistrement de Saleh Abdel Hayy de la <a href="vocal_comp.php#taqtuqa">Taqtouqa</a> <strong>Leh Ya Banafseg</strong> (musique de Riyad al-Soumbati) est une longue <a href="vocal_comp.php#wasla">Wasla</a> qui commence avec un <a href="#taqsim">Taqsim</a> de <a href="../instr/oud.php">oud</a>, un <a href="ottoman.php/samai">Sama‘i</a>, un taqsim de <a href="../instr/qanun.php">qanoun</a>, une répétition du <em>taslim</em> du Sama‘i et des <em>Layali</em>, tous dans le <a href="../maqam/rast.php">Maqam Rast</a>.
                                </span>
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
                                </div><!--
                             --><div class="info">
                                    <b>Mouhammad Khayri - Layali</b>
                                    <span>Le chanteur aleppin Mouhammad Khayri commence sa <a href="vocal_comp.php#wasla">Wasla</a> en <a href="../maqam/rast.php">Maqam Rast</a> avec des Layali puis chante une <a href="#qasida">Qasida improvisée</a> et quelques <a href="vocal_comp.php#qadd">Qoudoud</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="mawwal" class="heading jins text-center full-width">
                        <h3>Le Mawwal</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mawwal.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Mawwal</a>
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
                                </div><!--
                             --><div class="info">
                                    <b>Sadduk ‘Anni el-‘Ida</b>
                                    <span>Aleppan singer Muhammad Khayri starts his <a href="vocal_comp.php#wasla">Wasla</a> in <a href="../maqam/bayati.php">Maqam Bayati</a> with a <a href="ottoman.php/samai">Sama‘i</a>, followed by <strong>Mawwal Sadduk ‘Anni el-‘Ida</strong></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3-6DD0tbYbo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3-6DD0tbYbo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ashki Li Min el-Hawa</b>
                                    <span><strong>Mawwal Ashki Li Min el-Hawa</strong> in <a href="../maqam/kurd.php">Maqam Kurd</a>, by Muhammad Abdel Wahab (1931).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=C4BDAcZTPMs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/C4BDAcZTPMs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
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
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qasida.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Qasida</a>
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
                                </div><!--
                             --><div class="info">
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
                                </div><!--
                             --><div class="info">
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
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/taqsim.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Taqsim</a>
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
                                </div><!--
                             --><div class="info">
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
                                </div><!--
                             --><div class="info">
                                    <b>‘Amer ‘Ammuri</b>
                                    <span>Taqsim Oud by ‘Amer ‘Ammuri (Syria) in <a href="../maqam/huzam.php">Maqam Huzam</a> during a concert by Sabah Fakhri.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore other groups of forms:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Formes Vocales Composées</a></li>
                        <li><a href="instr_comp.php">Formes Composées Instrumentales</a></li>
                        <li><a href="ottoman.php">Formes Instrumentales Ottomanes</a></li>
                        <!-- <li><a href="improv.php">Formes Improvisées</a></li> -->
                    </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
