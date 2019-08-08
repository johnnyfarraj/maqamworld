<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Les Iqa‘at";
$page_description = "Cycles Rythmiques Arabes Iqaa Iqa";
$page_keywords = "musique arabe, maqam, instruments, jins, iqa‘, iqaa, rythme, oud, qanoun, nay, quart de ton, tarab";
$page_language = "fr";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "fr/iqaa.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <?php include('sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Les Cycles Rythmiques Arabes</h1>
                        <h3>Les Iqa‘at</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Index des Iqa‘at</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/iqaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Prononciation de Iqa‘/Iqa‘at</a>
                    </div>

                    <p>La musique arabe est composée sur des cycles rythmiques appelés <em>iqa‘at</em> (<em>iqa‘</em> au singulier) qui sont des patterns rythmiques qui se répètent à chaque mesure. Une composition peut alterner entre plusieurs <em>iqa‘at</em>. Chaque <em>iqa‘</em> est défini en utilisant une mesure prototypique et les deux sons de base: <em>doum</em> (bas et soutenu) et <em>tak</em> (haut et sec).</p>

                    <p>La notation de l'<em>iqa‘</em> est faite pour jouer le rôle de squelette ou de prototype relativement à la manière de le jouer. En pratique, les percussionnistes ornementent sur l'<em>iqa‘</em> avec des coups additionnels: des <em>doums</em> et des <em>taks</em>, en plus de tous les autres sons que l'instrument est capable de produire. Cette ornementation dépend beaucoup du genre de musique, de l'arrangement esthétique voulu, de l'instrument utilisé, de la taille de la section rythmique et du style personnel du percussionniste.</p>

                    <p>Les <em>iqa‘at</em> arabes viennent en beaucoup de signatures métriques différentes qui peuvent être paires ou impaires. Les <em>iqa‘at</em> aux cycles courts (2/4, 3/4, 4/4, 6/4 et 8/4) sont surtout utilisés dans la musique folklorique, le genre <em>tarab</em> de la moitié du 20<sup>ième</sup> siècle et la musique contemporaine populaire. Les <em>iqa‘at</em> a cycles plus longs (7/8, 9/8, 10/8, jusqu'à 32/4) sont surtout utilisés dans le genre vocal  traditionnel des <a href="form/vocal_comp.php#muwashah">Mouwachahat</a>.</p>

                    <p>Vous pouvez commencer à explorer des exemples de <em>iqa‘at</em> arabes en utilisant l'<strong>Index des Iqa‘at</strong> (en ordre alphabétique) ou en utilisant le tableau ci-dessous (classé en ordre croissant selon le nombre de temps par mesure):
                    </p>

                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/ayyub.php">Ayyoub 2/4</a></li>
                                    <li><a href="iqaa/malfuf.php">Malfouf 2/4</a></li>
                                    <li><a href="iqaa/fox.php">Fox 2/4</a></li>
                                    <li><a href="iqaa/karachi.php">Karatchi 2/4</a></li>
                                    <li><a href="iqaa/fallahi.php">Fallahi 2/4</a></li>
                                    <li><a href="iqaa/wahda_saghira.php">Wahda Saghira 2/4</a></li>
                                    <li><a href="iqaa/samai_darij.php">Sama‘i Darej 3/4</a></li>
                                    <li><a href="iqaa/samai_saraband.php">Sama‘i Sarabande 3/8</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/maqsum.php">Maqsoum 4/4</a></li>
                                    <li><a href="iqaa/baladi.php">Baladi 4/4</a></li>
                                    <li><a href="iqaa/saidi.php">Sa‘idi 4/4</a></li>
                                    <li><a href="iqaa/wahda.php">Wahda 4/4</a></li>
                                    <li><a href="iqaa/wahda_w_nuss.php">Wahda wi Nouss 4/4</a></li>
                                    <li><a href="iqaa/rumba.php">Rumba 4/4</a></li>
                                    <li><a href="iqaa/zaffa.php">Zaffa 4/4</a></li>
                                    <li><a href="iqaa/hachaa.php">Hatcha‘ 4/4</a></li>
                                    <li><a href="iqaa/nawari.php">Nawari 4/4</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/thurayya.php">Thourayya 5/8</a></li>
                                    <li><a href="iqaa/sudasi.php">Soudassi 6/4</a></li>
                                    <li><a href="iqaa/yuruk_semai.php">Yuruk Semai 6/8</a></li>
                                    <li><a href="iqaa/dawr_hindi.php">Dawr Hindi 7/8</a></li>
                                    <li><a href="iqaa/nawakht.php">Nawakht 7/4</a></li>
                                    <li><a href="iqaa/masmudi_kabir.php">Masmoudi Kabir 8/4</a></li>
                                    <li><a href="iqaa/ciftetelli.php">Ciftetelli 8/4</a></li>
                                    <li><a href="iqaa/wahda_tawila.php">Wahda Tawila 8/4</a></li>
                                    <li><a href="iqaa/bambi.php">Bambi 8/4</a></li>
                                    <li><a href="iqaa/katakufti.php">Katakoufti 8/8</a></li>
                                    <li><a href="iqaa/aqsaq.php">Aqsaq 9/8</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/mudawwar.php">Moudawwar Chami 10/4</a></li>
                                    <li><a href="iqaa/jurjina.php">Jourjina 10/8</a></li>
                                    <li><a href="iqaa/samai_thaqil.php">Sama‘i Thaqil 10/8</a></li>
                                    <li><a href="iqaa/awis.php">‘Awis 11/8</a></li>
                                    <li><a href="iqaa/mudawwar.php">Moudawwar Masri 12/4</a></li>
                                    <li><a href="iqaa/dharafat.php">Dharafat 13/8</a></li>
                                    <li><a href="iqaa/murabbaa.php">Mourabba‘ 13/4</a></li>
                                    <li><a href="iqaa/muhajjar.php">Mouhajjar 14/4</a></li>
                                    <li><a href="iqaa/mukhammas.php">Moukhammas 16/4</a></li>
                                    <li><a href="iqaa/khosh_rang.php">Khoch Rangue 17/8</a></li>
                                    <li><a href="iqaa/fakhit.php">Fakhet 20/4</a></li>
                                    <li><a href="iqaa/sittatu_ashar.php">Sittatou ‘Achar Masri 32/4</a></li>
                                </ul>
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

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>