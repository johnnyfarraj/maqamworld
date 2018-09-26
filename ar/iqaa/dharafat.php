<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع ظرافات ١٣/٨";
$page_description = "إيقاع ظرافات ١٣/٨";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/dharafat.php";
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
                        <h1>إيقاع ظَرافات ١٣/٨</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/dharafat.png" class="img-fluid">
                    </div>

                    <h5>
                    إيقاع ظرافات يستعمل غالباَ في <a href="../form/vocal_comp.php#muwashah">قالب الموشّح</a>، لكنه يستعمل في حالات نادرة خارج هذا القالب (كما في المثلين الاخيرين) حيث يضيف لوناَ تقليدياَ على اغانٍ حديثة من سبعينات القرن الماضي.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/dharafat/tif_ya_durri_alkindi.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/dharafat/tif_ya_durri_alkindi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح طِف يا دُرّي بالقناني</b>
                                    <span>فرقة الكندي</span>
                                    <span>الحان عمر البطش (حلب)</span>
                                    <span><img src="/img/cd.png"> حجرة الموسيقى االحلبية – الجزء الاول (مقام حجازكار كرد)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/dharafat/tif_ya_durri_kaslik.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح طِف يا دُرّي بالقناني</b>
                                    <span>اوريانتاليا</span>
                                    <span>الحان عمر البطش (حلب)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/dharafat/walladhi_wallaka_qalbi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح والّذي ولّاك قلبي</b>
                                    <span>فرقة مّرقس (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/dharafat/il_hobb_kullo.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الحبّ كلّه (١٩٧١)</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات احمد شفيق كامل</span>
                                    <span>الحان بليغ حمدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/dharafat/mistanniyak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية مستنّياك</b>
                                    <span>غناء عزيزة جلال (المغرب)</span>
                                    <span>الحان بليغ حمدي (مصر)</span>
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