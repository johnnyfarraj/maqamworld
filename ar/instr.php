<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "الآلات الموسيقية العربية";
$page_description = "الآلات الموسيقية العربية";
$page_keywords = "موسيقى عربية, مقام, جنس, آلات, طرب, عالم المقامات ,العود, القانون, الناي. الكمان. البُزُق. الاكورديون. الجيتار. اورغ السبعينات. الكيبورد الشرقي. البيانو. الساكسوفون. الترومبيت. الرقّ. الطبلة";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

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
                    <?php include($ROOT . 'ar/sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9 order-sm-1 ml-auto">
                    
                    <div class="heading text-center jins">
                        <h1>الآلات الموسيقية العربية</h1>
                        <h3>الآلات التقليدية، الآلات المُشرَّقة وآلات الايقاع</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الآلات</a>
                    <div class="clearfix"></div>
                    
                    <h5 >
تتألف الفرقة الموسيقية العربية التقليدية (المسمّاة بالتخت وأحياناً التخت الشرقي) عادةً من اربع آلات نغمية وهي 
	<a href="instr/oud.php">العود</a>،
	<a href="instr/qanun.php">القانون</a>،
	<a href="instr/nay.php">الناي</a>،و
	<a href="instr/violin.php">الكمان</a>،
وآلة ايقاع واحدة هي
	<a href="instr/riqq.php">الرِقّ</a>.
وفي بعض الحالات يُستبدل او يُزوَّد الرِقّ
	<a href="instr/tabla.php">بالطبلة</a> او <a href="instr/daff.php">بالدَفّ</a>،
 ويضاف
	<a href="instr/buzuq.php">البُزُق</a>
  الى الآلات النغمية.
                    </h5>
                    <h5 >
يمكن تقسيم الآلات النغمية الى عائلتين من حيث اسلوب عزفها: عائلة السحب (وهي التي تُنتج نغماً متواصلاً) وعائلة النقر (وهي التي تُنقر على الوتر).
وتشمل عائلة السحب آلات الكمان والناي والتشيلو بينما تشمل عائلة النقر آلات العود والقانون والبزق.
 وكلٌ من العائلتين تكمّل الاخرى لكي يكون محصّلة الصوت الناتج اكثر غنىً واكتمالاً. 
                    </h5>
                    <h5 >
امّا الآلات المُشرَّقة، فهي آلات غربية دخلت على فِرق الموسيقى العربية في القرن العشرين وأصبحت جزءاً من صوت الموسيقى العربية في تلك الفترة.
معظم هذه التجارب بدأت في مصر على يد موسيقيين روّاد ابتكروا تقنيات عزف وأساليب زخرفة جديدة أعطت لهذه الآلات طابعاً عربياً.
 وبعض الآلات المُشرَّقة عُدّلت لاضافة عدد من الدرجات الموسيقية مما مكّنها من أداء المقامات العربية بشكل مقبول.
اما بقية الآلات المُشرَّقة فقد استُعملت بسُلّمها الغربي المعدّل (ذات الابعاد المتساوية والدرجات الاثني عشر) من غير أي تعديل. 
مثل آلات <a href="instr/piano.php">البيانو والبيانو الكهربائي</a>
     و<a href="instr/org.php">اورغ السبعينات الكهربائي</a>
     و<a href="instr/keyboard.php">الأورغ الشرقي الحديث</a>
     و<a href="instr/accordion.php">الأكورديون</a>
     و<a href="instr/guitar.php">الجيتار الكهربائي</a> وجيتار الباص الكهربائي.
 ينبغي التنويه أن بعض هذه الآلات تُتيح للعازف مجالا للمناورة بحيث تسمح له بإصدار أرباع الصوت.
 كما نذكر أنه بات من الشائع استخدام آلة الدرامز وآلات الايقاع الكهربائية في موسيقى البوب العربية والموسيقى الراقصة أيضا.
                    </h5>
                    <h5 >
أما بالنسبة لآلات الفلوت والكلارينيت و
	<a href="instr/trumpet.php">الترومبيت</a>،
 فهي لا تتبع نظام الابعاد المتساوية والدرجات الاثني عشر و يمكنها اصدار طيف أوسع من الدرجات الموسيقية
 و كثيرا ما يتم استعمالها في موسيقى الجاز العربي و تجارب المزج الموسيقي.
                    </h5>
                     <h5 >
من الجدير بالذكر كثرة استخدام عائلة الكمان بكل أفرادها من
	<a href="instr/violin.php">كمان</a>
  و فيولا و تشيلو و كونترباص في فرق الموسيقى العربية وخصوصا الفرق الموسّعة
 كفرقة أم كلثوم والفرقة الماسية في مصر مثلا, لكون كل آلة منها ذات زند غير مقسّم مما سمح باستخدامها في أداء أي من مقامات الموسيقى العربية.
                    </h5>
                    <h5 >
                    يمكنكم استطلاع الآلات العربية فردياً (عن طريق دليل الآلات) او عائلة بعائلة:  
                    </h5>

                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/rosette_khalaf.png" alt="Oud Rosette Khalaf">
                                <div class="card-body">
                                    <h5 class="card-title">الآلات التقليدية</h5>
                                    <h5 class="card-text"><a href="instr/oud.php">العود</a></h5>
                                    <h5 class="card-text"><a href="instr/qanun.php">القانون</a></h5>
                                    <h5 class="card-text"><a href="instr/nay.php">الناي</a></h5>
                                    <h5 class="card-text"><a href="instr/violin.php">الكمان</a></h5>
                                    <h5 class="card-text"><a href="instr/buzuq.php">البُزُق</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/nahat_girgi.png" alt="Oud Rosette Nahhat">
                                <div class="card-body">
                                    <h5 class="card-title">الآلات المُشرَّقة</h5>
                                    <h5 class="card-text"><a href="instr/accordion.php">الاكورديون</a></h5>
                                    <h5 class="card-text"><a href="instr/guitar.php">الجيتار الكهربائي</a></h5>
                                    <h5 class="card-text"><a href="instr/org.php">اورغ السبعينات</a></h5>
                                    <h5 class="card-text"><a href="instr/keyboard.php">الكيبورد الشرقي</a></h5>
                                    <h5 class="card-text"><a href="instr/piano.php">البيانو</a></h5>
                                    <h5 class="card-text"><a href="instr/saxophone.php">الساكسوفون</a></h5>
                                    <h5 class="card-text"><a href="instr/trumpet.php">الترومبيت</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                            <div class="card">
                                <img class="card-img-top" src="/img/vergara.png" alt="Oud Rosette Vergara">
                                <div class="card-body">
                                    <h5 class="card-title">آلات الايقاع</h5>
                                    <h5 class="card-text"><a href="instr/riqq.php">الرقّ</a></h5>
                                    <h5 class="card-text"><a href="instr/tabla.php">الطبلة</a></h5>
                                    <h5 class="card-text"><a href="instr/tabl_baladi.php">الطبل البلدي</a></h5>
                                    <h5 class="card-text"><a href="instr/daff.php">الدفّ</a></h5>
                                    <h5 class="card-text"><a href="instr/mazhar.php">المزهر</a></h5>
                                    <h5 class="card-text"><a href="instr/katim.php">الكاتم</a></h5>
                                    <h5 class="card-text"><a href="instr/sagat.php">الصاجات</a></h5>
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