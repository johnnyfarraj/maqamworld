<?php

/* Must be relative path */
include('inc/config.php');

/* SEO settings for this page */
$page_title = "Under construction";
$page_description = "The page is under construction. Please check again later.";
$page_keywords = "";
$page_language = "en"; // en / ar <!-- YOU MUST PUT THIS
include($ROOT . 'inc/head.php');
?>

  <body>
    
    <div class="page" style="background:none;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12">
                    <div class="heading">
                        <a href="index.php"><img src="/img/logo.jpg"></a>
                        <h1 style="margin-top:10px;">Under construction</h1>
                        <h3>We are still working on this page, please come back later.</h3>
                    </div>
                    <a href="index.php">Go back to the home page</a>
                </div>
                <!--<div class="col-sm-3">
                    <div class="text-center">
                        <img src="http://placehold.it/160x600" alt="" class="d-none d-sm-block m-auto">
                        <img src="http://placehold.it/300x250" alt="" class="d-block d-sm-none ml-auto mr-auto mt-5">
                    </div>
                </div>-->
            </div>
            <div class="text-center ad-leaderboard">
                <?php include($ROOT . 'inc/768x90.php'); ?>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>