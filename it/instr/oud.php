<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "L'Oud";
$page_description = "L'Oud";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Oud";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/oud.php";
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
                        <h1>L'Oud (L'Ud)</h1>
                        <h3>Un liuto senza tasti</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/oud.jpg" alt="L'Oud">
                        <span>Un oud siriano prodotto dalla Nahat Brother (sulla destra) e un Iraqi oud prodotto da Muhammad Fadil (sulla sinistra). &copy; 2018 MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/oud.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Oud</a>
                    </div>

                    <p>
                    L'Oud è un degli strumenti più popolari nella musica araba. Il suo nome significa "una sottile striscia di legno" in arabo, e si riferisce alla striscia di legno utilizzato per fare il suo corpo a forma di pera. Il manico dell'oud è corto rispetto alla grandezza del suo corpo ed è senza tasti. Questo permetto all'oud di avere un'intonazione eccellente e lo rende ideale per suonare i <a href="../maqam.php">maqams</a> arabi.
					</p>

                    <p>
                    L'oud di solito è formato da 5 paia di corde accordate all'unisono e una singola corda bassa, anche se alcuni oud hanno una coppia di corde un più. L'accordatura più comune (dal basso verso l'alto) è Do, Fa, La, Re, Sol, Do, il che rende tutti gli intervalli (tranne tra il F e il A) delle quarte perfette. Le corde storicamente venivano ricavate da viscere di animali e pizzicate da un plettro chiamato <em>risha</em> (traduzione araba di piuma). Le corde moderne sono fatte in acciaio arrotolato sopra il nylon e i risha moderni vengono fatti in plastica, guscio di tartaruga, corno di animali o anche in bamboo.
                    </p>

                    <p>
                    L'oud ha un timbro caldo e un ampio intervallo tonale (circa 3 ottave), ed è possibile unire la parte melodica con quella ritmica grazie alla sua percussione. Questo lo rende perfetto per accompagnare un cantante. È lo strumento preferito dai compositori per scrivere nuove melodie. I <a href="../form/improv.php#taqsim">taqasim</a> di oud sono molto popolari nei concerti e nelle registrazioni.
                    </p>

                    <p>
                    L'oud arabo è lo stesso strumento che esiste in molte altre nazioni (come il Turchia, Grecia, Iran) con qualche differenza nella dimensione, nello stile e nel timbro. Il liuto europea è un discendente dell'oud, da cui prende il nome (al-oud).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dDrVYyoMi-4&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dDrVYyoMi-4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhammad al-Qassabgi</b>
                                    <span>Il compositore e virtuoso egiziano Muhammad al-Qasabgi mentre suona dei <a href="../form/improv.php#taqsim">Taqsim</a> sul <a href="../maqam/rast.php">Maqam Rast</a> (registrato presso il conservatorio di musica araba al Cairo, 1955).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zGoY5QYLnYs&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zGoY5QYLnYs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Farid al-Atrach</b>
                                    <span>Il virtuoso di oud sirian Farid al-Atrash (conosciuto come "Il re dell'oud") mentre suona un <a href="../form/improv.php#taqsim">Taqsim</a> famoso con l'oud sul <a href="../maqam/bayati.php">Maqam Bayati</a> prima della sua composizione "<strong>al-Rabi‘</strong>" (1949).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

			         <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=OCmheJ929fo&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/OCmheJ929fo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Simon Shaheen</b>
                                    <span>Il suonatore di oud palestinese Simon Shaheen mentre suona un <a href="../maqam/hijaz.php">Maqam Hijaz</a>, registrato al Metropolitan Museum a New York, 1987.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Jf3WeItCpXA&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Jf3WeItCpXA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>George Michel</b>
                                    <span>Il suonatore di oud egiziano George Michel mentre suona un oud <a href="../form/improv.php#taqsim">Taqsim</a> sul <a href="../maqam/nahawand.php">Maqam Nahawand</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7iB4JFYArFg&t=0">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7iB4JFYArFg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>‘Amer ‘Ammuri</b>
                                    <span>Sil suonatore di oud siriano ‘Amer ‘Ammouri mentre suona un oud <a href="../form/improv.php#taqsim">Taqsim</a> sul <a href="../maqam/bayati.php">Maqam Bayati</a>, come parte della Sabah Fakhri's orchestra (registrato al teatro dell'opera del Cairo).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti tradizionali:</p>
                    <ul>
                    	<!--
                        <li><a href="oud.php">Le Oud</a></li>
                        -->
                        <li><a href="qanun.php">Il Qanun</a></li>
                        <li><a href="nay.php">Il Nay</a></li>
                        <li><a href="violin.php">Il Violino</a></li>
                        <li><a href="buzuq.php">Il Buzuq</a></li>
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
