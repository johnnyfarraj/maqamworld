<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "L'Iqa‘";
$page_description = "Cicli ritmici arabi";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <?php include('sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Cicli Ritmici Arabi</h1>
                        <h3>L'Iqa‘</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/iqaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Iqa‘/Iqa‘at</a>
                    </div>

                    <p>La musica araba è composta su dei cicli ritmici chiamati <em>iqa‘at</em> (singolare <em>iqa‘</em>), che sono formati da pattern di battiti che si ripetono ad ogni misura. Una composizione può cambiare diversi <em>iqa‘at</em>. Ogni <em>iqa‘</em> è definito usando il prototipo di una battuta e due suoni basilari: <strong>dum</strong> (basso e sostenuto) e <strong>tak</strong> (secco e acuto).</p>

                    <p>L'annotazione di un <em>iqa‘</em> serve da scheletro o da prototipo per come suonarla. In pratica, i percussionisti arricchiscono un <em>iqa‘</em> con colpi addizionali: <strong>dum</strong> e <strong>tak</strong> e qualunque altro suono lo strumento è in grado di produrre. L'arricchimento dipende molto dal genere, dall'arrangiamento desiderato, dallo strumento stesso, dalla dimensione della sezione ritmica, e dallo stile personale del percussionista.</p>

                    <p>Gli <em>iqa‘at</em> arabi possono avere differenti indicazioni di tempo, che possono essere pari o dispari. Le indicazioni di tempo più brevi (2/4, 3/4, 4/4, 6/4 e 8/4) sono usate principalmente nella musica folk, nel genere <em>tarab</em> della metà del XX secolo e nella musica popolare contemporanea. Gli iqa‘at più lunghi (7/8, 9/8, 10/8 fino ai 32/4) sono usati principalmente nel genere vocale tradizionale <a href="form/vocal_comp.php#muwashah">Muwashahat</a>.</p>

                    <p>Puoi iniziare a esplorare degli esempi di <em>iqa‘at</em> arabi usando l'<strong>Indice degli Iqa‘at</strong> (in ordine alfabetico) o usando la tabella qui sotto (ordinati per numero di battiti per misura):
                    </p>

                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/ayyub.php">Ayyub 2/4</a></li>
                                    <li><a href="iqaa/malfuf.php">Malfuf 2/4</a></li>
                                    <li><a href="iqaa/fox.php">Fox 2/4</a></li>
                                    <li><a href="iqaa/karachi.php">Karatchi 2/4</a></li>
                                    <li><a href="iqaa/fallahi.php">Fallahi 2/4</a></li>
                                    <li><a href="iqaa/wahda_saghira.php">Wahda Saghira 2/4</a></li>
                                    <li><a href="iqaa/samai_darij.php">Sama‘i Darej 3/4</a></li>
                                    <li><a href="iqaa/samai_saraband.php">Sama‘i Saraband 3/8</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/maqsum.php">Maqsum 4/4</a></li>
                                    <li><a href="iqaa/baladi.php">Baladi 4/4</a></li>
                                    <li><a href="iqaa/saidi.php">Sa‘idi 4/4</a></li>
                                    <li><a href="iqaa/wahda.php">Wahda 4/4</a></li>
                                    <li><a href="iqaa/wahda_w_nuss.php">Wahda wi Nuss 4/4</a></li>
                                    <li><a href="iqaa/rumba.php">Rumba 4/4</a></li>
                                    <li><a href="iqaa/zaffa.php">Zaffa 4/4</a></li>
                                    <li><a href="iqaa/hachaa.php">Haccia 4/4</a></li>
                                    <li><a href="iqaa/nawari.php">Nawari 4/4</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/thurayya.php">Thurayya 5/8</a></li>
                                    <li><a href="iqaa/sudasi.php">Sudasi 6/4</a></li>
                                    <li><a href="iqaa/yuruk_semai.php">Yuruk Semai 6/8</a></li>
                                    <li><a href="iqaa/dawr_hindi.php">Dawr Hindi 7/8</a></li>
                                    <li><a href="iqaa/nawakht.php">Nawakht 7/4</a></li>
                                    <li><a href="iqaa/masmudi_kabir.php">Masmudi Kabir 8/4</a></li>
                                    <li><a href="iqaa/ciftetelli.php">Ciftetelli 8/4</a></li>
                                    <li><a href="iqaa/wahda_kabira.php">Wahda Kabira 8/4</a></li>
                                    <li><a href="iqaa/bambi.php">Bambi 8/4</a></li>
                                    <li><a href="iqaa/katakufti.php">Katakufti 8/8</a></li>
                                    <li><a href="iqaa/aqsaq.php">Aqsaq 9/8</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/mudawwar.php">Mudawwar Shami 10/4</a></li>
                                    <li><a href="iqaa/jurjina.php">Jurjina 10/8</a></li>
                                    <li><a href="iqaa/samai_thaqil.php">Sama‘i Thaqil 10/8</a></li>
                                    <li><a href="iqaa/awis.php">‘Awis 11/8</a></li>
                                    <li><a href="iqaa/mudawwar.php">Mudawwar Masri 12/4</a></li>
                                    <li><a href="iqaa/dharafat.php">Dharafat 13/8</a></li>
                                    <li><a href="iqaa/murabbaa.php">Murabba‘ 13/4</a></li>
                                    <li><a href="iqaa/muhajjar.php">Muhajjar 14/4</a></li>
                                    <li><a href="iqaa/mukhammas.php">Mukhammas 16/4</a></li>
                                    <li><a href="iqaa/khosh_rang.php">Khosh Rang 17/8</a></li>
                                    <li><a href="iqaa/fakhit.php">Fakhet 20/4</a></li>
                                    <li><a href="iqaa/sittatu_ashar.php">Sittatu ‘Ashar Masri 32/4</a></li>
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

    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>