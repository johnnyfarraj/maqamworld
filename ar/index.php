<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "عالم المقامات";
$page_description = "عالم المقامات";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl">

    <?php
      $page = "ar/index.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 ml-auto">
                    <div class="heading">
                        <h1>مرحباً بكم في موقع عالم المقامات الجديد</h1>
                        <h3>عالم المقامات موقع يختص بتعليم المقامات العربية التي هي أساس الموسيقى العربية.
			 يركّز هذا الموقع على موسيقى منطقة شرق المتوسط (مصر وفلسطين ولبنان والأردن وسوريا)،
			 والحقبة الممتدة من بداية القرن العشرين وحتى السبعينات.
		</h3>
                    </div>
                    <h5>بعد ١٧ سنة من العمل، تمّت إعادة بناء موقعنا بفضل منحة من
		<a href="http://arabculturefund.org/indexarabic.php" target=_blank>الصندوق العربي للثقافة والفنون</a>(آفاق).
		</h5>
		<h5>
		 ويتضمّن الموقع الجديد الميزات التالية:
		</h5>
                   <ul>
                        <li><h5>ترجمة كاملة الى اللغات
                            <a href="/en/index.php"><strong>الانكليزية</strong></a>
                            و<a href="/fr/index.php"><strong>الفرنسية</strong></a>
                            و<a href="/de/index.php"><strong>الالمانية</strong></a>
                            و<a href="/it/index.php"><strong>الايطالية</strong></a>
                            و<a href="/el/index.php"><strong>اليونانية</strong></a>
                            و<a href="/es/index.php"><strong>الاسبانية</strong></a>
                            و<a href="/pt/index.php"><strong>البرتغالية</strong></a>
                             .</h5>
                       </li>
                        <li><h5>العرض المريح على جميع قياسات الشاشات</h5></li>
                        <li><h5>بحث</h5></li>
                        <li><h5>محتويات ومواضيع جديدة</h5></li>
                        <li><h5> صور وعينات صوتية اكثر جودة</h5></li>
                        <li><h5>اضافة عدد اكبر من القوائم للتصفّح السريع</h5></li>
                        <li><h5>علامات موسيقية تصدر نغمات عندما يضعط عليها</h5></li>
                        <li><h5>صفحة "اتصلوا بنا"</h5></li>
                    </ul>
	<h5>
يسعدنا ان نعلن عن صدور كتابنا بعنوان
        <a href="book.php">في الموسيقى العربية</a>
 (تأليف مشترك مع الصديق سامي ابو شميس من موقع
 <a href="http://maqamlessons.com" target=_blank>دروس المقامات</a>).
 صدر هذا الكتاب في صيف ٢٠١٩ باللغة الانكليزية من دار جامعة اوكسفورد.
وبذلك يمثل عالم المقامات موقعاً مرافقاً للكتاب حيث يتضمن بالدرجة الأولى الصور والروابط والامثلة الصوتية.
		</h5>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/taoufiq_oud.png" alt="العود العربي">
                                <div class="card-body">
                                    <h5 class="card-title">المقامات</h5>
                                    <p class="card-text">اقرأ عن المقامات، وهي اساس الموسيقى العربية، وتتضمن هذه الصفحات سلالم موسيقية وامثلة صوتية</p>
                                    <a href="maqam.php" class="btn btn-primary">المقامات<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_star.png" alt="العود العربي">
                                <div class="card-body">
                                    <h5 class="card-title">الاجناس</h5>
                                    <p class="card-text">اقرأ عن الاجناس، وهي قطع من ٣، ٤، او٥ علامات موسيقية، تُبنى منها المقامات</p>
                                    <a href="jins.php" class="btn btn-primary">الاجناس<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_round.png" alt="العود العربي">
                                <div class="card-body">
                                    <h5 class="card-title">الايقاعات</h5>
                                    <p class="card-text">اقرأ عن الايقاعات العربية المبنية من ضربتين اساسيتين هما الدُمّ والتَكّ</p>
                                    <a href="iqaa.php" class="btn btn-primary">الايقاعات<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_etching.png" alt="العود العربي">
                                <div class="card-body">
                                    <h5 class="card-title">القوالب</h5>
                                    <p class="card-text">اقرأ عن قوالب الموسيقى العربية، منها الغنائية والآلية، ومنها المؤلفة والمرتجلة</p>
                                    <a href="forms.php" class="btn btn-primary">القوالب<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_names.png" alt="العود العربي">
                                <div class="card-body">
                                    <h5 class="card-title">الآلات</h5>
                                    <p class="card-text">اقرأ عن آلات الطرب التراثية، وعن آلات الأيقاع، والآلات الغربية المُشرّقة</p>
                                    <a href="instr.php" class="btn btn-primary">الآلات<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3">
                            <div class="card">
                                <img class="card-img-top" src="/img/vladimir_tamari.png" alt="العود العربي">
                                <div class="card-body">
                                    <h5 class="card-title">الاصدارات</h5>
                                    <p class="card-text">اقرأ عن كتاب في الموسيقى العربية (تأليف مشترك مع سامي أبو شميس) الذي سيتم إصداره في صيف ٢٠١٩</p>
                                    <a href="book.php" class="btn btn-primary">الاصدارات<i class="fa fa-fw fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <?php include($ROOT . 'inc/768x90.php'); ?>
        </div>
    </div>

    <?php include($ROOT . 'ar/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
  </body>
</html>
