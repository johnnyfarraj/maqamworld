<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Wahda Kabira";
$page_description = "Iqa‘ Wahda Kabira";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, wahda kabira, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it"; // YOU MUST DEFINE LANGUAGE

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/wahda_kabira.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">
                    
                    <div class="heading jins text-center">
                        <h1>Iqa‘ Wahda Kabira 8/4</h1>
                        <h3>(anche chiamato Wahda Sunbati)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/wahda_kabira.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Wahda Kabira</a>
                    </div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/wahda_sunbati.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Wahda Sunbati</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/wahda_kabira.png" class="img-fluid">
                    </div>
                    
                    <p>L'Iqa‘ Wahda Kabira ("kabira" significa grande in arabo), anche conosciuto come Wahda Sunbati, è una versione allungata dell' <a href="wahda.php">Iqa‘ Wahda</a> di più di due misure. È molto popolare nella musica sia strumentale che vocale della metà del XX secolo.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/wahda_kabira/khatwit_habibi.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/wahda_kabira/khatwit_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Khatwit Habibi (1953)</b>
                                    <span>Composizione strumentale di Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_kabira/habibi_yis3ed.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Habibi Yis‘id Awqatu (1943)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musica di Zakariyya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_kabira/il_albi_yi3shaq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>il-Albi Yi‘shaq Kulli Gamil (1961)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musica di Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_kabira/tuta.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Tuta</b>
                                    <span>Composizione strumentale</span>
                                    <span>Musica di Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_kabira/ya_bid3_el_ward.mp3 ">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Bid‘ el-Ward (1944)</b>
                                    <span>Asmahan</span>
                                    <span>Musica di Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_kabira/sawa_rbina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sawa Rbina (1968)</b>
                                    <span>Fairouz</span>
                                    <span>Musica e parole di Fratelli Rahbani</span>
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
    
    <?php include($ROOT . 'it/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>