<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "الجيتار الكهربائي";
$page_description = "الآلات الموسيقية العربية";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl instruments-page">

    <?php
      $page = "ar/instr/guitar.php";
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
                        <h1>الجيتار الكهربائي</h1>
                        <h3>ويكتب ايضاً الغيتار</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الآلات</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/guitar.jpg" alt="The Electric Guitar">
                        <span>عمر خورشيد، رائد الجيتار الكهربائي في مصر</span>
                    </div> 

                    <h5>دخل الجيتار الكهربائي على الموسيقى العربية في أواخر الستينات من القرن الماضي، وكان عمر خورشيد (مصر) أحد أهم روادها.
                        تمت إضافة حبسات (اشرطة معدنية بارزة) لبعض آلات الجيتار الكهربائي لتعديلها الى النغم الشرقي (عملاً بطريقة زند 
                        <a href="buzuq.php">البزق</a>
                        ). ولكن في غالب الأحيان استخدمت الآلة كما هي واعتُمد على طريقة العزف عليها لإظهار الطابع العربي.
                        أكثر ما استخدمت الآلة لإصدار النغمات والتآلفات الموسيقية الغربية (ماجور ومينور على سبيل المثال).
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=b9s1GvFSa68">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/b9s1GvFSa68/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>عمر خورشيد</b>
                                    <span>رائد الجيتار الكهربائي في العالم العربي عمر خورشيد في أغنية أم كلثوم اغدا القاك (ألحان محمد عبد الوهاب، ١٩٧١).</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dyCtzKJ9SCY&t=185s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dyCtzKJ9SCY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>مقابلة مع عمر خورشيد</b>
                                    <span>عمر خورشيد في مقابلة عن تجربته مع الجيتار الكهربائي في فرقة أم كلثوم</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <br><h5>إستطلاع الآلات المُشرَّقة الاخرى:</h5>
                    <ul>
                       <li><h5><a href="accordion.php">الأكورديون</a></h5></li>
                        <!--
                       <li><h5><a href="guitar.php">الجيتار الكهربائي</a></h5></li>
                        -->
                       <li><h5><a href="org.php">اورغ السبعينات</a></h5></li>
                       <li><h5><a href="keyboard.php">الكيبورد الشرقي</a></h5></li>
                       <li><h5><a href="piano.php">البيانو</a></h5></li>
                       <li><h5><a href="saxophone.php">الساكسوفون</a></h5></li>
                       <li><h5><a href="trumpet.php">الترومبيت</a></h5></li>
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
