<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "الايقاعات العربية";
$page_description = "عالم المقامات الايقاعات العربية";
$page_keywords = "عود ,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa.php";
      include($ROOT . 'inc/menu.php');
    ?>
    
    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3 order-sm-2">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <?php include($ROOT . 'ar/sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9 order-sm-1 ml-auto">
                    
                    <div class="heading text-center jins">
                        <h1>الايقاعات</h1>
                        <h3>ضربات تكرارية من  صوتيّ الدُمّ والتَكّ الاساسييين</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>
                    
                    <h5>
تتألف الايقاعات العربية من ضربات لها ترتيب زمني معين، تشكّل طقماً تكرارياً (يسمّى ايضاً بالمازورة).
وتتآلف ضربات الايقاع من صوتيّ الدُمّ والتَكّ الاساسييين، فصوت الدُمّ عميق وممتدّ زمنياً الى حد ما ويمثّل الضغط القوي، اما صوت التَكّ فهو حادّ وجافّ ويمثل الضغط الضعيف.
 ويتألف كل طقم ايقاعي من ضربات الدُمّ والتَكّ، تتخللهما بعص الفراغات الزمنية (سكتات)  تُدعى الإِسّ.
                    </h5>
                    <h5>
ويُدوّن كل ايقاع بطقمٍ (مازورة) نموذجية واحدة تُبيّن ضربات الدُمّ والتَكّ والإِسّ. وغالباَ ما تتضمن الاغنية او المعزوفة ايقاعات متعددة بحيث يُستعمل كل ايقاع لعدد معين من المازورات ثم ينتقل الى ايقاعٍ آخر.
                    </h5>
                    <h5>
اما خلال الاداء، فعلى عازف الايقاع ان يزيّن الطقم النموذجي بمزيد من الضربات والزخارف التقليدية، وهو ما يُعرف بالتشكيل
 (اي اعطاء الشكل الكامل). والتشكيل يعتمد على النوع او اللون الموسيقي، وعلى اسلوب التوزيع الآلي
 المرغوب، وعلى امكانيات الآلة الايقاعية نفسها، وعلى الآلات الايقاعية المرافقة -إن وجدت- ، واخيراً على ذوق وخبرة العازف.
                    </h5>
                    <h5>
يعرّف الايقاع، بالاضافة الى اسمه، بوزن او مقياس يُدوَّن في الطقم النموذجي على شكل كُسر،
البسط (جزؤه الأعلى) يدل على عدد الضربات والمقام (جزؤه الأسفل) يدل على طول الضربة الزمني
 (مثلاً ٤ تعني ان كل ضربة تساوي علامة سوداء او ربع علامة مستديرة، و٨ تعني ان كل ضربة تساوي علامة ذات السن).
                    </h5>
                    <h5>
وتتضمن الموسيقى العربية عدداّ كبيراَ من الايقاعات ذات المقاييس المفردة (وهي ما تُعرف بالعرجاء) او المزدوجة. 
وتستعمل المقاييس الصغيرة (مثلاّ ٢/٤، ٣/٤، ٤/٤، ٦/٤ او ٨/٤) في الموسيقى الفولكلورية، والموسيقى الطربية من القرن العشرين، والموسيقى الشائعة المعاصرة.
اما الايقاعات الطويلة (مثلاّ ٧/٨، ٩/٨، ١٠/٨ حتى ٣٢/٨) فهي غالباً ما تستعمل في قالب 
<a href="form/vocal_comp.php#muwashah">الموشحات</a>.
                        <br>
                        دمّ تكّ إسّ
                    </h5>
                    <h5>
يمكنكم استطلاع الايقاعات فردياً عن طريق دليل الايقاعات (المرتب ابجدياً) او عن طريق الجدول ادناه (المرتب حسب عدد الضربات):
                    </h5>
                    <br>

                    <div class="page-list-area">
                        <div class="row">
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/ayyub.php">ايّوب ٢/٤</a></li>
                                    <li><a href="iqaa/malfuf.php">ملفوف ٢/٤</a></li>
                                    <li><a href="iqaa/fox.php">فوكس ٢/٤</a></li>
                                    <li><a href="iqaa/karachi.php">كراتشي ٢/٤</a></li>
                                    <li><a href="iqaa/fallahi.php">فلّاحي ٢/٤</a></li>
                                    <li><a href="iqaa/wahda_saghira.php">واحدة صغيرة ٢/٤</a></li>
                                    <li><a href="iqaa/samai_darij.php">سماعي دارج ٣/٤</a></li>
                                    <li><a href="iqaa/samai_saraband.php">سماعي سَرَبند ٣/٨</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/maqsum.php">مقسوم ٤/٤</a></li>
                                    <li><a href="iqaa/baladi.php">بلدي ٤/٤</a></li>
                                    <li><a href="iqaa/saidi.php">صعيدي ٤/٤</a></li>
                                    <li><a href="iqaa/wahda.php">واحدة ٤/٤</a></li>
                                    <li><a href="iqaa/wahda_w_nuss.php">واحدة ونصّ ٤/٤</a></li>
                                    <li><a href="iqaa/rumba.php">رومبا ٤/٤</a></li>
                                    <li><a href="iqaa/zaffa.php">زفّة ٤/٤</a></li>
                                    <li><a href="iqaa/hachaa.php">هجع ٤/٤</a></li>
                                    <li><a href="iqaa/katakufti.php">كتاكفتي ٤/٤</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/thurayya.php">ثريّا ٥/٨</a></li>
                                    <li><a href="iqaa/sudasi.php">سُداسي ٦/٤</a></li>
                                    <li><a href="iqaa/yuruk_semai.php">يورك سماعي ٦/٨</a></li>
                                    <li><a href="iqaa/dawr_hindi.php">دور هندي ٧/٨</a></li>
                                    <li><a href="iqaa/nawakht.php">نَواخْت ٧/٤</a></li>
                                    <li><a href="iqaa/masmudi_kabir.php">مصمودي كبير ٨/٤</a></li>
                                    <li><a href="iqaa/ciftetelli.php">شفتتلّي ٨/٤</a></li>
                                    <li><a href="iqaa/wahda_tawila.php">واحدة طويلة ٨/٤</a></li>
                                    <li><a href="iqaa/bambi.php">بَمبي ٨/٤</a></li>
                                    <li><a href="iqaa/aqsaq.php">اقصاق ٩/٨</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="page-list">
                                    <li><a href="iqaa/jurjina.php">جورجينا ١٠/٨</a></li>
                                    <li><a href="iqaa/samai_thaqil.php">سماعي ثقيل ١٠/٨</a></li>
                                    <li><a href="iqaa/awis.php">عويص ١١/٨</a></li>
                                    <li><a href="iqaa/mudawwar.php">مدوَّر ١٢/٤</a></li>
                                    <li><a href="iqaa/dharafat.php">ظرافات ١٣/٨</a></li>
                                    <li><a href="iqaa/murabbaa.php">مربّع ١٣/٤</a></li>
                                    <li><a href="iqaa/muhajjar.php">محجّر ١٤/٤</a></li>
                                    <li><a href="iqaa/mukhammas.php">مخمّس ١٦/٤</a></li>
                                    <li><a href="iqaa/khosh_rang.php">خوش رانك ١٧/٨</a></li>
                                    <li><a href="iqaa/fakhit.php">فاخت ٢٠/٤</a></li>
                                    <li><a href="iqaa/sittatu_ashar.php">ستة عشر مصري ٣٢/٤</a></li>
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