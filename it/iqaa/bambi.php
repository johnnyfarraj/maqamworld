<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Bambi";
$page_description = "Iqa‘ Bambi";
$page_keywords = "musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, bambi, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it"; // YOU MUST DEFINE LANGUAGE

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "it/iqaa/bambi.php";
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
                        <h1>Iqa‘ Bambi 8/4</h1>
                        <h3>(anche chiamato <strong>Bamb</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bambi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Bambi</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/bambi_f1.png" class="img-fluid">
                    </div>

                    <p>L'Iqa‘ Bambi è un 8/4 allungato egiziano, un fantastico accompagnamento per le <a href="../form/improv.php">improvvisazioni</a> e per qualche sezione vocale. È consuetudine iniziare a suonare sul Bambi dal settimo battito (il penultimo <em>dum</em>), in modo da enfatizzare i 3 <em>dum</em> consecutivi che iniziano ad ogni ciclo. Una variazione del Bambi inizia la battuta con 3 <em>dum</em> consecutivi. 
					</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/bambi_form1/taqsim_oud_shaheen.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/bambi_form1/taqsim_oud_shaheen.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Taqasim on the Beat</b>
                                    <span>Simon Shaheen</span>
                                    <span><img src="/img/cd.png"> Turath: Masterworks of the Middle East</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form1/mawwal_khayri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Ya Man Bunudak Harir</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/bambi_form1/gafnuhu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Gafnuhu ‘Allam al-Ghazal (1933)</b>
                                    <span>Voce e musica di Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Esempi la seconda forma di Iqa‘ Bambi</h3>
                    </div>
                    <br>

                    <div class="notation">
                        <img src="/note/iqaa/bambi_f2.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/bambi_form2/andah_3aleik.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Andah ‘Aleik (1982)</b>
                                    <span>Warda</span>
                                    <span>Musica di Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/bambi_form2/alf_leila.mp3">
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
                    
                    <div class="track" data-song="/audio/iqaa/bambi_form2/asamina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Asamina</b>
                                    <span>Fairouz</span>
                                    <span>Musica di Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/bambi_form2/layali_lubnan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Layali Lubnan (1954)</b>
                                    <span>Composizione strumentale</span>
                                    <span>Musica di Muhammad Abdel Wahab</span>
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