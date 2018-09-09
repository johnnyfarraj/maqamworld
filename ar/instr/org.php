<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "اورغ السبعينات";
$page_description = "الآلات الموسيقية العربية";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl instruments-page">

    <?php
      $page = "ar/instr/org.php";
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
                        <h1>اورغ السبعينات</h1>
                        <h3>الأورغ الكهربائي الذي اشتهر في السبعينات والمزوّد ببعض أرباع الصوت</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الآلات</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/org.jpg" alt="اورغ السبعينات">
                        <span>رائد الأروغ مجدي الحسيني (مصر)</span>-->
                    </div>

                    <h5>شاع استخدام الأورغ الكهربائي (من كلمة أورغ باللغة الفرنسية) في الموسيقى العربية في فترة نهاية الستينات وحتى السبعينات.
                        وكان رائدها العازف المصري مجدي الحسيني.
                        تم تعديل الآلة لإصدار أرباع الصوت ذات دقة قريبة من تلك التي تصدر عن الأكورديون مما سمح بأدائها لأغلب المقامات العربية.   
                    </h5>
                    <h5>استُخدم الاورغ لإصدار النغمات والتآلفات الموسيقية الغربية. أضاف صوت الأورغ وغيرها من الآلات الغربية كالجيتار الكهربائي طابعا ميّز الموسيقى العربية في تلك الفترة عن غيرها من الفترات الزمنية.
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ptd3R51Qj-s&t=2126">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ptd3R51Qj-s/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>مجدي الحسيني</b>
                                    <span>أغنية عبد الحليم حافظ "قارئة الفنجان" (من ألحان محمد الموجي، ١٩٧٦) بالاشتراك مع عازف الأورغ الكهربائي مجدي الحسيني من الفرقة الماسية.</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dgXdCUH8nxY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dgXdCUH8nxY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>مقابلة مع مجدي الحسيني</b>
                                    <span>مجدي الحسيني في مقابلة عن لقائه مع عبد الحليم حافظ وعن تجربته مع الأورغ الكهربائي في الفرقة الماسية</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <br>
                    
                    <h5>إستطلاع الآلات المُشرَّقة الاخرى:</h5>
                    <ul>
                       <li><h5><a href="accordion.php">الأكورديون</a></h5></li>
                       <li><h5><a href="guitar.php">الجيتار الكهربائي</a></h5></li>
                        <!--
                       <li><h5><a href="org.php">اورغ السبعينات</a></h5></li>
                        -->
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
