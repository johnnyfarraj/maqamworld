<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Inside Arabic Music";
$page_description = "Inside Arabic Music";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqaâ€˜, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "fr"; // YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "fr/book.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-9 ml-auto mr-auto">
                    <div class="heading text-center jins">
                        <h1>Inside Arabic Music</h1>
                        <h3>&copy; 2019 Johnny Farraj and Sami Abu Shumays</h3>
                        <h3>Oxford University Press</h3>
                    </div>
                    <div class="clearfix"></div>

                    <p>I am happy to announce an upcoming book written by myself (Johnny Farraj) and my friend Sami Abu Shumays (creator of <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>). The upcoming book is entitled <strong>INSIDE ARABIC MUSIC</strong>, and is expected to be published by <a href="http://oup.com" target="_blank">Oxford University Press</a> around February 2019. This book will be a comprehensive reference on Arabic Music and this website will act like its companion. The book project was the recipient of a 2012 grant from <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target="_blank">The Arab Fund For Arts and Culture</a>.
                    </p>
                    <p> I will post more information about the book as it becomes available in early 2019.</p>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'fr/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>