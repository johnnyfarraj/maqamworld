<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Formes Improvisées";
$page_description = "Formes Improvisées";
$page_keywords = "musique, arabe, formes, qawaleb, Il Taqsim, Il Mawwal, Le Layali, La Qasida";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "it/form/improv.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Formes</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Formes Improvisées</h1>
                        <h3>Il Taqsim, Il Mawwal, Le Layali, La Qasida</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Formes</a>
                    <div class="clearfix"></div>

                    <p>Les formes improvisées sont les véhicules les plus directs pour un <em>moutreb</em> (chanteur) ou un instrumentaliste de connecter avec son public en explorant et travaillant le <em>sayr</em> (comportement mélodique)  d'un <a href="../maqam.php">maqam</a>.
                    </p>

                    <div id="layali" class="heading jins text-center full-width">
                        <h3>Le Layali</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/layali.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Layali</a>
                    </div>
                    <p>
                        La forme Layali est une improvisation vocale en solo sur la phrase "Ya Layl Ya ‘Ayn" (O Nuit, O Œil). "Layali" est le pluriel arabe de "layl'". C'est une phrase traditionnelle qui n'est plus utilisée dans son sens littéral mais comme un patron sonore et un véhicule à l'improvisation.
                    </p>
                    <p>
                        Le Layalis peuvent être exécutées seuls mais sont généralement utilisés comme préludes pour la forme vocale qui suit, comme par exemple un Mawwal, une Qasida ou même une <a href="vocal_comp.php">forme vocale composée</a>. Dans ce dernier cas, les Layali servent à se réchauffer et aide le chanteur à s'immerger en <a href="../maqam.php">maqam</a>.
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
                                        L'enregistrement de Marie Joubran du <a href="vocal_comp.php#dawr">Dawr</a> <strong>Kadni el-Hawa</strong> (musique de Mouhammad Outhman) commence avec un taqsim de <a href="../instr/qanun.php">qanun</a> suivi de layali en <a href="../maqam/nahawand.php">Maqam Nahawand</a>.
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
                                    <b>Taqtuqa Leh Ya Banafseg</b>
                                    <span>
                                        L'enregistrement de Saleh Abdel Hayy de la <a href="vocal_comp.php#taqtuqa">Taqtuqa</a> <strong>Leh Ya Banafseg</strong> (musique de Riyad al-Soumbati) est une longue <a href="vocal_comp.php#wasla">Wasla</a> qui commence avec un <a href="#taqsim">Taqsim</a> de <a href="../instr/oud.php">oud</a>, un <a href="ottoman.php/samai">Sama‘i</a>, un taqsim de <a href="../instr/qanun.php">qanun</a>, une répétition du <em>taslim</em> du Sama‘i et des <em>Layali</em>, tous en <a href="../maqam/rast.php">Maqam Rast</a>.
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
                        <h3>Il Mawwal</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mawwal.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Mawwal</a>
                    </div>
                    <p>
                        Il Mawwal (Mawawil au pluriel) est une improvisation vocale solo sur un poème en arabe populaire. Le poème peut être, par exemple, en dialecte égyptien, libanais, syrien ou iraquien. Comme les autres formes vocales improvisées, le mawwal est un véhicule pour montrer sa connaissance du <em>sayr</em> du <a href="../maqam.php">maqam</a> et pour le chanteur de monter la qualité de sa voix et sa technique ornementale.
                    </p>
                    <p>
                        Un genre important de mawwal est le "Mawwal Baghdadien" aussi appelé <em>Sab‘awi</em> (du mot <em>sab‘a</em>, sept) parce qu'il comprend sept lignes qui riment dans le patrons suivant: A, A, A, B, B, B, A. Il Mawwal Baghdadi est très populaire dans le répertoire aleppin aux côtés des <a href="vocal_comp.php#muwashah">Mouachahat</a> et des <a href="vocal_comp.php#qadd">Qoudoud</a>.
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
                                    <b>Saddouk ‘Anni el-‘Ida</b>
                                    <span>Le chanteur aleppin Mouhammad Khayri commence sa <a href="vocal_comp.php#wasla">Wasla</a> en <a href="../maqam/bayati.php">Maqam Bayati</a> avec un <a href="ottoman.php/samai">Sama‘i</a>, suivi par le Mawwal <strong>Saddouk ‘Anni el-‘Ida</strong>.</span>
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
                                    <b>Achki Li Min el-Hawa</b>
                                    <span>
                                        Il Mawwal <strong>Ashki Li Min el-Hawa</strong> en <a href="../maqam/kurd.php">Maqam Kurd</a> par Mouhammad Abdel Wahab (1931).
                                    </span>
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
                                    <span>
                                        Il Mawwal Baghdadien <strong>Min Youm Firgak</strong> par le chanteur aleppin Sabah Fakhri.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>La Qasida Improvisée</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qasida.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Qasida</a>
                    </div>
                    <p>La Qasida (<em>Qassa'id</em> au pluriel) est un poème en mètres en arabe classique. Elle peut être utilisée dans une forme composée (voir la <a href="vocal_comp.php#qasida">qassida composée</a>) ou, dans le présent cas, utilisée comme forme pour l'improvisation. La qasida improvisée est identique au Mawwal pour l'usage du <em>sayr</em> du <a href="../maqam.php">maqam</a> et pour les nécessités artistiques auxquelles le chanteur doit faire face.
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
                                    <span>Qasida de Mouhammad Khayri intitulée <strong>Ya Man Yara Admou‘i</strong> en <a href="../maqam/rast.php">Maqam Rast</a>.</span>
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
                                    <b>Qoul Lil-Maliha</b>
                                <span>Qasida <strong>Qoul Lil-Maliha</strong> en <a href="../maqam/huzam.php">Maqam Huzam</a>, une des pièces-emblèmes du chanteur aleppin Sabah Fakhri.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqsim" class="heading jins text-center full-width">
                        <h3>Il Taqsim</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/taqsim.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Taqsim</a>
                    </div>
                    <p> Il Taqsim (<em>Taqassim</em> au pluriel) est une improvisation instrumentale guidée par un patron traditionnel qui suit le <em>sayr</em> du <a href="../maqam.php">maqam</a> (incluant l'intonation, le phrasé et les modulations). Le taqsim démontre aussi la beauté de l'instrument, ses possibilités ornementales et le talent du musicien, sa technique et sa personnalité.
                    </p>
                    <p>Le  doit suivre un schéma narratif et consiste en sections séparées par de mini cadences et de courtes pauses. Le taqsim peut être joué seul, peut être accolé à une chanson ou inséré dans une <a href="vocal_comp.php#wasla">wasla</a>.
                    </p>
                    <p>L'instrument le plus populaire pour le <em>Taqsim</em> est le <a href="../instr/oud.php">oud</a>, suivi du <a href="../instr/violin.php">violon</a>, du <a href="../instr/nay.php">nay</a> et du <a href="../instr/qanun.php">qanun</a>. Les instruments arabisés tels que <a href="../instr/accordion.php">l'accordéon</a> peuvent aussi être utilisés pour le <em>taqsim</em>.
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
                                    <b>‘Abboud Abdel ‘Al</b>
                                    <span>Taqsim au <a href="../instr/violin.php">violon</a> en <a href="../maqam/bayati.php">Maqam Bayati</a> par ‘Abboud Abdel ‘Al, précédé du <a href="../ottoman.php#samai">Sama‘i</a> Bayati de Ibrahim al-'Aryan.
                                    </span>
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
                                    <b>‘Amer ‘Ammouri</b>
                                    <span>Taqsim au <a href="../instr/oud.php">oud</a> par 'Amer 'Ammuri (Syrie) en <a href="../maqam/huzam.php">Maqam Huzam</a> pendant un concert de Sabah Fakhri.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorez d'autres groupes de formes:</p>
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

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
