<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "";
$page_description = "";
$page_keywords = "";
$page_language = "fr"; // YOU MUST PUT THIS
include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "fr/index.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="heading">
                        <h1>Bienvenue sur le nouveau <span>Monde du Maqam</span></h1>

                        <h3>Le Monde du Maqam est une ressource en ligne dédiée à l'enseignement du système modal arabe, 
		le Maqam, qui est le fondement de la musique traditionnelle arabe. 
		Ce site web est dédié en particulier à la musique du monde arabe de l'est de la 
		Méditerranée (l'Égypte, la Palestine, la Jordanie, le Liban et la Syrie) 
		avec une emphase particulière sur la période se situant du début au milieu du vingtième siècle.</h3>

                    </div>
                    <p>Après 17 annéesd'activité, Le Monde du Maqam a été reconstruit grâce à l'aide d'une bourse gracieusement attribuée par
		 <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target="_blank">The Arab Fund for Arts and Culture (AFAC)</a> en 2016.
		<br>
	            Le Monde du Maqam inclue les nouvelles fonctions suivantes:
		</p>

                    <ul>
                        <li>Une traduction complète en arabe et en allemand (les traductions vers l'espagnol et le grec sont en cours).</li>
                        <li>Support des écrans de toutes tailles (particulièrement les téléphones intelligents).</li>
                        <li>Recherche Google.</li>
                        <li>Un contenu plus pertinent et tenu à jour.</li>
                        <li>Des images et des échantillons sonores de meilleure qualité.</li>
                        <li>De meilleurs menus et sous-menus pour la navigation.</li>
                        <li>Des notes cliquables générant du son.</li>
                        <li>Une page 'Pour nous contacter' pour les commentaires des utilisateurs.</li>
                    </ul>

                    <p>Je suis heureux d'annoncer la venue d'un livre coécrit avec mon ami Sami Abu Shumays 
		(le créateur de <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>).
                    Le livre est intitulé <a href="en/book.php">INSIDE ARABIC MUSIC</a>,
                    et il devrait être publié en anglais par <a href="http://oup.com" target="_blank">Oxford University Press</a>
                    aux alentours de Mai 2019.
                    Le livre sera une référence complète sur la musique arabe 
		et ce site web en sera l'accompagnement. 
		Ce projet de livre a été egalement le récipiendaire d'une bourse 
		de l'<a href="http://arabculturefund.org" target="_blank">AFAC</a> en 2012.</p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/taoufiq_oud.png" alt="L'oud arabe">
                                <div class="card-body">
                                    <h5 class="card-title">Maqam</h5>
                                    <p class="card-text">Learn about the Arabic Maqam modal system with notated scales and recorded examples.</p>
                                    <a href="/en/maqam.php" class="btn btn-primary">Maqam<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_star.png" alt="L'oud arabe">
                                <div class="card-body">
                                    <h5 class="card-title">Jins</h5>
                                    <p class="card-text">Learn about the <b>Jins</b>, the scale fragment that is the building block of every Maqam.</p>
                                    <a href="/en/jins.php" class="btn btn-primary">Jins<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_round.png" alt="L'oud arabe">
                                <div class="card-body">
                                    <h5 class="card-title">Rythme</h5>
                                    <p class="card-text">Learn about the Arabic rythmic cycle called <b>Iqa‘</b>, made of the primitive sounds <em>doum</em> and <em>tak</em>.</p>
                                    <a href="/en/iqaa.php" class="btn btn-primary">Iqa‘<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_etching.png" alt="L'oud arabe">
                                <div class="card-body">
                                    <h5 class="card-title">Formes</h5>
                                    <p class="card-text">Learn about the Arabic music forms, called <b>Qawalib</b>, used in both vocal and instrumental music, composed and improvised.</p>
                                    <a href="/en/forms.php" class="btn btn-primary">Forms<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_names.png" alt="L'oud arabe">
                                <div class="card-body">
                                    <h5 class="card-title">Instruments</h5>
                                    <p class="card-text">Learn about the traditional Arabic Instruments, melodic and percussion, as well as Western instruments that have been "Arabized".</p>
                                    <a href="/en/instr.php" class="btn btn-primary">Instruments<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/vladimir_tamari.png" alt="L'oud arabe">
                                <div class="card-body">
                                    <h5 class="card-title">Publications</h5>
                                    <p class="card-text">Learn about the upcoming book "Inside Arabic Music" (co-authored with Sami Abu Shumays) scheduled for release in May 2019.</p>
                                    <a href="/en/book.php" class="btn btn-primary">Book<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-sm-3">
                    <div class="text-center">
                        <img src="http://placehold.it/160x600" alt="" class="d-none d-sm-block m-auto">
                        <img src="http://placehold.it/300x250" alt="" class="d-block d-sm-none ml-auto mr-auto mt-5">
                    </div>
                </div>-->
            </div>
                <?php include($ROOT . 'inc/768x90.php'); ?>
        </div>
    </div>

    <?php include($ROOT . 'en/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>