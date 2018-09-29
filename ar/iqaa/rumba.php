<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع رومبا ٤/٤";
$page_description = "إيقاع رومبا ٤/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/rumba.php";
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
                        <h1>إيقاع رومبا ٤/٤</h1>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>
                    
                    <div class="notation">
                        <img src="../note/iqaa/rumba.png" class="img-fluid">
                    </div>
                    
                    <h5>إيقاع رومبا مقتبس عن الايقاع الاميركي اللاتيني بالاسم نفسه.
                    </h5>
                    <h5>اصبح هذا الإيقاع دارجاً في بداية الثلاثينات من القرن الماضي وقد استُعمل لاضافة نكهة لاتينية الى التوزيع العربي.
                    </h5>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/rumba/al_fann.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/rumba/al_fann.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية الفنّ (١٩٤٥)</b>
                                    <span>كلمات صالح جودت</span>
                                    <span>غناء والحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/rumba/amal_hayati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية امل حياتي (١٩٦٥) </b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات احمد شفيق كامل</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/rumba/ansak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية انساك ده كلام (١٩٦١)</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات مأمون الشناوى</span>
                                    <span>الحان بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/rumba/ba3id_3annak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية بعيد عنّك (١٩٦٥)</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات الشاعر مأمون الشناوي</span>
                                    <span>الحان بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/rumba/darit_il_ayyam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية دارت الايام (١٩٧٠)</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات مأمون الشناوي</span>
                                    <span>الحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/rumba/qariat_al_fingan.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية قارئة الفنجان (١٩٧٦)</b>
                                    <span>غناء عبد الحليم حافظ (مصر)</span>
                                    <span>كلمات نزار قبّاني (سوريا)</span>
                                    <span>الحان محمد الموجي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/rumba/shu3uri_nahiyetak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية شعوري ناحيتَك (١٩٨١)</b>
                                    <span>غناء وردة الجزائرية</span>
                                    <span>الحان سيّد مكّاوي (مصر)</span>
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