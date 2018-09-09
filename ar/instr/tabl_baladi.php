<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "الطبل البلدي";
$page_description = "الآلات الموسيقية العربية";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl instruments-page">

    <?php
      $page = "ar/instr/tabl_baladi.php";
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
                        <h1>الطبل البلدي</h1>
                        <h3>يُستعمل في الموسيقى الفولكلورية والدبكات</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الآلات</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/tabl_baladi.jpg" alt="Tabl Baladi">
                        <span>طبل بلدي ذو جلد ماعز.
			 &copy; 
			عالم المقامات.</span>
                    </div>
                    <br>

                    <h5>الطبل البلدي هو طبل كبير الحجم ذو جسم اسطواني خشبي، وجلد سميك مثبت على الجهتين بواسطة اطار خشبي وحبال.
يعلق الطبل على كتف العازف بواسطة حزام ويعزف بعصيين: عصاً عريضة تصدر صوت الدمّ وتضرب باليد اليمنى، وعصاّ رفيعة تصدر صوت التكّ وتضرب باليد اليسرى.
                    </h5>
                    <h5>
والطبل البلدي آلة تناسب الموسيقى الحية المعزوفة في الهواء الطلق بشكل ممتاز، فكلمة بلدي تعني "من القرية"،
 والطبل البلدي يستعمل كثيراً في الاعراس والحفلات وخاصة في الدبكات مع آلات صاخبة كالمزمار.
 ولذلك فالطبل البلدي لا يستعمل لعزف الزخارف الدقيقة او الايقاعات المعقّدة،
 ولكن غالباً ما يستعمل لعزف 
<a href="../iqaa.php">ايقاعات</a>
 بسيطة وراقصة 
<a href="../iqaa/baladi.php">كالبلدي</a>
 و
<a href="../iqaa/saidi.php">الصعيدي</a>
و
<a href="../iqaa/katakufti.php">الكتاكفتي</a>.
                    </h5>
		<br>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D6Ex5WiW6vc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D6Ex5WiW6vc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>طبل بلدي ومزمار</b>
                                    <span>عازف الطبلة اللبناني الارمني ستراك سركيسيان يبدأ الايقاع في اغنية "عالعين موليتين"،
				 ويرافقه الرقّ والطبل البلدي. تسجيل مع فرقة تلفزيون لبنان بقيادة عازف الكمنجة رفيق حبيقة.
			</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <br>
		<h5>إستطلاع آلات الايقاع الاخرى:</h5>
                    <ul>
                        <li><h5><a href="riqq.php">الرقّ</a></h5></li>
                        <li><h5><a href="tabla.php">الطبلة</a></h5></li>
                        <!--
                        <li><h5><a href="tabl_baladi.php">الطبل البلدي</a></h5></li>
                        -->
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
