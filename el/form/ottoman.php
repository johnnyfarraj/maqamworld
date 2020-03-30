<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Φόρμες Οθωμανικής Ορχηστρικής μουσικής";
$page_description = "Φόρμες Οθωμανικής Ορχηστρικής Mουσικής";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Το Ούτι, Το Κανονάκι, Το Νάι, Το Σαμάι, H Λόνγκα και To Μπάσραφ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "el/form/ottoman.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετηρίου των Φόρμες</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Φόρμες Οθωμανικής Ορχηστρικής μουσικής</h1>
                        <h3>Το Σαμάι, H Λόνγκα και Το Μπάσραφ</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετηρίου των Φόρμες</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/khana.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά της Χάνα</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/taslim.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Τασλίμ</a>
                    </div>

                    <p>
                        Τρεις οργανικές φόρμες σύνθεσης είναι δανεισμένες από την Τουρκική/Οθωμανική μουσική και παραμένουν μέρος της Αραβικής μουσικής έως σήμερα: Το Σαμάι, η Λόνγκα και το Μπάσραφ. Το Σαμάι έχει επιβιώσει περισσότερο από τα τρία, καθώς Άραβες μουσικοί συνεχίζουν να συνθέτουν σε αυτήν την φόρμα μέσα στον 21ου αιώνα.
                    </p>
                    <p>
                        Και οι τρεις αυτές φόρμες βασίζονται σε ένα επαναλαμβανόμενο θέμα (ρεφραίν) που λέγεται “Taslim” και ένας αριθμός από διαφορετικά θέματα (στροφές) λέγονται <em>“Χάνα”</em>. Oι τρεις φόρμες στηρίζονται σε ένα μακάμ και περιλαμβάνουν την συμπεριφορά του μακάμ αυτού και τις συνήθεις μετατροπίες του. Γιαυτό το λόγο, το μακάμ (και ο συνθέτης) είναι μέρος του τίτλου της σύνθεσης.
                    </p>

                    <div id="samai" class="heading jins text-center full-width">
                        <h3>Το Σαμάι</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/samai.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σαμάι</a>
                    </div>
                    <p>
                        Το Σαμάι είναι μία φόρμα οργανικής σύνθεσης αποτελούμενη από τέσσερις <em>Χάνα</em>, κάθε μία ακολουθούμενη από το ίδιο θέμα του <em>Τασλίμ</em>. Τα μορφή ενός Σαμάι είναι Χ1, Τ, Χ2, Τ, Χ3, Τ, Χ4, Τ. Όλα τα μέρη γράφονται σε ρυθμό <a href="../iqaa/samai_thaqil.php">Ικά Σαμάι Θακχίλ</a>, εκτός την 4η Χάνα που είναι συνήθως γραμμένη σε ένα μικρό μονού αριθμού ρυθμικό κύκλο όπως <a href="../iqaa/samai_saraband.php">Ικά Σαμάι Σαραμπάντ</a> ή <a href="../iqaa/samai_darij.php">Ικά Σαμάι Ντάριτζ</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=5s1KylUC9_Q">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/5s1KylUC9_Q/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Σαμάι Μπαϊάτι – Ιμπραχίμ αλ-Αριάν</b>
                                    <span>Σαμάι σε μακάμ Μπαϊάτι από τον Ιμπραχίμ αλ-Αριάν (Αίγυπτος), ηχογραφημένο από την Ορχήστρα του Ράδιου της Τυνησίας.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=uNncmnhL05k">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/uNncmnhL05k/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Σαμάι Χιτζασκάρ Κουρντ</b>
                                    <span>Ρόχι αλ-Χαμμάς</span>
                                    <span>Σαμάι σε μακάμ Χιτζασκάρ Κορύντ από τον Ρόχι Αλ-Χαμμάς (Παλαιστίνη-Ιράκ), περιλαμβάνοντας <a href="../iqaa/jurjina.php">Ικά Τζουρτζίνα</a> στον 4ο Χάνα.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=pMCnu_2r-wQ">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/pMCnu_2r-wQ/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Σαμάι Κουρντ</b>
                                    <span>Αμπντου Ντάγερ</span>
                                    <span>Σαμάι σε <a href="../maqam/kurd.php">Μακάμ Κουρντ</a> από τον Αμπντού Ντάγερ (Αίγυπτος), το οποίο περιλαμβάνει μία μακρυά <a href="../form/instr_comp.php#muqaddima">Μουκάντιμα</a> (σύνθεση εισαγωγής).
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_OZo-QBb6jY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_OZo-QBb6jY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Σαμάι Ραστ</b>
                                    <span>Τζορτζ Μισέλ</span>
                                    <span>Σαμάι σε <a href="../maqam/rast.php">Μακάμ Ραστ</a> από τον Τζορτζ Μισέλ (Αίγυπτος), ηχογραφημένο από την Ορχήστρα του Ράδιου της Τυνησίας.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=opETYjZGZtM">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/opETYjZGZtM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Σαμάι Ναουάθαρ</b>
                                    <span>Τζαμίλ Ουαίις</span>
                                    <span>Σαμάι σε <a href="../maqam/nawa_athar.php">Μακάμ Ναουάθαρ</a> από τον Τζαμίλ Aουές (Συρία).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="longa" class="heading jins text-center full-width">
                        <h3>H Λόνγκα</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/longa.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά της Λόνγκα</a>
                    </div>
                    
                    <p>
                        Η Λόνκγα είναι η 2η πιο δημοφιλής Οθωμανική ορχηστρική φόρμα. Oι <em>Χάνα</em> είναι γραμμένες συνήθως στον κοντό και ζωηρό ρυθμό <a href="../iqaa/fox.php">Ικά Φοξ</a> και <a href="../iqaa/malfuf.php">Ικά Μαλφούφ</a> για το <em>Τασλίμ</em>.
                    </p>
                    <p>
                        Πολλές Λόνγκα της Οθωμανικής περιόδου έχουν Μακάμ με σκληρά διαστήματα (χωρίς μόρια του τόνου) όπως <a href="../maqam/nahawand.php">Μακάμ Ναχαουάντ</a>, <a href="../maqam/hijaz.php">Μακάμ Χιτζάζ</a> και <a href="../maqam/nikriz.php">Μακάμ Νικρίζ</a>, και οι μελωδίες τους επικαλούν Ανατολίκη Ευρωπαϊκή μουσική. Πολλοί Άραβες συνθέτες συνεχίζουν και ακολουθούν την ίδια προσέγγιση.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=JnTGci4VSXo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/JnTGci4VSXo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Λόνγκα Φαραχφάζα</b>
                                    <span>Ριάντ αλ-Σουνμπάτι</span>
                                    <span>Λόνγκα σε <a href="../maqam/nahawand.php">Μακάμ Φαραχφάζα</a> από τον Ριάντ Σουνμπάτι (Αίγυπτος), ηχογραφημένο από την ορχήστρα του Σιμόν Σαχίν.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7aVU7mPkCTs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7aVU7mPkCTs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Λόνγκα Άτζαμ</b>
                                    <span>Αμπντού Ντάγερ</span>
                                    <span>Λόνγκα σε <a href="../maqam/ajam.php">Μακάμ Άτζαμ</a> από τον Αμπντού Ντάγερ (Αίγυπτος), ηχογραφημένη από την ορχήστρα του.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=oa5fAO1YXSY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/oa5fAO1YXSY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Λόνγκα Ναχαουάντ</b>
                                    <span>Δρ. Άλφρεντ Τζαμίλ</span>
                                    <span>Λόνγκα σε <a href="../maqam/nahawand.php">Μακάμ Ναχαουάντ</a> από τον Δρ. Άλφρεντ Τζαμίλ (Αίγυπτος), ηχογραφημένη από την ορχήστρα του.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="Bachraf" class="heading jins text-center full-width">
                        <h3>Το Μπάσραφ</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/Bachraf.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μπάσραφ</a>
                    </div>
                    <p> 
                        Το Μπάσραφ είναι η λιγότερη διαδεδομένη Οθωμανική ορχηστρική φόρμα, και παραμένει κυρίως στον χώρο των μουσικών σπουδών και ασκήσεων οργανικής μουσικής. Το Μπάσραφ αποτελείται από 4 <em>Χάνα</em>, κάθε μία ακολουθούμενη από το ίδιο θέμα του <em>Τασλίμ</em>, και σπάνια υπάρχουν συνθέσεις τέτοιου είδους  από Άραβες συνθέτες.
                    </p>
                    <p>
                        Αντίθετα με το Σαμάι, το Μπάσραφ συνήθως ακολουθεί ένα μονάχα <a href="../iqaa.php">Ικά</a> σε όλη την έκταση της σύνθεσης, στις περισσότερες περιπτώσεις ένας ζυγού αριθμού ρυθμός όπως <a href="../iqaa/masmudi_kabir.php">Ικά Μασμούντι Καμπίρ</a> (8/4), <a href="../iqaa/mukhammas.php">Ικά Μουχάμμας</a> (16/4), Ικά Σάνμπαρ (24/4), Ικά Ντάουρ αλ-Καμπίρ (28/4), ή μακρύτερους Οθωμανικούς ρυθμικούς κύκλους.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=NmNMjWyhiyE">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/NmNMjWyhiyE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Μπάσραφ Φαραχφάζα</b>
                                    <span>Μπάσραφ σε <a href="../maqam/nahawand.php">Μακάμ Φαραχφάζα</a> από τον Ισμαΐλ Χάκκι Μπεϊ (Οθωμανός), ηχογράφημένο από την ορχήστρα του Σιμόν Σαχίν.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=aZY8TuOB68w">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/aZY8TuOB68w/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Μπάσραφ Κάρα Βάτακ Σίκα (1929)</b>
                                    <span>Μπάσραφ Καρά Βατάκ σε <a href="../maqam/sikah.php">Μακάμ Σίκα</a>, ηχογραφημένοτο 1929 από τον Σάμι αλ-Σάουα (Συρία) στο <a href="../instr/violin.php">βιολί</a> και Μοχάμαντ αλ-Κασάμπζι (Αίγυπτος) στο <a href="../instr/oud.php">Ούτι</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- add Bachraf Rast Tatyos Effendi -->

                    <p>Εξερευνήστε άλλες ομάδες φόρμας:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Φόρμες Φωνητικών Συνθέσεων</a></li>
                        <li><a href="instr_comp.php">Φόρμες Ορχηστρικών	Συνθέσεων</a></li>
                        <!-- <li><a href="ottoman.php">Φόρμες Οθωμανικής Ορχηστρικής μουσικής</a></li> -->
                        <li><a href="improv.php">Φόρμες Αυτοσχεδιασμού</a></li>
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
