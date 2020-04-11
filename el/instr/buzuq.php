<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Το Μπούζουκ";
$page_description = "Το Μπούζουκ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Παραδοσιακά, Το Ούτι, Το Κανονάκι, Το Νάι, Το Bιολί, Το Μπούζουκ";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "el/instr/buzuq.php";
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
                        <h1>Το Μπούζουκ</h1>
                        <h3>Ένα Μικρό Λαούτο με μακρύ ταστομένο λαιμό</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετήριο Όργανα</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/buzuq.jpg" alt="Το Μπούζουκ">
                        <span>Δύο Μπουζούκ από τον Λίβανο. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/buzuq.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μπούζουκ</a>
                    </div>

                    <p>
                        Το μπούζουκ είναι ένα έγχορδο όργανο από την οικογένεια του <a href="oud.php">ουτιού</a> με μικρότερο σκάφος και μακρύτερο, ταστομένο λαιμό. Σε σχήμα μοιάζει περισσότερο με το Ελληνικό μπουζούκι και το Τουρκικό σάζι.Το μπούζουκ είναι αρχικά ένα λαϊκό όργανο από την Ανατολική Μεσόγειο (Παλαιστίνη, Ιορδανία, Λίβανος και Συρία) το οποίο συνήθως παίζεται μόνο του χωρίς την ύπαρξη άλλων οργάνων. Παρόλαυτα, είναι καταχωρημένο μαζί με τα άλλα παραδοσιακά όργανα επειδή εισήλθε στην τάση της Αραβικής λαϊκής μουσικής προς τα μέσα του 20ου αιώνα. Από τότε έχει συμπεριληφθεί σε πολλές ηχογραφήσεις και συναυλίες καθώς έγινε μέρος της τυπικής Αραβικής ορχήστρας.
                    </p>
                    <p>
                        Το παραδοσιακό μπούζουκ είχε δύο σετ από μεταλλικές χορδές, μία διπλή κουρδισμένη σε Ντο4 και μία τριπλή σε Σολ4, και παιζόταν με πένα από ένα λεπτό κομμάτι κεράτινο ή πλαστικό. Σήμερα το μπούζουκ φτιάχνεται με τρία σετ χορδών για μεγαλύτερη έκταση. Οι μεταλλικές χορδές, μαζί με τα κλειδιά  (πανομοιότυπα με αυτά της κιθάρας) δίνουν στο όργανο ένα φωτεινό ήχο, καθώς η διάταξη των μπερντέδων καλύπτει τα πιο κοινά μικροδιαστήματα. Λόγω του ότι οι μερντέδες μπορούν να μετακινηθούν, αυτό επιτρέπει στο όργανο να αποδώσει τα πιο κοινά <a href="../maqam.php">μακάμ</a> με ικανοποιητική ακρίβεια.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=isAhZyRcA0M&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/isAhZyRcA0M/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Μουχαιντίν Μπαγιούν</b>
                                    <span>Ο Λιβανέζος τραγουδιστής και μπουζουκτσής Μουχαιντίν Μπαγιούν παίζει <a href="../form/improv.php#taqsim">τακασίμ</a> σε <a href="../maqam/bayati.php">Μακάμ Μπαϊάτι</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=jchgR1TiAt0&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/jchgR1TiAt0/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Μοχάμαντ Αμπντέλ Καρίμ</b>
                                    <span>Ο Σύριος μπουζουκτσής Μοχάμαντ Αμπντέλ Καρίμ (ο πρίγκηπας του Μπούζουκ) σε ένα <a href="../form/improv.php#taqsim">τακασίμ</a>. Ο Αμπντέλ Καρίμ έχει αφήσει πολλές ηχογραφήσεις, και το ύφος του είναι γλυκό και στοχαστικό.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TpNCZQguy9k&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TpNCZQguy9k/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Μάταρ Μοχάμαντ</b>
                                    <span>
                                        O Λιβανέζος βιρτουόζος στο μπούζουκ Μάταρ Μοχάμαντ παίζει τακασίμ σε συναυλία. Το <a href="../form/improv.php#taqsim">τακασίμ</a> του Μοχάμαντ κάνει το μπούζουκ τόσο άρτιο στην περιπλοκότητα, τεχνική, ποικίλματα, <a href="../maqam.php">μακάμ</a> και τις μεταφορές τους και έκταση όσο ισχύει και για τα υπόλοιπα όργανα.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IH9ONkilJkE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IH9ONkilJkE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ζόρο Γιούσεφ</b>
                                    <span>O Κούρδο- Λιβανέζος Ζόρο Γιούσεφ παίζει <a href="../form/improv.php#taqsim">τακασίμ</a> σε <a href="../maqam/rast.php">Μακάμ Ραστ</a>, ζωντανά στην Λιβανική τηλεόραση.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dPdFIgFkkog&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dPdFIgFkkog/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Μαρχαμπτέιν</b>
                                    <span>
                                        Η ντίβα του τραγουδιού Σαμπάχ από το Λίβανο τραγουδάει το <strong>Μαρχαμπτέιν</strong> το οποίο συμπεριλαμβάνει μπούζουκ τακασίμ στην ορχήστρα (με μαέστρο τον βιολιστή Αμπούντ Άμπντελ Αλ).
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
                        <li><a href="violin.php">Το Bιολί</a></li>
                    	<!--
                        <li><a href="buzuq.php">Το Μπούζουκ</a></li>
                        -->
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
