<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Αραβικοί Ρυθμικοί Κύκλοι";
$page_description = "Αραβικοί Ρυθμικοί Κύκλοι";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "el/iqaa.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <?php include('sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Αραβικοί Ρυθμικοί Κύκλοι</h1>
                        <h3>Ο Ρυθμός (Ικά)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Ρυθμοί</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/iqaa.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ικά/Ικαάτ</a>
                    </div>

                    <p>
                        Η Αραβική μουσική συντήθεται πάνω από ρυθμικούς κύκλους που ονομάζονται <em>Ικαάτ</em> (εν. <em>Ικά</em>), τα οποία είναι ρυθμικά σχήματα που επαναλαμβάνονται σε κάθε μέτρο. Μία σύνθεση μπορεί να αλλάξει ενδιάμεσα πολλούς ρυθμούς. Κάθε ρυθμός προσδιορίζεται χρησιμοποιώντας ένα πρωτότυπο μέτρο και δύο βασικούς χτύπους/ήχους: <strong>Ντουμ</strong> (μπάσσος και διαρκής) και <strong>Τακ</strong> (ξηρός και αιχμηρός).
                    </p>
                    <p>
                        Η καταγραφή του ρυθμού εξυπηρετεί ως σκελετός ή το πρωτότυπο για το πως εκτελείται. Στην πράξη, οι κρουστοί διανθίζουν έναν ρυθμό (του δίνουν υπόσταση) με επιπρόσθετα χτυπήματα: <strong>ντουμ</strong>, <strong>τακ</strong> και οτιδήποτε άλλο ήχο το κρουστό μπορεί να παράγει. Αυτού του είδους η διάνθηση  εξαρτάται αρκετά από το είδος της Αραβικής μουσικής, την επιθυμούμενη αισθητική της ενορχήστρωσης, το όργανο καθαυτό, το μέγεθος του ρυθμικού συνόλου, και το προσωπικό ύφος του οργανοπαίχτη.
                    </p>
                    <p>
                        Οι Αραβικοί ρυθμοί έρχονται σε πολλά διαφορετικά κλάσματα, ακόμα και σε μονούς αριθμούς. Τα μικρότερα ρυθμικά κλάσματα (2/4, 3/4, 4/4, 6/4, 8/4) χρησιμοποιούνται κυρίως στην παραδοσιακή μουσική, στο είδος <em>Τάραμπ</em> των μέσων του εικοστού αιώνα, και στην μόντερνα Αραβική ποπ.
                        Μεγαλύτεροι συνδυασμοί (7/8, 9/8, 10/8, μέχρι 32/4) χρησιμοποιούνται στο παραδοσιακό τραγουδιστικό ύφος των <a href="form/vocal_comp.php#muwashah">Μουασαχάτ</a>.
                    </p>
                    <p>
                        Μπορείτε να αρχίσετε την εξερεύνηση των Αραβικών ρυθμών χρησιμοποιώντας το <strong>Ευρετήριο Ρυθμοί</strong> (στοιχειοθετημένοι αλφαβητικά) ή χρησιμοποιώντας τον πίνακα παρακάτω (στοιχειοθετημένοι βάσει αριθμού παλμών σε κάθε μέτρο):
                    </p>

                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="/el/iqaa/ayyub.php">Αϊγιούμπ 2/4</a></li>
                                    <li><a href="/el/iqaa/malfuf.php">Μαλφούφ 2/4</a></li>
                                    <li><a href="/el/iqaa/karachi.php">Καράτσι 2/4</a></li>
                                    <li><a href="/el/iqaa/wahda_saghira.php">Ουάχντα Σαγίρα 2/4 </a></li>
                                    <li><a href="/el/iqaa/samai_darij.php">Σαμάι Ντάριτζ 3/4</a></li>
                                    <li><a href="/el/iqaa/samai_saraband.php">Σαμάι Σαραμπάντ 3/8</a></li>
                                    <li><a href="/el/iqaa/fallahi.php">Φαλάχι 2/4</a></li>
                                    <li><a href="/el/iqaa/fox.php">Φοξ 2/4</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="/el/iqaa/zaffa.php">Ζάφα 4/4</a></li>
                                    <li><a href="/el/iqaa/maqsum.php">Μακσούμ 4/4</a></li>
                                    <li><a href="/el/iqaa/baladi.php">Μπάλαντι 4/4</a></li>
                                    <li><a href="/el/iqaa/nawari.php">Νάουαρι 4/4</a></li>
                                    <li><a href="/el/iqaa/wahda.php">Ουάχντα 4/4</a></li>
                                    <li><a href="/el/iqaa/wahda_w_nuss.php">Ουάχντα ου Νος 4/4</a></li>
                                    <li><a href="/el/iqaa/rumba.php">Ρούμπα 4/4</a></li>
                                    <li><a href="/el/iqaa/saidi.php">Σαΐντι 4/4</a></li>
                                    <li><a href="/el/iqaa/hachaa.php">Χάτσα 4/4</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="/el/iqaa/thurayya.php">Θουράια 5/8</a></li>
                                    <li><a href="/el/iqaa/sudasi.php">Σουντάσι 6/4</a></li>
                                    <li><a href="/el/iqaa/yuruk_semai.php">Γιουρούκ Σεμάι 6/8</a></li>
                                    <li><a href="/el/iqaa/dawr_hindi.php">Ντάουρ Χίντι 7/8</a></li>
                                    <li><a href="/el/iqaa/nawakht.php">Ναουάχτ 7/4</a></li>
                                    <li><a href="/el/iqaa/masmudi_kabir.php">Μασμούντι Καμπίρ 8/4</a></li>
                                    <li><a href="/el/iqaa/ciftetelli.php">Σαφτατάλι 8/4</a></li>
                                    <li><a href="/el/iqaa/wahda_kabira.php">Ουάχντα Καμπίρα 8/4</a></li>
                                    <li><a href="/el/iqaa/bambi.php">Μπάμμπι 8/4</a></li>
                                    <li><a href="/el/iqaa/katakufti.php">Κατακούφτι 8/8</a></li>
                                    <li><a href="/el/iqaa/aqsaq.php">Ακσάκ 9/8</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="/el/iqaa/mudawwar.php">Μουντάουαρ Σάμι 10/4</a></li>
                                    <li><a href="/el/iqaa/jurjina.php">Τζουρτζίνα 10/8</a></li>
                                    <li><a href="/el/iqaa/samai_thaqil.php">Σαμάι Θακίλ 10/8</a></li>
                                    <li><a href="/el/iqaa/awis.php">Αουίς 11/8</a></li>
                                    <li><a href="/el/iqaa/mudawwar.php">Μουντάουαρ Μάσρι 12/4</a></li>
                                    <li><a href="/el/iqaa/dharafat.php">Δαραφάτ 13/8 </a></li>
                                    <li><a href="/el/iqaa/murabbaa.php">Μουράμπα 13/4</a></li>
                                    <li><a href="/el/iqaa/muhajjar.php">Μουχάτζαρ 14/4</a></li>
                                    <li><a href="/el/iqaa/mukhammas.php">Μουχάμας 16/4</a></li>
                                    <li><a href="/el/iqaa/khosh_rang.php">Χος Ρανγκ 17/8</a></li>
                                    <li><a href="/el/iqaa/fakhit.php">Φάχιτ 20/4</a></li>
                                    <li><a href="/el/iqaa/awfar.php"> ΆουφαρΜάσρι 19/4</a></li>
                                    <li><a href="/el/iqaa/sittatu_ashar.php">Σίτατου Άσαρ Μάσρι 32/4</a></li>
                                    <li><a href="/el/iqaa/warshan_arabi.php">Ουαρσάν Άραμπι 32/4</a></li>
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