<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "كتاب في الموسيقى العربية";
$page_description = "كتاب في الموسيقى العربية";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl">

    <?php
      $page = "ar/book.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 ml-auto mr-auto">
                    <div class="heading text-center jins">
                        <h1>كتاب "في الموسيقى العربية"</h1>
                        <h3>جوني فرّاج وسامي ابو شميس</h3>
                        <h3>دار جامعة اوكسفورد للنشر</h3>
                    </div>
                    <div class="clearfix"></div>

                    <h5>جنس سيكاه بلدي</h5>
                    <h5>جنس صَبا زَمزَم</h5>
                    <h5>جنس صَبا دَلَنشين</h5>
                    <h5>جنس صَبا</h5>
                    <h5>جنس نهاوند مرصّع</h5>
                    <h5>جنس مخالف شرقي</h5>
                    <h5>جنس حجاز كار</h5>
                    <h5>جنس سازكار</h5>
                    <h5>جنس راست</h5>
                    <h5>جنس نكريز</h5>
                    <h5>جنس نهاوند</h5>
                    <h5>جنس جهاركاه</h5>
                    <h5>جنس أثر كرد</h5>
                    <h5>جنس عجم مرصّع</h5>
                    <h5>جنس عجم</h5>
                    <h5>جنس راست اعلى</h5>
                    <h5>جنس عجم اعلى</h5>
                    <h5>جنس لامي</h5>
                    <h5>جنس كُرد</h5>
                    <h5>جنس حجاز مرصّع</h5>
                    <h5>جنس حجاز</h5>
                    <h5>جنس بياتي</h5>
                    <h5>جنس سيكاه</h5>
                    <h5>جنس مُستعار</h5>
                    <h5>حُسيني</h5>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'ar/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>