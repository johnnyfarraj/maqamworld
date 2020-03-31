<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Φόρμες Αυτοσχεδιασμού";
$page_description = "Aραβικές Φόρμες Αυτοσχεδιασμού";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις, Το Ούτι, Το Κανονάκι, Το Νάι, Το Τακσίμ, Λαγιάλι, To Μαουάλ και H Κασίντα";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "el/form/improv.php";
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
                        <h1>Φόρμες Αυτοσχεδιασμού</h1>
                        <h3>Το Τακσίμ, Το Μαουάλ, Τα Λαγιάλι και H Κασίντα</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Φόρμες</a>
                    <div class="clearfix"></div>

                    <p>
                        Οι φόρμες του αυτοσχεδιασμού είναι το πιο άμεσο όχημα για να έναν mutrib, μούτριμπ (τραγουδιστή) ή έναν οργανοπαίχτη με σκοπό να συνδεθεί με το κοινό του καθώς αναπτύσσουν και δουλέυουν πάνω σε sayr ενός <a href="../maqam.php">μακάμ</a>.
                    </p>

                    <div id="layali" class="heading jins text-center full-width">
                        <h3>Τα Λαγιάλι</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/layali.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Λαγιάλι</a>
                    </div>
                    <p>
                        Τα Λαγιάλι είναι ένας σόλο φωνητικός αυτοσχεδιασμός πάνω στην φράση “Για λέιλ Υα Αΐν”, (Ω Νύχτα, Ω Μάτι), όπου “Λαγιάλι” είναι ο πληθυντικός της λέξης “Λέιλ” στα Αραβικά. Αυτή είναι μία φράση κατά παράδοση που δεν χρησιμοποιείται με την κυριολεκτική της σημασία πια, αλλά έχει γίνει περισσότερο ως φωνητικό γέμισμα και όχημα για φωνητικά διανθίσματα.
                    </p>
                    <p>
                        Τα Λαγιάλι μπορεί να είναι αυτοτελή αλλά πιο κοινά χρησιμοποιούνται ωας πρελούδιο για την επόμενη φωνητική φόρμα (π.χ. Μαουάλ, Κασίντα, ή ακόμα και <a href="vocal_comp.php">φόρμα φωνητικής σύνθεσης</a>). Σε αυτήν την περίπτωση, υπηρετούν σαν προθέρμανση, και βοηθάνε τον τραγουδιστή να εγκληματιστεί στο <a href="../maqam.php">μακάμ</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=wOlB3-EiweY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/wOlB3-EiweY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ντάουρ Κάντνι ελ-Χάουα</b>
                                    <span>
                                        Η ηχογράφηση του κομματιού φόρμας <a href="vocal_comp.php#dawr">Ντάουρ</a> <strong>Κάντνι ελ-Χάουα</strong> με την Μαρί Τζουμπράν (σε μουσική Μοχάμαντ Οθμάν) αρχίζει με ένα τακσίμ στο <a href="../instr/qanun.php"><a href="../instr/qanun.php">Κανονάκι</a></a> και ακολουθεί Λαγιάλι σε <a href="../maqam/nahawand.php">Μακάμ Ναχαουάντ</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D0DQxDwgDw8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D0DQxDwgDw8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Τακτούκα Λέ Για Μπανάφσεγκ</b>
                                    <span>
                                        Η ηχογράφηση του κομματιού φόρμας <a href="vocal_comp.php#taqtuqa">Τακτούκα</a> Λέ Για Μπανάφσεγκ (σε μουσική Ριάντ Σουνμπάτι) σε ερμηνεία Σάλεχ Αμπντέλ είναι μία μακρυά <a href="../form/vocal_comp.php#wasla">Ουάσλα</a> που αρχίζει με ένα τακσίμ <a href="../instr/oud.php">Ούτι</a>, μετέπειτα href="../form/ottoman.php#samai">Σαμάι</a>, στη συνέχεια τακσίμ <a href="../instr/qanun.php">Κανονάκι</a>, επανεμφάνιση του <em>Τεσλίμ</em> από το href="../form/ottoman.php#samai">Σαμάι</a>, ύστερα ένα Λαγιάλι, κι όλα αυτά σε <a href="../maqam/rast.php">Μακάμ Ραστ</a>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TE7Y7bzgbns">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TE7Y7bzgbns/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Μοχάμαντ Χαΐρι - Λαγιάλι</b>
                                    <span>
                                        Ο Μοχάμαντ Χαΐρι από το Χαλέπι ξεκινάει την Ούασλα του σε <a href="../maqam/rast.php">Μακάμ Ραστ</a> με ένα Λαγιάλι προτού προχωρήσει σε μία <a href="improv.php#qasida">Κασίντα αυτοσχεδιασμού</a>, κι έπειτα σε μερικά τραγούδια <a href="../form/vocal_comp.php#qadd">Κουντούντ</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="mawwal" class="heading jins text-center full-width">
                        <h3>Το Μαουάλ</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/mawwal.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μαουάλ</a>
                    </div>
                    <p>
                         Το Μαουάλ (πλ. Μαουαουίλ) είναι ένας σόλο φωνητικός αυτοσχεδιασμός πάνω σε Αραβικό ποίημα στην καθομιλουμένη. Για παράδειγμα, το ποίημα θα μπορούσε να είναι στην Αιγυπτιακή, Λιβανική, Συριακή ή Ιρακινή διάλεκτο. Όπως και με άλλες φωνητικές αυτοσχεδιαστικές φόρμες, το Μαουάλ είναι ένα όχημα παρουσίασης της ανάπτυξης του μακάμ, όπως επίσης και της ομορφιάς της φωνής του τραγουδιστή και της τεχνικής του στα διανθίσματα.
                    </p>
                    <p>
                        Ένας σημαντικός τύπος Μαουάλ είναι το "Μπαγκντάντι Μαουάλ", λέγεται επίσης και Σαμπάουι (από το Σάμπαα, αριθμό 7) επειδή περιέχει εφτά γραμμές που ομοιοκαταληκτούν ως εξής: A, A, A, B, B, B, A. Το Μπαγκντάντι Μαουάλ είναι πολύ δημοφιλές στο Χαλεπιανό (από το Χαλέπι) ρεπερτόριο, μαζί με τις φόρμες των <a href="../form/vocal_comp.php#muwashah">Μουασαχάτ</a> και των <a href="../form/vocal_comp.php#qadd">Κουντούντ</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zX7gJKlDDyY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zX7gJKlDDyY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Σαντούκ Άννι ελ-Αΐντα</b>
                                    <span>
                                        Ο τραγουδιστής από το Χαλέπι Μοχάμαντ Χαΐρι αρχίζει την <a href="../form/vocal_comp.php#wasla">Ουάσλα</a> του σε <a href="../maqam/bayati.php">Μακάμ Μπαγιάτι</a> με ένα href="../form/ottoman.php#samai">Σαμάι</a> ακολουθούμενο από Μαουάλ <strong>Σαντούκ Άννι ελ-Αΐντα</strong>.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3-6DD0tbYbo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3-6DD0tbYbo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>ΆσκίΛι Μιν ελ-Χάουα</b>
                                    <span>
                                        Μαουάλ <strong>ΆσκίΛι Μιν ελ-Χάουα</strong> σε <a href="../maqam/kurd.php">Μακάμ Κουρντ</a>, απότον Μοχάμαντ Αμπντέλ Ουαχάμπ (1931).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=C4BDAcZTPMs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/C4BDAcZTPMs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Μιν Υούμ Φίργκακ</b>
                                    <span>
                                        Μαουάλ Μπαγκντάντι <strong>Μιν Υούμ Φίργκακ</strong> από τον Σαμπάχ Φαχρί.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>Η Αυτοσχεδιαστική Κασίντα</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qasida.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Κασίντα</a>
                    </div>
                    <p>
                        Η Κασίντα (πλ. <em>Κασάεντ</em>) είναι ένα έμμετρο ποίημα σε κλασσικά Αραβικά. Μπορεί να χρησιμοποιηθεί σε φόρμα σύνθεσης (βλέπε Κασίντα Σύνθεσης) ή, στην προκειμένη την περίπτωση, σε αυτοσχεδιαστική Κασίντα. Η εν λόγω φόρμα είναι πανομοιότυπη με το Μαουάλ στον τρόπο που περιλαμβάνει την ανάπτυξη του μακάμ, και τις ικανότητες και τέχνη του τραγουδιστή.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=GJPYRZwdbhw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/GJPYRZwdbhw/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Για Μαν Γιάρα Άντμουαι</b>
                                    <span>
                                        Η Κασίντα του Μοχάμαντα Χαΐρι <strong>Για Μαν Γιάρα Άντμουαι</strong> σε <a href="../maqam/rast.php">Μακάμ Ραστ</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=U0OWUGYqjZo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/U0OWUGYqjZo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Κουλ Λιλ-Μαλίχα</b>
                                    <span>
                                        H σήμα κατατεθέν Κασίντα του Σαμπάχ Φακρί <strong>Κουλ Λιλ-Μαλίχα</strong> σε <a href="../maqam/huzam.php">Μακάμ Χουζάμ</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqsim" class="heading jins text-center full-width">
                        <h3>Το Τακσίμ</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/taqsim.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Τακσίμ</a>
                    </div>
                    <p> 
                        Το Τακσίμ (πλ.<em>Τακασίμ</em>) είναι αυτοσχεδιασμός σε όργανο καθοδηγούμενος από πλάνο βασισμένο στην παράδοση το οποίο ακολουθεί από πολύ κοντά την <em>ανάπτυξη</em> ενός μακάμ (συμπεριλαμβάνοντας τονισμό, φρασεολογία και μετατροπία). Το Τακσίμ επίσης παρουσιάζει την ομορφιά του οργάνου, τις δυνατότητες του στα διανθίσματα, και τις ικανότητες, τεχνική και προσωπικό ύφος του οργανοπαίχτη.
                    </p>
                    <p>
                        Το Τακσίμ πρέπει να ακολουθεί μία αφηγηματική ροή και να αποτελείται από μέρη ενδιάμεσων καταλήξεων και σύντομες παύσεις. Το Τακσίμ μπορεί να είναι αυτοτελές, ή ενσωματωμένο σε ένα τραγούδι ή <a href="../form/vocal_comp.php#wasla">Ουάσλα</a>.
                    </p>
                    <p>
                        Το πιο δημοφιλές και διαδεδομένο όργανο για τακσίμ είναι το <a href="../instr/oud.php">Ούτι</a>, μαζί με το <a href="../instr/violin.php">βιολί</a>, <a href="../instr/nay.php">Νάι</a> και <a href="../instr/qanun.php">Κανονάκι</a>. Αραβοποιημένα όργανα όπως το <a href="../instr/accordion.php">ακκορντεόν</a>  μπροεί επίσης να χρησιμοποιηθεί για ένα <em>τακσίμ</em>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=-Atnx8aRrIg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/-Atnx8aRrIg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Αμπούντ Άμπντελ Αλ</b>
                                    <span>
                                        Τακσίμ στο <a href="../instr/violin.php">βιολί</a> σε <a href="../maqam/bayati.php">Μακάμ Μπαγιάτι</a> από τον Αμπούντ Άμπντελ Αλ, ακολουθούμενο από href="../form/ottoman.php#samai">Σαμάι</a> Μπαγιάτι “Ιμπραχίμ αλ-Αριάν”.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7iB4JFYArFg">
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
                                        Τακσίμ στο <a href="../instr/oud.php">Ούτι</a> από τον Άμερ Αμούρι (Συρία) σε <a href="../maqam/huzam.php">Μακάμ Χουζάμ</a> κατά την διάρκεια κονσέρτου με τον Σαμπάχ Φακρί.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Εξερευνήστε άλλες ομάδες φόρμας:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Φόρμες Φωνητικών Συνθέσεων</a></li>
                        <li><a href="instr_comp.php">Φόρμες Ορχηστρικών	Συνθέσεων</a></li>
                        <li><a href="ottoman.php">Φόρμες Οθωμανικής Ορχηστρικής μουσικής</a></li>
                        <!-- <li><a href="improv.php">Φόρμες Αυτοσχεδιασμού</a></li> -->
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
