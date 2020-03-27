<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Aραβικές Μουσικές Φόρμες";
$page_description = "Aραβικές Μουσικές Φόρμες";
$page_keywords = "Μακάμ, Γένη, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Το Ούτι, Το Κανονάκι, Το Νάι, Ντάουρ, Μουάσαχ, Καντ, Τακτούκα, Ουγνία, Κασίντα, Μονόλογο, Ντουέτο, Ντουλάμπ, Μακτούα, Μουκάντιμα, Ταχμίλα, Ντάριτζ, Σαμάι, Λόγκα, Μπάσραφ, Τακσίμ, Λαγιάλι, Μαουάλ, Κασίντα";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "el/forms.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετηρίου των Φόρμες</a>
                    <?php include('sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading text-center jins">
                        <h1>Aραβικές Μουσικές Φόρμες</h1>
                        <h3>Τα Καουάλεμπ</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετηρίου των Φόρμες</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qalab.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Κάλεμπ/Καουάλεμπ</a>
                    </div>

                    <p>
                        Ως επί των πλέιστων η παραδοσιακή και κλασσική  Αραβική μουσική, είτε στην σύνθεση ή τον αυτοσχεδιασμό, ακολουθεί μία γκάμα από φόρμες που λέγονται <em>Καουάλιμπ</em> στα Αραβικά (εν. <em>Κάλεμπ</em>, κυριολεκτικά σημαίνει πρότυπο ή σχηματισμένο δοχείο). Τα <em>Καουάλιμπ</em> είναι περιγράμματα που καθοδηγούν τον μουσικό και τον αυτοσχεδιαστή, και χρησιμοποιούνται τόσο στην μουσική με τραγούδι όσο και στην ορχηστρική μουσική. Τα <em>Καουάλιμπ</em> δίνουν στον μουσικό ένα γνώριμο περιβάλλον εργασίας, και δημιουργεί μία αίσθηση άνεσης και προσδοκίας στον ακροατή.
                    </p>

                    <p>
                        Τα <em>Καουάλιμπ</em> είναι oργανωμένα εδώ προς χάρην διευκόλυνσης σύμφωνα με τις φωνητικές/ορχηστρικές διαστάσεις και αυτές της σύνθεσης/αυτοσχεδιασμού.
                    </p>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq1.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Φόρμες Φωνητικών Συνθέσεων </h5>
                                    <p class="card-text">Μάθετε σχετικά με το Ντάουρ, Μουάσαχ, Καντ, Τακτούκα, Ουγνία, Κασίντα, Μονόλογο και Ντουέτο.
                                    </p>
                                    <a href="form/vocal_comp.php" class="btn btn-primary">Περισσότερα…<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq2.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Φόρμες Ορχηστρικών Συνθέσεων</h5>
                                    <p class="card-text">Μάθετε σχετικά με το Ντουλάμπ, Μακτούα, Μουκάντιμα, Ταχμίλα και Ντάριτζ.</p>
                                    <a href="form/instr_comp.php" class="btn btn-primary">Περισσότερα…<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq3.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Φόρμες Οθωμανικής Ορχηστρικής μουσικής</h5>
                                    <p class="card-text">Μάθετε σχετικά με το Σαμάι, Λόγκα και Μπάσραφ.</p>
                                    <a href="form/ottoman.php" class="btn btn-primary">Περισσότερα…<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq4.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">Φόρμες Αυτοσχεδιασμών</h5>
                                    <p class="card-text">Μάθετε σχετικά με το Τακσίμ, Λαγιάλι, Μαουάλ και Κασίντα.</p>
                                    <a href="form/improv.php" class="btn btn-primary">Περισσότερα…<i class="fa fa-fw fa-angle-right"></i></a>
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
