<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Instruments Musicaux Arabes";
$page_description = "Instruments Musicaux Arabes";
$page_keywords = "arabe, musique, instruments, accordéon, bouzouk, daff, mazhar, guitare électrique, katem, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, tromba, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Instruments</a>
                    <?php include('sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Instruments Musicaux Arabes</h1>
                        <h3>Instruments Traditionnels, Arabisés et Percussions</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>Indice del Instruments</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/takht.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Takht</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sahb.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Sahb</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/naqr.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Naqr</a>
                    </div>

                    <p id="takht">L'ensemble traditionnel arabe ou takht consiste en quatre instruments mélodiques:
		le <a href="instr/oud.php">oud</a>, le <a href="instr/nay.php">nay</a>, le <a href="instr/qanun.php">qanun</a>
		 et le <a href="instr/violin.php">violon</a>, et en l'instrument de percussion principal: le <a href="instr/riqq.php">riqq</a>.
		Des fois, au riqq est ajouté (ou le riqq est remplacé par) la <a href="instr/tabla.php">tabla</a>
		ou le <a href="instr/daff.php">daff</a> (tambour sur cadre),
		et aux instruments mélodiques peut être ajouté le <a href="instr/buzuq.php">bouzouk</a>.
                    </p>

                    <p>
		Au niveau stylistique, les instruments mélodiques sont divisés en deux familles:
		<em>sahb</em> (du mot "tirer"; instruments à cordes frottées et à vent, aux sons longs)
		et <em>naqr</em> (du mot "tapper"; instruments à cordes pincées ou frappées, aux sons courts).
		Le violon et le nay appartiennent à la catégorie sahb, tandis que le oud et le qanun appartiennent à la catégorie naqr.
		Les deux familles ont un rôle complémentaire permettant de créer un son plus riche et plus complexe.
                    </p>

                    <p>
		Les instruments arabisés sont des instruments non-arabes qui sont entrés dans l'ensemble de musique arabe au 20<sup>ième</sup> siècle et sont devenus partie prenante du son de la musique arabe de cette période.
		La plupart de ces instruments ont été adoptés en Égypte où les musiciens ont développé de nouvelles techniques et manières d'ornementer qui ont permis à ces instruments de sonner 'arabe'.
        Certains de ces instruments ont été modifiés de manière à ajouter de nouvelles notes de manière à être en mesure de donner une version assez proche de l'intonation correcte du <a href="../maqam.php">maqam</a> arabe.
		Certains autres instruments possédant un système de 12 notes également tempérées ont été utilisés sans transformation.
		</p>

        <p>
		Cette catégorie inclue le <a href="instr/piano.php">piano</a>, le piano électrique,
		l'<a href="instr/org.php">orgue électrique</a>, le <a href="instr/keyboard.php">synthétiseur oriental</a>,
		l'<a href="instr/accordion.php">accordéon</a>, la <a href="instr/guitar.php">guitare électrique</a> et la basse électrique (sans frette).
		Certains de ces instruments peuvent être modifiés de manière à produire les quarts de ton.
		La batterie et la percussion électronique sont aussi souvent utilisées pour la musique arabe contemporaine populaire ou de danse.
        </p>

        <p>La flute, le <a href="instr/saxophone.php">saxophone</a>, la clarinette et la <a href="instr/trumpet.php">tromba</a> sont
		des instruments à tempérament non-égal et permettent un plus grand contrôle des fréquences
		que les instruments venant d'être mentionnés. Ils sont utilisés à des degrés divers dans la musique arabe,
		particulièrement dans les styles de jazz fusion arabe modernes.
        </p>

        <p>Le violon, l'alto, le violoncelle et la contrebasse sont beaucoup utilisés dans la musique arabe,
		particulièrement dans les grands ensembles comme celui de Oum Koulthoum et l'Orchestre Diamant en Égypte.
		Étant tous sans frette, ces instruments peuvent produire sans problème les gammes du <a href="maqam.php">maqam</a> arabe.
        </p>

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="/img/rosette_khalaf.png" alt="Oud Rosette Khalaf">
                    <div class="card-body">
                        <h5 class="card-title">Instruments Traditionnels</h5>
                        <p class="card-text"><a href="instr/oud.php">Le Oud</a></p>
                        <p class="card-text"><a href="instr/qanun.php">Il Qanun</a></p>
                        <p class="card-text"><a href="instr/nay.php">Il Nay</a></p>
                        <p class="card-text"><a href="instr/violin.php">Il Violino</a></p>
                        <p class="card-text"><a href="instr/buzuq.php">Il Buzuq</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="/img/nahat_girgi.png" alt="Oud Rosette Nahhat">
                    <div class="card-body">
                        <h5 class="card-title">Instruments Arabisés</h5>
                        <p class="card-text"><a href="instr/accordion.php">La Fisarmonica Arabe</a></p>
                        <p class="card-text"><a href="instr/guitar.php">La Chitarra Elettrica Arabe</a></p>
                        <p class="card-text"><a href="instr/org.php">L'Orgue Électrique Arabe</a></p>
                        <p class="card-text"><a href="instr/keyboard.php">La Tastiera Orientale</a></p>
                        <p class="card-text"><a href="instr/piano.php">Il Piano Arabo</a></p>
                        <p class="card-text"><a href="instr/saxophone.php">Il Sassofono</a></p>
                        <p class="card-text"><a href="instr/trumpet.php">La Tromba</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                <div class="card">
                    <img class="card-img-top" src="/img/vergara.png" alt="Oud Rosette Vergara">
                    <div class="card-body">
                        <h5 class="card-title">Instruments de Percussion</h5>
                        <p class="card-text"><a href="instr/riqq.php">Il Riqq</a></p>
                        <p class="card-text"><a href="instr/tabla.php">La Tabla</a></p>
                        <p class="card-text"><a href="instr/tabl_baladi.php">Il Tabl Baladi</a></p>
                        <p class="card-text"><a href="instr/daff.php">Il Daff</a></p>
                        <p class="card-text"><a href="instr/mazhar.php">Il Mazhar</a></p>
                        <p class="card-text"><a href="instr/katim.php">Le Katem</a></p>
                        <p class="card-text"><a href="instr/sagat.php">Le Sagat</a></p>
                    </div>
                </div>
            </div>
        </div>

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
