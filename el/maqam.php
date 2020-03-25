<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Το Αραβικό Μακάμ";
$page_description = "Το Αραβικό Μακάμ";
$page_keywords = "Μακάμ, Γένη, Ρυθμοί, Φόρμες, Mουσικά Όργανα, Δημοσιεύσεις";
$page_language = "el";

include($ROOT . 'inc/head.php');
?>

 <body class="maqams-page">

  <?php
   $page = "fr/maqam.php";
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
            <h3>Ένα σύστημα κλιμάκων, συνήθεις μελωδικές φράσεις, μετατροπιακές πιθανότητες, 
             πρώτυπα διανθισμάτων, και αισθητικές συμβάσεις</h3>
          </div>
          <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Ευρετηρίου των Μακάμ</a>
          <div class="clearfix"></div>

          <div class="text-center mt-2 mb-3">
            <a href="#" class="pronunciation btn btn-default" data-audio="/name/maqam.mp3"><i class="fa fa-fw fa-volume-up"></i> Προφορά του Μακάμ/Μακαμάτ</a>
          </div>

          <p>
           Το Αραβικό Μακάμ (πλ. Μακαμάτ) είναι ένα σύστημα κλιμάκων, σύνηθων μελωδικών φράσεων, μετατροπιακών πιθανοτήτων, 
           τεχνικών διανθισμάτος και συμβάσεων αισθητικής όπου μαζί διαμορφώνουν ένα πλούσιο μελωδικό πλαίσιο δράσης 
           και παράδοση στην καλλιτεχνία.
           Οι μελωδική ανάπτυξη των μακάμ (τόσο στην σύνθεση όσο και στον αυτοσχεδιασμό) 
           μέσα σε αυτό το πλαίσιο λέγεται <em>Σάιερ</em>. 
         </p>

          <p>
           Κάθε Μακάμ μπορεί να χτιστεί συνδυάζοντας δύο (ή σε μερικές περιπτώσεις) μέρη κλιμάκων ή χτίζοντας 
           υπομονάδες (τετράχορδα) οι οποίες λέγονται Ζινς (πλ. Αζνάς). 
           Το Μακάμ λαμβάνει τα διαστήματά του, μελωδική συμπεριφορά και γενική διάθεση από αυτά τα Αζνάς. 
           Το πρώτο Ζινς ξεκινάει το μακάμ με την τονική στην πρώτη στην 1η βαθμίδα, και το δεύτερο Ζινς ξεκινάει 
           στο γάμμαζ (σημείο που επίκειται μετατροπία) το οποίο συνήθως βρίσκεται στην τελευταία νότα του πρώτου Τζινς. 
           Εάν ένα τρίτο Ζινς χρησιμοποιείται, τότε η τονική του συμπίπτει με την βαθμίδα γάμμαζ του δεύτερου Ζινς, 
           και πάει λέγοντας. Η νότα αμέσως κάτω της τονικής λέγεται νότα οδηγός. 

           Chaque gamme de maqam peut être construite en mettant ensemble deux (ou dans certains cas trois) fragments de gamme ou morceaux de construction appelés <a href="jins.php">jins</a> (<em>ajnas</em> au pluriel). Le <em>maqam</em> reçoit ses intervalles, son comportement mélodique et son ethos en fonction des <em>ajnas</em> qui le constituent. Le premier <em>jins</em> débute toujours la gamme du <em>maqam</em> par la tonique sur le 1er degré, et le deuxième <em>jins</em> débute au <em>ghammaz</em> (le point de modulation) du premier <em>jins</em> (généralement sa dernière note). Si un troisième <em>jins</em> est utilisé, sa tonique coïncide avec le <em>ghammaz</em> du deuxième <em>jins</em>, et ainsi de suite. La note précédant directement la tonique est appelée la sensible.</p>

          <p>Traditionnellement, chaque <em>maqam</em> est basé sur une gamme. La première note de la gamme est appelée la tonique. Les gammes de <em>maqam</em> sont généralement faite de 7 notes qui se répètent à l'octave supérieure, même si certaines gammes de <em>maqam</em> ont des fois 8 notes ou plus. De plus, quelques gammes de <em>maqam</em> n'ont pas d'équivalence d'octave à la 8<sup>ième</sup> note.</p>

          <p>Selon la tradition, les <em>maqams</em> sont classés en familles, cette classification étant basée sur le partage du premier <em>jins</em> (<em>jins</em> de base). Le <em>jins</em> de base joue le plus grand rôle quand il s'agit de définir le caractère du <em>maqam</em>. Le <em>maqam</em> le plus commun de la branche partage généralement son nom avec le <em>jins</em> de base. Les autres <em>maqams</em> de la famille sont appelés des <em>maqams</em> de la branche et sont construits en utilisant un autre <em>jins</em> secondaire.</p>

          <p>Vous pouvez commencer à explorer les <em>maqams</em> par famille, ou en utilisant l'<strong></strong>Index des Maqams.</p>

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

          <p>Quelques maqams no partagent leur premier jins avec aucun autre maqam, et par conséquent n'appartiennent à aucune famille. Ce sont les suivants: </p>

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
