<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Forme Improvisate";
$page_description = "Forme Improvisate";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, qawaleb, Il Taqsim, Il Mawwal, Le Layali, La Qasida";
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
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice per le Forme</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Forme Improvisate</h1>
                        <h3>Il Taqsim, Il Mawwal, Le Layali, La Qasida</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice per le Forme</a>
                    <div class="clearfix"></div>

                    <p>Le forme di improvvisazione sono il modo più immediato per un <em>mutreb</em> (cantante) o per un musicista di connettersi con il pubblico esplorando e lavorando sul <em>sayr</em> di un <a href="../maqam.php">maqam</a>.
                    </p>

                    <div id="layali" class="heading jins text-center full-width">
                        <h3>Le Layali</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/layali.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Layali</a>
                    </div>
                    
                    <p>Le Layali sono una forma di improvvisazione che consiste in un assolo vocale sulla frase "Ya Layl Ya ‘Ayn" (O notte, O occhio), dove "layali" è il plurale della parola "layl". Questa è una frase tradizionale che non viene più usata con il suo significato letterale ma è diventata una frase usata come abbellimento nelle parti vocali.
                    </p>
                    
                    <p>Le Layali possono anche essere un pezzo a se stante ma solitamente vengono usate come preludio per la successiva forma vocale (come ad esempio il mawwal, la qasida o anche una <a href="vocal_comp.php">forma vocale composta</a>). In questo caso servono come riscaldamento, e aiutano il cantante a ìmmergersi nel <a href="../maqam.php">maqam</a>.
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
                                        Registrazione di Marie Jubran del <a href="vocal_comp.php#dawr">Dawr</a> <strong>Kadni el-Hawa</strong> (musica di Muhammad ‘Uthman) inizia con un <a href="#taqsim">Taqsim</a> sul <a href="../instr/qanun.php">qanun</a> seguito da un layali sul <a href="../maqam/nahawand.php">Maqam Nahawand</a>.
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
                                        Registrazione di Saleh Abdel Hayy della <a href="vocal_comp.php#taqtuqa">Taqtuqa</a> <strong>Leh Ya Banafseg</strong> (musica di Riyad al-Sunbati) è un <a href="vocal_comp.php#wasla">Wasla</a> lunga che inizia con un <a href="#taqsim">Taqsim</a> all'<a href="../instr/oud.php">oud</a>, un <a href="ottoman.php/samai">Sama‘i</a>, un Taqsim al <a href="../instr/qanun.php">qanun</a>, una ripresa del <em>taslim</em> del Sama‘i, poi <em>Layali</em>, tutti sul <a href="../maqam/rast.php">Maqam Rast</a>.
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
                                    <b>Muhammad Khayri - Layali</b>
                                    <span>Il cantante di Aleppo Muhammad Khayri inizia il <a href="vocal_comp.php#wasla">Wasla</a> sul <a href="../maqam/rast.php">Maqam Rast</a> con Layali prima di continuare con uns <a href="#qasida">qasida improvvisata</a>, e poi dei <a href="vocal_comp.php#qadd">Qudud</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="mawwal" class="heading jins text-center full-width">
                        <h3>Il Mawwal</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/mawwal.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Mawwal</a>
                    </div>
                    
                    <p>Il Mawwal (plurale <strong>Mawawil</strong>) è una forma di improvvisazione di un assolo vocale su di un poema in arabo colloquiale. Per esempio, il poema può essere in egiziano, libanese, siriano o in dialetto iracheno. Come per le altre forme di improvvisazione vocale, il mawwal è un metodo per mostrare il <em>sayr</em> del <a href="../maqam.php">maqam</a>, così come la voce del cantante e le tecniche di abbellimento.
                    </p>
                    
                    <p>Un importante tipo di mawwal è il <strong>Mawwal Baghdadi</strong>, anche chiamato <em>Sab‘awi</em> (da <em>sab‘a</em>, sette) perchè è composto da 7 linee in ritmo A, A, A, B, B, B, A. Il Mawwal Baghdadi è molto popolare nel repertorio di aleppo, insieme alle forme <a href="vocal_comp.php#muwashah">Muwashahat</a> e <a href="vocal_comp.php#qadd">Qudud</a>.
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
                                    <span>Il cantante di Aleppo Muhammad Khayri inizia il suo <a href="vocal_comp.php#wasla">Wasla</a> sul <a href="../maqam/bayati.php">Maqam Bayati</a> con un <a href="ottoman.php/samai">Sama‘i</a>, seguito dal Mawwal Sadduk ‘Anni el-‘Ida.</span>
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
                                </div><!--
                             --><div class="info">
                                    <b>Ashki Li Min el-Hawa</b>
                                    <span>
                                        Il Mawwal <strong>Ashki Li Min el-Hawa</strong> sul <a href="../maqam/kurd.php">Maqam Kurd</a> di Muhammad Abdel Wahab (1931).
                                    </span>
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
                                </div><!--
                             --><div class="info">
                                    <b>Min Yom Firgak</b>
                                    <span>
                                        Il Mawwal Baghdadi <strong>Min Yom Firgak</strong> di Sabah Fakhri.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>La Qasida Improvvisata</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/qasida.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Qasida</a>
                    </div>
                    
                    <p>La Qasida (plurale <strong>Qasa'ed</strong>) è un poema in arabo classico. Può essere usato in una forma composta (vedi <a href="vocal_comp.php#qasida">la qasida composita</a>) o, come in questo caso, come una forma di improvvisazione. La qasida improvvisata è identica al Mawwal per come presenta il <em>sayr</em> del <a href="../maqam.php">maqam</a>, così come le abilità ed il talento del cantante.
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
                                    <span>La Qasida de Muhammad Khayri <strong>Ya Man Yara Admou‘i</strong> sul <a href="../maqam/rast.php">Maqam Rast</a>.</span>
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
                                <span>La Qasida <strong>Qul Lil-Maliha</strong> sul <a href="../maqam/huzam.php">Maqam Huzam</a>, pezzo distintivo di Sabah Fakhri.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqsim" class="heading jins text-center full-width">
                        <h3>Il Taqsim</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/taqsim.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Taqsim</a>
                    </div>
                    
                    <p>Il Taqsim (plurale <em>Taqasim</em>) è una forma di improvvisazione strumentale guidata da una struttura tradizionale che segue molto il <em>sayr</em> del <a href="../maqam.php">maqam</a> (includendo l'intonazione, il fraseggio e la modulazione). Il Taqsim è un modo per mostrare la bellezza di uno strumento, le sue possibilità di suono e la bravura e tecnica del musicista.
                    </p>
                    
                    <p>Il Taqsim deve seguire un arco narrativo che consiste in sezioni separate da delle piccole cadenze e brevi pause. Il taqsim può essere un pezzo a se stante o può essere inserito in una canzone o in un <a href="vocal_comp.php#wasla">wasla</a>.
                    </p>
                    
                    <p>Lo strumento più popolare per i <em>Taqsim</em> è l'<a href="../instr/oud.php">oud</a>, insieme al <a href="../instr/violin.php">violino</a>, al <a href="../instr/nay.php">nay</a> e al <a href="../instr/qanun.php">qanun</a>. Anche gli strumenti arabizzati come la <a href="../instr/accordion.php">fisarmonica</a> possono essere usati durante un <em>taqsim</em>.
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
                                    <b>‘Abbud Abdel ‘Al</b>
                                    <span>Taqsim al <a href="../instr/violin.php">violon</a> sul <a href="../maqam/bayati.php">Maqam Bayati</a> di ‘Abbud Abdel ‘Al, preceduto dal  <a href="../ottoman.php#samai">Sama‘i</a> Bayati di Ibrahim al-'Aryan.
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
                                    <b>‘Amer ‘Ammuri</b>
                                    <span>Taqsim sul'<a href="../instr/oud.php">oud</a> di ‘Amer ‘Ammuri (Siria) sul <a href="../maqam/huzam.php">Maqam Huzam</a> durante un concerto di Sabah Fakhri.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Esplora altri gruppi di forme:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Forme per Composizioni Vocali</a></li>
                        <li><a href="instr_comp.php">Forme di Composizioni Strumentali</a></li>
                        <li><a href="ottoman.php">Forme Strumentali Composte Ottomane</a></li>
                        <!-- <li><a href="improv.php">Forme Improvisate</a></li> -->
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
