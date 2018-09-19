<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع شفتتلّي ٨/٤";
$page_description = "إيقاع شفتتلّي ٨/٤";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/ciftetelli.php";
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
                        <h1>إيقاع شَفتَتَلّي ٨/٤</h1>
                        <h3>يأتي ايضاً على وزن ٤/٤</h3>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/ciftetelli.png" class="img-fluid">
                    </div>

                    <p>Iqa‘ Ciftetelli is a Turkish usul that became popular in Arabic music.
                    It is rarely used for composed melodies; instead, its primary use is to support <a href="../form/improv.php">improvisations</a> (both vocal and instrumental).</p>
                    
                    <p>Ciftetelli is usually slow paced and stretched out over two 4/4 measures (see notation), and can share the same tempo and pace as <a href="masmudi_kabir.php">Masmudi Kabir</a>. Alternatively, it can be performed faster and lighter,
                    in which case it can be notated in 4/4 and becomes very similar to <a href="wahda_w_nuss.php">Wahda w-Nuss</a> (plus or minus some ornamentation).</p>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/ciftetelli_8_4/ishta2tillak.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/ciftetelli_8_4/ishta2tillak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية اشتقتلّك (١٩٦٢)</b>
                                    <span>غناء والحان فريد الأطرش</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_8_4/jaat_mu3adhibati.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>قصيدة جاءت معذبتي</b>
                                    <span>فاطمة سرحان </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_8_4/layali_3abbas_blaydi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>ليالي من مقام راست</b>
                                    <span>من اغنية عديني يا معدّاوي</span>
                                    <span>غناء عباس البليدي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_8_4/mawwal_khayri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موّال خلٍ سقاني كاسات الصبر</b>
                                    <span>المطرب الحلبي محمد خيري</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_8_4/ya_dala3.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>يا دلع دلّع (١٩٧٤)</b>
                                    <span>غناء صباح (لبنان)</span>
                                    <span>الحان فريد الأطرش</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_8_4/qasida_3ayni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>قصيدة عيني لغير جمالكم</b>
                                    <span>فرقة التراث (حلب)</span>
                                    <span>بقيادة محمد حمّادية</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_8_4/tile3li_el_biki.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية طلع لي البكي</b>
                                    <span>غناء فيروز (لبنان)</span>
                                    <span>الحان فيلمون وهبي (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                                       
                    <!-- Need some kind of divider here -->
                    <br>
                    <div class="heading jins text-center">
                        <h3>امثلة من إيقاع شفتتلّي السريع على وزن ٤/٤</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/aziza.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة عزيزة (١٩٥٥)</b>
                                    <span>الحان محمد عبد الوهاب</span>
                                    <span>من فيلم عزيزة</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/mawwal_khayri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موال يا من بنودك حرير</b>
                                    <span>المطرب الحلبي محمد خيري</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/nura.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية نورا نورا (١٩٥٣)</b>
                                    <span>غناء والحان فريد الأطرش</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/taqsim_nay.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقسيم ناي على مقام بياتي</b>
                                    <span>من وصلة للمطرب محمد خيري</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/tuta.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>مقطوعة توتة</b>
                                    <span>الحان فريد الأطرش</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/ciftetelli_4_4/ya_dara_duri.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية يا دارة دوري فينا</b>
                                    <span>غناء فيروز (لبنان)</span>
                                    <span>الحان فيلمون وهبي (لبنان)</span>
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