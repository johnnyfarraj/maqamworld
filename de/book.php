<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Inside Arabic Music";
$page_description = "Inside Arabic Music";
$page_keywords = "Maqam-Welt Inside Arabic Music";
$page_language = "de"; // en / ar / de <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "de/book.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 ml-auto mr-auto">
                    <div class="heading text-center jins">
                        <h1>Inside Arabic Music</h1>
                        <h3>&copy; Johnny Farraj und Sami Abu Shumays</h3>
                        <h3>Oxford University Press</h3>
                    </div>
                    <div class="clearfix"></div>

                    <p>Ich freue mich, das Erscheinen eines Buches ankündigen zu können, das ich gemeinsam mit meinem Freund Sami Abu Shumays (Schöpfer von <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>) geschrieben habe.
                        Es trägt den Titel <strong>INSIDE ARABIC MUSIC</strong> und soll bei <a href="http://oup.com" target="_blank">Oxford University Press</a> im Februar 2019 erscheinen.
                    </p>
                    <p>Es handelt sich dabei um ein umfangreiches Nachschlagewerk zur arabischen Musik. Diese Website ist sein Begleiter.</p>
                    <p>Das Buchprojekt wurde vom <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target=_blank>Arab Fund for Arts and Culture</a> gefördert. </p>
                    <p>Ich werde weitere Informationen bereitstellen, sobald das Buch Anfang 2019 verfügbar ist.</p>
                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>