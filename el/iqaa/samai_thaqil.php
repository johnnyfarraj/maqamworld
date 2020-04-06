<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Σαμάι Θακίλ";
$page_description = "Ικά Σαμάι Θακίλ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Σαμάι Θακίλ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/samai_thaqil.php";
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
                        <h1>Ικά Σαμάι Θακίλ 10/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/samai_thaqil.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σαμάι Θακίλ</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/samai_thaqil.png" class="img-fluid">
                    </div>
                    
                    <p>
                        Το Ικά Σαμάι Θακίλ (επίσης λέγεται και απλά Σαμάι) είναι ένας δημοφιλής ρυθμός στο φωνητικό είδος των <a href="../form/vocal_comp.php#muwashah">Μουασαχάτ</a>, όπως επίσης και ο κύριος ρυθμός που χρησιμοποιείται στην Τουρκική/Οθωμανική ορχηστρική φόρμα <a href="../form/ottoman.php#samai">Σαμάι</a>.
                    </p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/samai_thaqil/samai_bayati_aryan.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/samai_thaqil/samai_bayati_aryan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Σαμάι Μπαϊάτι Ιμπραχίμ αλ-Αριάν</b>
                                    <span>Το Μουσικό Σύνολο Ταχτ του Καΐρου</span>
                                    <span><img src="/img/cd.png"> Music Of Islam Vol. 1: AL-Qahirah</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/3atini_bikra_al_dinan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Ατίνι Μπίκρα αλ-Ντινάν</b>
                                    <span>Ορχήστρα του Σαλίμ Σάχαμπ</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/imlali_al_aqdah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Imlali al-Aqdaha Sirfan</b>
                                    <span>Sheikh Hamza Shakkur and Ensemble Al Kindi</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/laha_badru_ttim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Λάχα Μπάντρου αλ-Τιμ</b>
                                    <span>Μουσικό Σύνολο Αμπντέλ Χαλίμ Νουέϊρα</span>
                                    <span>Μουσική Σέιχ Μαχμούντ Σαμπχ</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/samai_thaqil/mala_al_kasat.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Μάλα αλ-Κασάτ</b>
                                    <span>Μουσικό Σύνολο αλ-Κίντι</span>
                                    <span>Μουσική Μοχάμαντ Οτμάν</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/rashiq_al_qadd.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Ρασίκ αλ-Καντ</b>
                                    <span>Μουσικό Σύνολο Μόρκος (Λίβανος)</span>
                                    <span><img src="/img/cd.png"> Cèdre</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/talaffata_al_dhabiyu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Ταλάφφατα αλ-Δάμπιου</b>
                                    <span>Μουσικό Σύνολο αλ-Κίντι</span>
                                    <span>Μουσική Σέιχ Μαχμούντ Σαμπχ</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/samai_thaqil/tarraza_al_rayhan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Τάρραζα αλ-Ραϊχάν</b>
                                    <span>Μουσικό Σύνολο Μόρκος (Λίβανος)</span>
                                    <span><img src="/img/cd.png"> Cèdre</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track demo-track" data-song="/demo/iqaa/tabla/samai_thaqil.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Ικά Σαμάι Θακίλ 10/8</b>
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