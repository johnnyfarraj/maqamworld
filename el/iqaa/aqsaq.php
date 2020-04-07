<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Ακσάκ";
$page_description = "Ικά Ακσάκ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Ακσάκ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/aqsaq.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Ικά Ακσάκ 9/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/aqsaq.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ακσάκ</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/aqsaq_f1.png" class="img-fluid">
                    </div>

                    <p>
                        Το Ικά Ακσάκ είναι ένας πολύ διαδεδομένος ρυθμός στο φωνητικό είδος των <a href="../form/vocal_comp.php#muwashah">Μουασαχάτ</a>. Είναι ένας παλμός λιγότερο από τον <a href="samai_thaqil.php">Ικά Σαμάι Θακίλ</a> αλλά μερικές φορές μπορεί να παιχτεί αμέσως πριν ή μετά από ένα κομμάτι σε αυτόν τον ρυθμό χωρίς διακοπή, κατά την διάρκεια μίας Ουάσλα.
					</p>

                    <div class="player-area">
                        <audio id="player" controls loop>
                            <source src="/audio/iqaa/aqsaq_form1/ma_htiyali.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/ma_htiyali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Μα-Χτιάλι</b>
                                    <span>Λούις Χάτζ και Άιντα Σαλχούμπ</span>
                                    <span><img src="/img/cd.png"> Mouwashah - Chants Arabo-andalous</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/ana_min_wajdi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Άνα Μιν Ουάζντι Άνα</b>
                                    <span>Αάϊσα Ρεντουάν</span>
                                    <span><img src="/img/cd.png"> Egypte</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/jalla_man_bil_husni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Τζάλλα Μαν Μπελ Χούσνι Σάουαρ</b>
                                    <span>Μουσικό Σύνολο Αμπντέλ Χαλίμ Νουέϊρα</span>
                                    <span>Μουσική Κάμελ αλ-Χούλαϊ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/bashraf_bulbul_al_afrah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μπάσραφ Μπούλμπουλ αλ-Αφράχ</b>
                                    <span>Μουσικό Σύνολο Μόρκος (Λίβανος)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/aqsaq_form1.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Ακσάκ 9/8 - Φόρμα Ι</b>
                                    <span>Επίδειξη στην τάμπλα από τον Φαϊζάλ Ζεϊντάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Need some kind of divider here to start the Form 2  examples -->
                    <br>
                    <div class="heading jins text-center">
                        <h3>Η δεύτερη φόρμα του Ικά Ακσάκ</h3>
                    </div>
                    <div class="notation">
                        <img src="/note/iqaa/aqsaq_f2.png" class="img-fluid">
                    </div>
					<br>
                    <p>
                        Μία εναλλακτική φόρμα του Ακσάκ αντικαθιστά την παύση στον 6ο παλμό με ένα επιπλέον <strong>ντουμ</strong>, ούτως ώστε να δημιουργηθεί μία  ακολουθία από 2 συνεχόμενα ντουμ τα οποία θυμίζουν τον <a href="samai_thaqil.php">Ικά Σαμάι Θακίλ</a>.
					</p>
					<br>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/ma_htiyali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μα-Χτιάλι</b>
                                    <span>Μουσικό Σύνολο αλ-Τουράθ (Συρία)</span>
                                    <span><img src="/img/cd.png"> The Music In Spanish Al Andalus - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/ayyuha_al_saqi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Άιοχα αλ-Σάκι</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                    <span><img src="/img/cd.png"> Beiteddine Festival Vol. 1</span>
                                    <span>Μουσική Μάζντι αλ-Ακίλι</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/azzibuni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Αδιμπούνι</b>
                                    <span>Μουσικό Σύνολο αλ-Κίντι</span>
                                    <span><img src="/img/cd.png"> The Aleppian Music Room Vol. 1 - Hijazkar Kurd &amp; Saba</span>
                                    <span>Μουσική Όμαρ αλ-Μπατς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/bi_abi_bahil_jamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μπι Άμπι Μπάχι αλ-Τζαμάλ</b>
                                    <span>Μοχάμαντ Χαΐρι (Συρία)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/aqsaq_form2.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Ακσάκ 9/8 - Φόρμα ΙI</b>
                                    <span>Επίδειξη στην τάμπλα από τον Φαϊζάλ Ζεϊντάν</span>
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