<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Αραβικά Μουσικά Όργανα";
$page_description = "Αραβικά Μουσικά Όργανα";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Το Ούτι, Το Κανονάκι, Το Νάι, Το Αραβικό Bιολί, Το Μπούζουκ, Το Αραβικό Ακκορντεόν, H Hλεκτρική Κιθάρα, To Αραβικό Όργανο, To Αρμόνιο Οριένταλ, To Αραβικό Πιάνο, Το Σαξόφωνο, Η Τρομπέτα, Το Ρεκ, Η Τάμπλα, Το Ταμπλ Μπάλαντι , Το Νταφ, Το Αιγυπτιακό Μάζχαρ, Το Κάτεμ, Τα Σαγκάτ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "el/instr.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Όργανα</a>
                    <?php include('sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Αραβικά Μουσικά Όργανα</h1>
                        <h3>Παραδοσιακά, δυτικά Αραβοποιημένα και κρουστά</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Όργανα</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/takht.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ταχτ</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/sahb.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Σαχμπ</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/naqr.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Νακρ</a>
                    </div>

                    <p id="takht">
                        Το τυπικό παραδοσιακό Αραβικό μουσικό σύνολο ονομάζεται Ταχτ και αποτελείται από τέσσερα κυρίως όργανα: το <a href="instr/oud.php">ούτι</a>, το <a href="instr/nay.php">νάι</a>, το <a href="instr/qanun.php">κανονάκι</a> και το <a href="instr/violin.php">βιολί</a>, και ένα βασικό κρουστό: το <a href="instr/riqq.php">ρεκ</a>. Κάποιες φορές το ρεκ αντικαθίσταται/συμπληρώνεται με την <a href="instr/tabla.php">τάμπλα</a> (όρος συχνά χρησιμοποιημένος αντί του όρου νταρμπούκα ή ντούμπεκ. Μην το συγχέετε με την Ινδική τάμπλα) ή το <a href="instr/daff.php">νταφ</a> (είδος μπεντίρ), και τα μελωδικά όργανα μπορούν να συμπληρωθούν με το <a href="instr/buzuq.php">μπούζουκ</a>.
                    </p>

                    <p>
                        Στυλιστικά, τα μελωδικά όργανα χωρίζονται σε δύο οικογένειες τεχνικών χαρακτηριστικών: <em>Σαχμπ</em> (όργανα που παράγουν νότες διαρκείας), όπως το βιολί και το νάι, και <em>Νακρ</em> (νυκτά), όπως το ούτι και κανονάκι. Οι δύο αυτές οικογένειες αλληλοσυμπληρώνουν η μία την άλλη ώστε το ηχητικό αποτέλεσμα να είναι πλουσιότερο και πιο ολοκληρωμένο.
                    </p>

                    <p>
                        Αραβοποιημένα όργανα είναι τα μη-Αραβικά όργανα που εισήλθαν στην Αραβική μουσική τον εικοστό αιώνα και γίνανε μέρος του Αραβικού ήχου εκείνης της εποχής.  Τα περισσότερα από αυτά τα όργανα υπήρξαν καινοτόμα στην Αίγυπτο, όπου οι μουσικοί ανέπτυξαν νέες μορφές μελωδικής διάνθισης και τεχνικής που κάναν αυτά τα όργανα να ακούγονται Αράβικα. Κάποια αραβοποιημένα όργανα υπέστησαν τεχνική διαφοροποίηση κατασκευαστικά ώστε να προσαρμοστούν στο απαιτούμενα Αραβικά διαστήματα. Άλλα όργανα, λόγω αδυναμίας τεχνικής παρέμβασης παρέμειναν ως έχουν με το 12τονο ισοσκελισμένο τρόπο με τον οποίο κατασκευάστηκαν εξ αρχής.
		              </p>

                    <p>
                        Σε αυτά συμπεριλαμβάνονται το <a href="instr/piano.php">πιάνο</a>, το ηλεκτρικό πιάνο, το <a href="instr/org.php">οργκ</a> (Αραβικό Όργανo), το <a href="instr/keyboard.php">Αρμόνιο Οριένταλ</a>, το <a href="instr/accordion.php">ακκορντεόν</a>, η <a href="instr/guitar.php">ηλεκτρική κιθάρα</a>, και το ηλεκτρικό ταστομένο μπάσσο. Κάποια από αυτά τα όργανα μπορούν να προσαρμοστούν και να παράγουν τέταρτα του τόνου. Η ντραμς και τα ηλεκτρονικά κρουστά επίσης χρησιμοποιούνται κοινώς σε πιο μοντέρνα Αραβική ποπ/χορευτική μουσική.
                    </p>

                    <p>
                        Το φλάουτο, <a href="instr/saxophone.php">σαξόφωνο</a>, κλαρινέτο και <a href="instr/trumpet.php">τρομπέτα</a> δεν έχουν απο την φύση λειτουργίας τους περιορισμό του 12τονου διαχωρισμού και έτσι επιτρέπουν μεγαλύτερο έλεγχο πάνω στο κούρδισμα σε σχέση με τα υπόλοιπα δυτικά όργανα. Αυτά τα όργανα χρησιμοποιούνται σε ποικίλες επεκτάσεις στυλιστικές, ειδικά σε μοντέρνα Αραβικά <em>Jazz Fusion</em> είδη.
                    </p>

                    <p>
                        Το βιολί, βιόλα, τσέλο, και κοντραμπάσσο είναι τα πλέον διαδεδομένα όργανα στην Αραβική μουσική, ειδικά στις μεγάλες ορχήστρες όπως η Ουμ Καλθούμ Ορχήστρα και η "Διαμαντένια Ορχήστρα" στην Αίγυπτο. Λόγω του ότι είναι άταστα όργανα, τα έγχορδα αυτά άνετα χρησιμοποιούνται χωρίς περιορισμό στα Αραβικά <a href="maqam.php">μακάμια</a>.
                    </p>

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card">
                            <img class="card-img-top" src="/img/rosette_khalaf.png" alt="Oud Rosette Khalaf">
                            <div class="card-body">
                                <h5 class="card-title">Παραδοσιακά Όργανα</h5>
                                <p class="card-text"><a href="instr/oud.php">Το Ούτι</a></p>
                                <p class="card-text"><a href="instr/qanun.php">Το Κανονάκι</a></p>
                                <p class="card-text"><a href="instr/nay.php">Το Νάι</a></p>
                                <p class="card-text"><a href="instr/violin.php">Το Αραβικό Bιολί</a></p>
                                <p class="card-text"><a href="instr/buzuq.php">Το Μπούζουκ</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card">
                            <img class="card-img-top" src="/img/nahat_girgi.png" alt="Oud Rosette Nahhat">
                            <div class="card-body">
                                <h5 class="card-title">Δυτικά Αραβοποιημένα Όργανα</h5>
                                <p class="card-text"><a href="instr/accordion.php">Το Αραβικό Ακκορντεόν</a></p>
                                <p class="card-text"><a href="instr/piano.php">To Αραβικό Πιάνο</a></p>
                                <p class="card-text"><a href="instr/saxophone.php">Το Αραβικό Σαξόφωνο</a></p>
                                <p class="card-text"><a href="instr/trumpet.php">Η Αραβική Τρομπέτα</a></p>
                                <p class="card-text"><a href="instr/keyboard.php">To Αρμόνιο Οριένταλ</a></p>
                                <p class="card-text"><a href="instr/guitar.php">H Hλεκτρική Κιθάρα</a></p>
                                <p class="card-text"><a href="instr/org.php">To Οργκ (Αραβικό Όργανo)</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="card">
                            <img class="card-img-top" src="/img/vergara.png" alt="Oud Rosette Vergara">
                            <div class="card-body">
                                <h5 class="card-title">Κρουστά</h5>
                                <p class="card-text"><a href="instr/riqq.php">Το Ρεκ</a></p>
                                <p class="card-text"><a href="instr/tabla.php">Η Τάμπλα</a></p>
                                <p class="card-text"><a href="instr/tabl_baladi.php">Το Ταμπλ Μπάλαντι</a></p>
                                <p class="card-text"><a href="instr/daff.php">Το Νταφ</a></p>
                                <p class="card-text"><a href="instr/mazhar.php">Το Αιγυπτιακό Μάζχαρ</a></p>
                                <p class="card-text"><a href="instr/katim.php">Το Κάτεμ</a></p>
                                <p class="card-text"><a href="instr/sagat.php">Τα Σαγκάτ</a></p>
                            </div>
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
