<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "الاجناس في المقام";
$page_description = "عالم المقامات الاجناس";
$page_keywords = "جنس, عود ,موسيقى عربية ,قانون, ناي, مقام, آلات, طرب, عالم المقامات";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl jins-page">

    <?php
      $page = "ar/jins.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 order-sm-2">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <?php include($ROOT . 'ar/sidemenu-jins.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9 order-sm-1 ml-auto">
                    
                    <div class="heading text-center jins">
                        <h1>الاجناس</h1>
                        <h3>قطع من ٣، ٤، او٥ علامات موسيقية، تُبنى منها المقامات</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الاجناس</a>
                    <div class="clearfix"></div>
                    
                    <h5>
الجنس هو قطعة موسيقية مستقلة مكونة من ٣، ٤، او٥ علامات موسيقية، تُبنى منها المقامات.
والجنس هو الوحدة النغمية الاساسية في الموسيقى العربية، اذ ان المقامات ليست الا سكك او مسالك لمجموع اجناسها المكونة.
يعرّف الجنس بأبعاده الموسيقية التي لا تتغير في حال تصويره من درجة الى اخرى، وهذه الابعاد تعطي لكل جنس طابعه وشخصيته المميزة. 
                    </h5>
                    <h5>
درجة الركوز في الجنس (تُدعى أيضاً بدرجة القرار) هي العلامة الموسيقية التي تحصل على القسط الاكبر من التكرار أثناء العزف، وهي الدرجة التي يعود اليها اللحن حتى يستقرّ. والقرار يكون عادةً العلامة الاولى في سلّم الجنس.
امّا درجة الحساس فهي الدرجة التي تسبق القرار في في سلّم الجنس.  
ودرجة الغمّاز هي من أكثر العلامات التي يتم تكرارها بعد القرار، وهي اكثر درجة تستعمل لبدء الجنس التالي (خلال عملية الانتقال من جنس الى جنس آخر).
                    </h5>
                    <h5>
حجم الجنس هو عدد الدرجات من القرار الى الغمّاز، وهي العلامات التي تكوّن السلّم الاساسي للجنس.
لكن معظم الاجناس تستعمل في سيرها النغمي علامات خارج السلم الاساسي (كدرجة الحسّاس مثلاً تحت السلم الاساسي، وبضع درجات فوق الغمّاز ايضاً)
وتسمّى امتعة سلّم الجنس.
ويعرف سلّم الجنس الاساسي مع العلامات الاضافية (او الامتعة) بالسلّم المطوّل.
                    </h5>
                    <h5>
فيما يلي تمّ تدوين كل جنس في صفحة منفردة (انظر الى دليل الاجناس)، تتبعها امثلة صوتية تبيّن نغمة الجنس.
اما تدوين الجنس فهو يعتمد على استعمال علامات اكبر حجماً في السلّم الاساسي وعلامات اصغر حجماً خارجه، مع امكانية خيارات متعددة لبعض العلامات خارج السلّم الاساسي في بعض الاجناس.
وتستعمل علامات الزمن الكامل (اي المستديرة) لتبيين درجتي القرار والغمّاز.
                    </h5>
                    <h5>
يمكنكم استطلاع الاجناس فردياً عن طريق دليل الاجناس (المرتب ابجدياً) او عن طريق الجدول ادناه (المرتبة حسب حجم الجنس):
                    </h5>

                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="page-list-header">٣ علامات</div>
                                <ul class="page-list">
                                    <li><a href="jins/mustaar.php">جنس مُستعار</a></li>
                                    <li><a href="jins/sikah.php">جنس سيكاه</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">٤ علامات</div>
                                <ul class="page-list">
                                   <li><a href="jins/bayati.php">جنس بياتي</a></li>
                                   <li><a href="jins/hijaz.php">جنس حجاز</a></li>
                                   <li><a href="jins/hijaz_murassaa.php">جنس حجاز مرصّع</a></li>
                                   <li><a href="jins/kurd.php">جنس كُرد</a></li>
                                   <li><a href="jins/lami.php">جنس لامي</a></li>
                                   <li><a href="jins/upper_ajam.php">جنس عجم اعلى</a></li>
                                   <li><a href="jins/upper_rast.php">جنس راست اعلى</a></li> 
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">٥ علامات</div>
                                <ul class="page-list">
                                    <li><a href="jins/ajam.php">جنس عجم</a></li> 
                                    <li><a href="jins/ajam_murassaa.php">جنس عجم مرصّع</a></li> 
                                    <li><a href="jins/athar_kurd.php">جنس أثر كرد</a></li> 
                                    <li><a href="jins/jiharkah.php">جنس جهاركاه</a></li> 
                                    <li><a href="jins/nahawand.php">جنس نهاوند</a></li> 
                                    <li><a href="jins/nikriz.php">جنس نكريز</a></li> 
                                    <li><a href="jins/rast.php">جنس راست</a></li> 
                                    <li><a href="jins/sazkar.php">جنس سازكار</a></li> 
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <div class="page-list-header">(حجم غير محدّد)</div>
                                <ul class="page-list">
                                    <li><a href="jins/hijazkar.php">جنس حجاز كار</a></li> 
                                    <li><a href="jins/mukhalif_sharqi.php">جنس مخالف شرقي</a></li> 
                                    <li><a href="jins/nahawand_murassaa.php">جنس نهاوند مرصّع</a></li> 
                                    <li><a href="jins/saba.php">جنس صَبا</a></li> 
                                    <li><a href="jins/saba_dalanshin.php">جنس صَبا دَلَنشين</a></li> 
                                    <li><a href="jins/saba_zamzam.php">جنس صَبا زَمزَم</a></li> 
                                    <li><a href="jins/sikah_baladi.php">جنس سيكاه بلدي</a></li> 
                                </ul>
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