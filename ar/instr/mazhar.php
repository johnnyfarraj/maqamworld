<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "المزهر";
$page_description = "الآلات الموسيقية العربية";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl instruments-page">

    <?php
      $page = "ar/instr/mazhar.php";
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
                        <h1>المزهر</h1>
                        <h3>دفّ كبير وصاخب ذو صاجات</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الآلات</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/egy_mazhar.jpg" alt="Egyptian Mazhar">
                        <span>مزهر مصري ذو وجه بلاستيكي قابل للدوزان. 
                            &copy; 
                            عالم المقامات.</span>
                    </div>

                    <h5>المزهر دفّ صاخب ذو وزن كبير وصاجات معدنية. تم تصميم هذه الآلة للفرق الموسيقية التي تحوي طقم آلات ايقاعية كبير وتحتاج الى صوت عالٍ، كما في فرق الأعراس حيث يكثر عزف ايقاع 
                        <a href = "../iqaa/zaffa.php">الزفّة</a>.
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=RGcnL3QG6DE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/RGcnL3QG6DE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>زفّة (حفلة عرس)</b>
                                    <span>حفلة زفّة مصرية مع عدد كبير من الآلات الايقاعية فيها المزاهر المصرية والطبلات والكواتم وجميعها ذات وجوه بلاستيكية.</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <br>
                    
                    <h5>إستطلاع آلات الايقاع الاخرى:</h5>
                    <ul>
                        <li><h5><a href="riqq.php">الرقّ</a></h5></li>
                        <li><h5><a href="tabla.php">الطبلة</a></h5></li>
                        <li><h5><a href="tabl_baladi.php">الطبل البلدي</a></h5></li>
                        <li><h5><a href="daff.php">الدفّ</a></h5></li>
                        <!--
                        <li><h5><a href="mazhar.php">المزهر</a></h5></li>
                        -->
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
