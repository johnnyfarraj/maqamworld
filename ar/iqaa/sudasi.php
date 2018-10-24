<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع سداسي ٦/٤";
$page_description = "إيقاع سداسي ٦/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/sudasi.php";
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
                        <h1>إيقاع سُداسي ٦/٤</h1>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/sudasi.png" class="img-fluid">
                    </div>

                    <h5>إيقاع سُداسي هو إيقاع شائع في أغاني رقصات الدبكة، خاصّةً في لبنان وفلسطين.
                    </h5>
                    <h5>يمكن ان ينتقل هذا الإيقاع من والى إيقاعات من وزن ٤/٢ بحيث تستبدل دورة من إيقاع السُداسي بثلاث دورات من <a href="malfuf.php">إيقاع الملفوف</a> مثلاً.
                    </h5>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/sudasi/dal3ona.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/sudasi/dal3ona.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية دلعونا</b>
                                    <span>غناء فيروز (لبنان)</span>
                                    <span>(من التراث الشعبي اللبناني)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sudasi/ya_mahla_layali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا محلا ليالي الهوى (١٩٦٣)</b>
                                    <span>غناء فيروز (لبنان)</span>
                                    <span>كلمات  وألحان الأخوين رحباني</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/sudasi/ya_7ajal_sannin.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>أغنية يا حجل صنّين (١٩٦٥)</b>
                                    <span>غناء فيروز (لبنان)</span>
                                    <span>كلمات  وألحان الأخوين رحباني</span>
                                    <span>من فيلم <strong>بيّاع الخواتم</strong></span>
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