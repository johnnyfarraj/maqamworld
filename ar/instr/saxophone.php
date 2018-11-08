<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "الساكسوفون";
$page_description = "الآلات الموسيقية العربية";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl instruments-page">

    <?php
      $page = "ar/instr/trumpet.php";
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
                        <h1>الساكسوفون الشرقي</h1>
                        <h3>آلة ساكسوفون تستعمل لعزف <a href="../maqam.php">المقامات العربية</a></h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الآلات</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/saxophone.jpg" alt="The Saxophone">
                        <span>رائد الساكسوفون الشرقي سمير سرور (مصر)</span>
                    </div>

                    <h5>
الساكسوفون هو آلة نادرة نسبياً في الموسيقى العربية برغم انه يستطيع ان يصدر سلالم 
<a href="../maqam.php">المقامات العربية</a>
 بجودة مقبولة.
ولم يحظ بالشهرة والقبول الذي حظي بهما  
<a href="accordion.php">الاكورديون الشرقي</a>
 مثلاً, انما استُعمل غالباً لاضافة صوت حديث ومجدد الى التوزيع الموسيقي في حقبة الستينات والسبعينات من القرن الماضي. 
                     </h5>
                    <h5>
الرائد الاول لآلة الساكسوفون الشرقي هو المصري سمير سرور الذي استفاد من خبرته السابقة في الموسيقى العسكرية والفرق النحاسية.
وعزف سمير سرور على الساكسوفون الشرقي في عدد لا بأس به من اغاني ام كلثوم ثم سجّل لاحقاً مجموعة من الاسطوانات تحت عنوان "عاشق الساكس". 
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=n_2qIVjgboM">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/n_2qIVjgboM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                <b>حاول تفتكرني (١٩٧٣)</b>
                                <span>اغنية حاول تفتكرني لعبد الحليم حافظ (من الحان بليغ حمدي ١٩٧٣) والمقدمة تبدأ بالاورغ الشرقي ثم الجيتار الكهربائي ثم يأتي عزف منفرد على الساكسوفون لسمير سرور
			</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=tNskrvpodqA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/tNskrvpodqA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>فات الميعاد (١٩٦٧)</b>
                                <span>اغنية فات الميعاد لام كلثوم (من ألحان بليغ حمدي ١٩٦٧) تتضمن في توزيعها الاكورديون الشرقي (فاروق سلامة) والجيتار الكهربائي (عبد الفتّاح خيري) والساكسوفون (سمير سرور).
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
                       <li><h5><a href="piano.php">البيانو</a></h5></li>
                        <!-- 
                       <li><h5><a href="saxophone.php">الساكسوفون</a></h5></li>
                        -->
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
