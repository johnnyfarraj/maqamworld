<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Μακάμ Σίκα Μπάλαντι";
$page_description = "Μακάμ Σίκα Μπάλαντι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Μακάμ Σίκα Μπάλαντι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "el/maqam/sikah_baladi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Μακάμ Σίκα Μπάλαντι</h1>
                        <h3>(δεν αποτελεί μέρος κάποιας οικογένειας μακάμ)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Μακάμ</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/sikah_baladi.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σίκα Μπάλαντι</a>
                    </div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/sikah_baladi.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Κάντε κλικ στις νότες πατώντας με διάρκεια το ποντίκι για να ακούσετε.</p>
                    </div>

                    <map name="notemap">
					  <area shape="circle" coords="69,90,13" href="#" alt="Do↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="149,98,13" href="#" alt="Si<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="227,106,13" href="#" alt="La<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="302,114,13" href="#" alt="Sol" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="381,122,13" href="#" alt="Fa<i class='icon-halfsharp'></i>↑" class="playNote" data-frequency="xxxx" data-parent="#notation1">
					  <area shape="circle" coords="462,131,13" href="#" alt="Mi<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="533,139,13" href="#" alt="Ré" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="605,147,13" href="#" alt="Do♯" class="playNote" data-frequency="xxx" data-parent="#notation1">
                      <area shape="circle" coords="672,147,13" href="#" alt="Do↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="737,155,13" href="#" alt="Si<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="817,164,13" href="#" alt="La<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
					  <area shape="circle" coords="893,173,13" href="#" alt="Sol" class="playNote" data-frequency="xxx" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="159,6,401,35" href="../jins/sikah_baladi.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="660,16,899,46" href="../jins/sikah_baladi.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="325,180,560,212" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">

                      </map>
                    <p>
                        Το μακάμ Σίκα Μπάλαντι είναι αναμφίβολα μακάμ πρόκληση περισσότερο απ’όλα. Η κλίμακά του (και ανάπτυξη) είναι κάτι μεταξύ μεταφοράς του <a href="huzam.php">Μακάμ Χουζάμ</a> σε έναν κανονικό φθόγγο πέραν των φθόγγων του Σίκα, και του μακάμ Χιτζασκάρ – τα διαστήματα δεν είναι ακριβώς τα ίδια σε όποια περίπτωση, αλλά ακούγονται λίγο σαν τα ίδια. Κανένα από τα διαστήματά του δεν ταιριάζουν είτε ακριβώς ή σε ισο-συγκερασμένο κούρδισμα, κάνοντάς το αδύνατο να αναπαραχθεί με οτιδήποτε άλλο μέσο παρά με την φωνή και τα <a href="../instr.php">παραδοσιακά Αραβικά μουσικά όργανα</a>.
                    </p>
                    <p>
                        Το μακάμ Σίκα Μπάλαντι δεν αποτελεί μέρος κάποιας οικογένειας μακάμ.
                    </p>

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
                                    <b>Σαχίρτου Μίνχου αλ-Λαϊάλι (1935)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/shams_el_asil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σαμς ελ-Ασίλ (1958)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ριάντ αλ-Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/el_hobb_kida.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ελ-Χομπ Κίντα (1959)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ριάντ αλ-Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/yalli_kan_yishgik_anini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Γιάλι Καν Γισγκίκ Ανίνι (1949)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ριάντ αλ-Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/aruh_li_min.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Αρούχ Λι Μιν (1958)</b>
                                    <span>Ουμ Κουλθούμ (Αίγυπτος)</span>
                                    <span>Μουσική Ριάντ αλ-Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/kulli_da_kan_leh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Κούλι Ντα Καν Λε (1954)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/el_habib_el_maghul.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ελ-Χαμπίμπ ελ-Μαζχούλ (1972)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/taqsim_buzuq_matar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τακσίμ Μπουζούκ</b>
                                    <span>Μάταρ Μοχάμαντ (Λίβανος)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/taqsim_qanun_salman_.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τακσίμ Κανονάκι</b>
                                    <span>Αμπραχάμ Σαλμάν (Ιράκ)</span>
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

    <?php include($ROOT . 'el/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

</body>

</html>
