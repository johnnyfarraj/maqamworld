<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "L'Orgue �lectrique Arabe";
$page_description = "L'Orgue �lectrique Arabe";
$page_keywords = "arabe, musique, instruments, accord�on, bouzouk, daff, mazhar, guitare �lectrique, kat�m, nay, synth�tiseur oriental, orgue �lectrique, oud, �ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa�, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/org.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>L'Orgue �lectrique Arabe</h1>
                        <h3>L'Orgue �lectrique des ann�es 1970 avec quelques quarts de ton</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/org.jpg" alt="The Electric Organ">
                        <span>Le pionnier de l'Orgue �lectrique Magdi el-Husseini (�gypte)</span>
                    </div>

                    <p>L'Orgue �lectrique (g�n�ralement appel� <em>org</em> en arabe, du fran�ais 'orgue')  est devenu tr�s populaire dans la musique arabe, de la fin des ann�es 1960 aux ann�es 1970. Son pionnier a �t� le clavi�riste superstar �gyptien Magdi el-Husseini. L'orgue a �t� modifi� de mani�re � �tre en mesure de jouer des quarts de tons satisfaisants (comme ceux de l'accord�on), lui permettant de jouer la plupart des <a href="../maqam.php">maqams</a>. L'orgue a �t� utilis�e pour jouer une combinaison de lignes m�lodiques et d'accords simples.  Avec <a href="guitar.php">la guitare �lectrique</a>, l'accord�on a permis de cr�er un son distinctif qui a marqu� la musique arabe de cette d�cennie.
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
                                <span>La chanson <strong>Qari'at al-Fingan</strong> de Abdel Halim Hafez (1976, musique de Mouhammad al-Mougi) avec les �gyptiens Magdi el-Husseini et Hani Mehanna � l'orgue �lectrique (les deux membres de l'Orchestre Diamant).</span>
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
                                    <b>Interview avec Magdi el-Husseini</b>
                                    <span>Interview avec Magdi el-Husseini � propos de sa rencontre avec Abdel Halim Hafez et de son exp�rience en tant que membre de son orchestre.</span>
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
                                    <b>Interview avec Hani Mehanna</b>
                                    <span>Interview avec Hani Mehanna � propos de sa rencontre avec Mouhammad Abdel Wahab et la chanteuse Oum Koulsoum et de son exp�rience en tant que membre de l'orchestre de cette derni�re pour la chanson <strong>Leilet Hobb</strong>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments arabis�s:</p>
                    <ul>
						<li><a href="accordion.php">L'Accord�on Arabe</a></li>
						<li><a href="guitar.php">La Guitare �lectrique Arabe</a></li>
                    	<!--
						<li><a href="org.php">L'Orgue �lectrique Arabe</a></li>
						-->
						<li><a href="keyboard.php">Le Synth�tiseur Oriental</a></li>
						<li><a href="piano.php">Le Piano Arabe</a></li>
						<li><a href="saxophone.php">Le Saxophone</a></li>
						<li><a href="trumpet.php">La Trompette</a></li>
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
