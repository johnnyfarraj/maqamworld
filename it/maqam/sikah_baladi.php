<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Sikah Baladi";
$page_description = "Maqam Sikah Baladi";
$page_keywords = "Maqam Sikah Baladi, musica tradizionale araba, maqam, strumenti, forme, jins, iqa‘, iqaa, ritmo, oud, qanun, nay, quarti di tono, tarab";
$page_language = "it";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "it/maqam/sikah_baladi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Sikah Baladi</h1>
                        <h3>(non appartenente ad alcuna famiglia)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Indice del Maqam</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sikah_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronuncia di Sikah Baladi</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="/note/maqam/sikah_baladi.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Clicca sulle note e tieni premuto usando il mouse per sentire il suono.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="69,90,13" href="#" alt="Do↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="149,98,13" href="#" alt="Si<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="227,106,13" href="#" alt="La<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="302,114,13" href="#" alt="Sol" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="381,122,13" href="#" alt="Fa<i class='icon-halfsharp'></i>↑" class="playNote" data-frequency="xxxx" data-parent="#notation1">
					  <area shape="circle" coords="462,131,13" href="#" alt="Mi<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="533,139,13" href="#" alt="Re" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="605,147,13" href="#" alt="Do♯" class="playNote" data-frequency="xxx" data-parent="#notation1">
                      <area shape="circle" coords="672,147,13" href="#" alt="Do↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="737,155,13" href="#" alt="Si<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="817,164,13" href="#" alt="La<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="893,173,13" href="#" alt="Sol" class="playNote" data-frequency="xxx" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="174,8,374,38" href="../jins/sikah_baladi.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="675,16,874,46" href="../jins/sikah_baladi.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="272,184,636,213" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
                  </map>
                    
                    <p>Il Maqam Sikah Baladi è probabilmente il maqam arabo più complesso. La sua scala (e il suo <em>sayr</em>) è un ibrido tra una trasposizione del <a href="huzam.php">Maqam Huzam</a> a una nota che non è un quarto di tono, e il <a href="hijazkar.php">Maqam Hijazkar</a> – gli intervalli non sono esattamente gli stessi, ma suona un pò come entrambi i maqam. Nessuno dei suoi intervalli corrisponde a un intervallo del sistema temperato equabile, rendendolo impossibile da suonare se non con la voce o con <a href="../instr.php">strumenti tradizionali arabi</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/sikah_baladi/sahirtu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/sikah_baladi/sahirtu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Sahirtu Minhu al-Layali (1935)</b>
                                    <span>Voce e musica di Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/shams_el_asil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Shams el-Asil (1958)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/el_hobb_kida.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Hobbi Kida (1959)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/yalli_kan_yishgik_anini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Yalli Kan Yishgik Anini (1949)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/aruh_li_min.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Aruh Li Min (1958)</b>
                                    <span>Umm Kulthum (Egitto)</span>
                                    <span>Musica di Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/kulli_da_kan_leh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Kulli Da Kan Leh (1954)</b>
                                    <span>Voce e musica di Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/el_habib_el_maghul.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Habib el-Majhul(1972)</b>
                                    <span>Voce e musica di Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/taqsim_buzuq_matar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim al Buzuk</b>
                                    <span>Matar Muhammad (Lebanon)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/taqsim_qanun_salman_.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim al Qanun</b>
                                    <span>Abraham Salman (Irak)</span>
                                    <span><img src="/img/cd.png"> Saltanah</span>
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
