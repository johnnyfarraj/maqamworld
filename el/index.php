<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "";
$page_description = "";
$page_keywords = "";
$page_language = "el";
include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "el/index.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="heading">
                        <h1>Καλωσήρθατε στον ανανεωμένο <span>Κόσμο των Μακάμ</span></h1>
                        <h3>
                            Ο Κόσμος των Μακάμ είναι μια διαδικτυακή πηγή πληροφοριών αφιερωμένος στην διδασκαλία και μετάδοση του τροπικού συστήματος των Αραβικών μουσικών δρόμων (μακάμ), οι οποίοι είναι τα θεμέλια της Αραβικής παραδοσιακής μουσικής. Ο παρών ιστότοπος καλύπτει κυρίως μουσική από το μέρος του Αραβικού κόσμου όπως αυτό εκτείνεται κατά μήκος της Ανατολιτικής Μεσoγείου (Αίγυπτος, Παλαιστίνη, Ιορδανία, Λίβανος και Συρία), με εστίαση χρονικά από τις αρχές στα μέσα του εικοστού αιώνα.
                        </h3>
                    </div>

                    <p>
                        Μετά από 17 χρόνια λειτουργίας, o Κόσμοσ των Μακάμ έχει αναβαθμιστεί με την οικονομική υποστήριξη μέσω χορήγησης για το 2016 από τον ανεξάρτητο πολιτιστικό οργανισμό <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target="_blank">The Arab Fund for Arts and Culture (AFAC)</a>. 
                        Χάρη στην αναβάθμιση του, o Κόσμοσ των Μακάμ συμπεριλαμβάνει τα εξής νέα χαρακτηριστικά:
                    </p>

                    <ul>
                        <li>Πλήρης μετάφραση στα 
                            <a href="/ar/index.php"><strong>Αραβικά</strong></a>, 
                            <a href="/en/index.php"><strong>Αγγλικά</strong></a>, 
                            <a href="/fr/index.php"><strong>Γαλλικά</strong></a>, 
                            <a href="/it/index.php"><strong>Ιταλικά</strong></a> και 
                            <a href="/de/index.php"><strong>Γερμανικά</strong></a> (Ισπανικά βρίσκονται υπό κατασκευή).
                        </li>
                        <li>Υποστήριξη για προσαρμογή του ιστοτοπου σε όλων των ειδών οθόνης (ειδικά στις έξυπνες τηλεφωνικές συσκευές).</li>
                        <li>Διάθεση μηχανής αναζήτησης.</li>
                        <li>Αναβάθμιση υλικού με πιο σχετικό περιεχόμενο.</li>
                        <li>Υψιλότερη ανάλυση εικόνων και ποιότητας ηχητικών δειγμάτων.</li>
                        <li>Καλύτερη πλοήγηση κυρίου και δευτερευόντων περιεχομένων.</li>
                        <li>Δυνατότητα ακούσματος των μουσικών φθόγγων με ένα κλικ πάνω σε κάθε νότα.</li>
                        <li>Ξεχωριστή σελίδα επικοινωνίας για αποδοχή σχολίων των αναγνωστών.</li>
                    </ul>

                    <p>
                        Με χαρά έχω να ανακοινώσω την προσεχή έκδοση βιβλίου σε μια από κοινού συγγραφική δουλειά με τον φίλο μου Σάμι Αμπού Σουμάις (δημιουργό του <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>).
                        Το βιβλίο έχει τίτλο <a href="book.php">INSIDE ARABIC MUSIC</a>, και αναμένεται να κυκλοφορήσει από το <a href="https://global.oup.com/academic/product/inside-arabic-music-9780190658366" target="_blank">Oxford University Press</a> μεταξύ Φλεβάριου-Μαρτίου 2019. 
                        Το βιβλίο θα αποτελέσει μία περιεκτική αναφορά πάνω στην Αραβική μουσική και ο παρών ιστότοπος θα λειτουργεί ως παράλληλο μέσο.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/taoufiq_oud.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Μακάμ</h5>
                                    <p class="card-text">Μάθετε για το Αραβικόμουσικό τροπικό σύστημα με χρήση πενταγράμμου και ηχητικά παραδείγματα.
                                    </p>
                                    <a href="/el/maqam.php" class="btn btn-primary">Μακάμ<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_star.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Γένη</h5>
                                    <p class="card-text">Μάθετε για τα γένη των <b>μακάμ</b>, τις υπομονάδες των τρόπων που συστήνουν κάθε <b>μακάμ</b>.</p>
                                    <a href="/el/jins.php" class="btn btn-primary">Γένη<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_round.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Ρυθμοί</h5>
                                    <p class="card-text">Μάθετε για τον Αραβικό ρυθμικό κύκλο <b>Ικάα</b>, βασισμένο στους πρωτογενείς κρουστικούς ήχους <em>ντουμ</em> και <em>τακ</em>.
                                    </p>
                                    <a href="/el/iqaa.php" class="btn btn-primary">Ρυθμοί<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_etching.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Φόρμες</h5>
                                    <p class="card-text">Μάθετε για τις Αραβικές μουσικές φόρμες, <b>Καουαλίμπ</b>, Που χρησιμοποιούνται στα τραγούδια και ορχηστρική μουσική, στις συνθέσεις και τους αυτοσχεδιασμούς.</p>
                                    <a href="/el/forms.php" class="btn btn-primary">Φόρμες<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_names.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Mουσικά Όργανα</h5>
                                    <p class="card-text">Μάθετε για τα παραδοσιακά Αραβικά μουσικά όργανα, μελωδικά και κρουστά, όπως επίσης και αυτά τα δυτικά τα οποία έχουν “Αραβοποιηθεί”.
                                    </p>
                                    <a href="/el/instr.php" class="btn btn-primary">Mουσικά Όργανα<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/vladimir_tamari.png" alt="The Arabic Oud">
                                <div class="card-body">
                                    <h5 class="card-title">Βιβλίο</h5>
                                    <p class="card-text">Μάθετε για την προσεχή έκδοση του βιβλίου <strong>Inside Arabic Music</strong> (από κοινού συγγραφική δουλειά με τον Σάμι Αμπού Σουμάις) η οποία αναμένεται να κυκλοφορήσει στα μέσα του Φλεβάρη 2019.
                                    </p>
                                    <a href="/el/book.php" class="btn btn-primary">Βιβλίο<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-sm-3">
                    <div class="text-center">
                        <img src="http://placehold.it/160x600" alt="" class="d-none d-sm-block m-auto">
                        <img src="http://placehold.it/300x250" alt="" class="d-block d-sm-none ml-auto mr-auto mt-5">
                    </div>
                </div>-->
            </div>
                <?php include($ROOT . 'inc/768x90.php'); ?>
        </div>
    </div>

    <?php include($ROOT . 'en/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>
