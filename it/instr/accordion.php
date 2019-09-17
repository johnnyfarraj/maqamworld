<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "La Fisarmonica Araba";
$page_description = "La Fisarmonica Araba";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Fisarmonica Arabe";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/accordion.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>La Fisarmonica Araba</h1>
                        <h3>Una fisarmonica alterata per includere i quarti di tono.</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/accordion.jpg" alt="La Fisarmonica Araba">
                        <span>Faruq Salama mentre suona la fisarmonica durante <strong>Ya Msahharni</strong> di Umm Kulthum, Cairo, 1971
                        </span>
                    </div>

                    <p>La fisarmonica fece la sua comparsa nella musica araba in Egitto agli inizi del XX secolo e fu originariamente usata senza alcuna alterazione in modo da aggiungere un colore estraneo alla musica (e.g. "<em>Sahirtu</em>" di Muhammad Abdel Wahab nel 1935). Successivamente vennero aggiunte nuove note (i quarti di tono) che permisero di suonare molti dei <a href="../maqam.php">maqamat</a> arabi con la corretta intonazione.
                    </p>
                    <p>La fisarmonica è estremamente popolare nel genere <em>Raqs Sharqi</em> (danza del ventre) e nel <em>Sha‘bi</em>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_0JgmVgSa94&t=376s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_0JgmVgSa94/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Msahharni</b>
                                    <span>Faruq Salama, pioniere egiziano della fisarmonica araba, mentre suona l'introduzione della canzone degli Umm Kukthum <strong>Ya Msahharni</strong> (1972, musica di Sayyed Makkawi.)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=qhFLg5RQjQk">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/qhFLg5RQjQk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Intervista a Faruq Salama</b>
                                    <span>Invervista a Faruq Salama sulla sua esperienza da fisarmonicista con la Umm Kulthum's orchestra.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=1nUqK5wLiME">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/1nUqK5wLiME/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Fifi ‘Abdo</b>
                                    <span>Un video della danzatrice del ventre <strong>Fifi ‘Abdo</strong> che inizia con una fisarmonica araba.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=BcOGIHYnl_g">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/BcOGIHYnl_g/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>Ahmed ‘Adaweya</b>
                                <span>La canzone <strong>Ya Hilu el-Malamih</strong> (nel genere egizio <em>Sha‘bi</em>) di Ahmed ‘Adaweya con una danzatrice del ventre.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://youtu.be/7f5a9BhGios?t=650s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7f5a9BhGios/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Elias Lammam</b>
                                    <span>L'Orchestra Nazionale Araba (USA) mentre suona <strong>Kahramana</strong>, composizione strumentale di Farid al-Atrash, in un arrangiamento che include la fisarmonica araba con altri strumenti tradizionali arabi.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti arabizzati:</p>
                    <ul>
                    	<!--
						<li><a href="accordion.php">La Fisarmonica Araba</a></li>
						-->
						<li><a href="guitar.php">La Chitarra Elettrica Araba</a></li>
						<li><a href="org.php">L'Organo Elettrico Arabo</a></li>
						<li><a href="keyboard.php">La Tastiera Orientale</a></li>
						<li><a href="piano.php">Il Piano Arabo</a></li>
						<li><a href="saxophone.php">Il Sassofono</a></li>
						<li><a href="trumpet.php">La Tromba</a></li>
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
