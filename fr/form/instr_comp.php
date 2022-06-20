<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Formes Composées Instrumentales";
$page_description = "Formes Composées Instrumentales";
$page_keywords = "musique, arabe, formes, qawaleb, Le Doulab, La Maqtoua, La Mouqaddima, La Tahmila, Le Darej";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "fr/form/instr_comp.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Formes</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Formes Composées Instrumentales</h1>
                        <h3>Le Doulab, La Maqtoua, La Mouqaddima, La Tahmila, Le Darej</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Formes</a>
                    <div class="clearfix"></div>

                    <p>Les formes composées instrumentales ne sont pas aussi répandues que les <a href="vocal_comp.php">Formes Vocales Composées</a> dans la musique arabe, celle-ci étant principalement de nature orale. Les performances uniquement instrumentales sont de ce fait très rares. Pourtant, la musique instrumentale est un complément très beau à la musique vocale et lui sert d'introduction, fournit des interludes entre les pièces vocales et permet aux instrumentistes de montrer leur talent au sein de l'orchestre.</p>

                    <div id="maqtua" class="heading jins text-center full-width">
                        <h3>La Maqtoua</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/maqtua.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Maqtoua</a>
                    </div>
                    <p> La Maqtoua ('pièce', au sens littéral) est une composition instrumentale. Elle est aussi appelée <em>ma'zoufa</em> (pièce jouée sur un instrument au lieu d'être chantée). La forme <em>maqtoua</em> est très populaire dans la musique <em>Raqs Charqi</em> (danse du ventre).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=yJecVVGVGIw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/yJecVVGVGIw/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Zikrayati (1944)</b>
                                    <span>La composition instrumentale Zikrayati (1944) de Mouhammad al-Qasabji en <a href="../maqam/nahawand.php">Maqam Nahawand</a>, enregistrée par l'Orchestre National Arabe (Etats-Unis).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=DwXurHF47j8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/DwXurHF47j8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>‘Aziza (1955)</b>
                                    <span>La composition instrumentale ‘Aziza de Mouhammad Abdel Wahab (du film <strong>‘Aziza</strong>, 1955).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=NtkG3weZkwc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/NtkG3weZkwc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Touta</b>
                                    <span>La composition instrumentale <strong>Touta</strong> de Farid al-Atrach.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=jvdTH_mEcGk">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/jvdTH_mEcGk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Layali Zaman</b>
                                    <span>La composition instrumentale <strong>Layali Zaman</strong> du violoniste égyptien Abdou Dagher.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="muqaddima" class="heading jins text-center full-width">
                        <h3>The Mouqaddima</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/muqaddima.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Mouqaddima</a>
                    </div>
                    <p> The Mouqaddima veut littéralement dire 'introduction'. Cette forme est devenue populaire autour du milieu du 20<sup>ième</sup> siècle quand les compositeurs ont commencé à ajouter de longues introductions à la forme nouvellement populaire <a href="vocal_comp.php#ughniya">Oughniya</a> (longue chanson). Les <em>Mouqaddima</em>-s élaborées peuvent durer plus de cinq minutes, avoir plusieurs sections, des modulations de <a href="../maqam.php">Maqam</a> à maqam et des solos instrumentaux.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=ul4z6sLnXYY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/ul4z6sLnXYY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Alf Leila wi Leila (1969)</b>
                                    <span>L'introduction de la pièce de Oum Koulthoum <strong>Alf Leila wi Leila</strong> (1969), composée par Baligh Hamdi.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=g1o5EdK2meI">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/g1o5EdK2meI/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Qari'at al-Fingan (1976)</b>
                                    <span>Abdel Halim</span>
                                    <span>L'introduction de la longue chanson <em>Qari'at al-Fingan</em> (1976) de Abdel Halim Hafez, composée par Mouhammad al-Mougi.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=ii0_uVzQ_44&t=917s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/ii0_uVzQ_44/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Fi Youm wi Leila (1978)</b>
                                    <span>L'introduction de la longue chanson <strong>Fi Youm wi Leila</strong> (1978) de Warda, composée par Mouhammad Abdel Wahab.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="dulab" class="heading jins text-center full-width">
                        <h3>Le Doulab</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/dulab.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Doulab</a>
                    </div>
                    <p> Le Doulab est une composition très courte qui élabore et introduit les caractéristiques d'un <a href="../maqam.php">Maqam</a>. Son nom veut dire 'roue' en arabe et lui est donné parce que la mélodie est répétée plusieurs fois. Le doulab peut être joué seul avant une <a href="improv.php">improvisation</a>, ou peut servir comme introduction à un <a href="vocal_comp.php#dawr">Dawr</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=n60D-Mnodms">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/n60D-Mnodms/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Doulab Kurd</b>
                                    <span>Cette Wasla de Sabah Fakhri en <a href="../maqam/hijazkar_kurd.php">Maqam Hijazkar Kurd</a> commence avec un Doulab traditionnel en Maqam Kurd.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zxAYZFI1zio">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zxAYZFI1zio/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr Inta Fahem</b>
                                    <span>Le Dawr <strong>Inta Fahem</strong> de Zakaria Ahmad commence avec une simple répétition d'un Doulab dans le <a href="../maqam/huzam.php">Maqam Rahat al-Arwah</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="tahmila" class="heading jins text-center full-width">
                        <h3>La Tahmila</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/tahmila.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Tahmila</a>
                    </div>
                    <p>La Tahmila est une pièce instrumentale qui combine un refrain répété avec des phrases qui sont en partie composées et en partie improvisées. La tahmila est généralement jouée par un petit <em>takht</em> (le petit ensemble traditionnel), et chaque musicien joue à son tour la phrase, improvise, et le refrain est joué par l'ensemble au complet.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=bIUyrjpePhs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/bIUyrjpePhs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Tahmila Souznak</b>
                                    <span>La Tahmila <a href="../maqam/suznak.php">Souznak</a> (la plus connue des tahmilas), enregistrée par Ahmad al-Hifnawi au <a href="../instr/violin.php">violon</a>, George Michel au <a href="../instr/oud.php">oud</a>, Mahmoud 'Effat au <a href="../instr/nay.php">nay</a> et Hassan Anwar au <a href="../instr/riqq.php">riqq</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=9ZTIzWZrmW4">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/9ZTIzWZrmW4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Tahmila Saba</b>
                                    <span>Le violoniste syrien Sami al-Chawwa a enregistré de nombreuses tahmilas dont cette tahmila en <a href="../maqam/saba.php">Maqam Saba</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="darij" class="heading jins text-center full-width">
                        <h3>Le Darej</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/darij.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Darej</a>
                    </div>
                    <p> La forme Darej (appelée officiellement <em>Sama'i Darej</em>) est une composition instrumentale simple nommée d'après le <a href="../iqaa/samai_darij.php">Iqa‘ Sama‘i Darej (3/4)</a> qu'elle utilise. Comme les <a href="ottoman.php">Formes Instrumentales Ottomanes</a>, la composition Darej est ancrée dans un <a href="../maqam.php">maqam</a> principal qui lui donne son nom, celui-ci suivi du nom du compositeur.
                    </p>
                    <p>Les compositions <em>darej</em> étaient très répandues dans le monde arabe avant le 20<sup>ième</sup> siècle. Elles ne sont plus très jouées et composées de nos jours.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=n49RxJwqBT4">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/n49RxJwqBT4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Darej Bayati</b>
                                    <span>Le <em>darej</em> le plus connu est celui composé par le violoniste syrien Sami al-Chawwa en <a href="../maqam/bayati.php">Maqam Bayati</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=rK-9pOupq6I">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/rK-9pOupq6I/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Darej Hijaz</b>
                                    <span>Un <em>darij</em> bien connu (composition traditionnelle) en <a href="../maqam/hijaz.php">Maqam Hijaz</a> enregistré par le violoniste syrien Sami al-Shawwa en 1924.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explorez d'autres groupes de formes:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Formes Vocales Composées</a></li>
                        <!-- <li><a href="instr_comp.php">Formes Composées Instrumentales</a></li> -->
                        <li><a href="ottoman.php">Formes Instrumentales Ottomanes</a></li>
                        <li><a href="improv.php">Formes Improvisées</a></li>
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
