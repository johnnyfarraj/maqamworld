<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "البيانو";
$page_description = "الآلات الموسيقية العربية";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar"; 

include($ROOT . 'inc/head.php');
?>

  <body class="rtl instruments-page">

    <?php
      $page = "ar/instr/piano.php";
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
                        <h1>البيانو</h1>
                        <h3>بيانو يستعمل لعزف 
		                  <a href="../maqam.php">المقامات</a>
                            من دون تآلف (هارموني) </h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الآلات</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/piano.jpg" alt="The Arabic Piano">
                        <span>عارف البيانو اللبناني زياد الرحباني (من ملصق لحفلة في الثمانينات)</span>
                    </div>

                    <h5>دخل البيانو على الموسيقى العربية منذ اوائل القرن العشرين، لكنه استعمل في البداية كآلة غربية  بحتة من اجل اضافة صوت غربي كلاسيكي الى التوزيع العربي
 			(مثلاً في اغنية الصِبا والجمال لمحمد عبد الوهاب من سنة ١٩٣٩).
 			لكن اهتمام هذه الفقرة يقتصر على البيانو الشرقي اي المستعل نغمياً فقط (دون اي تآلف) لعزف المقامات العربية.  
                    </h5>
                    <h5>يعد اللبناني وديع صبرا من اوائل رواد البيانو الشرقي اذ انه عزف على آلة بيانو معدّلة بدرجات اضافية في مؤتمر الموسيقى العربية في القاهرة سنة ١٩٣٢. 
فيما بعد، استعمل عازف البيانو اللبناني عبد الله شاهين آلة بيانو معدّلة بدرجات اضافية، وسجّل اسطوانة عنوانها النغم الخالد تضمّ 
		<a href="../form/improv.php#taqsim">تقاسيم</a>
		 في معظم 
		<a href="../maqam.php">المقامات المعهودة</a>.
                    </h5>
                    <h5>في اواخر القرن العشرين سجّل عازف البيانو والمؤلف والكاتب المسرحي اللبناني زياد الرحباني العديد من الاغاني والمقطوعات الموسيقية
		 على آلة البيانو او البيانو الكهربائي (ماركة فندر رودز) تتضمن انغام من 
		<a href="../maqam.php">المقامات العربية</a>
		 او تآلفات (هارموني) ضمن نوع الجاز الامريكي. 
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=3v9u-h4Vr5A">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/3v9u-h4Vr5A/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>عبد الله شاهين</b>
                                <span>عازف البيانو اللبناني عبد الله شاهين يعزف تقسيم على مقام الصبا تتبعه اغنية "باتت عيوني". (من اسطوانة انغام من الشرق)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=rbzYUIPPk90">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/rbzYUIPPk90/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>زياد الرحباني</b>
                                    <span>عازف البيانو والمؤلف والكاتب المسرحي اللبناني زياد الرحباني في طقطوقة "شو هالايام". (من اسطوانة انا مش كافر ١٩٨٥) 
			</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=BGsD1eZ-PVQ">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/BGsD1eZ-PVQ/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>وقمح</b>
                                <span>مقطوعة "وقمح" من تأليف زياد الرحباني من مقام الحجاز، يستعمل فيها آلة البيانو في توزيع يمزج الموسيقى العربية مع الجاز الامريكي.
				  (من اسطوانة "مش كاين هيك تكون" لفيروز ١٩٨٧) 
			</span>
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
                       <li><h5><a href="keyboard.php">الكيبورد الشرقي</a></h5></li>
                        <!--
                       <li><h5><a href="piano.php">البيانو</a></h5></li>
                        -->
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
