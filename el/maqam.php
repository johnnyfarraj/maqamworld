<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Το Αραβικό Μακάμ";
$page_description = "Το Αραβικό Μακάμ";
$page_keywords = "Μακάμ, Τζινς, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

 <body class="maqams-page">

  <?php
   $page = "el/maqam.php";
   include($ROOT . 'inc/menu.php');
  ?>

  <div class="page">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Ευρετηρίου των Μακάμ</a>
          <?php include('sidemenu-maqam.php'); ?>
        </div>
        <div class="col-md-9 col-sm-9">

          <div class="heading text-center jins">
            <h1>Το Αραβικό Μακάμ</h1>
            <h3>Ένα σύστημα κλιμάκων, συνήθων μελωδικών φράσεων,</h3> 
            <h3>μετατροπιακών πιθανοτήτων, πρώτυων διανθισμάτων,</h3> 
            <h3>και αισθητικών κανόνων</h3>
          </div>
          <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετηρίου των Μακάμ</a>
          <div class="clearfix"></div>

          <div class="text-center mt-2 mb-3">
            <a href="#" class="pronunciation btn btn-default" data-audio="/name/maqam.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μακάμ/Μακαμάτ</a>
          </div>

          <p>
           Το Αραβικό Μακάμ (πλ. Μακαμάτ) είναι ένα σύστημα κλιμάκων, σύνηθων μελωδικών φράσεων, μετατροπιακών πιθανοτήτων, τεχνικών διανθισμάτων και κανόνων αισθητικής όπου μαζί διαμορφώνουν ένα πλούσιο μελωδικό πλαίσιο δράσης και παράδοση στην καλλιτεχνία.
           Οι μελωδική ανάπτυξη/πορεία των μακάμ (τόσο στην σύνθεση όσο και στον αυτοσχεδιασμό) 
           μέσα σε αυτό το πλαίσιο λέγεται <em>Σάιερ</em>. 
         </p>

          <p>
           Κάθε Μακάμ μπορεί να χτιστεί συνδυάζοντας δύο (ή σε μερικές περιπτώσεις) μέρη κλιμάκων ή χτίζοντας υπομονάδες (τετράχορδα) οι οποίες λέγονται <a href="jins.php">Τζινς</a> (πλ. <em>Αζνάς</em>). Το Μακάμ λαμβάνει τα διαστήματά του, μελωδική συμπεριφορά και γενική διάθεση από αυτά τα συστατικά Αζνάς. Το πρώτο Τζινς ξεκινάει το μακάμ με την τονική στην πρώτη στην 1η βαθμίδα, και το δεύτερο Τζινς ξεκινάει στο <em>γάμμαζ</em> (σημείο που επίκειται μετατροπία) το οποίο συνήθως βρίσκεται στην τελευταία νότα του πρώτου Τζινς. Εάν ένα τρίτο Τζινς χρησιμοποιείται, τότε η τονική του συμπίπτει με την βαθμίδα <em>γάμμαζ</em> του δεύτερου Τζινς, και πάει λέγοντας. Η νότα αμέσως κάτω της τονικής λέγεται νότα οδηγός.
         </p>

          <p>Παραδοσιακά, κάθε <em>μακάμ</em> βασίζεται σε μία κλίμακα. Η πρώτη νότα στην κλίμακα λέγεται τονική. Οι κλίμακες <em>μακάμ</em> απαρτίζονται συνήθως από 7 νότες που επαναλαμβάνονται στην οκτάβα: παρόλαυτα, κάποιες κλίμακες <em>μακάμ</em> ενδέχεται να επεκτείνουν βαθμίδες πέρα των 8 νοτών. Επιπρόσθετα, μερικές κλίμακες <em>μακάμ</em> δεν επιφέρουν αντιστοιχία οκτάβας στην 8η νότα.
         </p>

          <p>
           Σύμφωνα με την παράδοση, τα μακαμάτ κατηγοριοποιούνται σε οικογένειες βάσει κοινού πρώτου (θεμέλιου) Τζινς. Το θεμέλιο Τζινς παίζει τον μεγαλύτερο ρόλο στον προσδιορισμό του μακάμ. Το πιο κοινό μακάμ σε κάθε παρακλάδι συνήθως μοιράζεται το ονομά του με αυτό του θεμέλιου Τζινς. Τα υπόλοιπα μακαμάτ στην ίδια οικογένεια λέγονται παρακλάδια μακαμάτ, 
           και στηρίζονται στην χρήση διαφορετικού δέυτερου (άνω) Τζινς.
         </p>

          <p>Μπορείτε να εξερευνήσετε τα μακαμάτ κατά οικογένεια, ή ένα τη φορά κάνοντας χρήση του Ευρετηρίου των Μακάμ.</p>

          <ul>
            <li><a href="maqam/f_ajam.php">Οικογένεια Μακάμ Άτζαμ</a></li>
            <li><a href="maqam/f_kurd.php">Οικογένεια Μακάμ Κουρντ</a></li>
            <li><a href="maqam/f_bayati.php">Οικογένεια Μακάμ Μπαϊάτι</a></li>
            <li><a href="maqam/f_nahawand.php">Οικογένεια Μακάμ Ναχαουάντ</a></li>
            <li><a href="maqam/f_nikriz.php">Οικογένεια Μακάμ Νικρίζ</a></li>
            <li><a href="maqam/f_rast.php">Οικογένεια Μακάμ Ραστ</a></li>
            <li><a href="maqam/f_sikah.php">Οικογένεια Μακάμ Σίκα</a></li>
            <li><a href="maqam/f_hijaz.php">Οικογένεια Μακάμ Χιτζάζ</a></li>
          </ul>

          <p>
           Μερικά Μακαμάτ δεν μοιράζονται το πρώτο τους Τζινς με κανένα άλλο και γιαυτό δεν ανήκουν σε καμία οικογένεια. 
           Αυτά είναι:
         </p>

          <ul>
            <li><a href="maqam/lami.php">Μακάμ Λάμι</a></li>
            <li><a href="maqam/saba.php">Μακάμ Σάμπα</a></li>
            <li><a href="maqam/saba_zamzam.php">Μακάμ Σάμπα Ζάμζαμ</a></li>
            <li><a href="maqam/sikah_baladi.php">Μακάμ Σίκα Μπάλαντι</a></li>
            <li><a href="maqam/jiharkah.php">Μακάμ Τζιχάρκα</a></li>
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
