<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Il Riqq";
$page_description = "Il Riqq";
$page_keywords = "arabe, musique, instruments, accordéon, buzuq, daff, mazhar, guitare électrique, katèm, nay, synthétiseur oriental, orgue électrique, oud, ‘ud, piano, qanun, riqq, sagat, sajat, saxophone, tabla, tabl baladi, tromba, violon, monde arabe, maqam, jins, iqa‘, iqaa, rythme, quart de ton, tetrachord, modal, moyen orient, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "it/instr/riqq.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Instruments</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Il Riqq</h1>
                        <h3>Un petit tambour sur cadre à cymbales tenu à la main</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Instruments</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/riqq.jpg" alt="The Riqq">
                        <span>Deux riqqs traditionnels à peaux de poisson. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/riqq.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Riqq</a>
                    </div>

                    <p>Il Riqq est un petit tambour sur cadre à cymbales tenu à la main. Le cadre est en général fait de bois (certains modèles en aluminium existent aussi) et a un diamètre de 23 à 26 centimètres. La peau est traditionnellement de poisson; les riqqs modernes utilisent plutôt du plastique (mylar). Les cymbales donnent au riqq son son distinctif. Elles sont faites de laiton (à peu près 0.8 à 0.9 millimètres d'épaisseur) et viennent en 5 (ou 6) groupes de quatre.
                    </p>
                    <p>
                    Il Riqq peut être utilisé pour jouer des <a href="../iqaa.php">cycles rythmiques</a> et des ornements très complexes en utilisant une technique de doigté élaborée. Il peut produire une palette de sons très ample en utilisant la peau, le cadre de bois et les cymbales.
                    </p>
                    <p>Il Riqq est généralement le seul instrument de percussion du <em>takht</em> (l'orchestre de chambre traditionnel arabe) et le musicien qui en joue est appelé <em>dabet al-iqa‘</em> ('celui qui contrôle le rythme').</p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ptd3R51Qj-s&t=2100s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ptd3R51Qj-s/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Hassan Anwar</b>
                                <span>Le joueur de riqq Hasan Anwar (le <em>dabet al-iqa‘</em> officiel de l'Orchestre Diamant d'Égypte) échange des solos avec le joueur d'orgue pendant la chanson <strong>Qari'at al-Fingan</strong> de Abdel Halim Hafez (1976, musique de Mouhammad al-Mougi).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=BdNS93A3Itg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/BdNS93A3Itg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Mouhammad al-‘Arabi</b>
                                <span>Le joueur de riqq égyptien Mouhammad al-‘Arabi joue un solo sur un riqq à peau de plastique dans lequel il explore plusieurs <a href="../iqaa.php">iqa‘at</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=on7vkhzPXPM&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/on7vkhzPXPM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Adel Shams el-Din</b>
                                    <span>Le percussionniste égyptien Adel Shams el-Din joue un solo sur un riqq à peau de poisson, dans lequel il explore plusieurs <a href="../iqaa.php">iqa‘at</a> (enregistré en 2005 à l'Institut du Monde Arabe, Paris).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorer d'autres instruments de percussion:</p>
                    <ul>
                        <!-- <li><a href="riqq.php">Il Riqq</a></li> -->
                        <li><a href="tabla.php">La Tabla</a></li>
                        <li><a href="tabl_baladi.php">Il Tabl Baladi</a></li>
                        <li><a href="daff.php">Il Daff</a></li>
                        <li><a href="mazhar.php">Il Mazhar</a></li>
                        <li><a href="katim.php">Il Katem</a></li>
                        <li><a href="sagat.php">Le Sagat</a></li>
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
