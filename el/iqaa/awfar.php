<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Άουφαρ Μάσρι";
$page_description = "Ικά Άουφαρ Μάσρι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Ικά Άουφαρ Μάσρι";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/awfar.php";
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
                        <h1>Ικά Άουφαρ Μάσρι 19/4</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/awfar_masri.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Άουφαρ Μάσρι</a>
                    </div>

                    <p>
                        Το Ικά Άουφαρ Μάσρι είναι ένας δημοφιλής ρυθμός στο ρεπερτόριο των <a href="../form/vocal_comp.php#muwashah">Μουασαχάτ</a>. Οι δύο κύριες φόρμες του  περιγράφονται εδώ.
                    </p>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Φόρμα Ι</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    
                    <div class="notation">
                        <img src="/note/iqaa/awfar_f1.png" class="img-fluid">
                    </div>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/awfar/man_kunta_anta_habibahu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/awfar/man_kunta_anta_habibahu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Μουάσαχ Μαν Κούντα Άντα Χαμπίμπαχου</b>
                                    <span>Μουσικό Σύνολο αλ-Κίντι</span>
                                    <span><img src="/img/cd.png"> The Aleppian Music Room II - Maqam Rast</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Φόρμα ΙI</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    
                    <div class="notation">
                        <img src="/note/iqaa/awfar_f2.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/awfar/ghuddi_jufunaki.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Γούντι Τζουφουνάκι</b>
                                    <span>(σε <a href="../maqam/saba.php">μακάμ Σάμπα</a>)</span>
                                    <span>Γάντα Σμπίιρ</span>
                                    <span><img src="/img/cd.png"> Muwashahat</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awfar/ya_man_ramani_bil_siham.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Για Μαν Ραμάνι Μπελ-Σιχάμ</b>
                                    <span>(σε <a href="../maqam/nikriz.php">μακάμ Νικρίζ</a>)</span>
                                    <span>Μουσικό Σύνολο Ντούγκα</span>
                                    <span>Μουσική Όμαρ αλ-Μπατς</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awfar/ya_na3isa_al_ajfan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Μουάσαχ Για Ναίσα αλ-Ατζφάν</b>
                                    <span>(σε <a href="../maqam/nahawand.php">μακάμ Ναχαουάντ</a>)</span>
                                    <span>Χάλεντ αλ-Χάφεζ (Συρία)</span>
                                    <span>Μουσική Όμαρ αλ-Μπατς</span>
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