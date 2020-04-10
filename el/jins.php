<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "To Τζινς";
$page_description = "Το Αραβικό Τζινς";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="jins-page">

    <?php
      $page = "el/jins.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <?php include('sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>To Τζινς</h1>
                        <h3>Τμήμα κλίμακας αποτελούμενο από 3 νότες (3χορδο),</h3>
                        <h3>4 νότες ( 4χορδο), ή 5 νότες (5χορδο)</h3>
                        <h3>με το οποίο χτίζεται ένα μακάμ. </h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Τζινς</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/jins.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Τζινς/Αζνάς</a>
                    </div>

                    <p>
                        Το <em>Τζινς</em> (πλ. Αζνάς) είναι ένα τμήμα/υπομονάδα κλίμακας 3, 4, ή 5 νοτών. Το <em>Τζινς</em> είναι η βασική μελωδική υπομονάδα στην Αραβική μουσική, όπως κι ένα <a href="maqam.php">μακάμ</a> είναι δίοδος ανάμεσα σε πολλά Αζνάς. Κάθε <em>Τζινς</em> προσδιορίζεται από τα διαστήματά του, τα οποία δεν αλλάζουν όταν μεταφέρεται και δίνουν το στίγμα του χαρακτήρα του.
                    </p>
                    <p>
                        Η τονική (βάση/δεσπόζων φθόγγος) ενός <em>Τζινς</em> είναι η νότα αναφοράς και έμφασης της μελωδίας, η νότα όπου η μελωδία θα καταλήξει. Αυτή είναι συνήθως η πρώτη νότα του <em>Τζινς</em>. Η νότα οδηγός είναι η αυτή αμέσως κάτω από την τονική ενός <em>Τζινς</em>. Το γαμμάζ (κορυφή/ψηλότερη νότα του Τζινς/δεσπόζων φθόγγος) είναι η πιο εμφατική νότα της  μελωδίας (πέρα από την τονική), όπως επίσης και το πιο κοινό σημείο εκκίνησης ενός νέου <em>Τζινς</em> (η μεταφορά σε ένα νέο <em>Τζινς</em> ή <a href="maqam.php">μακάμ</a> ονομάζεται μετατροπία).
                    </p>
                    <p>
                        Το μέγεθος ενός <em>Τζινς</em> είναι το σύνολο των νοτών μεταξύ της τονικής και της νότας <em>γάμμαζ</em>. Αυτές οι νότες λέγονται βασική δομή του <em>Τζινς</em>. Έξω από την βασική δομή (σε όποια πλευρά της) βρίσκονται οι νότες που είναι μέρος και στοιχεία του μελωδικού λεξιλογίου. Αυτές οι νότες λέγονται διαβατικές (υποβάσιμες). Η βασική δομή συν τις διαβατικές νότες φτιάχνουν την επεκταμένη διαδοχή νοτών του <em>Τζινς</em>.
                    </p>
                    <p>
                        Κάθε <em>Τζινς</em> δείχνει την βασική δομή δοσμένη σε μεγάλης χρονικής αξίας, με την τονική και <em>γάμμαζ</em> νότα σε ολόκληρα (δεσπόζωντες φθόγγοι). Οι διαβατικές (υποβάσιμες) δίνονται σε μικρότερες αξίες, και μερικές φορές ένα <em>Τζινς</em> περιλαμβάνει πολλαπλές επιλογές για αλλίωση σε κάποιες από αυτές.
                    </p>
                    <p>
                        Μπορείτε να εξερευνήσετε τα Αζνάς χρησιμοποιώντας το <strong>Ευρετήριο Τζινς</strong> (αλφαβητικά) ή από τους πίνακες παρακάτω (κατηγοριοποιημένα βάσει μεγέθους):
                    </p>
                    
                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="page-list-header">Τρίχορδα</div>
                                <!-- Header Cell: "3-note" -->
                                <ul class="page-list">
                                    <li><a href="jins/mustaar.php">Τζινς Μουσταάρ</a></li>
                                    <li><a href="jins/sikah.php">Τζινς Σίκα</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">Τετράχορδα</div>
                                <!-- Header Cell: "4-note" -->
                                <ul class="page-list">
                                   <li><a href="jins/bayati.php">Τζινς Μπαϊάτι</a></li>
                                   <li><a href="jins/upper_ajam.php">Τζινς Άνω Άτζαμ</a></li>
                                   <li><a href="jins/upper_rast.php">Τζινς Άνω Ραστ</a></li>
                                   <li><a href="jins/hijaz.php">Τζινς Χιτζάζ</a></li>
                                   <li><a href="jins/hijaz_murassaa.php">Τζινς Χιτζάζ Μουράσα</a></li>
                                   <li><a href="jins/kurd.php">Τζινς Κουρντ</a></li>
                                   <li><a href="jins/lami.php">Τζινς Λάμι</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">Πεντάχορδα</div>
                                <!-- Header Cell: "5-note" -->
                                <ul class="page-list">
                                    <li><a href="jins/ajam.php">Τζινς Άτζαμ</a></li>
                                    <li><a href="jins/ajam_murassaa.php">Τζινς Άτζαμ Μουράσα</a></li>
                                    <li><a href="jins/athar_kurd.php">Τζινς Άθαρ Κουρντ</a></li>
                                    <li><a href="jins/jiharkah.php">Τζινς Τζιχάρκα</a></li>
                                    <li><a href="jins/nahawand.php">Τζινς Ναχαουάντ</a></li>
                                    <li><a href="jins/nikriz.php">Τζινς Νικρίζ</a></li>
                                    <li><a href="jins/rast.php">Τζινς Ραστ</a></li>
                                    <li><a href="jins/sazkar.php">Τζινς Σαζκάρ</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">(Απροσδιόριστο μέγεθος)</div>
                                <!-- Header Cell: "undefined size" -->
                                <ul class="page-list">
                                    <li><a href="jins/hijazkar.php">Τζινς Χιτζάζ Κάρ</a></li>
                                    <li><a href="jins/mukhalif_sharqi.php">Τζινς Μουχάλεφ Σάρκι</a></li>
                                    <li><a href="jins/nahawand_murassaa.php">Τζινς Ναχαουάντ Μουράσα</a></li>
                                    <li><a href="jins/saba.php">Τζινς Σάμπα</a></li>
                                    <li><a href="jins/saba_dalanshin.php">Τζινς Σάμπα Νταλανσίν</a></li>
                                    <li><a href="jins/saba_zamzam.php">Τζινς Σάμπα Ζάμζαμ</a></li>
                                    <li><a href="jins/sikah_baladi.php">Τζινς Σίκα Μπάλαντι</a></li>
                                </ul>
                            </div>
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