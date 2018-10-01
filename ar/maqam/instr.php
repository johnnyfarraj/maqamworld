<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "الآلات الموسيقية العربية";
$page_description = "الآلات الموسيقية العربية";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar"; -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/instr.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 order-sm-2">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل الآلات</a>
                    <?php include($ROOT . 'inc/sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9 order-sm-1 ml-auto">
                    
                    <div class="heading text-center jins">
                        <h1>الآلات الموسيقية العربية</h1>
                        <h3>الآلات التقليدية، الآلات المُشرَّقة وآلات الايقاع</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الآلات</a>
                    <div class="clearfix"></div>
                    
                    <h5 >
تتألف الفرقة الموسيقية العربية التقليدية (المسمّاة بالتخت او التخت الشرقي) عادةً من اربع آلات نغمية وهي 
	<a href="instr/oud.php">العود</a>،
	<a href="instr/qanun.php">القانون</a>،
	<a href="instr/nay.php">الناي</a>،و
	<a href="instr/violin.php">الكمنجة</a>،
وآلة ايقاع واحدة هي
	<a href="instr/riqq.php">الرِقّ</a>.
وفي بعض الحالات يُستبدل او يُزوَّد 
	<a href="instr/riqq.php">الرِقّ</a>
	<a href="instr/tabla.php">بالطبلة</a>
 او
	<a href="instr/daff.php">بالدَفّ</a>،
 ويضاف
	<a href="instr/buzuq.php">البُزُق</a>
  الى الآلات النغمية.
                    </h5>
                    <h5 >
تقسّم الآلات النغمية الى عائلتين من حيث اسلوب عزفها: عائلة السحب (وهي تنتج نغماً متواصلاً) وعائلة النقر (وهي تنقر على الوتر).
 وتقع الكمنجة والناي في عائلة السحب بينما يقع العود والقانون والبزق في عائلة النقر.
وكلٌ من العائلتين تكمّل الاخرى حتى يصبح مجموع الصوت الناتج اكثر غناً واكتمالاً. 
                    </h5>


                    <h5 >
يمكنكم استطلاع المقامات فردياً (عن طريق دليل المقامات) او عائلة بعائلة:  
                    </h5>

	          <ul >
	            <li><h5><a href="maqam/f_bayati.php">عائلة البياتي</a></h5></li>
	            <li><h5><a href="maqam/f_hijaz.php">عائلة الحجاز</a></h5></li>
	            <li><h5><a href="maqam/f_rast.php">عائلة الراست</a></h5></li>
	            <li><h5><a href="maqam/f_sikah.php">عائلة السيكاه</a></h5></li>
	            <li><h5><a href="maqam/f_ajam.php">عائلة العجم</a></h5></li>
	            <li><h5><a href="maqam/f_kurd.php">عائلة الكرد</a></h5></li>
	            <li><h5><a href="maqam/f_nikriz.php">عائلة النكريز</a></h5></li>
	            <li><h5><a href="maqam/f_nahawand.php">عائلة النهاوند</a></h5></li>
	          </ul>
	
	          <h5 >وفيما يلي المقامات المتبقّية التي لا تشارك جنسها الاول مع اي مقامات اخرى، وبذلك فهي لا تنتمي لآي عائلة:</h5>
	
	          <ul >
	            <li><h5><a href="maqam/jiharkah.php">مقام الجهاركاه</a></h5></li>
	            <li><h5><a href="maqam/sikah_baladi.php">مقام السيكاه البلدي</a></h5></li>
	            <li><h5><a href="maqam/saba.php">مقام الصبا</a></h5></li>
	            <li><h5><a href="maqam/saba_zamzam.php">مقام الصبا زمزم</a></h5></li>
	            <li><h5><a href="maqam/lami.php">مقام اللامي</a></h5></li>
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