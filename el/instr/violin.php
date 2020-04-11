<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Το Αραβικό Bιολί";
$page_description = "Το Αραβικό Bιολί";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Παραδοσιακά, Το Ούτι, Το Κανονάκι, Το Νάι, Το Bιολί, Το Μπούζουκ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "el/instr/violin.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Όργανα</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Το Αραβικό Bιολί</h1>
                        <h3><em>Καμάντζα</em> ή <em>Καμάν</em> στα Αραβικά</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Όργανα</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/violin.jpg" alt="Le Violon">
                        <span>Βιολί &copy; 2018 MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/kamanja.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά της Καμάντζα</a>
                    </div>

                    <p>
                        Το Βιολί (<em>Καμάντζα</em> ή <em>Καμάν</em> στα Αραβικά) ενσωματώθηκε στα Αραβικά μουσικά σύνολα προς τα τέλη του 19ου αιώνα και αντικατέστησε εγχώρια έγχορδα με δοξάρι όπως καμάντζα, <em>ραμπάμπα</em> και <em>τζόζα</em>. Παρόλο που το βιολί θεωρείται ως το πιο ξεκάθαρο παράδειγμα αραβοποίησης δυτικού μουσικού οργάνου, έχει από καιρό εγκλιματιστεί, και έχει αποκτήσει το δικό του κούρδισμα, παίζοντας με ιδιότυπη τεχνική και ποικίλματα. Ο ήχος του Αραβικού βιολιού είναι τόσο ουσιώδης στην Αραβική μουσική όσο είναι ο ήχος του <a href="oud.php">ουτιού</a> και του <a href="qanun.php">κανονιού</a>.
                    </p>
                    <p>
                        Παρόλο που υπάρχουν διαφόρων ειδών κουρδίσματα, το παραδοσιακό Αραβικό κούρδισμα στο βιολί είναι 4ες και 5ες (Σολ3, Ρε3, Σολ4, Ρε5). Ως άταστο όργανο,το βιολί μπορεί να παράγει όλες τις αποχρώσεις του τόνου του Αραβικού συστήματος <a href="../maqam.php">μακάμ</a>.
                    </p>
                    <p>
                        Το ύφος του παιξίματος του Αραβικού βιολιού είναι ιδιαίτερα ποικιλματικό, με γλυστρίματα, βαθύ <em>vibrato</em>, ζωηρές τρίλιες, και πολλές φορές κάνοντας χρήση ίσου με ανοιχτή χορδή. Ο  ήχος του αραβικού βιολιού ποιοτικά εκτείνεται από πλούσιος και ζεστός, παρόμοιος του ήχου του δυτικού βιολιού, σε ένρινο και διαπεραστικό.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_ZWvLygSqkY&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_ZWvLygSqkY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Σάμι Αλ-Σάουα </b>
                                    <span>Ένας από τους πιο σημαντικούς Άραβες βιολιστές των αρχών του 20ου αιώνα, ο Σύριος Σάμι Αλ-Σάουα (γνωστός και ως ο πρίγκηπας του βιολιού) παίζει <a href="../form/improv.php#taqsim">τακασίμ</a> σε <a href="../maqam/hijazkar.php">Μακάμ Χιτζασκάρ</a>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=y3lE8MpM1kA&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/y3lE8MpM1kA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Άχμαντ Αλ-Χιφνάουι</b>
                                    <span>
                                        Ο Αιγύπτιος βιολιστής Άχμαντ Αλ-Χιφνάουι (ο οποίος ήταν το πρώτο βιολί στην ορχήστρα της Ούμ Καλθούμ) παίζει την παραδοσιακή ορχηστρική σύνθεση <strong>Ταχμίλα Ραστ (Σουζνάκ)</strong>, το οποίο περιλαμβάνει πολλά αυτοσχεδιαστικά μέρη. Το σχήμα περιλαμβάνει επίσης τον Τζορτζ Μισέλ στο <a href="oud.php">ούτι</a>, τον Μαχμούντ Εφάτ στο <a href="nay.php">νάι</a> και τον Χασάν Ανουάρ στο <a href="riqq.php">ρεκ</a>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=-Atnx8aRrIg&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/-Atnx8aRrIg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Αμπούντ Αμπντέλ Αλ</b>
                                    <span>Ο βιολιστής Αμπντού Αμπντέλ Αλ παίζει <a href="../form/improv.php#taqsim">τακασίμ</a> σε <a href="../maqam/bayati.php">Μακάμ Μπαϊάτι</a> σε ρυθμό  <a href="../iqaa/samai.php">Ικά Σαμάι Θακχίλ</a> (βιντεοσκόπηση από την Λιβανική Τηλεόραση).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=pMCnu_2r-wQ&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/pMCnu_2r-wQ/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Αμπντού Ντάγερ</b>
                                    <span>Ο Αιγύπτιος βιολιστής Αμπντού Ντάγερ και η ορχήστρα του παίζει την οργανική του σύνθεσή <strong>Σαμάι Κουρντ</strong>, συμπεριλαμβάνοντας αυτοσχεδιασμό <a href="violon.php">βιολί</a> και <a href="qanoun.php">κανονάκι</a>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=2jVRlAbqscg&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/2jVRlAbqscg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Σιμόν Σαχίν</b>
                                    <span>
                                        Ο Παλαιστίνιος βιολιστής Σιμόν Σαχίν παίζει <a href="../form/improv.php#taqsim">τακασίμ</a> σε <a href="../maqam/rast.php">Μακάμ Ραστ</a> σε ρυθμό <a href="../iqaa/rumba.php">Ικά Ρούμπα</a>, ολοκληρώνοντας με το 2ο μισό της οργανικής σύνθεσής του Ριάντ αλ-Σουνμπάτι <a href="../form/ottoman.php#longa">Λόνγκα</a> <a href="../maqam/nahawand.php">Φαραχφάζα</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Εξερευνήστε άλλα παραδοσιακά όργανα:</p>
                    <ul>
                        <li><a href="oud.php">Το Ούτι</a></li>
                        <li><a href="qanun.php">Το Κανονάκι</a></li>
                        <li><a href="nay.php">Το Νάι</a></li>
                        <!--
                        <li><a href="violin.php">Το Bιολί</a></li>
                        -->
                        <li><a href="buzuq.php">Το Μπούζουκ</a></li>
                   </ul>

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
