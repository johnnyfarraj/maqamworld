<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Formes Instrumentales Ottomanes";
$page_description = "Ottoman Formes Composées Instrumentales";
$page_keywords = "musique, arabe, formes, qawaleb, Le Sama‘i, La Longa, Le Bachraf";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "fr/form/ottoman.php";
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
                        <h1>Formes Instrumentales Ottomanes</h1>
                        <h3>Le Sama‘i, La Longa, Le Bachraf</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Formes</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/khana.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Khana</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/taslim.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Taslim</a>
                    </div>

                    <p>
                        Trois formes instrumentales composées ont été empruntées à la musique ottomane qui font encore partie de la musique arabe d'aujourd'hui: le Sama‘i, la Longa et le Bachraf. De ces trois formes, le Sama‘i est celle qui a le mieux survécu et les musiciens arabes continuent de nos jours à composer dans cette forme.
                    </p>
                    <p>
                        Ces trois formes sont basées sur un refrain répété appelé <em>taslim</em> et un nombre de couplets différents appelés <em>khana</em>. Les trois formes sont aussi ancrées dans un <a href="../maqam.php">maqam</a> et suivent le <em>sayr</em> du maqam ainsi que ses modulations les plus populaires. Pour cette raison, le maqam -et le compositeur - font partie du nom de la composition.
                    </p>

                    <div id="samai" class="heading jins text-center full-width">
                        <h3>Le Sama‘i</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/samai.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Sama‘i</a>
                    </div>
                    <p>
                        Le Sama‘i est une forme instrumentale composée qui consiste en quatre <em>khana</em>-s, chacune suivie du même <em>taslim</em>. La structure d'un Sama‘i est K1, T, K2, T, K3, T, K4, T. Chaque section est composée dans le <a href="../iqaa/samai_thaqil.php">Iqa‘ Sama‘i Thaqil</a>, sauf la quatrième khana, qui est généralement composé dans un cycle rythmique asymétrique tel que le <a href="../iqaa/samai_saraband.php">Iqa‘ Sama‘i Sarabande</a> ou le <a href="../iqaa/samai_darij.php">Iqa‘ Sama‘i Darej</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=5s1KylUC9_Q">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/5s1KylUC9_Q/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Bayati - Ibrahim al-‘Aryan</b>
                                    <span>Sama‘i en <a href="../maqam/bayati.php">Maqam Bayati</a> de Ibrahim al-'Aryan (Égypte), enregistré par l'Orchestre de la Radio Tunisienne.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=uNncmnhL05k">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/uNncmnhL05k/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Hijazkar Kurd - Rohi al-Khammach</b>
                                    <span></span>
                                    <span>Sama‘i en <a href="../maqam/hijazkar_kurd.php">Maqam Hijazkar Kurd</a> de Rohi al-Khammach (Palestine/Iraq) dans lequel il y a un <a href="../iqaa/jurjina.php">Iqa‘ Jourjina</a> dans la quatrième <em>khana</em>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IQkQoZcC0jk">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IQkQoZcC0jk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Kurd - Abdou Dagher</b>
                                    <span></span>
                                    <span>Sama‘i in <a href="../maqam/kurd.php">Maqam Kurd</a> by Abdou Dagher(Égypte), which features a long <a href="instr_comp.php#muqaddima">muqaddima</a> (composed introduction).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_OZo-QBb6jY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_OZo-QBb6jY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Rast - George Michel</b>
                                    <span>Sama‘i en <a href="../maqam/rast.php">Maqam Rast</a> de George Michel (Égypte), enregistré par l'Orchestre de la Radio Tunisienne.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=opETYjZGZtM">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/opETYjZGZtM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Nawa Athar - Jamil ‘Uways</b>
                                    <span>Sama‘i en <a href="../maqam/nawa_athar.php">Maqam Nawa Athar</a> de Jamil 'Uways (Syrie).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="longa" class="heading jins text-center full-width">
                        <h3>La Longa</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/longa.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Longa</a>
                    </div>
                    
                    <p>
                        La Longa est la deuxième forme ottomane la plus populaire. Il est généralement composé dans le court et sautillant <a href="../iqaa/fox.php">Iqa‘ Fox</a> pour les <em>khana</em>-s et dans le <a href="../iqaa/malfuf.php">Iqa‘ Malfouf</a> pour le <em>taslim</em>.
                    </p>
                    <p>
                        Plusieurs longas de l'ère ottomane utilisent des maqams tempérés tels que <a href="../maqam/nahawand.php">Nahawand</a>, <a href="../maqam/hijaz.php">Hijaz</a> et <a href="../maqam/nikriz.php">Nikriz</a>, et utilisent des mélodies qui évoquent la musique de l'Europe de l'Est. Beaucoup de compositeurs arabes suivent toujours cette approche.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=JnTGci4VSXo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/JnTGci4VSXo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Longa Farahfaza - Riyad al-Soumbati</b>
                                    <span>Longa en <a href="../maqam/nahawand.php">Maqam Farahfaza</a> de Riyad al-Soumbati (Égypte), enregistré par l'Ensemble Simon Shaheen.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7aVU7mPkCTs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7aVU7mPkCTs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Longa ‘Ajam - Abdou Dagher</b>
                                    <span>Longa en <a href="../maqam/ajam.php">Maqam ‘Ajam</a> de Abdou Dagher(Égypte), enregistré par son ensemble.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=oa5fAO1YXSY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/oa5fAO1YXSY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Longa Nahawand - Dr. Alfred Gamil</b>
                                    <span>Longa en <a href="../maqam/nahawand.php">Maqam Nahawand</a> du Dr. Alfred Gamil (Égypte), enregistré par son ensemble.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="Bachraf" class="heading jins text-center full-width">
                        <h3>Le Bachraf</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/Bachraf.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Bachraf</a>
                    </div>
                    <p> 
                        Le Bachraf est la forme ottomane la moins utilisée et n'est généralement joué que dans le contexte des cours de musique et des exercices instrumentaux. Le Bachraf consiste en quatre <em>khana</em>-s, chacun suivi par le même <em>taslim</em>, et est rarement composé par des musiciens arabes.
                    </p>
                    <p>
                        Contrairement au Samai, le Bachraf est composé dans le même <a href="../iqaa.php">iqa‘</a> pour toute la composition, dans la plupart des cas un Iqa' au rythme pair tels que le <a href="../iqaa/masmudi_kabir.php">Masmoudi Kabir (8/4)</a>, le <a href="../iqaa/mukhammas.php">Moukhammas (16/4)</a>, le Chanbar (24/4), le Dawr al-Kabir (28/4) ou des cycles rythmiques ottomans plus longs.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=NmNMjWyhiyE">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/NmNMjWyhiyE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Bachraf Farahfaza</b>
                                    <span>Bachraf en <a href="../maqam/nahawand.php">Maqam Farahfaza</a> de Ismail Hakki Bey (Ottoman), enregistré par l'Ensemble Simon Shaheen.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=aZY8TuOB68w">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/aZY8TuOB68w/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Bachraf Kara Batak Sikah (1929)</b>
                                    <span>Ancient Bachraf Kara Batak en <a href="../maqam/sikah.php">Maqam Sikah</a>, enregistré en 1929 par Sami al-Chawwa (Syrie) au <a href="../instr/violin.php">violon</a> et Mouhammad al-Qasabgi (Égypte) au <a href="../instr/oud.php">oud</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- add Bachraf Rast Tatyos Effendi -->

                    <p>Explorez d'autres groupes de formes:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Formes Vocales Composées</a></li>
                        <li><a href="instr_comp.php">Formes Composées Instrumentales</a></li>
                        <!-- <li><a href="ottoman.php">Formes Instrumentales Ottomanes</a></li> -->
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
