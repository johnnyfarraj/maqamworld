<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Publications";
$page_description = "MaqamWorld Publications - Inside Arabic Music";
$page_keywords = "arabic, music, arab, world, maqam, jins, iqa‘, iqaa, rhythm, oud, qanun, nay, quarter tone, tetrachord, modal, middle east, tarab";
$page_language = "pt"; // en / ar <!-- YOU MUST PUT THIS

include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "pt/book.php";
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

                    <p>I am happy to announce the recent release of my book <strong>Inside Arabic Music</strong> co-authored with my friend Sami Abu Shumays (creator of <a href="http://maqamlessons.com" target="_blank">MaqamLessons</a>).
                    
                    This new book was released by <a href="http://global.oup.com" target="_blank">Oxford University Press</a> in August 2019. The book is a comprehensive reference on Arabic music and MaqamWorld will be its companion website.
                    </p>
                    <p><strong>Inside Arabic Music</strong> was the recipient of a 2012 grant from <a href="http://arabculturefund.org/grantees/grantee.php?id=333" target="_blank">The Arab Fund For Arts and Culture</a>.
                    </p>
                    <p style="margin-bottom:40px;">
                    You can order a copy of <strong>Inside Arabic Music</strong> from <a href="https://www.amazon.com/Inside-Arabic-Music-Performance-Century/dp/0190658363/ref=sr_1_1" target="_blank">Amazon.com</a> or directly from the publisher <a href="https://global.oup.com/academic/product/inside-arabic-music-9780190658366" target="_blank">Oxford University Press</a>.
                    </p>
                    
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <a href="https://www.amazon.com/Inside-Arabic-Music-Performance-Century/dp/0190658363/ref=sr_1_1" target="_blank">
                                <img src="/img/inside_arabic_music_jacket.jpg" alt="Inside Arabic Music" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>
