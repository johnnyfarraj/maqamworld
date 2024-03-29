<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Fallahi";
$page_description = "Iqa‘ Fallahi";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, fallahi, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it"; // YOU MUST DEFINE LANGUAGE

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/fallahi.php";
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
                        <h1>Iqa‘ Fallahi 2/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/fallahi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Fallahi</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/fallahi.png" class="img-fluid">
                    </div>
                    
                    <p>L'Iqa‘ Fallahi è un iqa‘ egiziano con un ritmo veloce adatto per la musica folk. Anche se può assomigliare al <a href="maqsum.php">Maqsum</a> se suonato a velocità doppia, ha un senso differente senza un grande contrasto (negli accenti) tra il <em>dum</em> e il <em>tak</em>.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/fallahi/el_binti_beida.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/fallahi/el_binti_beida.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>il-Benti Beida</b>
                                    <span>Voce e musica di Metqal Qannawi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/fallahi/ahom_ahom.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hizz Ya Hubb</b>
                                    <span>Ahmad Adaweya</span>
                                    <span>Musica di Hassan Abu el-Su‘ud</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/fallahi/salametha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Salametha Ummu Hassan</b>
                                    <span>Ahmad Adaweya</span>
                                    <span>Musica di Faruq Salamah</span>
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