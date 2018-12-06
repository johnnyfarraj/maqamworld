<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "قوالب الموسيقى العربية";
$page_description = "عالم المقامات قوالب الموسيقى العربية";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع السماعي, القَدّ , الموَشّح , التحميلة , التقسيم , الوصلة , الأغنية , الطقطوقة , البشرف , المونولوج , الدولاب , الدُويت , الدَور , الدارج , الليالي , اللونجا , الموّال , المقطوعة , القصيدة المُرسلة , القصيدة المُلحّنة 
";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl forms-page">

    <?php
      $page = "ar/forms.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 order-sm-2">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل القوالب</a>
                    <?php include($ROOT . 'ar/sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9 order-sm-1 ml-auto">
                    
                    <div class="heading text-center jins">
                        <h1>القوالب</h1>
                        <h3>قوالب الموسيقى الغنائية والآلية</h3>
                        <h3>قوالب الموسيقى المؤلفة والمرتجلة</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل القوالب</a>
                    <div class="clearfix"></div>

                    <h5>للموسيقى العربية الكلاسيكية (التقليدية) سواء كانت مؤلفة أو مرتجلة قوالب من ناحية البُنية (جمع مفرده قالَب أي صيغة أو تركيب). فالقالب عبارة عن صيغة يبني المؤلف أو العازف عليها اللحن او الاداء الموسيقي، فهي تستخدم في الموسيقى الغنائية والآلية على حدٍ سواء. والقالب يعطي للموسيقي شكلاً يحدد مسار عمله
	الإبداعي ومساراً مُتفقاً عليه من ناحية التركيب.
                    </h5>

                    <h5>وقد قمنا بتبويب القوالب هنا على أساس التصنيف التالي:  غنائية أو آلية، ومؤلفة أو مرتجلة.
                    </h5>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq1.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">القوالب المؤلفة الغنائية</h5>
                                    <p class="card-text">الدور والموشح والقدّ والطقطوقة والأغنية والقصيدة والمونولوج والدويت</p>
                                    <a href="form/vocal_comp.php" class="btn btn-primary">المزيد...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq2.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">القوالب المؤلفة الآلية</h5>
                                    <p class="card-text">الدولاب والمقطوعة والمقدمة والتحميلة والدارج</p>
                                    <a href="form/instr_comp.php" class="btn btn-primary">المزيد...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq3.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">القوالب الآلية العثمانية</h5>
                                    <p class="card-text">السماعي واللونجا والبشرف</p>
                                    <a href="form/ottoman.php" class="btn btn-primary">المزيد...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/riqq4.png" alt="Antique Riqq Pattern">
                                <div class="card-body">
                                    <h5 class="card-title">القوالب الارتجالية</h5>
                                    <p class="card-text">التقسيم والليالي والموّال والقصيدة المرسلة</p>
                                    <a href="form/improv.php" class="btn btn-primary">المزيد...<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

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