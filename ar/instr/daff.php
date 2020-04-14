<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "الدفّ";
$page_description = "الآلات الموسيقية العربية";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl instruments-page">

    <?php
      $page = "ar/instr/daff.php";
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
                        <h1>الدفّ</h1>
                        <h3>ويسمّى ايضاً المزهر في سوريا ومصر والبندير في شمال افريقيا والطار في بلدان اخرى</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الآلات</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/daff.jpg" alt="Daff">
                        <span>ثلاثة دفوف ذات جلد ماعز وجلد غزال. 
                            &copy;
                            عالم المقامات
                        </span>
                    </div>

                    <h5>الدف  آلة إيقاع ذات إطار خشبي دائري يترواح قطره بين ١٢ بوصة للآلات صغيرة الحجم و ٢٤ بوصة أو أكثر للآلات كبيرة الحجم (ذات الصوت العميق)،
                        أما عرضه فيتراوح بين ٤ بوصة للآلات صغيرة الحجم و ٢-٣ بوصة للآلات كبيرة الحجم.
                        عادةً ما يُصنع وجه الدف من جلد الماعز أو الغزلان حيث يثبت بالغراء بشكل لا يمكن معه فكه إلا عند تركيب وجه جديد،
                        أما الدفوف الحديثة فيستخدم لوجوهها جلود بلاستيكية تسمح بدوزان الآلة.
                    </h5>
                    
                    <h5>كثيراً ما تستخدم الدفوف في الموسيقى الدينية (حيث تكون هي الآلة الموسيقية الوحيدة المرافقة للمنشدين)،
                        لكنها تستخدم في الموسيقات التقليدية والشعبية وموسيقى البوب أيضا حيث تضاف إلى طقم الآلات الإيقاعية. 
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=FFViUJriwXE&t=515s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/FFViUJriwXE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>فرقة حسن الحفار</b>
                                    <span>تتألف فرقة المنشد الحلبي حسن الحفار من منشدين وعازفي دفوف، المقطع من حفل موسيقي حيّ في باريس.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ya_3rWXI1is&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ya_3rWXI1is/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>دقّوا المزاهر (١٩٥٢)</b>
                                    <span>فريد الأطرش في أغنية العرس "دقوا المزاهر" (١٩٥٢) وفيها يُعزف على العديد من الدفوف ضمن الاحتفالية.</span>
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
                        <!--
                        <li><h5><a href="daff.php">الدفّ</a></h5></li>
                        -->
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
