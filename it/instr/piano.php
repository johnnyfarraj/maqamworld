<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Piano Arabo";
$page_description = "Il Piano Arabo";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Piano Arabo";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/piano.php";
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
                        <h1>Il Piano Arabo</h1>
                        <h3>Un piano che suona dei <a href="../maqam.php">Maqamat</a> senza armonia</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/piano.jpg" alt="The Arabic Piano">
                        <span>Il pianista libanese Ziad Rahbani (da un poster di un concerto del 1980)</span>
                    </div>

                    <p> 
                    Anche se il piano è stato usato nella musica araba fin dall'inizio del XX secolo, è stato usato come strumento occidentale per aggiungere colori classici alle composizioni arabe (e.g. "al-Siba wal-Gamal" di Muhammad Abdel Wahab, 1939). Con piano arabo ci riferiamo comunque al piano suonato in modo melodico (senza armonia) nell’ambito della struttura del <a href="../maqam.php">Maqam</a> arabo.
                    </p>
                    <p>
                    Il pioniere del piano arabo fu il libanese Wadih Sabra che ha suonato il piano con delle note aggiuntive (quarti di tono) durante il Cairo Arabic Music Congress del 1932. Più tardi anche il libanese Abdallah Chahine ha alterato il piano per suonare i quarti di tono e ha registrato l'album <strong>al-Nagham al-Khalid</strong> con dei <a href="../form/improv.php#taqsim">taqasim</a> sui più comuni <a href="../maqam.php">maqamat</a>.
                    </p>
                    <p>
                    Verso la fine del XX secolo il musicista e drammaturgo libanese Ziad Rahbani ha registrato molte canzoni strumentali utilizzando un piano elettrico (un Fender Rhodes) per suonare sia linee melodiche dei <a href="../maqam.php">maqam</a> che armonie Jazz-fusion.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3v9u-h4Vr5A">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3v9u-h4Vr5A/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Abdallah Chahine</b>
                                    <span>
                                    Il pianista libanese Abdallah Chahine mentre suona un <a href="../form/improv.php#taqsim">taqsim</a> con il piano su un <a href="../maqam/saba.php">Maqam Saba</a> nella canzone <strong>Batet ‘Uyuni</strong> dal suo album <strong>Angham Min al-Sharq</strong>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=rbzYUIPPk90">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/rbzYUIPPk90/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ziad Rahbani</b>
                                    <span>Il pianista libanese Ziad Rahbani suona un piano arabo nella sua canzone <strong>Shu Hal-Iyyam</strong> dal suo CD Ana Moush Kafer, 1985.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=BGsD1eZ-PVQ">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/BGsD1eZ-PVQ/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>W'Qamh</b>
                                <span>La composizione strumentale <strong>W'Qamh</strong> di Ziad Rahbani su un <a href="../maqam/hijaz.php">Maqam Hijaz</a> usa il piano arabo in un arrangiamento jazz-fusion. Dal CD di Fairouz <strong>Mish Kayin Hayk Tkun</strong>, 1987.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti arabizzati:</p>
                    <ul>
						<li><a href="accordion.php">La Fisarmonica Araba</a></li>
						<li><a href="guitar.php">La Chitarra Elettrica Araba</a></li>
						<li><a href="org.php">L'Organo Elettrico Arabo</a></li>
						<li><a href="keyboard.php">La Tastiera Orientale</a></li>
                    	<!--
						<li><a href="piano.php">Il Piano Arabo</a></li>
						-->
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
