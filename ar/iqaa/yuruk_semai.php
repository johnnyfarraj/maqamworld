<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "إيقاع يورك سماعي ٦/٨";
$page_description = "إيقاع يورك سماعي ٦/٨";
$page_keywords = "عود,موسيقى عربية,قانون,ناي,مقام,جنس,آلات,طرب,ايقاع,رقّ,طبلة,طبل البلدي,دفّ,كاتم,صاجات";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl iqaas-page">

    <?php
      $page = "ar/iqaa/yuruk_semai.php";
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
                        <h1>إيقاع يُورُك سَماعي ٦/٨</h1>
                        <h3>يُسمّى ايضاً <strong>يُقرُق</strong> او <strong>أُقرُق</strong></h3>
                    </div>
                    
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل الايقاعات</a>
                    <div class="clearfix"></div>
                    
                    <div class="notation">
                        <img src="../note/iqaa/yuruk_semai.png" class="img-fluid">
                    </div>
                    
                    <h5>إيقاع يُورُك سَماعي (ويُسمّى ايضاً "يُقرُق" او "أُقرُق) هو اصلاً إيقاع (اصول) تركي.
                        وهو ايقاع شائع جداً في <a href="../form/vocal_comp.php#muwashah">قالب الموشّح</a> الغنائي.
                    </h5>
                    <h5>يمكن ان ينتقل هذا الايقاع الى 
                        <a href="samai_saraband.php">سماعي سربند</a> 
                        او
                        <a href="samai_darij.php">سماعي دارج</a> 
                        عندما تزداد سرعته.
                    </h5>
                    
                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/iqaa/yuruk_semai/ahwa_al_ghazal.mp3" type="audio/mp3">
                        </audio>
                    </div>
                    
                    <div class="track " data-song="/audio/iqaa/yuruk_semai/ahwa_al_ghazal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح اهوى الغزال الربربي</b>
                                    <span>فرقة الكندي (سوريا - فرنسا)</span>
                                    <span>بقيادة جوليان جلال الدين فايس (فرنسا)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/yuruk_semai/3unq_al_malih.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح عنق المليح الغالي</b>
                                    <span>غناء صبري المدلل (حلب)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/yuruk_semai/billadhi_askara.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح بالّذي اسكر من عذب اللمى</b>
                                    <span>غناء عايدة شلهوب (لبنان)</span>
                                    <span>اعداد وتوزيع الاب لويس الحاج (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/yuruk_semai/ila_kam_dha_al_tamadi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشح الى كم ذا التمادي</b>
		<span>غناء بيرناديت مُرقس (لبنان)</span>
                                    <span>فرقة مُرقس (لبنان)</span>
                                    <span><img src="/img/cd.png"> Cèdre</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/yuruk_semai/qad_hala_shurb_al_mudam.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح قد حلا شرب المدام</b>
                                    <span>فرقة التراث (حلب)</span>
                                    <span>بقيادة محمد حمّادية (سوريا)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/yuruk_semai/qum_ya_nadim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح قم يا نديم</b>
                                    <span>صباح فخري (حلب)</span>
                                    <span>الحان عمر البطش (حلب)</span>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                    <div class="track" data-song="/audio/iqaa/yuruk_semai/ya_bahjit_el_rouh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح يا بهجة الروح</b>
                                    <span>صباح فخري (حلب)</span>
                                    <span>الحان سيّد درويش (مصر)</span>
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