<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع كراتشي ٢/٤";
$page_description = "إيقاع كراتشي ٢/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/karachi.php";
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
                        <h1>إيقاع كَراتشي ٢/٤</h1>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>
                    
                    <div class="notation">
                        <img src="../note/iqaa/karachi.png" class="img-fluid">
                    </div>
                    
                    <p>Iqa‘ Karachi is another member of the 2/4 <em>iqa‘at</em> family, and as such modulates frequently to and from <a href="malfuf.php">Malfuf</a>. Although short and cyclical, Karachi does not have the rapidity and urgency of <a href="malfuf.php">Malfuf</a> and <a href="ayyub.php">Ayyub</a>; instead it feels lazy and can be played at much slower tempos.</p>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/karachi/dhatul_jamal.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/karachi/dhatul_jamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>قدّ ذات الجمال اخت الهلال</b>
                                    <span>فرقة التراث (حلب)</span>
                                    <span>بقيادة محمد حمّادية</span>
                                    <span><img src="/img/cd.png"> أسطوانة اخت الهلال – مقام الراست</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/karachi/siret_il_hub.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية سيرة الحبّ (١٩٦٤)</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات مرسى جميل عزيز</span>
                                    <span>الحان بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/karachi/darit_il_ayyam_1.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية دارت الايام (١٩٧٠) – المثل الاول</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات مأمون الشناوي</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/karachi/darit_il_ayyam_2.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية دارت الايام (١٩٧٠) – المثل الثاني</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات مأمون الشناوي</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
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