<?php

/* Must be relative path */
include('../../inc/config.php');

$page_title = "القوالب المؤلفة الغنائية";
$page_description = "عالم المقامات القوالب المؤلفة الغنائية";
$page_keywords = "قوالب الموسيقى الغنائية والآلية و المؤلفة والمرتجلة,القوالب الآلية العثمانية, الدور والموشح والقدّ والطقطوقة والأغنية والقصيدة والمونولوج والدويت";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl forms-page">

    <?php
      $page = "ar/form/vocal_comp.php";
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
                        <h1>القوالب المؤلفة الغنائية</h1>
                        <h3>الدور والموشح والقدّ والطقطوقة والأغنية والدور والقصيدة الملحّنة والمونولوج والدويت</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل القوالب</a>
                    <div class="clearfix"></div>

                    <h5>الموسيقى العربية بأغلبها تقاليد غنائية وبالتالي تشكل القوالب المؤلفة الغنائية قَوَامها.</h5>

                    <div id="muwashah" class="heading jins text-center full-width">
                        <h3>الموشح</h3>
                    </div>

                    <h5>الموشح هو أحد القوالب المركّبة فهي تبنى على شعر فصيح من الأندلس
                        (ولذلك تُدعى الموشحات الأندلسية على الرغم من أنها نشأت وازدهرت في سوريا و مصر في القرنين المنصرمين).
                    </h5>
                    <h5>وعادةً ما تُبنى الموشحات على 
                        <a href="../iqaa.php">إيقاعات</a>
                        عرجاء وأكثر تعقيداً كأوزان: ٥/ ٤ و ٧/ ٤ و ٧/ ٨ و ١٠/ ٨ و ١١/ ٨ و ١٣/ ٨ و ١٧/ ٨ و غيرها.
                        وتكون أنغام الموشح متوافقة مع نبضات الإيقاع المبنية عليه. 
                    </h5>
                    <h5>
                        جرت العادة أن يُؤدّي الموشح مطربٌ ومعه فرقة موسيقية تحتوي على جوقة (بطانة)،
                        حيث يكرّر المطرب جملة معينة عدداً من المرات يستعرض في كل مرة منها تغييراً مقامياً أو فكرة مرتجلة، وهذا ما يُدعى بالتفريد.
                        فالمطرب يؤدي التفريد والبطانة تعيد الجملة الأصلية من الموشح ثم يعود المطرب للتفريد وهكذا. 
                    </h5>
                    <br>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=eK6iCYSuaKI">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/eK6iCYSuaKI/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>موشح ملا الكاسات</b>
                                    <span>تسجيل لمحمد خيري في موشح ملا الكاسات من مقام الرست (ألحان محمد عثمان)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=FIbZbvU7UZ8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/FIbZbvU7UZ8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>موشح املالي الأقداح</b>
                                    <span>تسجيل لصباح فخري في موشح املالي الأقداح من مقام البياتي</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=asf278QZx4E">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/asf278QZx4E/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>وصلة موشحات</b>
                                    <span>تسجيل لحسن الحفار في وصلة موشحات من مقام النهاوند</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qadd" class="heading jins text-center full-width">
                        <h3>القدّ</h3>
                    </div>

                    <h5>القدّ هو قالب بسيط من ناحية البنية، ازدهر في حلب. والقدود عادةً تُؤدّى في آخر <a href="#wasla">الوصلة</a>، أي بعد الموشحات والقصائد والدور.
                        أما شعر القدود فهو باللغة الدارجة (العامّية) الحلبية في أغلبها وبعضها باللغة الدارجة المصرية، وتتميّز ببساطتها وخفّتها وسهولة حفظها.
                    </h5>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zX7gJKlDDyY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zX7gJKlDDyY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>وصلة قدود</b>
                                    <span>محمد خيري في وصلة قدود "أول عشرة محبوبي" و "زمان زمان" و "آه يا حلو" تتبع موال سبعاوي (بغدادي) من مقام البياتي.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="dawr" class="heading jins text-center full-width">
                        <h3>الدَّور</h3>
                    </div>

                    <h5>الدور هو قالب مؤَلف غنائي مصري، ازدهر في أواخر القرن التاسع عشر وحتى ثلاثينيات القرن العشرين.
                        والدور صيغة معقّدة في بنيتها وأدائها حيث مثّلت محور الوصلة لفترة طويلة من الزمن. يجدر بالذكر أن شِعر الدور باللغة الدارجة المصرية.
                    </h5>
                    <h5>وللدور نظام في بنيته يبدأ 
                        <a href="instr_comp.php#dulab">بالدولاب</a>
                        تتبعه مقاطع غنائية عديدة ومن ثمّ فقرة "الآهات" حيث يؤدي المطرب والبطانة الأنغام باستبدال كلماتها آهات في صيغة سؤال وجواب.
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=UzVLpFNjsgs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/UzVLpFNjsgs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>دور إنت فاهم</b>
                                    <span>تسجيل لسعاد محمد في دور إنت فاهم (ألحان زكريا أحمد)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=iL71BmxC9Do">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/iL71BmxC9Do/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>دور أحب أشوفك كُل يوم</b>
                                    <span>محمد عبد الوهاب في دور أحب أشوفك كُل يوم (١٩٣١)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IrfNZ3oN0Yg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IrfNZ3oN0Yg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>دور ضيّعت مستقبل حياتي</b>
                                    <span>تسجيل لصباح فخري في دور ضيّعت مستقبل حياتي (ألحان سيّد درويش، ١٩١٤)
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqtuqa" class="heading jins text-center full-width">
                        <h3>الطقطوقة</h3>
                    </div>

                    <h5>الطقطوقة (مفرد جمعه طقاطيق) هي الأغنية التي يبلغ طولها ٣-٤ دقائق وتتكرر فيها عدة مقاطع وفيها بطانة أيضاً.
                        وعادةً ما تستخدم إيقاعات بسيطة 
                        <a href="../iqaa/maqsum.php">كالمقسوم</a>
                        وشعرها ولحنها سهل الحفظ والغناء.
                    </h5>
                    <br>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=uO8eElxaaUY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/uO8eElxaaUY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>طقطوقة حيرانة ليه (١٩٣٠)</b>
                                    <span>تسجيل لليلى مراد في طقطوقة حيرانة ليه  (١٩٣٠) من ألحان داوود حسني</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_UxfjsIe6nI">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_UxfjsIe6nI/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>طقطوقة يا دلع اتدلّع (١٩٧٤)</b>
                                    <span>تسجيل لصباح في طقطوقة يا دلع اتدلّع (ألحان فريد الاطرش)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TEAgQgA_mBA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TEAgQgA_mBA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>طقطوقة مين عذّبك (١٩٣٠)</b>
                                    <span>طقطوقة مين عذّبك ( غناء وتلحين محمد عبد الوهاب، ١٩٣٠)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=a-7eto6cJq8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/a-7eto6cJq8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>ورقو الأصفر</b>
                                    <span>طقطوقة ورقو الأصفر لفيروز (تلحين فيلمون وهبي)
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="ughniya" class="heading jins text-center full-width">
                        <h3>الأغنية</h3>
                    </div>

                    <h5>الأغنية (وتُسمّى ايضاً الأغنية الطويلة) قالَب تطور أواسط القرن العشرين.
                        يمكن أن يبلغ زمن الأغنية الساعة الكاملة في التسجيلات الحية، ولها مقدمات موسيقية طويلة (راجع 
                        <a href="instr_comp.php#muqaddima">المقدمة</a>
                        ) وفيها مقاطع تتكرّر وانتقالات 
                        <a href="../maqam.php">مقامية</a>
                        متنوعة.
                        عادةً ما تُؤدّى الأغنية من قبل فرق موسيقية موسّعة ترافق مطربين كِبار كأم كلثوم وعبد الحليم حافظ ووردة. 
                    </h5> 
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ptd3R51Qj-s&t=723s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ptd3R51Qj-s/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>اغنية قارئة الفنجان (١٩٧٦)</b>
                                    <span>اغنية قارئة الفنجان غناء عبد الحليم حافظ وتلحين محمد الموجي (١٩٧٦)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>القصيدة الملحّنة</h3>
                    </div>
                    <h5>القصيدة في تعريفها الكلاسيكي هي عبارة عن شعر ذي وزن وقافية، وعند تلحينها تصبح قالب القصيدة الموسيقية الملحّنة.
                        وعادةً ما يؤدّي القصيدة مطرب ترافقه فرقة موسيقية. وللقصيدة كقالب موسيقي أن تطول لإظهار براعة المطرب.
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=5z8LvG5tfOE">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/5z8LvG5tfOE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>قصيدة الاطلال (١٩٦٦)</b>
                                    <span>قصيدة الاطلال من نظم الشاعر الطبيب إبراهيم ناجي وغناء ام كلثوم (تلحين رياض السنباطي، ١٩٦٦)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="monologue" class="heading jins text-center full-width">
                        <h3>المونولوج</h3>
                    </div>
                    <h5>المونولوج هو أغنية مبنية على قالَب يشبه قالَب الآريا في الموسيقى الأوبرالية الاوروبية.
                        والمونولوج بالمعنى الحرفي يعني حديث بين شخص ونفسه.
                    </h5>
                    <h5>
                        شاع المونولوج في أواسط القرن العشرين، وعادةً ما يؤدّيه مطرب ترافقه فرقة موسيقية وليس فيه مقاطع تُكرّر
                        وبالتالي فالمونولوج يحوي عدداً كبيراً من الأنغام والجمل الموسيقية يستعرضها المطرب والفرقة من بداية المونولوج حتى نهايته. 
                    </h5>
                    <br>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=r3mrDcKXxd0">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/r3mrDcKXxd0/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>مونولوج يا طيور (١٩٤١)</b>
                                    <span>يا طيور من اشهر المونولوجات في الموسيقى العربية، غنته اسمهان (من الحان محمد القصبجي ١٩٤١)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="duet" class="heading jins text-center full-width">
                        <h3>الدويت</h3>
                    </div>
                    <h5> الدويت قالَب يُبنى لمطربين اثنين، عادةً مطرب ومطربة يتبادلان الأدوار تارةً ويغنيان معاً تارةً أخرى.
                        شاع الدويت في الأفلام السينمائية والمسرحيات في بدايات القرن العشرين، ولذلك فالشعر في الدويت ذو طبيعة مسرحية، درامية او رومانسية.
                    </h5>
                    <br>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=is-xYmL9YVc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/is-xYmL9YVc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>دويت يا دي النعيم (١٩٣٨)</b>
                                    <span>دويت يا دي النعيم غناء محمد عبد الوهاب وليلى مراد (تلحين محمد عبد الوهاب، من فيلم يحيا الحبّ ١٩٣٨)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=amjqJ_MGg0A">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/amjqJ_MGg0A/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>دويت يا سلام على حبّي وحبّك (١٩٥٧)</b>
                                    <span>دويت يا سلام على حبّي وحبّك غناء فريد الأطرش وشادية (تلحين فريد الأطرش، من فيلم انت حبيبي ١٩٥٧)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="wasla" class="heading jins text-center full-width">
                        <h3>الوصلة</h3>
                    </div>

                    <h5>الوصلة هي نظام يشمل العديد من القوالب الموسيقية وِفق ترتيب معين يجعل منها وحدة متكاملة.
                        وكل وصلة تكون من مقام واحد. وتمتد الوصلة  ٥-١٠ دقائق إن قَصُرت، وحوالي الساعة الكاملة إن طالت. 
                    </h5>
                    <h5>
                        . وعادةً ما تبدأ الوصلة بقوالب بطيئة تُظهر المقام وشخصيته (غالباً قطع آليّة) تليها القوالب الغنائية الأكثر تعقيداً،
                        ويكون ختام الوصلة بقوالب بسيطة وقصيرة، وبذلك تكون الوصلة بمثابة القنطرة التي يكون وسطها هو ذروتها. 
                    </h5>
                    <br>
                        
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D0DQxDwgDw8&t=1103s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D0DQxDwgDw8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>وصلة ليه يا بنفسج (١٩٦١)</b>
                                    <span>وصلة من مقام الراست، غناء المطرب المصري صالح عبد الحيّ.
                                        تبدأ الوصلة بتقسيم على العود، ثم خانة وتسليم من سماعي راست طاطيوس افندي،
                                        ثم تقسيم على الكمنجة تليه ليالي راست يرافقها القانون،
                                        ثم طقطوقة ليه يا بنفسج من الحان رياض السنباطي.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>    
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=W0yIIR0GxDA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/W0yIIR0GxDA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>وصلة عشنا وشفنا</b>
                                    <span>وصلة من مقام الراست، غناء المطرب المصري عبّاس البليدي.
                                        تبدأ الوصلة بتقسيم على العود لجورج ميشيل، ثم خانة وتسليم من سماعي راست طاطيوس افندي،
                                        ثم تقسيم على الكمنجة لمحمد العقّاد تليه موشح اتاني زماني، يليه تقسيم على القانون لفهمي عوَض،
                                        ثم ليالي واخيراً دور عشنا وشفنا (مقام دلنشين) من الحان محمد عثمان.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div> 

                    <br>
                    <h5>استطلاع القوالب الاخرى:</h5>
                    <ul>
                        <!--
                        <li><h5><a href="vocal_comp.php">القوالب المؤلفة الغنائية</a></h5></li>
                         -->
                        <li><h5><a href="instr_comp.php">القوالب المؤلفة الآلية</a></h5></li>
                        <li><h5><a href="improv.php">القوالب الارتجالية</a></h5></li>
                        <li><h5><a href="ottoman.php">القوالب الآلية العثمانية</a></h5></li>
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
