<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Maqam Sikah Baladi";
$page_description = "Maqam Sikah Baladi";
$page_keywords = "arabic, music, arab, world, maqam, jins, sikah baladi, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "en"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "en/maqam/sikah_baladi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Maqam Sikah Baladi</h1>
                        <h3>(not part of a maqam family)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sikah_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciation of Sikah Baladi</a>
                    </div>


                     <div class="notation" id="notation1">
                        <img src="/note/maqam/sikah_baladi.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="69,90,13" href="#" alt="C5↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="149,98,13" href="#" alt="B4<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="227,106,13" href="#" alt="A4<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="302,114,13" href="#" alt="G4" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="381,122,13" href="#" alt="F4<i class='icon-halfsharp'></i>↑" class="playNote" data-frequency="xxxx" data-parent="#notation1">
					  <area shape="circle" coords="462,131,13" href="#" alt="E4<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="533,139,13" href="#" alt="D4" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="605,147,13" href="#" alt="C4♯" class="playNote" data-frequency="xxx" data-parent="#notation1">
                      <area shape="circle" coords="672,147,13" href="#" alt="C4↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="737,155,13" href="#" alt="B3<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="817,164,13" href="#" alt="A3<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="893,173,13" href="#" alt="G3" class="playNote" data-frequency="xxx" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="174,8,374,38" href="../jins/sikah_baladi.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="675,16,874,46" href="../jins/sikah_baladi.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="272,184,636,213" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">

                      </map>
                    <p>Maqam Sikah Baladi is arguably the most challenging Arabic maqam.
                    Its scale (and sayr) is something of a hybrid between a transposition of <a href="huzam.php">Maqam Huzam</a>
                    to an ordinary non-Sikah note, and <a href="hijazkar.php">Maqam Hijazkar</a> – the intervals
                    are not quite the same as either, but it sounds a bit like both.
                    None of its intervals match either just or equal-tempered intonation, making it impossible to reproduce
                    on anything but the voice and <a href="../instr.php">traditional Arabic instruments</a>.</p>

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
                                    <span>Vocals and Music by Muhammad Abdel Wahab</span>
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
                                    <span>Umm Kulthum</span>
                                    <span>Music by Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/el_hobb_kida.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>el-Hobb Kida (1959)</b>
                                    <span>Umm Kulthum</span>
                                    <span>Music by Riyad al-Sunbati</span>
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
                                    <span>Umm Kulthum</span>
                                    <span>Music by Riyad al-Sunbati</span>
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
                                    <span>Umm Kulthum</span>
                                    <span>Music by Riyad al-Sunbati</span>
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
                                    <span>Vocals and Music by Muhammad Abdel Wahab</span>
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
                                    <span>Vocals and Music by Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/taqsim_buzuq_matar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Taqsim Buzuq</b>
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
                                    <b>Taqsim Qanun</b>
                                    <span>Abraham Salman (Iraq)</span>
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

    <?php include($ROOT . 'en/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
