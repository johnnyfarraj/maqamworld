<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Le Oud Arabe";
$page_description = "Le Oud Arabe";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katem, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, trompette, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "fr"; // YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "fr/instr/oud.php";
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
                        <h1>Le Oud Arabe</h1>
                        <h3>Un lute non fretté</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/oud.jpg" alt="L'Oud">
                        <span>Un oud syrien construit par les frères Nahat (droite), et un oud iraqien construit par Mouhammad Fadel (gauche). &copy; 2018 MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/oud.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Oud</a>
                    </div>

                    <p>
                    Le Oud (aussi orthographié 'Ud) est un des instruments les plus populaires de la musique arabe.
                    Son nom signifie "une mince bande de bois" en arabe et ceci réfère aux bandes de bois utilisées pour fabriquer
                    le corps en forme de poire de l'instrument.
                    Le manche du oud est court en comparaison de son corps et n'a pas de frette.
                    Ceci permet au oud de produire une bonne intonation et en fait un instrument
                    idéal pour jouer les <a href="../maqam.php">maqamat</a> arabes.
					</p>

                    <p>Le oud a en général cinq paires de cordes accordées à l'unisson plus une corde plus basse que les autres et non doublée.
                    Certains ouds ont une paire de cordes en plus. L'accordage le plus courant est, du plus grave au plus
                    aigüe: Do, Fa, La, Ré, Sol, Do, ce qui fait de tous les intervalles (mis à part l'intervalle de Fa à La) des quartes.
                    Les cordes étaient historiquement faites de boyau d'animal et étaient pincées à l'aide d'un plectre appelé
                    <em>risha</em> (le mot arabe pour 'plume').
                    Les cordes modernes sont faites d'acier enroulé sur du nylon et les risha modernes sont faits de plastique,
                    d'écaille de tortue, de corne d'animal ou même de bambou.
                    </p>

                    <p>
                    Le oud a un timbre chaud ainsi qu'un large ambitus (à peu près trois octaves).
                    Il peut interpréter la mélodie aussi bien que le rythme parce qu'il est percussif.
                    Ceci en fait l'instrument idéal pour accompagner un chanteur.
                    C'est aussi l'instrument préféré des compositeurs pour écrire de nouvelles mélodies.
                    Les <a href="../form/improv.php#taqsim">taqasim</a> de oud sont aussi très populaires dans les concerts ainsi que dans les enregistrements.
                    </p>

                    <p>Le oud arabe est plus ou moins le même instrument que celui que l'on peut trouver dans plusieurs autres pays de la région
                    (par exemple la Turquie, la Grèce, l'Iran) avec quelques différences au niveau des dimensions,
                    du style et du timbre. Le "lute" européen est le descendant du oud dont il a pris le nom (al-oud).
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
                                    <b>Mouhammad al-Qasabgi</b>
                                    <span>Virtuose du oud et compositeur égyptien, Mouhammad al-Qasabgi joue ici
                                    un <a href="../form/improv.php#taqsim">Taqsim</a> dans le <a href="../maqam/rast.php">Maqam Rast</a>
                                    (enregistré au Conservatoire de Musique Arabe au Caire, en 1955).
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
                                    <span>Virtuose du oud syrien, Farid al-Atrach (connu aussi comme le 'Roi du Oud)
                                    joue ici un <a href="../form/improv.php#taqsim">Taqsim</a> très connu,
                                    dans le <a href="../maqam/bayati.php">Maqam Bayati</a>, avant de jouer sa composition <strong>al-Rabi‘</strong> (1949).
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
                                    <span>Le joueur de oud palestinien Simon Shaheen joue dans le <a href="../maqam/hijaz.php">Maqam Hijaz</a>.
                                    Enregistré au Musée Métropolitain de New York en 1987.
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
                                    <span>Le joueur de oud égyptien George Michel jouant un <a href="../form/improv.php#taqsim">Taqsim</a> dans le
                                    <a href="../maqam/nahawand.php">Maqam Nahawand</a>.
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
                                    <b>‘Amer ‘Ammouri</b>
                                    <span>Le joueur de oud syrien 'Amer 'Ammouri jouant un <a href="../form/improv.php#taqsim">Taqsim</a>
                                    dans le <a href="../maqam/bayati.php">Maqam Bayati</a>.
                                    Avec l'orchestre de Sabah Fakhri (enregistré à l'Opéra du Caire).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments traditionnels:</p>
                    <ul>
                    	<!--
                        <li><a href="oud.php">Le Oud</a></li>
                        -->
                        <li><a href="qanun.php">Le Qanoun</a></li>
                        <li><a href="nay.php">Le Nay</a></li>
                        <li><a href="violin.php">Le Violon</a></li>
                        <li><a href="buzuq.php">Le Bouzouk</a></li>
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
