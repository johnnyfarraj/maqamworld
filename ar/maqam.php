<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "المقامات العربية";
$page_description = "المقامات العربية";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 order-sm-2">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <?php include($ROOT . 'ar/sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9 order-sm-1 ml-auto">
                    
                    <div class="heading text-center jins">
                        <h1>المقامات</h1>
                        <h3>انظمة من سلالم وجُمل موسيقية معتادة وانتقالات مألوفة وزخارف تقليدية وجماليات مُتّبعة</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>
                    
                    <h5 >
المقام العربي هو نظام من سلالم وجُمل موسيقية معتادة وانتقالات مألوفة وزخارف تقليدية وجماليات مُتّبعة ومُتّفق عليها تُكوِّن بمجموعها تقليداً فنياً وتراثاً غنياً. ويُدعى التدرُّج النغمي في سياق المقام ( سواء كان اللحن مؤلفاً او مرتجلاً) بالسير.
                    </h5>
                    <h5 >
يتم بناء سُلّم المقام بربط قطعتين او ثلاثة قطع سُلّمية (تسمّى بالجنس) على شكل سلسلة. وبذلك يكتسب المقام مسافاته وسلوكه النغمي وطبعه العام من الأجناس المكونة له.  يبدأ سُلّم المقام دائماً بالجنس الاول (من درجة القرار، وهي الدرجة الاولى)، ثم يتبعه الجنس الثاني بحيث يقع قراره على غمّاز (نقطة انتقال) الجنس الاول (والغمّاز عادةً ما يكون آخر درجة في سلّم الجنس). واذا استُعمل جنس ثالث فيقع قراره على غمّاز الجنس الثاني، وهكذا دواليك.
                    </h5>
                    <h5 >
يُعرّف ويُدرّس المقام في معظم المراجع الموسيقية ابتداءً من سُلّمه الموسيقي. وتسمّى درجته الاولى بالقرار (حاله حال الجنس) وله درجة تُسمّى بالغمّاز وهي غمّاز الجنس الاول ونقطة انطلاق الجنس الثاني. اما الدرجة الادنى من القرار فتسمّى بالحساس.
                    </h5>
                    <h5 >
وعادةً ما يتألف سلّم المقام من سبع درجات تتكرر ابتداءاً من الدرجة الثامنة التي تسمّى بالجواب، باستثناء بعض المقامات التي تمتد الى ما بعد الدرجة الثامنة، او مقامات اخرى لا تتساوى فيها الدرجات الاولى والثامنة.  
                    </h5>
                    <h5 >
جرت العادة ان تُصنّف المقامات ضمن عائلات مقامية يتشارك أفرادها بالجنس الاول (المسمّى ايضاً بالجذع)، فالجنس الاول يلعب الدور الاكبر في تحديد طابع المقام. وتأخذ العائلة اسمها من الجنس الاول، وعادةً ما يسمّى المقام الاكثر استعمالاً في العائلة بالاسم نفسه، اما بقية المقامات في العائلة فلكلّ منها اسم مختلف، وتعتبر فروعاً.   
                    </h5>
                    <h5 >
يمكنكم استطلاع المقامات فردياً (عن طريق دليل المقامات) أو من خلال العائلة التي تتنمي إليها:  
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
	
	          <h5 >وفيما يلي المقامات المتبقّية التي لا تشترك بجنسها الاول مع اي مقامات اخرى، وبذلك فهي لا تنتمي لأي عائلة مقامية:</h5>
	
	          <ul >
	            <li><h5><a href="maqam/jiharkah.php">مقام جهاركاه</a></h5></li>
	            <li><h5><a href="maqam/sikah_baladi.php">مقام سيكاه بلدي</a></h5></li>
	            <li><h5><a href="maqam/saba.php">مقام صبا</a></h5></li>
	            <li><h5><a href="maqam/saba_zamzam.php">مقام صبا زمزم</a></h5></li>
	            <li><h5><a href="maqam/lami.php">مقام لامي</a></h5></li>
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