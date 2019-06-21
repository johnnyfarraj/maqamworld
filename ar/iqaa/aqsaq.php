<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع اقصاق ٩/٨";
$page_description = "إيقاع اقصاق ٩/٨";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/aqsaq.php";
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
                        <h1>إيقاع اقْصَاق ٩/٨</h1>
                        <h3>(من كلمة تركية تعني "اعرج")</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>

                    <div class="notation">
                        <img src="../note/iqaa/aqsaq_f1.png" class="img-fluid">
                    </div>

                    <h5>
                    إيقاع اقصاق يُستعمل كثيراً في قالب <a href="../form/vocal_comp.php#muwashah">الموشح</a> الغنائي.
                    وهو يشبه <a href="samai_thaqil.php">إيقاع سماعي ثقيل</a> لكن ينقصه ضربة واحدة من اصل عشرة، ولذا كثيراً ما يأتي هذا الإيقاع من قبل او بعد قطعة من إيقاع سماعي ثقيل بلا توقف العزف، ضمن قالب الوصلة.
					</h5>
					<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/aqsaq_form1/ma_htiyali.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/iqaa/aqsaq_form1/ma_htiyali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشح ما احتيالي</b>
                                    <span>الاب لويس الحاج وعايدة شلهوب (لبنان)</span>
                                    <span><img src="/img/cd.png"> اسطوانة الموشّح - الاغاني العربية الاندلسية</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/ana_min_wajdi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح انا من وجدي انا</b>
                                    <span>عائشة رضوان (المغرب - فرنسا)</span>
                                    <span><img src="/img/cd.png"> اسطوانة مصر</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/jalla_man_bil_husni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح جلّ من بالحسن صوّر</b>
                                    <span>فرقة الموسيقى العربية (مصر)</span>
                                    <span>بقيادة عبد الحليم نويرة (مصر)</span>
                                    <span>الحان كامل الخلعي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/bashraf_bulbul_al_afrah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>بشرف بلبل الافراح</b>
                                    <span>فرقة مُرقس (لبنان)</span>
                                    <span><img src="/img/cd.png"> Cèdre</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Need some kind of divider here to start the Form 2  examples -->
                    <br>
                    <div class="heading jins text-center">
                        <h3>الشكل الثاني لايقاع اقصاق</h3>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <h5>يأتي إيقاع اقصاق على شكلٍ ثانٍ كما هو مدوّن ادناه، حيث تُستبدل علامة الإسّ على الضربة السادسة بعلامة دُمّ.
                    وبذلك يحصل هذا الشكل من إيقاع اقصاق على دمّين متتاليتين تزيده شبهاً بإيقاع <a href="samai_thaqil.php">سماعي ثقيل</a>.
					</h5>
                    <br>

                    <div class="notation">
                        <img src="../note/iqaa/aqsaq_f2.png" class="img-fluid">
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/ma_htiyali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح ماحتيالي</b>
                                    <span>فرقة التراث (حلب)</span>
                                    <span>بقيادة محمد حمّادية (سوريا)</span>
                                    <span><img src="/img/cd.png"> اسطوانة موسيقى الاندلس الاسبانية - <a href="../maqam/hijaz.php">مقام الحجاز</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/ayyuha_al_saqi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح ايهالساقي</b>
                                    <span>صباح فخري (حلب)</span>
                                    <span>الحان مجدي العقيلي (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/azzibuni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح عذّبوني</b>
                                    <span>فرقة الكندي (سوريا-فرنسا)</span>
                                    <span>بقيادة جوليان جلال الدين فايس (فرنسا)</span>
                                    <span>الحان عمر البطش (حلب)</span>
                                    <span><img src="/img/cd.png"> حجرة الموسيقى االحلبية – الجزء الاول (<a href="../maqam/hijazkar_kurd.php">مقام حجازكار كرد</a>)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/bi_abi_bahil_jamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح بأبي باهي الجمال</b>
                                    <span>محمد خيري (سوريا)</span>
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