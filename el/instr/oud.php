<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Το Ούτι";
$page_description = "Το Ούτι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Παραδοσιακά, Το Ούτι, Το Κανονάκι, Το Νάι, Το Bιολί, Το Μπούζουκ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "el/instr/oud.php";
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
                        <h1>Το Ούτι</h1>
                        <h3>Ένα Άταστο Λαούτο</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Όργανα</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/oud.jpg" alt="L'Oud">
                        <span>Συριακό ούτι, κατασκευή των αδερφών Ναχάτ (δεξιά) και Ιρακινό ούτι, κατασκευή του Μοχάμμαντ Φαντίλ (αριστερά). &copy; 2018 MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/oud.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ούτι</a>
                    </div>

                    <p>
                        Το Ούτι είναι ένα από τα πιο δημοφιλή μουσικά όργανα στην Αραβική μουσική. Η ονομασία  του σημαίνει “λεπτή ξύλινη λουρίδα” στα Αραβικά, και αυτή αναφέρεται στις λουρίδες (ντούγιες) από ξύλο που σχηματίζουν το αχλαδόσχημο σώμα του. Το μπράτσο του ουτιού είναι κοντό σε σχέση με το σώμα του και δεν έχει τάστα. Αυτό επιτρέπει στο ούτι να επιτύχει έξοχο τονισμό και το κάνει ιδανικό για την απόδοση των Αραβικών <a href="../maqam.php">μακάμ</a>.
					</p>
                    <p>
                        Το Ούτι συνήθως έχει 5 ζευγάρια χορδών κουρδισμένα σε ουνίσονο και μία μονή μπάσα χορδή, παρόλαυτα κάποια ούτια έχουν ένα επιπλέον ζευγάρι χορδών. Το πιο κοινό κούρδισμα (από χαμηλά στα ψηλά) είναι Ντο, Φα, Λα, Ρε, Σολ, Ντο, δηλαδή βασισμένο σε διαστήματα καθαρών τετάρτων εκτός μίας τρίτης μεταξύ Φα και Λα. Παλαιότερα, οι χορδές φτιάχνονταν από έντερα ζώων, και πάλλονταν με μία πένα από φτερό, (ρίσα στα Αραβικά). Σήμερα, οι χορδές φτιάχνονται από νάιλον με ή χωρίς ατσάλινο περιτύλιγμα, και οι μοντέρνες πένες (ρίσα) από πλαστικό, ταρταρούγα, κέρατο, ακόμα και από μπαμπού.
                    </p>
                    <p>
                        Το Ούτι έχει μία ζεστή ποιότητα ήχου και μία ευρεία έκταση νοτών (3 οκτάβες), και μπορεί να μεταφέρει τη μελωδία και τον ρυθμό το ίδιο καλά λόγω του κρουστικού του ρόλου. Αυτό το κάνει ιδανικό για συνοδεία τραγουδιστή. Είναι επίσης το αγαπημένο όργανο των συνθετών για τις δημιουργίες τους. Οι αυτοσχεδιασμοί (<a href="../form/improv.php#taqsim">τακασίμ</a>) στο ούτι επίσης καλύπτουν ένα μεγάλο μέρος συναυλιών και ηχογραφήσεων.
                    </p>

                    <p>
                        Το Αραβικό ούτι είναι ευρέως τo ίδιο όργανο που συναντάται σε πολλές άλλες χώρες στην περιοχή (π.χ. Τουρκία, Ελλάδα, Ιράν) με μικροδιαφορές στις διαστάσεις, ύφος και τόνο. Το Ευρωπαϊκό “λαούτο” είναι ένας απόγονος του ουτιού, από το οποίο παίρνει και το όνομά του (αλ-ουντ), όπου το «αλ» είναι το άρθρο στην Αραβική γραμματική.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dDrVYyoMi-4&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dDrVYyoMi-4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Μοχάμμαντ Αλ Κασάμπζι</b>
                                    <span>Ο Αιγύπτιος βιρτουόζος ουτίστας και συνθέτης Μοχάμμαντ Αλ Κασάμπζι παίζει <a href="../form/improv.php#taqsim">τακασίμ</a> στο <a href="../maqam/rast.php">Μακάμ Ραστ</a> (ηχογράφηση στο Αραβικό Μουσικό Ωδείο, Κάιρο, 1955).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zGoY5QYLnYs&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zGoY5QYLnYs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Φαρίντ αλ-Άτρας</b>
                                    <span>Ο Σύριος βιρτουόζος ουτίστας Φαρίντ αλ-Άτρας (επίσης γνωστός και ως “Βασιλιάς του Ουτιού”) παίζει <a href="../form/improv.php#taqsim">τακασίμ</a> στο ούτι σε <a href="../maqam/bayati.php">Μακάμ Μπαϊάτι</a> ακολουθούμενο απο την σύνθεσή του “<strong>Αλ Ραμπί</strong>” (1949).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

			         <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=OCmheJ929fo&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/OCmheJ929fo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Σιμόν Σαχίν</b>
                                    <span>Ο Παλαιστίνιος ουτίστας Σιμόν Σαχίν παίζει σε <a href="../maqam/hijaz.php">Μακάμ Χιτζάζ</a>, βιντεοσκοπημένο στο Μητροπολιτικό Μουσείο της Νεας Υόρκης, 1987.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Jf3WeItCpXA&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Jf3WeItCpXA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Τζορτζ Μισέλ</b>
                                    <span>Ο Αιγύπτιος ουτίστας Τζορτζ Μισέλ παίζει <a href="../form/improv.php#taqsim">τακασίμ</a> στο <a href="../maqam/nahawand.php">Μακάμ Ναχαουάντ</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7iB4JFYArFg&t=0">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7iB4JFYArFg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Άμερ Αμούρι</b>
                                    <span>
                                        Ο Σύριος ουτίστας Άμερ Αμούρι, μέλος της ορχήστρας του Σαμπάχ Φαχρί, παίζει <a href="../form/improv.php#taqsim">τακασίμ</a> στο <a href="../maqam/bayati.php">Μακάμ Μπαϊάτι</a> (βίντεο από συναυλία στην Λυρική Σκηνή του Καΐρου, Cairo Opera House).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Εξερευνήστε άλλα παραδοσιακά όργανα:</p>
                    <ul>
                    	<!--
                        <li><a href="oud.php">Το Ούτι</a></li>
                        -->
                        <li><a href="qanun.php">Το Κανονάκι</a></li>
                        <li><a href="nay.php">Το Νάι</a></li>
                        <li><a href="violin.php">Το Bιολί</a></li>
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
