<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Ουάχντα Καμπίρα";
$page_description = "Ικά Ουάχντα Καμπίρα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Ουάχντα Καμπίρα";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/wahda_kabira.php";
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
                        <h1>Ικά Ουάχντα Καμπίρα 8/4</h1>
                        <h3>(επίσης γνωστός και ως Ούαχντα Σουνμπάτι)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/wahda_kabira.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ουάχντα Καμπίρα</a>
                    </div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/wahda_sunbati.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ουάχντα Σουνμπάτι</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/wahda_kabira.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Το Ικά Ουάχντα Καμπίρα (“Καμπίρα“ σημαίνει μεγάλη στα Αραβικά), επίσης γνωστός και ως <strong>Ούαχντα Σουνμπάτι</strong>, είναι μία εκδοχή του <a href="wahda.php">Ικά Ουάχντα</a> προσαρμοσμένη σε δύο μέτρα. Είναι ένας πολύ διαδεδομένος ρυθμός φωνητικής και ορχηστρικής μουσικής στα μέσα του εικοστού αιώνα.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/wahda_kabira/khatwit_habibi.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/wahda_kabira/khatwit_habibi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Χάτουιτ Χαμπίμπι (1953)</b>
                                    <span>Ορχηστρικό του Μοχάμαντ Αμπντέλ Ουαχάμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_kabira/habibi_yis3ed.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Χαμπίμπι Γίσαεντ Αουκάτου (1943)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ζακαρία Άχμαντ</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_kabira/il_albi_yi3shaq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ιλ-Άλμπι Γέσακ Κούλι Γκαμίλ (1961)</b>
                                    <span>Ουμ Κουλθούμ</span>
                                    <span>Μουσική Ριάντ Σουνμπάτι</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_kabira/tuta.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Τούτα</b>
                                    <span>Οργανική Σύνθεση</span>
                                    <span>Μουσική Φαρίντ αλ-Άτρας</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/wahda_kabira/ya_bid3_el_ward.mp3 ">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Γιa Μπίντα ιλ-Ουάρντ (1944)</b>
                                    <span>Ασμαχάν</span>
                                    <span>Μουσική Φαρίντ αλ-Άτρας</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/wahda_kabira/sawa_rbina.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Σάουα Ρμπίνα (1968)</b>
                                    <span>Φεϊρούζ (Λίβανος)</span>
                                    <span>Μουσική αδερφοί Ραχμπάνι</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/wahda_kabira.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Ουάχντα Καμπίρα 8/4</b>
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