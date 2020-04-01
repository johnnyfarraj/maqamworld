<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Ιράκ";
$page_description = "Μακάμ Ιράκ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/iraq.php";
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
                        <h1>Μακάμ Ιράκ</h1>
                        <h3>Μέλος της <a href="f_sikah.php">Οικόγενειας Μακάμ Σίκα</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο των Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/iraq.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ιράκ</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="../note/maqam/iraq.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια με το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="73,140,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="241" data-parent="#notation1"><!-- Sikah tonic variable-->
                      <area shape="circle" coords="150,132,13" href="#" alt="Do" class="playNote" data-frequency="260.74" data-parent="#notation1">
                      <area shape="circle" coords="227,124,13" href="#" alt="Ré" class="playNote" data-frequency="293.33" data-parent="#notation1">
                      <area shape="circle" coords="304,116,13" href="#" alt="Mi<i class='icon-halfflat'></i>" class="playNote" data-frequency="320" data-parent="#notation1"><!-- Bayati 2 variable -->
                      <area shape="circle" coords="381,108,13" href="#" alt="Fa" class="playNote" data-frequency="347.65" data-parent="#notation1">
                      <area shape="circle" coords="459,100,13" href="#" alt="Sol" class="playNote" data-frequency="391.11" data-parent="#notation1">
                      <area shape="circle" coords="536,90,13" href="#" alt="La" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="614,83,13" href="#" alt="Si<i class='icon-halfflat'></i>" class="playNote" data-frequency="482" data-parent="#notation1"><!--var-->
                        <!-- Links -->
                      <area shape="rect" coords="83,4,204,33" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="258,4,429,33" href="../jins/bayati.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="476,4,599,33" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
	</map>

                    <p>Le Maqam 'Iraq est un maqam de la <a href="f_sikah.php">famille Sikah</a> plutôt rare. Il est en général utilisé comme une modulation dans le sayr du <a href="huzam.php">Μακάμ Χουζάμ</a>. Sa gamme commence avec le Jins de base <a href="../jins/sikah.php">Sikah</a> sur la tonique (Si<i class="icon-halfflat"></i>), suivi du <a href="../jins/bayati.php">Τζινς Μπαϊάτι</a> sur le 3<sup>ième</sup> degré, et finalement du <a href="../jins/rast.php">Τζινς Ραστ</a> sur le 6<sup>ième</sup> degré.
                    </p>
                    <p>Εξερευνήστε άλλα μακαμάτ στην <a href="f_sikah.php">Οικογένεια Μακάμ Σίκα</a>.</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/iraq/jayin_ya_arz_el_jabal.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/iraq/jayin_ya_arz_el_jabal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Jayin ya Arz el-Jabal</b>
                                    <span>Wadih al-Safi (Liban)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track " data-song="/audio/maqam/iraq/jalla_man_ansha_jamalak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Mouachah Jalla Man Ansha Jamalak</b>
                                    <span>Ensemble Ornina (Syrie)</span>
                                    <span>Chef d'Orchestre Dr. Mouhammad Qadri Dalal</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/iraq/samai_iraq_yussuf_basha.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Sama‘i ‘Iraq</b>
                                    <span>Orchestre de la Radio Tunisienne</span>
                                    <span>Musique de Youssof Basha</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/iraq/el_hali_taabani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Hali Ta‘bani Ya Layla</b>
                                    <span>Joseph Saqr</span>
                                    <span>Musique de Ziad Rahbani</span>
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
