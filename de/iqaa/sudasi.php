<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Sudasi";
$page_description = "Iqa‘ Sudasi";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, sudasi, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "de";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "de/iqaa/sudasi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Sudasi 6/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Iqa‘-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/sudasi.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Sudasi</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/sudasi.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Sudasi, dessen Name auf sechs basierend bedeutet, ist ein sehr populärer Iqa‘, um volkstümliche Reihentänze aus dem Libanon und Palästina zu begleiten, beispielsweise den <em>Dabke</em>. Er kann zu drei aufeinander folgenden Takten von Iqa‘ <a href="malfuf.php">Iqa‘ Malfuf</a> werden.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/sudasi_f1/dal3ona.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/sudasi_f1/dal3ona.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Dal‘ona</b>
                                    <span>Fairouz</span>
                                    <span>(Traditionelles Volkslied aus Libanon)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sudasi_f1/ya_mahla_layali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Mahla Layali el-Hawa (1963)</b>
                                    <span>Fairouz</span>
                                    <span>Musik von den Rahbani-Brüdern</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sudasi_f1/ya_7ajal_sannin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Hajal Sannin (1965)</b>
                                    <span>Fairouz</span>
                                    <span>Musik von den Rahbani-Brüdern</span>
                                    <span>aus dem Film <strong>Bayya‘ el-Khawatim</strong></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Beispiele für die zweite Form von Iqa‘ Sudasi</h3>
                    </div>
                    <div class="notation">
                        <img src="/note/iqaa/sudasi-f2.png" class="img-fluid">
                    </div>
					<br>
                    <p>Eine alternative Form des Iqa‘ Sudasi beginnt mit 3 aufeinanderfolgenden <em>dum</em>-s, und wird häufig in der libanesischen <em>dabke</em> verwendet.
					</p>
					<br>

                    <div class="track" data-song="/audio/iqaa/sudasi_f2/ya_trab_3ayntura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Trab ‘Ayntura</b>
                                    <span>Fairouz, Wadih al-Safi und Nasri Shamseddine</span>
                                    <span>Musik von den Rahbani-Brüdern</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sudasi_f2/ya_b3albak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Ba‘albak</b>
                                    <span>Musik von Tania Saleh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>