<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Μπάμμπι";
$page_description = "Ικά Μπάμμπι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Μπάμμπι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/bambi.php";
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
                        <h1>Ικά Μπάμμπι 8/4</h1>
                        <h3>(also called <strong>Bamb</strong>)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/bambi.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μπάμμπι</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/bambi_f1.png" class="img-fluid">
                    </div>

                    <p>
                        Το Ικά Μπάμμπι είναι ένας απλωμένος σε 8/4 Αιγυπτιακός ρυθμός που συνοδεύει όμορφα <a href="../form/improv.php">αυτοσχεδιασμούς</a> και αραιά φωνητικά μέρη. Είναι συνηθισμένο να αρχίζει από τον 7ο  παλμό (το προτελευταίο Ντουμ), έτσι ώστε να αναδεικνύει τα τρία συνεχόμενα <strong>Ντουμ</strong> που με τα οποία αρχίζει κάθε κύκλος. Μία εναλλακτική φόρμα Μπάμμπι πράγματι ξεκινάει έχοντας στην αρχή του μέτρου τα 3 συνεχόμενα <strong>Ντουμ</strong>. 
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
                                    <b>Τακασίμ με ρυθμική συνοδεία</b>
                                    <span>Σιμόν Σαχίν (Παλαιστίνη)</span>
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
                                    <b>Μαουάλ Για Μαν Μπουνούντακ Χαρίρ</b>
                                    <span>Μοχάμαντ Χαΐρι (Συρία)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/bambi_form1/gafnuhu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Γκαφνούχου Άλλαμ αλ-Γάζαλ (1933)</b>
                                    <span>Φωνή και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/bambi_dtd.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Μπάμμπι 8/4 - Φόρμα Ι</b>
                                    <span>Επίδειξη στην τάμπλα από τον Φαϊζάλ Ζεϊντάν</span>
                                    <span>(αντικαθιστώντας με <strong>τακ</strong> το τελευταίο <strong>ντουμ</strong>)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Παραδείγματα από τον δεύτερο Ικά Μπάμμπι</h3>
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
                                    <b>Άνταχ Αλέκ (1982)</b>
                                    <span>Ουάρντα</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/bambi_form2/alf_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Αλφ Λέιλα ου Λέιλα (1969)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Μπαλίχ Χάμντι</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/bambi_form2/asamina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ασαμίνα</b>
                                    <span>Φεϊρούζ (Λίβανος)</span>
                                    <span>Μουσική Φιλίμων Ουάχμπι</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/bambi_form2/layali_lubnan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Λαϊάλι Λουμπνάν (1954)</b>
                                    <span>Οργανική Σύνθεση</span>
                                    <span>Μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/bambi_form2.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Μπάμμπι 8/4 - Φόρμα ΙI</b>
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