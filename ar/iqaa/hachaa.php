<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع هچع ٤/٤";
$page_description = "إيقاع هچع ٤/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/hachaa.php";
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
                        <h1>إيقاع هَچَع ٤/٤</h1>
                        <h3>(يُلفظ هَشَع او هَجَع)</h3>
                        <h3>يأتي ايضاً على وزن ٤/٤ و٦/٤</h3>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/hachaa_4_4.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Hacha‘ in 4/4 is very popular in Sufi music, especially in pieces that only use percussion instruments. Although the 4/4 version is by far the most prevalent, it is an adaptation of a more folkloric <em>iqa‘</em> by the same name in 2/4. A rare adaptation is the 6/4 version used by composer Baligh Hamdi in Umm Kulthum's "Alf Leila w Leila".
					</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/hachaa_4_4/hamza_shakkur.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/hachaa_4_4/hamza_shakkur.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>بحمدك يا الهي</b>
                                    <span>إنشاد الشيخ حمزة شكّور (سوريا)</span>
                                    <span>فرقة الكندي</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/habbush_sub7ana.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>سبحان</b>
                                    <span>إنشاد الشيخ حمزة شكّور (سوريا)</span>
                                    <span>فرقة الكندي</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/il_alb_yi3shaq.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية القلب يعشق كلّ جميل (١٩٦١)</b>
                                    <span>امّ كلثوم</span>
                                    <span>كلمات بيرم التونسي</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/qariat_al_fingan.mp3">
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
                    
                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/qul_lil_maliha_fakhri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>قصيدة قل للمليحة</b>
                                    <span>المطرب الحلبي صباح فخري</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_4_4/tala3a_al_badru.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>انشودة طلع البدر علينا</b>
                                    <span>المنشد الحلبي حسن الحفّار</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Need some kind of divider here -->
                    <br>
                    <div class="heading jins text-center">
                        <h3>الشكل الثاني لإيقاع هچع على وزن ٢/٤</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="notation">
                        <img src="../note/iqaa/hachaa_2_4.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_2_4/3al_maya.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية عالماية</b>
                                    <span>غناء دياب مشهور (سوريا)</span>
                                    <span>(من التراث الشعبي السوري)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Need some kind of divider here -->
                    <br>
                    <div class="heading jins text-center">
                        <h3>الشكل الثالث لإيقاع هچع على وزن ٦/٤</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="notation">
                        <img src="../note/iqaa/hachaa_6_4.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/hachaa_6_4/alf_leila.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الف ليلة وليلة (١٩٦٩)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان بليغ حمدي (مصر)</span>
                                    <span>كلمات مرسي جميل عزيز</span>
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