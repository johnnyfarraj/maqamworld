<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع عويص ١١/٨";
$page_description = "إيقاع عويص ١١/٨";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/awis.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>إيقاع عَوِيص ١١/٨</h1>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/awis.png" class="img-fluid">
                    </div>ا

                                        
                    <h5> إيقاع عَويص غالباً ما يستعمل في<a href="../form/vocal_comp.php#muwashah">قالب الموشح</a>.
                    </h5>
                    <h5>
                    ويمكن ان تبدأ الجملة الغنائية على الضربة الثالثة (التَكّ الاولى) من هذا الإيقاع،
                        كما في موشح "منيتي من رُمتُ قربُه".
                    ويمكن ايضاً ان تبدأ الجملة الغنائية على الضربة الحادية عشرة (التَكّ الاخيرة)
                        كما في موشح "حبّي دعاني للوصال". 
                    </h5>
                    <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/awis/hibbi_da3ani1.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/awis/hibbi_da3ani1.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح حِبّي دعاني للوصال</b>
                                    <span>صباح فخري</span>
                                    <span>الحان سيّد درويش</span>
                                    <span><img src="/img/cd.png"> سلسلة نغم الامس - الجزء الثاني (<a href="../maqam/bayati_shuri.php">مقام بياتي شوري</a>)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/munyati_man_rumtu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح مُنيتي من رُمتُ قُربه</b>
                                    <span>صباح فخري</span>
                                    <span>الحان عمر البطش (حلب)</span>
                                    <span><img src="/img/cd.png"> نغم الامس - الجزء التاسع (<a href="../maqam/rast.php">مقام راست</a>)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/munyati_sidul_milah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح مُنيتي سيد الملاح</b>
                                    <span>(يعزف على إيقاع ١١/٤)</span>
                                    <span>المنشد محمود فارس (حلب)</span>
                                    <span>الحان عمر البطش (حلب)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/awis/ukhfi_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح أخفي الهوى (٢٠١٩)</b>
                                    <span>فرقة التّراث الموسيقيّ العربيّ</span>
                                    <span>تلحين د. هياف ياسين (لبنان)</span>
                                    <span>شعر عمر بن الفارض</span>
                                </div>
                            </label>
                        </div>
                    </div>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>
    
    <?php include($ROOT . 'ar/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    
  </body>
</html>