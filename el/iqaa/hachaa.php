<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Χάτσα";
$page_description = "Ικά Χάτσα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Χάτσα";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/hachaa.php";
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
                        <h1>Ικά Χάτσα 4/4</h1>
                        <h3>(επίσης ως 2/4 και 6/4)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/hachaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Χάτσα</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/hachaa_4_4.png" class="img-fluid">
                    </div>

                    <p>
                        Το Ικά Χάτσα σε 4/4 είναι πολύ διαδεδομένο στην Σούφικη μουσική, ειδικά σε κομμάτια που έχουν μόνο κρουστά. Παρόλο που η εκδοχή των 4/4 είναι μακράν η επικρατέστερη, είναι μία προσαρμογή ενός πιο παραδοσιακού ρυθμού με το ίδιο όνομα σε 2/4. Μία πιο σπάνια εκδοχή είναι αυτή των 6/4, χρησιμοποιημένη από τον συνθέτη Μπαλίχ Χάμντι στο <strong>Άλφ Λέιλα ου Λέιλα</strong>, σε ερμηνεία Ουμ Κουλθούμ.
					</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/hachaa_4_4/hamza_shakkur.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/hachaa_4_4/hamza_shakkur.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μπι Χάμντικα Για Ιλάχι</b>
                                    <span>Σέιχ Χάμζα Σακούρ</span>
                                    <span>Σύνολο Αλ Κίντι </span>
                                    <span><img src="/img/cd.png"> Whirling Dervishes of Damascus Vol. 1</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/habbush_sub7ana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σουμπχάνα</b>
                                    <span>Σέιχ Χαμπούς</span>
                                    <span>Σύνολο αλ-Κίντι</span>
                                    <span><img src="/img/cd.png"> Transe Soufie d'Aleppe Vol. 2</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/il_alb_yi3shaq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ιλ-Άλμπι Ιάσακ Κούλι Γκαμίλ (1961)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ριάντ αλ-Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/qariat_al_fingan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Κάρεατ αλ-Φιντζάν (1976)</b>
                                    <span>Αμπντέλ Χαλίμ Χάφεζ</span>
                                    <span>Μουσική Μοχάμαντ αλ-Μούγκι</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/qul_lil_maliha_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Κασίντα Κουλ Λιλ-Μαλίχα</b>
                                    <span>Σαμπάχ Φαχρί (Συρία)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/tala3a_al_badru.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τάλαα αλ-Μπάντρου Αλένα</b>
                                    <span>Χάσαν αλ-Χαφφάρ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/hachaa_4_4.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Χάτσα 4/4</b>
                                    <span>Επίδειξη στην τάμπλα από τον Φαϊζάλ Ζεϊντάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Παραδειγματα της 2/4 εκδοχής του Ικά Χάτσα</h3>
                    </div>
                    <br>

                    <div class="notation">
                        <img src="/note/iqaa/hachaa_2_4.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_2_4/3al_maya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Αλ-Μάια</b>
                                    <span>Ντιάμπ Μασχούρ</span>
                                    <span>(Συριακό παραδοσιακό τραγούδι)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/hachaa_2_4.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Χάτσα 2/4</b>
                                    <span>Επίδειξη στην τάμπλα από τον Φαϊζάλ Ζεϊντάν</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Παραδειγματα της 6/4 εκδοχής του Ικά Χάτσα</h3>
                    </div>
                    <br>

                    <div class="notation">
                        <img src="/note/iqaa/hachaa_6_4.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_6_4/alf_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Άλφ Λέιλα ου Λέιλα (1969)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Μπαλίχ Χάμντι</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/hachaa_6_4.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Χάτσα 6/4</b>
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