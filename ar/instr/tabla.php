<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "الطبلة";
$page_description = "الآلات الموسيقية العربية";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl instruments-page">

    <?php
      $page = "ar/instr/tabla.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 order-sm-2">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل الآلات</a>
                    <?php include($ROOT . 'ar/sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9 order-sm-1 ml-auto">

                    <div class="heading jins text-center">
                        <h1>الطبلة</h1>
                        <h3>وتسمّى ايضاً الدِربكّة</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الآلات</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabla.jpg" alt="The Tabla">
                        <span>طبلة من صنع "جوهرة الفنّ" في مصر، ذات جسم من الالومينيوم ووجه من البلاستيك
			&copy; 
			عالم المقامات.</span>
                    </div>
		<br>

                    <h5>الطبلة آلة ايقاع يصنع جسمها من الفخار على شكل اناء ضيق القطر عند أحد طرفيه، وعريض القطر عند الطرف الآخر.
 يُشدّ على الطرف العريض جلد من السمك او الماعز بواسطة غراء وشبكة من الخيوط المجدولة.
 اما الطبلات الحديثة فيصنع جسمها من الالومينيوم ووجهها من البلاستيك الشفّاف يثبت بواسطة اطار معدني يسمح بشدّه (دوزانه) وتغييره.
                    </h5>
                    <h5>الطبلة آلة واسعة الانتشار في الموسيقى الفولكلورية وموسيقى البوب وخاصةً في موسيقى الرقص الشرقي، وتستعمل الى حد ما في الموسيقى الكلاسيكية وموسيقى الطرب.
		</h5>
		<br>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dpSa2SEnFh8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dpSa2SEnFh8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>حُسام رمزي</b>
                                    <span>عازف الايقاع المصري حُسام رمزي يتحدث عن آلة الطبلة في مقابلة ضمن معرض للموسيقى سنة ٢٠١٣</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=KmnkOfE6G58">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/KmnkOfE6G58/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>سعيد الارتيست</b>
                                    <span>عازف الايقاع المصري سعيد الارتيست مع فرقته على خشبة مسرح الجنينة في قلب مصر القديمة</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
		<h5>إستطلاع آلات الايقاع الاخرى:</h5>
                    <ul>
                        <li><h5><a href="riqq.php">الرقّ</a></h5></li>
                        <!--
                        <li><h5><a href="tabla.php">الطبلة</a></h5></li>
                        -->
                        <li><h5><a href="tabl_baladi.php">الطبل البلدي</a></h5></li>
                        <li><h5><a href="daff.php">الدفّ</a></h5></li>
                        <li><h5><a href="mazhar.php">المزهر</a></h5></li>
                        <li><h5><a href="katim.php">الكاتم</a></h5></li>
                        <li><h5><a href="sagat.php">الصاجات</a></h5></li>                  
                   </ul>

                </div>
                <div class="col-sm-12 order-sm-3">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'ar/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
