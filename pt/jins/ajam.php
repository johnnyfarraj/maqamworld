<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Jins ‘Ajam";
$page_description = "Jins ‘Ajam";
$page_keywords = "arabic, music, arab, world, maqam, jins, ‘ajam, ajam, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "pt/jins/ajam.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <?php include('../sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Jins ‘Ajam</h1>
                        <h3>Jins inicial da <a href="../maqam/f_ajam.php">Família do Maqam ‘Ajam</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Jins</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/ajam.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de ‘Ajam</a>
                    </div>

                    <p>O Jins ‘Ajam possui duas versões:
                    </p>

                    <p>A <strong>versão de 5 notas</strong> do Jins ‘Ajam é a mais comum, e é o primeiro <em>jins</em> no <a href="../maqam/ajam.php">Maqam ‘Ajam</a> e no <a href="../maqam/shawq_afza.php">Maqam Shawq Afza</a>. Está representado aqui com sua tônica em Do e seu <em>ghammaz</em> em Sol.
                    </p>

                    <div class="notation" id="notation1">
                        <img src="/note/jins/ajam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <p class="clicknotes">Clique nas notas e segure usando o mouse para ouví-las.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="49,119,12" href="#" alt="Lá" class="playNote" data-frequency="220" data-parent="#notation1">
					  <area shape="circle" coords="126,111,12" href="#" alt="Si" class="playNote" data-frequency="247.5" data-parent="#notation1">
					  <area shape="circle" coords="209,103,14" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
					  <area shape="circle" coords="283,95,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
					  <area shape="circle" coords="362,86,13" href="#" alt="Mi" class="playNote" data-frequency="328" data-parent="#notation1"><!--variable, tuned down from 330-->
					  <area shape="circle" coords="439,78,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
					  <area shape="circle" coords="518,70,14" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
					  <area shape="circle" coords="590,62,12" href="#" alt="Lá" class="playNote" data-frequency="440" data-parent="#notation1">
					</map>

                    <p>
                        A <strong>versão de 3 notas</strong> do Jins ‘Ajam ocorre principalmente quando é usada como um <em>jins</em> secundário, por exemplo no 6<sup>o</sup> grau da escala do <a href="../maqam/Bayati.php">Maqam Bayati</a>, do <a href="../maqam/Saba.php">Maqam Saba</a> ou do <a href="../maqam/Kurd.php">Maqam Kurd</a>. Essa versão é derivada do <a href="../maqam/ajam_ushayran.php">Maqam ‘Ajam ‘Ushayran</a>. Está representado aqui com a tônica em Si&#x266d;.
                    </p>

                    <div class="notation" id="notation2">
                        <img src="/note/jins/ajam-3-note.png" class="img-fluid" usemap="#notemap2">
                        <div class="shape"></div>
                        <p class="clicknotes">Clique nas notas e segure usando o mouse para ouví-las.</p>
                    </div>

                    <!-- Copy this bit -->
                    <map name="notemap2">
					  <area shape="circle" coords="37,69,12"  href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation2">
					  <area shape="circle" coords="114,60,12" href="#" alt="Lá" class="playNote" data-frequency="440" data-parent="#notation2">
					  <area shape="circle" coords="196,53,14" href="#" alt="Si♭" class="playNote" data-frequency="463.54" data-parent="#notation2">
					  <area shape="circle" coords="270,45,13" href="#" alt="Do" class="playNote" data-frequency="521.48" data-parent="#notation2">
					  <area shape="circle" coords="347,37,14" href="#" alt="Ré" class="playNote" data-frequency="586.66" data-parent="#notation2">
					  <area shape="circle" coords="420,29,12" href="#" alt="Mi♭" class="playNote" data-frequency="616.50" data-parent="#notation2">
					  <area shape="circle" coords="496,21,12" href="#" alt="Fa" class="playNote" data-frequency="695.31" data-parent="#notation2">
					</map>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/jins/ajam/aghadan_alqak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Exemplos da versão de 5 notas do Jins ‘Ajam</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="track" data-song="/audio/jins/ajam/aghadan_alqak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Aghadan Alqaka (1971)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Muhammad Abdel Wahab (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/el_bwab.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Buwab (1994)</b>
                                    <span>Fairouz</span>
                                    <span>Música de Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/fi_youm_we_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Fi Youm we Leila (1978)</b>
                                    <span>Warda</span>
                                    <span>Música de Muhammad Abdel Wahab (Egito)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/lissa_fakir.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Lissa Fakir (1960)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/min_youm_furgak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Mawwal Min Youm Furgak</b>
                                    <span>Muhammad Khayri</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam/til3it_ya_mahla_nurha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Til‘it Ya Mahla Nurha</b>
                                    <span>Muhammad Abdel Karim</span>
                                    <span>Música de Sayed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Exemplos da versão de 3 notas do Jins ‘Ajam</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="track" data-song="/audio/jins/ajam-3note/ba3id-3annak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ba‘id ‘Annak (1965)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Música de Muhammad Abdel Wahab (Egito)</span>
                                    <span>o Jins ‘Ajam de 3 notas ocorre no sexto grau do <a href="../maqam/kurd.php">Maqam Bayati</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam-3note/habba-fou2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Habba Fouq w Habba Taht</b>
                                    <span>Ahmad Adaweya</span>
                                    <span>Música de Mohamed el-Mesery</span>
                                    <span>o Jins ‘Ajam de 3 notas ocorre no sexto grau do <a href="../maqam/saba.php">Maqam Saba</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/jins/ajam-3note/ahu-dalli-sar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ahu Da-lli Sar</b>
                                    <span>Nay Barghouthi</span>
                                    <span>Música de Sayed Darwish</span>
                                    <span>o Jins ‘Ajam de 3 notas ocorre no sexto grau do <a href="../maqam/kurd.php">Maqam Kurd</a></span>
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

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>