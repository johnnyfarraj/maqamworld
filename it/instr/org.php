<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "L'Organo Elettrico Arabe";
$page_description = "L'Organo Elettrico Arabe";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab, Organo Elettrico Arabe";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/org.php";
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
                        <h1>L'Organo Elettrico Arabe</h1>
                        <h3>Organo elettrico del 1970 con l'aggiunta dei quarti di tono</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice Degli Strumenti</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/org.jpg" alt="The Electric Organ">
                        <span>Il pioniere dell'organo Magdi el-Husseini (Egitto)</span>
                    </div>

                    <p>L'organo elettrico (chiamato comunemente <em>org</em> in arabo, dal francese "orgue") divenne molto popolare nella musica araba dalla fine degli anni '60 e poi negli anni '70. Il suo pioniere e superstar fu il pianista egiziano Magdi el-Husseini. L'organo fu alterato per poter suonare correttamente i quarti di tono (come per la fisarmonica) in modo da permettere di suonare la maggior parte delle scale dei <a href="../maqam.php">maqams</a>. L'organo fu usato per suonare una combinazione di frasi melodiche e accordi semplici. L''organo e <a href="guitar.php">la chitarra elettrica</a> hanno creato un suono distintivo che ha contrasegnato la musica araba da quel decennio.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ptd3R51Qj-s&t=2126">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ptd3R51Qj-s/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Magdi el-Husseini</b>
                                    <span><strong>Qari'at al-Fingan</strong> canzone di Abdel Halim Hafez (1976, musica di Muhammad al-Mugi) insieme a un organista egizione Magdi el_Husseini e Hani Mehanna (entambi parte dell'Orchestra di Diamanti).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dgXdCUH8nxY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dgXdCUH8nxY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Intervista a Magdi el-Husseini</b>
                                    <span>Intervista a Magdi el-Husseini sulla sua esperienza nell'incontrare il cantante Abdel Halim Hafez e nel suonare nella sua orchestra.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=G92v98oBCHA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/G92v98oBCHA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Intervista a Hani Mehanna</b>
                                    <span>Intervista a Hani Mehanna sulla sua esperienza nell'incontro con il compositore Muhammad Abdel Wahab e la cantante Umm Kulthum e aver suonato <strong>Leilet Hobb</strong> con la sua orchestra.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Scopri altri strumenti arabizzati:</p>
                    <ul>
						<li><a href="accordion.php">La Fisarmonica Araba</a></li>
						<li><a href="guitar.php">La Chitarra Elettrica Arabe</a></li>
                    	<!--
						<li><a href="org.php">L'Organo Elettrico Arabe</a></li>
						-->
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
