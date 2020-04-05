<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Ικά Κατακούφτι";
$page_description = "Ικά Κατακούφτι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa/katakufti.php";
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
                        <h1>Ικά Κατακούφτι 8/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>
                    
                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/katakufti.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Κατακούφτι</a>
                    </div>
                    
                    <div class="notation">
                        <img src="/note/iqaa/katakufti.png" class="img-fluid">
                    </div>
                    
                    <p>Ικά Κατακούφτι is a rare <em>iqa‘</em> used in the <a href="../form/vocal_comp.php#muwashah">Muwashah</a> vocal genre.
                    </p>
                    <p>An alternate form of this <em>iqa‘</em> replaces the rest on the 5<sup>th</sup> beat with a <em>dum</em>, creating 2 consecutive <em>dum</em>-s (similarly to the second form of <a href="aqsaq.php">Ικά Ακσάκ</a>).
                    </p>
                    <p>The name <strong>Κατακούφτι</strong> is sometimes used as an alternate name for <a href="nawari.php">Ικά Νάουαρι</a> because they sound alike when <strong>Ικά Κατακούφτι</strong> is played in 4/4 and started from the last beat (the last <em>tak</em>).</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/katakufti/khadduka_al_naddi.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/katakufti/khadduka_al_naddi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Khadduka al-Naddi</b>
                                    <span>Χάλεντ αλ-Χάφεζ (Συρία)</span>
                                    <span>Music by Omar al-Batsh</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/katakufti/ah_min_nari_jafahum.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ah Min Nari Jafahum</b>
                                    <span>Ensemble Nour al-Charq</span>
                                    <span>Music by Sheikh Ali al-Darwish</span>
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