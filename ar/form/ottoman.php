<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "القوالب الآلية العثمانية";
$page_description = "عالم المقامات القوالب الآلية العثمانية";
$page_keywords = "قوالب الموسيقى الغنائية والآلية و المؤلفة والمرتجلة,القوالب الآلية العثمانية, السماعي, اللونجا, البشرف";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl forms-page">

    <?php
      $page = "ar/form/ottoman.php";
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

                    <div class="heading jins text-center">
                        <h1>القوالب الآلية العثمانية</h1>
                        <h3>السماعي واللونجا والبشرف</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل القوالب</a>
                    <div class="clearfix"></div>

                    <h5>دخلت على الموسيقى العربية في القرن التاسع عشر ثلاثة قوالب آلية عثمانية هي السماعي واللونجا والبَشرف،
                        منذ ذلك الحين حتى اليوم وهذه القوالب تُستخدَم بكثرة في موسيقانا وبشكل خاص السماعي حيث ما زال تأليف السماعيات شائعاً بين الموسيقيين العرب.
                    </h5>
                    <h5>تشترك هذه القوالب الثلاثة بأن لها مقطع موسيقي أساسي يُدعى التسليم يتكرر بين المقاطع الأخرى التي تدعى الخانات (جمع مفرده خانة).
                        وكل من هذه القوالب لها مقام أساسي تستعرض سيره وانتقالاته المقامية حيث يدعى كل قالب منها بمقامه يتبعه اسم مؤلفه.
                    </h5>

                    <div id="samai" class="heading jins text-center full-width">
                        <h3>السماعي</h3>
                    </div>
                    <h5>السماعي هو قالب آلي مكون من أربع خانات يُعزف بعد كل منها التسليم ذاته.
                        بنية السماعي هي خانة أولى، تسليم، خانة ثانية، تسليم، خانة ثالثة، تسليم، خانة رابعة، تسليم.
                        وتعزف الخانات الثلاث الأولى و التسليم على إيقاع 
                        <a href="../iqaa/samai_thaqil.php">السماعي الثقيل</a>
                        أما الخانة الرابعة فتكون على إيقاع أقصر 
                        <a href="../iqaa/samai_darij.php">كالسماعي الدارج</a>
                        أو 
                        <a href="../iqaa/samai_saraband.php">السماعي السربند</a>.
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=5s1KylUC9_Q">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/5s1KylUC9_Q/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>سماعي بياتي</b>
                                    <span>سماعي <a href="../maqam/bayati.php">بياتي</a> من تلحين إبراهيم العريان (مصر).<span>
                                    <span> تسجيل فرقة الاذاعة التونسية</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=uNncmnhL05k">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/uNncmnhL05k/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>سماعي حجاز كار كرد</b>
                                    <span>سماعي <a href="../maqam/hijazkar_kurd.php">حجاز كار كُرد</a> من تلحين روحي الخمّاش (فلسطين/العراق).
                                        والخانة الرابعة على إيقاع الجورجينا (١٠/٨) الشائع في العراق.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                 
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IQkQoZcC0jk">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IQkQoZcC0jk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>سماعي كُرد</b>
                                    <span>سماعي <a href="../maqam/kurd.php">كُرد</a> من تلحين عبده داغر (مصر).
                                        ويختلف هذا السماعي قليلاّ عن غيره بأن له مقدّمة ملحنة تسبق الخانة الاولى.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_OZo-QBb6jY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_OZo-QBb6jY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>سماعي راست</b>
                                <span>سماعي <a href="../maqam/rast.php">راست</a> من تلحين جورج ميشيل (مصر).</span>
                                <span>(تسجيل فرقة الاذاعة التونسية)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                   
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=opETYjZGZtM">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/opETYjZGZtM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>سماعي نو اثر</b>
                                    <span>سماعي <a href="../maqam/nawa_athar.php">نَو أثَر</a> من تلحين جميل عويس (سوريا).</span>
                                    <span>(تسجيل من فرقة مجهولة)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="longa" class="heading jins text-center full-width">
                        <h3>اللونجا</h3>
                        <h5>( وتكتب ايضاً اللونجة او اللونغا)</h5>
                    </div>

                    <h5>تحتل اللونجا المرتبة الثانية بعد السماعي من حيث الشيوع.
                        عادة ما تؤلف الخانات على 
                        <a href="../iqaa/fox.php">إيقاع الفوكس</a>                        
                        والتسليم على 
                        <a href="../iqaa/malfuf.php">إيقاع الملفوف</a>                        
                        .
                    </h5>
                    <h5>ألّفت أغلب اللونجات من الفترة العثمانية على مقامات لا تحوي أرباع الصوت
                       <a href="../maqam/nahawand.php">كالنهاوند</a>
                        و<a href="../maqam/hijaz.php">الحجاز</a>
                        و<a href="../maqam/nikriz.php">النكريز</a>
                        ، وألحانها تحاكي الأنغام الأوروبية الشرقية (خاصة منطقة البلقان).
                        وما زال العديد من المؤلفين العرب يتبع الطريقة نفسها في تأليف اللونجات إلى يومنا هذا.                        
                    </h5>
                    <br>
                            
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=JnTGci4VSXo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/JnTGci4VSXo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>لونجا فرحفزا رياض السنباطي</b>
                                    <span>لونجا <a href="../maqam/nahawand.php">فرحفزا (نهاوند)</a> تلحين رياض السنباطي (مصر). تسجيل فرقة سيمون شاهين.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7aVU7mPkCTs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7aVU7mPkCTs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>لونجا عجم عبده داغر</b>
                                    <span>لونجا <a href="../maqam/ajam.php">عجم</a> من تلحين عبده داغر (مصر). تسجيل فرقة عبده داغر.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=oa5fAO1YXSY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/oa5fAO1YXSY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>لونجا نهاوند الفريد جميل</b>
                                    <span>لونجا <a href="../maqam/nahawand.php">نهاوند</a> من تلحين د. الفريد جميل (مصر). تسجيل فرقة عبده داغر.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="bashraf" class="heading jins text-center full-width">
                        <h3>البَشْرَف</h3>
                    </div>

                    <h5>البشرف هو أقل القوالب العثمانية شيوعاً حيث يقتصر ذكره على دروس الموسيقى النظرية أو في سياق التمارين الآلية.
                          والبشرف هو قالب آلي مكون من أربع خانات يُعزف بعد كل منها التسليم ذاته.
                        يجدر الذكر أنه نادراً ما يؤلف الموسيقيون العرب بشارف في أيامنا هذه.
                    </h5>
                    <h5>يُبنى البشرف (على خِلاف السماعي) على إيقاع واحد يشمل القطعة بأكملها،
                        وهو عادة إيقاع مزدوج كالمصمودي الكبير٨/٤ أو المخمس ١٦/٤ أو الشنبر ٢٤/٤ أو الدور الكبير ٢٨/٤ أو إيقاعات أخرى طويلة من الفترة العثمانية.
                    </h5>
                    <br>
                            
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=NmNMjWyhiyE">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/NmNMjWyhiyE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>بشرف فرحفزا</b>
                                    <span>بشرف <a href="../maqam/nahawand.php">فرحفزا (نهاوند)</a> من تلحين إسماعيل حقّي بيك (مؤلف من الفترة العثمانية).
                                    </span>
                                    <span>تسجيل فرقة سيمون شاهين.</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=aZY8TuOB68w">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/aZY8TuOB68w/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>بشرف قره بطك</b>
                                    <span>تسجيل سنة ١٩٢٩ مع سامي الشوا (سوريا) على الكمنجة ومحمد القصبجي (مصر) على العود.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <h5>استطلاع القوالب الاخرى:</h5>
                    <ul>
                        <li><h5><a href="vocal_comp.php">القوالب المؤلفة الغنائية</a></h5></li>
                        <li><h5><a href="instr_comp.php">القوالب المؤلفة الآلية</a></h5></li>
                        <li><h5><a href="improv.php">القوالب الارتجالية</a></h5></li>
                        <!--
                        <li><h5><a href="ottoman.php">القوالب الآلية العثمانية</a></h5></li>
                         -->
                    </ul>

                </div>
                <div class="col-sm-12 order-sm-3">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'inc/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
