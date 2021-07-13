<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Zaffa";
$page_description = "Iqa‘ Zaffa";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, zaffa, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it"; // YOU MUST DEFINE LANGUAGE

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/zaffa.php";
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
                        <h1>Iqa‘ Zaffa 4/4</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/zaffa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Zaffa</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/zaffa.png" class="img-fluid">
                    </div>

                    <p>L’Iqa‘ Zaffa deve il suo nome da una marcia nuziale che comporta l’utilizzo di un gruppo di diversi strumenti a percussione dal forte volume. Al di fuori dei matrimoni, costituisce una possibile modulazione da versioni rallentate di <em>iqa‘at</em> in 4/4 come il <a href="baladi.php">Baladi</a> e il <a href="maqsum.php">Maqsum</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/zaffa/duqqu_il_mazahir.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/zaffa/duqqu_il_mazahir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Duqqu il-Mazahir (1952)</b>
                                    <span>Voce e musica di Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/zaffa/alf_leila_w_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Alf Leila w Leila (1969)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Musica di Baligh Hamdi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/zaffa/ah_ya_hilu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qadd Ah Ya Hilu</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/zaffa/ya_mal_el_sham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Qadd Ya Mal il-Sham</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Musica di Ahmad Abu Khalil al-Qabbani</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/zaffa/hann_el_hadid.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Hann el-Hadid (1974)</b>
                                    <span>Joseph Saqr</span>
                                    <span>Musica di Ziad Rahbani</span>
                                    <span>From the musical Nazl el-Surur</span>
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
