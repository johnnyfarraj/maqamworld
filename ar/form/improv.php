<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "القوالب الارتجالية";
$page_description = "عالم المقامات القوالب الارتجالية";
$page_keywords = "قوالب الموسيقى الغنائية والآلية و المؤلفة والمرتجلة, تقسيم ,ليالي ,موّال ,قصيدة مرسلة";
$page_language = "ar"; // en / ar / de  <!-- PUT LAnguage code HERE-->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl forms-page">

    <?php
      $page = "ar/form/improv.php";
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
                        <h1>القوالب الارتجالية</h1>
                        <h3>التقسيم والليالي والمَوّال والقصيدة المرسلة</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل القوالب</a>
                    <div class="clearfix"></div>

                    <h5>تعد القوالب الارتجالية وسيلة المطرب والعازف للتواصل المباشر مع الحضور من خلال استعراض 
                        <a href="../maqam.php">المقام</a>
                        وسيره.
                    </h5>

                    <div id="layali" class="heading jins text-center full-width">
                        <h3>الليالي</h3>
                    </div>
                    <h5>الليالي (جمع مفرده ليل) هي غناء مرتجل يؤديه المطرب بلفظتي يا ليل يا عين،
                        حيث لا تستخدم هذه الألفاظ لمعناها الحرفي وإنما هي وسيلة للمطرب لإظهار مهاراته وفي بعض الأحيان لإكمال الجمل الشعرية.
                    </h5>
                    <h5>
                        ويمكن أن تؤدى الليالي بمفردها أو تكون تمهيداً لقالب يأتي بعدها (
                        <a href="#mawwal">كالموال</a>                        
                        أو
                        <a href="#qasida">القصيدة</a>                        
                        أو 
                        <a href="vocal_comp.php#muwashah">الموشح</a>                        
                        الخ).
                        وفي تلك الحالة تكون الليالي بمثابة تحمية لصوت المطرب وترسيخ للمقام.
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=wOlB3-EiweY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/wOlB3-EiweY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>دور كادني الهوى</b>
                                    <span>تسجيل 
                                        <strong>دور كادني الهوى</strong>
 للمطربة السورية ماري جبران (تلحين محمد عثمان) يبدأ بتقسيم على القانون وتليه ليالي من <a href="../maqam/nahawand.php">مقام النهاوند</a>
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D0DQxDwgDw8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D0DQxDwgDw8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>طقطوقة ليه يا بنفسج</b>
                                    <span>تسجيل
                                        <strong>طقطوقة ليه يا بنفسج</strong>
   للمطرب المصري صالح عبد الحي (من تلحين رياض السنباطي) في قالب وصلة من <a href="../maqam/rast.php">مقام الراست</a> تبدأ بتقسيم على العود،
                                        ثمّ سماعي راست، ثمّ تقسيم على القانون تليه عودة الى تسليم السماعي، ثمّ ليالي. 
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TE7Y7bzgbns">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TE7Y7bzgbns/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>ليالي راست لمحمد خيري</b>
                                    <span>يبدأ المطرب الحلبيّ محمد خيري وصلة من <a href="../maqam/rast.php">مقام الراست</a> بقالب الليالي تتبعه قصيدة مرسلة ثمّ بعض القدود.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="mawwal" class="heading jins text-center full-width">
                        <h3>المَوّال</h3>
                    </div>
                    <h5>الموال (مفرد جمعه مواويل) هو غناء مرتجل يستخدم المطرب فيه شعراً محكياً  (باللغة العامّية)،
                        فيمكن أن يكون الموال باللغة الدارجة المصرية أو اللبنانية أو السورية أو العراقية.
                        وهو مثل باقي القوالب الغنائية المرتجلة وسيلة لاستعراض
                        <a href="../maqam.php">المقام</a>
                        وسيره من جهة،
                        ولإظهار جمال صوت المطرب ومهاراته من جهة ثانية.
                    </h5>
                    <h5>ومن  أكثر المواويل شيوعاً الموال البغدادي أو ما يعرف بالسبعاوي (من كلمة سبعة)
                        لأنه يتألف من سبعة أشطر بحيث يتبع الشطر الأول والثاني والثالث والسابع قافية واحدة
                        والشطر الرابع والخامس والسادس قافية أخرى.
                        وقد شاع غناء هذا النوع من المواويل في حلب جنباً إلى جنب مع 
                        <a href="vocal_comp.php#muwashah">الموشحات</a>                        
                        و
                        <a href="vocal_comp.php#qadd">القدود</a>                        
                        .
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zX7gJKlDDyY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zX7gJKlDDyY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>مَوّال صدّوك عني العدا</b>
                                    <span>يبدأ المطرب الحلبيّ محمد خيري وصلة من <a href="../maqam/bayati.php">مقام البياتي</a> بسماعيّ يليه المَوّال السبعاوي  صدّوك عني العدا.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=8MMxY_CIi_I">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/8MMxY_CIi_I/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>مَوّال اشكي لمين الهوى</b>
                                    <span>مَوّال اشكي لمين الهوى من تلحين وغناء محمد عبد الوهاب سنة ١٩٣١.
		</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=2iMNi2qeA7w">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/2iMNi2qeA7w/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>مَوّال من يوم فرقاك</b>
                                    <span>مَوّال سبعاوي من يوم فرقاك للمطرب السوري صباح فخري.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>القصيدة المرسلة</h3>
                    </div>
                    <h5>يمكن لقصيدة الشعر العربي الفصيح أن تكون قالباً مؤلفاً (راجع صفحة 
                        <a href="vocal_comp.php#qasida">القصيدة المؤلفة</a>
                        ) أو قالباُ مرتجلاً.
                        والقصيدة المرتجلة (وتسمى ايضاً بالمرسلة او غير المقيدة بلحن مؤلف)
                        حالُها حالُ 
                        <a href="#mawwal">الموال</a>                        
                        من حيث استعراضها لسير المقام وإظهارها لمهارات المطرب الصوتية.
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=GJPYRZwdbhw">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/GJPYRZwdbhw/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>قصيدة يا من يرى ادمعي</b>
                                    <span>قصيدة يا من يرى ادمعي من <a href="../maqam/rast.php">مقام الراست</a>، غناء المطرب الحلبي محمد خيري</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=U0OWUGYqjZo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/U0OWUGYqjZo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>قصيدة قل للمليحة</b>
                                <span>قصيدة قل للمليحة من <a href="../maqam/huzam.php">مقام الهزام</a>، غناء المطرب الحلبي صباح فخري</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqsim" class="heading jins text-center full-width">
                        <h3>التقسيم</h3>
                    </div>
                    <h5>التقسيم (مفرد جمعه تقاسيم) هو ارتجال آليّ يتبع سير 
                        <a href="../maqam.php">المقام</a>
                        من حيث مراعاة دوزانه وتقطيع جُمله المألوفة وانتقالاته المعتادة. والتقسيم وسيلة لإظهار جمالية الآلة الموسيقية وخصوصية زخارفها من جهة وأسلوب العازف ومهاراته من جهة أخرى.
                    </h5>
                    <h5>وللتقسيم مسار روائي يتبعه فهو مؤلف من مقاطع مختلفة بينها لحظات صمت.
                        ويمكن للتقسيم أن يكون بمفرده أو جزء من أغنية أو
                        <a href="vocal_comp.php#wasla">وصلة</a>.
                    </h5>
                    <h5>وتعد آلات العود والكمنجة والناي والقانون من أكثر الآلات التي تؤدي التقاسيم،
                        تأتي في الدرجة الثانية الآلات المشرّقة كالأكورديون وغيره.  
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=-Atnx8aRrIg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/-Atnx8aRrIg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>عبّود عبد العال</b>
                                    <span>تقسيم على الكمنجة من <a href="../maqam/bayati.php">مقام البياتي</a> لعبّود عبد العال  (فلسطين - لبنان)،
                                        يسبقه سماعي بياتي لابراهيم العريان (مصر).   
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7iB4JFYArFg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7iB4JFYArFg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>عامر عمّوري</b>
                                    <span> تقسيم على العود من <a href="../maqam/bayati.php">مقام البياتي</a> لعامر عمّوري (سوريا)،
                                        يسبقه سماعي بياتي لابراهيم العريان (مصر).</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <br>
                    <h5>استطلاع القوالب الاخرى:</h5>
                    <ul>
                        <li><h5><a href="vocal_comp.php">القوالب المؤلفة الغنائية</a></h5></li>
                        <li><h5><a href="instr_comp.php">القوالب المؤلفة الآلية</a></h5></li>
                        <li><h5><a href="ottoman.php">القوالب الآلية العثمانية</a></h5></li>
                        <!--
                        <li><h5><a href="improv.php">القوالب الارتجالية</a></h5></li>
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
