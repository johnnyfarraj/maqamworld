<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "المنشورات";
$page_description = "المنشورات";
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
                        <h1>الإصدارات</h1>
                        <br>
                        <h3>كتاب "في الموسيقى العربية"</h3>
                        <h3>جوني فرّاج وسامي ابو شميس</h3>
                        <h3>دار جامعة اوكسفورد للنشر</h3>
                    </div>
                    <div class="clearfix"></div>

                    <h5>
يسعدنا ان نعلن عن صدور كتابنا بعنوان "في الموسيقى العربية" (تأليف مشترك مع الصديق سامي ابو شميس من موقع 
<a href="http://maqamlessons.com" target="_blank">دروس المقامات</a>).
وقد صدر هذا الكتاب في صيف ٢٠١٩ من
<a href="http://oup.com" target="_blank">دار جامعة اوكسفورد للنشر</a>
 في نيو يورك باللغة الانكليزية.
                    </h5>
                    <h5>سوف يشكل هذا الكتاب مرجعاً شاملاً لموضوعات الموسيقى العربية ويكون موقع عالم المقامات بمثابة موقع مرافق للكتاب، يتضمن بالدرجة الأولى الصور والروابط والامثلة الصوتية.</h5>
                    <h5>لقد تمّ مشروع كتاب "في الموسيقى العربية" بفضل منحة من
<a href="http://arabculturefund.org/grantees/grantee.php?id=333" target=_blank>الصندوق العربي للثقافة والفنون</a>
 (آفاق) سنة ٢٠١٢.
                    </h5>
                    <h5 style="margin-bottom:40px;">يمكنكم ادخال طلب مسبق لشراء هذا الكتاب من موقع 
                        <a href="https://www.amazon.com/Inside-Arabic-Music-Performance-Century/dp/0190658363/ref=sr_1_1" target="_blank">امازون</a>.
                    </h5>
                    
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

    <?php include($ROOT . 'ar/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>
