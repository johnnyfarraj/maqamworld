<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "al-Urmawi Scale";
$page_description = "al-Urmawi Scale";
$page_keywords = "arabic, music, arab, world, maqam, jins, ajam ushayran, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="maqams-page">

    <?php
      $page = "pt/maqam/urmawi.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>First Jins from the 22-Note Scale</h1>
                        <h3>Safiy al-Din al-Urmawi's Kirab al-Adwar</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Maqam Index</a>
                    <div class="clearfix"></div>

                      <div class="notation" id="notation1">
                        <img src="/note/maqam/urmawi.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes">Click the notes and hold using the mouse to hear them play.</p>
                    </div>

                    <map name="notemap">
                      <area shape="circle" coords="47,184,13" href="#" alt="A" class="playNote" data-frequency="440" data-parent="#notation1">
                      <area shape="circle" coords="167,174,13" href="#" alt="B" class="playNote" data-frequency="463.54" data-parent="#notation1">
                      <area shape="circle" coords="262,175,13" href="#" alt="G" class="playNote" data-frequency="488.34" data-parent="#notation1">
                      <area shape="circle" coords="335,176,13" href="#" alt="D" class="playNote" data-frequency="495" data-parent="#notation1">
                      <area shape="circle" coords="420,166,13" href="#" alt="H" class="playNote" data-frequency="521.48" data-parent="#notation1">
                      <area shape="circle" coords="508,167,13" href="#" alt="W" class="playNote" data-frequency="549.38" data-parent="#notation1">
                      <area shape="circle" coords="593,167,13" href="#" alt="Z" class="playNote" data-frequency="556.87" data-parent="#notation1">
                      <area shape="circle" coords="642,159,13" href="#" alt="H" class="playNote" data-frequency="586.66" data-parent="#notation1">
		          </map>

                    <p>22-Note Scale from Safiy al-Din al-Urmawi's Kirab al-Adwar (??? year).</p>
                    
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
