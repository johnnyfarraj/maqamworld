<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Χιτζασκάρ";
$page_description = "Μακάμ Χιτζασκάρ";
$page_keywords = "musique arabe, mode arabe, maqam, jins, hijaz kar, hijazkar, oud, qanoun, nay, quart de ton, tetrachorde, musique modale, moyen orient";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/hijazkar.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Μακάμ Χιτζασκάρ (ou Hijaz Kar)</h1>
                        <h1>Μακάμ Σαντ Αραμπάν</h1>
                        <h1>Μακάμ Σουζιντίλ</h1>
                        <h1>Μακάμ Σαχνάζ</h1>
                        <h3>Μέλος της <a href="f_hijaz.php">Οικόγενειας Μακάμ Χιτζάζ</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hijazkar.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Χιτζασκάρ</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/shadd_araban.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σαντ Αραμπάν</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/shahnaz.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σαχνάζ</a>
                    </div>
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/suzidil.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σουζιντίλ</a>
                    </div>

                    <div class="notation" id="notation1">
                        <img src="../note/maqam/hijazkar.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια με το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="78,63,13" href="#" alt="Mi♮" class="playNote" data-frequency="656" data-parent="#notation1"><!-- Hijaz 3 tune down from 660 -->
                      <area shape="circle" coords="155,71,13" href="#" alt="Ré♭" class="playNote" data-frequency="554" data-parent="#notation1"><!-- Hijaz 2 tuned up from 548 -->
                      <area shape="circle" coords="233,79,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation1"><!-- Hijazkar tonic -->
                      <area shape="circle" coords="309,87,13" href="#" alt="Si♮" class="playNote" data-frequency="493.33" data-parent="#notation1"><!-- vartiable -->
                      <area shape="circle" coords="386,95,13" href="#" alt="La♭" class="playNote" data-frequency="420" data-parent="#notation1">
                      <area shape="circle" coords="465,103,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="542,111,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="618,120,13" href="#" alt="Mi♮" class="playNote" data-frequency="328" data-parent="#notation1"><!-- Hijaz 3 tune down from 330 -->
                      <area shape="circle" coords="696,128,13" href="#" alt="Ré♭" class="playNote" data-frequency="277" data-parent="#notation1"><!-- Hijaz 2 tune up from 274 -->
                      <area shape="circle" coords="774,136,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                       <!-- Links -->
                      <area shape="rect" coords="148,4,330,34" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="317,139,460,168" href="../jins/nikriz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="594,4,734,34" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">

					</map>
                    <p>Le Μακάμ Χιτζασκάρ est la variante la plus commune du <a href="hijaz.php">Μακάμ Χιτζάζ</a>. Sa gamme commence avec le <a href="../jins/hijaz.php">Τζινς Χιτζάζ</a> comme jins de base sur la tonique, suivi du <a href="../jins/nikriz.php">Τζινς Νικρίζ</a> sur le 4<sup>ième</sup> degré et finalement, du <a href="../jins/hijazkar.php">Τζινς Χιτζάζkar</a> à l'octave supérieure.
                    </p>
                    <p>
                    Pour des raisons historiques, 3 transpositions de ce maqam ont des noms différents (et avaient, il y a longtemps, un <em>sayr</em> différent):</p>
					<p>
					<li><strong>Μακάμ Σαντ Αραμπάν</strong> (Hijazkar sur le bas Sol)</li>
					<li><strong>Μακάμ Σουζιντίλ</strong> (Hijazkar sur le bas La)</li>
					<li><strong>Μακάμ Σαχνάζ</strong> (Hijazkar sur le Ré)</li>
					</p>

                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_hijaz.php">Οικογένεια Μακάμ Χιτζάζ</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/hijazkar/ana_fintizarak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/hijazkar/ana_fintizarak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Ana Fi-ntizarak (1943)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Musique de Zakariya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/yama_inta_wahishni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Dawr Yama-nta Wahishni</b>
                                    <span>Μουσικό Σύνολο Αμπντέλ Χαλίμ Νουέϊρα</span>
                                    <span>Μουσική Μοχάμαντ Οθμάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/ya_nas_ana_mutti.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Nas Ana Moutti Fi Hobbi</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/afdihi_dhabyan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Afdihi Dhabiyan Ibtasam</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span><img src="/img/cd.png"> Au Theatre Des Amandiers</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/ya_3uyunan_ramiyat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Ya ‘Ouyounan Ramiyat</b>
                                    <span>Sabri al-Moudallal (Syrie)</span>
                                    <span>Μουσική Όμαρ αλ-Μπατς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/ya_maria.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ya Maria</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span>Μουσική Σαΐντ Νταρουίς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/taqsim_qanun.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim au Qanoun en Μακάμ Χιτζάζ</b>
                                    <span>Ensemble Sabri al-Moudallal</span>
                                    <span><img src="/img/cd.png"> Chansons d'Alep</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/hijazkar/dulab_hijazkar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Doulab Hijazkar</b>
                                    <span>Ensemble Σαμπάχ Φαχρί</span>
                                    <span><img src="/img/cd.png"> Nagham al-Ams Vol. 04 Hijazkar</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/suzidil/laha_badrut_tim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mouachah Laha Badrou-t-Timm</b>
                                    <span>(Μακάμ Σουζιντίλ)</span>
                                    <span>Μουσικό Σύνολο Αραβικής Μουσικής (Αίγυπτος)</span>
                                    <span>Musique de Mahmoud Soubh</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shadd_araban/ba3attilak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ba‘attilak Ya Habib el-Rouh</b>
                                    <span>(Μακάμ Σαντ Αραμπάν)</span>
                                    <span>Φεϊρούζ (Λίβανος)</span>
                                    <span>Musique de Ziad Rahbani</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/shadd_araban/samai_shadd_araban.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i Chadd ‘Arabane</b>
                                    <span>Ensemble Omar Sarmini</span>
                                    <span>Musique de Tanburi Cemil Bey</span>
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

    <?php include($ROOT . 'el/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
