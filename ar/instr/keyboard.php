<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "الكيبورد الشرقي";
$page_description = "الآلات الموسيقية العربية";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl instruments-page">

    <?php
      $page = "ar/instr/keyboard.php";
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
                        <h1>الكيبورد الشرقي</h1>
                        <h3>أورغ كهربائي مزوّد بأرباع الصوت وايقاعات مبرمجة</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الآلات</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard.jpg" alt="The Oriental Keyboard">
                        <span>كيبورد شرقي من نوع كيترون فيجا.</span>
                    </div>
                    <br>
                    
                    <h5>الكيبورد الشرقي هي الآلة التي خلفت الأورغ، وقد بدأ استخدامه مع نهايات القرن العشرين.
                        ما يُميز الكيبورد قدرته على إصدار أصوات مختلف الآلات العربية التقليدية
                        حيث يستطيع العازف أن يصدر صوت المِجْوِز أو القانون أو الساكسفون من الآلة بضغطة زرّ.
                    </h5>
                    <h5>
                        تقوم مختلف شركات صناعة الكيبوردات (مثلاً رولاند أو ياماها أو جيم أو كاواي أو كورج أو كيترون) بإنتاج آلات شرقية تحتوي موّلد آليّ للإيقاعات تسمح للعازف بإضافة إيقاعات مسجّلة ومبرمجة مُسبقاً إلى اللحن أو التآلف الذي يعزفه. ما جعل الكيبورد الشرقي آلة ذات استخدام كبير وخاصة في موسيقى البوب العربية والموسيقى الراقصة.
                    </h5>

                    <h5>يمكن للكيبورد الشرقي إصدار ربع الصوت من أي من علامات السلم الموسيقي الاثني عشر من خلال الأزرار التي زوّدت بها الآلة.</h5>
                    <br>

                    <div class="image-with-caption">
                        <img src="/instr/keyboard2.jpg" alt="The Oriental Keyboard's Quartertone Buttons">
                        <span>١٢ زراً تسمح بإصدار ربع الصوت من كل درجة في السلم الموسيقي</span>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3YMxXobcrc8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3YMxXobcrc8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>أوعدك</b>
                                    <span>الأوركسترا العربية الوطنية (في الولايات المتحدة الأمريكية) تعزف أغنية سعاد محمد "أوعدك" بتوزيع موسيقي يشمل آلة الكيبورد الشرقي والجيتار الكهربائي بالإضافة للآلات العربية التقليدية.</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=e0aPuIpOAoc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/e0aPuIpOAoc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>شام ستيب (خطوات الشام)</b>
                                <span>قامت فرقة السبعة وأربعين الفلسطينية بإضافة استخدام جديد للكيبورد الشرقي حيث تمكّنت من توظيف تقنيات الآلة لإنتاج نمط موسيقي جديد يُدعى دبكة تكنو، كما في أغنيتهم الشهيرة شام ستيب.</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <br>
                    
                    <h5>إستطلاع الآلات المُشرَّقة الاخرى:</h5>
                    <ul>
                       <li><h5><a href="accordion.php">الأكورديون</a></h5></li>
                       <li><h5><a href="guitar.php">الجيتار الكهربائي</a></h5></li>
                       <li><h5><a href="org.php">اورغ السبعينات</a></h5></li>
                        <!--
                       <li><h5><a href="keyboard.php">الكيبورد الشرقي</a></h5></li>
                        -->
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
