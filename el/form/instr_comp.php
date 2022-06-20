<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Φόρμες Ορχηστρικών	Συνθέσεων";
$page_description = "Φόρμες Ορχηστρικών	Συνθέσεων";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Το Ούτι, Το Κανονάκι, Το Νάι, Ντουλάμπ, Μακτούα, Μουκάντιμα, Ταχμίλα και Ντάριτζ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "el/form/instr_comp.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Φόρμες</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Φόρμες Ορχηστρικών	Συνθέσεων</h1>
                        <h3>Το Ντουλάμπ, H Μακτούα, H Μουκάντιμα, H Ταχμίλα και Το Ντάριτζ</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Φόρμες</a>
                    <div class="clearfix"></div>

                    <p>
                        Οι Φόρμες Ορχηστρικών Συνθέσεων δεν είναι τόσο διαδεδομένες όπως είναι οι <a href="vocal_comp.php">Φόρμες Φωνητικών Συνθέσεων</a> στην Αραβική μουσική, μιας και η παράδοση καθαυτή είναι πρωτίστως φωνητική. Λαμβάνοντας αυτό υπόψιν, ερμηνείες αποκλειστικά οργανικών συνθέσεων είναι σπάνιες. Παρόλαυτα, η οργανική μουσική συμπληρώνει το φωνητικό μέρος όμορφα, και παρέχει απαραίτητες εισαγωγές, μεταφορές, ιντερλούδια, καθώς επίσης παρουσιάζει τους οργανοπαίχτες στην ορχήστρα του τραγουδιστή.
                    </p>

                    <div id="maqtua" class="heading jins text-center full-width">
                        <h3>Η Μακτούα</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/maqtua.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά της Μακτούα</a>
                    </div>
                    <p>
                        Η Μακτούα (κυριολεκτικά σημαίνει ένα κομμάτι) είναι γενικά μία οργανική σύνθεση. Λέγεται επίσης Μααζούφα (ερμηνευμένη σε ένα όργανο σε αντίθεση με το τραγούδι). Η φόρμα της Μακτούα είναι ειδικά δημοφιλής στην μουσικό είδος του <em>Ρακς Σάρκι</em>-ανατολικός χορός (χορός της κοιλιάς).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=yJecVVGVGIw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/yJecVVGVGIw/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Δικραϊάτι (1944)</b>
                                    <span>
                                        Η οργανική σύνθεση του Μοχάμαντ Κασάμπζι Ζικραϊάτι (1944) σε <a href="../maqam/nahawand.php">Μακάμ Ναχαουάντ</a>, ηχογραφημένη από την National Arabic Orchestra (USA).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=DwXurHF47j8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/DwXurHF47j8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Αζίζα (1955)</b>
                                    <span>
                                        Η οργανική σύνθεση του Μοχάμαντ Αμπντέλ Ουαχάμπ Αζίζα (από την ομώνυμη ταινία <strong>Αζίζα</strong>, 1955).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=NtkG3weZkwc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/NtkG3weZkwc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Τούτα</b>
                                    <span>Η οργανική σύνθεση του Φαρίντ αλ-Άτρας.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=jvdTH_mEcGk">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/jvdTH_mEcGk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Λαϊάλι Ζαμάν</b>
                                    <span>Η οργανική σύνθεση <strong>Λαϊάλι Ζαμάν</strong> του Αιγύπτιου βιολιστή Αμπντού Ντάγερ
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="muqaddima" class="heading jins text-center full-width">
                        <h3>Η Μουκάντιμα</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/muqaddima.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά της Μουκάντιμα</a>
                    </div>
                    <p>
                        Η Μουκάντιμα σημαίνει κυριολεκτικά ‘‘εισαγωγή”. Αυτή η φόρμα έγινε δημοφιλής προς τα μέσα του 20ού αιώνα καθώς οι συνθέτες πρόσθεταν μεγάλες εισαγωγές στην νέα δημοφιλή φόρμα <a href="../form/vocal_comp.php#ughniya">Ουγνία</a> (φόρμα μεγάλου σε διάρκεια τραγουδιού). Ανεπτυγμένες <a href="../form/instr_comp.php#muqaddima">Μουκάντιμα</a> μερικές φορές διαρκούσαν πάνω από 5 λεπτά και συμπεριλάμβαναν πολλαπλά μέρη όπως μέρη σόλων και μετατροπίες Μακάμ.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=ul4z6sLnXYY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/ul4z6sLnXYY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Αλφ Λέιλα ου Λέιλα (1969)</b>
                                    <span>Η εισαγωγή του μεγάλου σε διάρκεια τραγουδιού <strong>Αλφ Λέιλα ου Λέιλα</strong> (1969) σε ερμηνεία Ουμ Κουλθούμ και μουσική Μπαλίγ Ηάμντι.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=g1o5EdK2meI">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/g1o5EdK2meI/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Κάριατ αλ-Φιντζάν (1976)</b>
                                    <span>Αμπντέλ Χαλίμ ΧάΦεζ</span>
                                    <span>Η εισαγωγή του μεγάλου σε διάρκεια τραγουδιού <strong>Κάριατ αλ-Φιντζάν</strong> (1976) σε μουσική του Μοχάμαντ αλ-Μούγκι.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=ii0_uVzQ_44&t=917s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/ii0_uVzQ_44/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Φι Ιούμ ου Λέιλα (1978)</b>
                                    <span>Η εισαγωγή του μεγάλου σε διάρκεια τραγουδιού <strong>Φι Ιούμ ου Λέιλα</strong> (1978) σε ερμηνεία της Ουάρντα και μουσική Μοχάμαντ Αμπντέλ Ουαχάμπ.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="dulab" class="heading jins text-center full-width">
                        <h3>Το Ντουλάμπ</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/dulab.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ντουλάμπ</a>
                    </div>
                    <p> 
                        Το Ντουλάμπ είναι μία πολύ σύντομη σύνθεση η οποία περιλαμβάνει και εισαγάγει ένα μακάμ. Η ονομασία του σημαίνει ”τροχός” στα Αραβικά επειδή η ίδια μελωδία επαναλαμβάνεται πολλές φορές. Το Ντουλάμπ θα μπορούσε να στέκεται ανεξάρτητο ως κομμάτι το οποίο προυπάρχει ενός <a href="improv.php">αυτοσχεδιασμού</a>, ή θα μπορούσε να υπηρετήσει ως μία εισαγωγή σε ένα Ντάουρ (κύκλο).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=n60D-Mnodms">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/n60D-Mnodms/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ντουλάμπ Κουρντ</b>
                                    <span>Ουάσλα με τον Σαμπάχ Φαχρί σε μακάμ Χιτζασκάρ Κουρντ που ανοίγει με ένα παραδοσιακό Ντουλάμπ Κουρντ.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zxAYZFI1zio">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zxAYZFI1zio/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ντάουρ Έντα Φάχεμ </b>
                                    <span>
                                        Το Νταουάρ του Ζακαρία Άχμαντ ανοίγει με μία μονή επανάληψη Ντουλάμπ σε <a href="../maqam/huzam.php">Μακάμ Ραχάτ αλ-Αρουάχ</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="tahmila" class="heading jins text-center full-width">
                        <h3>Η Ταχμίλα</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/tahmila.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά της Ταχμίλα</a>
                    </div>
                    <p>
                        Η Ταχμίλα είναι ένα οργανικό κομμάτι που συνδυάζει ένα επαναλαμβανόμενο ρεφραίν με στροφές που είναι εν μέρει σύνθεση και εν μέρει αυτοσχεδιασμός. Η Ταχμίλα συνήθως παίζεται από μικρό σύνολο Ταχτ (παραδοσιακή μικρή ορχήστρα) όπου κάθε οργανοπαίχτης παίρνει σειρά παίζοντας την εκάστοτε στροφή και αυτοσχεδιάζει, και το ρεφραίν παίζεται από όλη την ορχήστρα.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=bIUyrjpePhs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/bIUyrjpePhs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ταχμίλα Σουζνάκ</b>
                                    <span>
                                        Η Ταχμίλα <a href="../maqam/suznak.php">Σουζνάκ</a> (η πιο γνωστή Ταχμίλα), ηχογραφημένη από τον Άχμαντ αλ-Χιφνάουι στο <a href="../instr/violin.php">βιολί</a>, Τζορτζ Μισέλ στο <a href="../instr/oud.php">Ούτι</a>, Μαχμούντ Εφφάτ στο <a href="../instr/nay.php">Νάι</a> και Χασάν Ανουάρ στο <a href="../instr/riqq.php">Ρεκ</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=9ZTIzWZrmW4">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/9ZTIzWZrmW4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ταχμίλα Σάμπα</b>
                                    <span>Ο Σύριος βιολιστής Σάμι αλ-Σάουα ηχογράφησε πολλές Ταχμίλα, μεταξύ αυτών η παρούσα Ταχμίλα σε <a href="../maqam/saba.php">Μακάμ Σάμπα</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="darij" class="heading jins text-center full-width">
                        <h3>Το Ντάριτζ</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/darij.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Ντάριτζ</a>
                    </div>
                    <p>
                        Η φόρμα Ντάριτζ (επίσημα λέγεται <em>Σαμάι Ντάριτζ</em>) είναι μία απλή οργανική σύνθεση ονομαζόμενη <a href="../iqaa/samai_darij.php">Ικά Σαμάι Ντάριτζ</a> (3/4). Όπως στις <a href="ottoman.php">Φόρμες Οθωμανικής Ορχηστρικής μουσικής</a>, η σύνθεση Ντάριτζ στηρίζεται σε ένα κύριο Μακάμ από το οποίο παίρνει το όνομά του, ακολουθούμενο από το όνομα του συνθέτη.
                    </p>
                    <p>
                        Οι συνθέσεις <em>Ντάριτζ</em> ήταν διαδεδομένες στον Αραβικό κόσμο πριν τον 20ό αιώνα, αλλά τώρα σπάνια παίζονται ή συνθέτονται.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=n49RxJwqBT4">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/n49RxJwqBT4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ντάριτζ Μπαϊάτι</b>
                                    <span>Η πιο γωστή Ντάριτζ είναι αυτή του Σύριου βιολιστή Σάμι αλ-Σάουα σε μακάμ Μπαϊάτι.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=rK-9pOupq6I">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/rK-9pOupq6I/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ντάριτζ Χιτζάζ</b>
                                    <span>Η πιο γωστή Ντάριτζ είναι αυτή του Σύριου βιολιστή Σάμι αλ-Σάουα σε <a href="../maqam/hijaz.php">Μακάμ Χιτζάζ</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Εξερευνήστε άλλες ομάδες φόρμας:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Φόρμες Φωνητικών Συνθέσεων</a></li>
                        <!-- <li><a href="instr_comp.php">Φόρμες Ορχηστρικών	Συνθέσεων</a></li> -->
                        <li><a href="ottoman.php">Φόρμες Οθωμανικής Ορχηστρικής μουσικής</a></li>
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
