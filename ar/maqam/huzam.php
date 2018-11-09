<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام هُزام/مقام راحة الارواح";
$page_description = "مقام هُزام/مقام راحة الارواح";
$page_keywords = "عود ,مقام هُزام,مقام راحة الارواح,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/huzam.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <?php include('../sidemenu-maqam.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>مقام هُزام</h1>
                        <h1>مقام راحة الارواح</h1>
                        <h3>من <a href="f_sikah.php">عائلة مقام السيكاه</a></h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/huzam.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
		  <area shape="circle" coords="70,125,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="322" data-parent="#notation1"><!--variable 318~324-->
		  <area shape="circle" coords="148,117,13" href="#" alt="فا" class="playNote" data-frequency="347.65" data-parent="#notation1">
		  <area shape="circle" coords="225,108,13" href="#" alt="صول" class="playNote" data-frequency="391.11" data-parent="#notation1">
		  <area shape="circle" coords="301,100,13" href="#" alt="لا♭" class="playNote" data-frequency="423" data-parent="#notation1"><!-- Hijaz 2 tuned up from 420 -->
		  <area shape="circle" coords="378,92,13" href="#" alt="سي♮" class="playNote" data-frequency="492" data-parent="#notation1"><!-- Hijaz 3 tuned down from 495 -->
		  <area shape="circle" coords="455,84,13" href="#" alt="دو" class="playNote" data-frequency="521.48" data-parent="#notation1">
		  <area shape="circle" coords="533,76,13" href="#" alt="ري" class="playNote" data-frequency="586.66" data-parent="#notation1">
		  <area shape="circle" coords="610,68,13" href="#" alt="مي<i class='icon-halfflat'></i>" class="playNote" data-frequency="644" data-parent="#notation1"><!--variable-->
          		<!-- Links -->
                      <area shape="rect" coords="78,13,200,43" href="../jins/sikah.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="277,13,395,43" href="../jins/hijaz.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="484,7,591,35" href="../jins/rast.php" class="mapLink" data-parent="#notation1">
		</map>

                    <h5>
                         مقام هُزام هو المقام الاكثر شيوعاً في <a href="f_sikah.php">عائلة مقام السيكاه</a>،
                        ويأتي قراره على درجة المي<i class="icon-halfflat"></i>.
                        يبدأ سلّم هذا المقام <a href="../jins/sikah.php">بجنس السيكاه</a> على القرار 
                        ثم يليه <a href="../jins/hijaz.php">جنس الحجاز</a> على الغمّاز (وهو الدرجة الثالثة)،
                        ومن بعده <a href="../jins/rast.php">جنس الراست</a> 
                        على الدرجة السادسة
                        (وهي غمّاز ثانوي).
                        </h5>
                    <h5>
                        امّا <strong>مقام راحة الارواح</strong> فهو الاسم المستعمل لمقام الهزام المصوّر على درجة السي<i class="icon-halfflat"></i>. وسير هذين المقامين نفسه.
                        </h5>
		 <br>
                    <h5>انظر الى مقامات اخرى في <a href="f_sikah.php">عائلة مقام السيكاه</a>.</h5>
                    <br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/huzam/ya_ghusna_naqa.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/huzam/ya_ghusna_naqa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>موشّح يا غصن نقا</b>
                                    <span>فرقة الموسيقى العربية (مصر)</span>
                                    <span>بقيادة عبد الحليم نويرة</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/huzam/ayyuha_as_saqi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح أيّها الساقي</b>
                                    <span>المطرب صباح فخري (حلب)</span>
                                    <span>الحان مجدي العقيلي (سوريا)</span>
                                    <span>نغم الامس - الجزء الثالث عشر (مقام هزام)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/huzam/dawr_emta_el_hawa.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دور امتى الهوى (١٩٣٦)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان الشيخ زكريا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/huzam/marmar_zamani.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية مرمر زماني</b>
                                    <span>غناء فيروز (لبنان)</span>
                                    <span>(اللحن قديم)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Start Rahat al-Arwah section -->
                    <div class="heading jins text-center">
                        <h3>امثلة من مقام راحة الارواح</h3>
                    </div>
                    <div class="clearfix"></div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/el_wardi_gamil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الورد جميل (١٩٤٧)</b>
                                    <span>امّ كلثوم</span>
                                    <span>الحان الشيخ زكريا احمد (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/ya_wahid_al_ghid.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>موشّح يا وحيد الغيد</b>
                                    <span>غناء فيروز (لبنان)</span>
                                    <span><img src="/img/cd.png"> اسطوانة اندلسيات</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/dawr_inta_fahim.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دور انت فاهم</b>
                                    <span>(مقام راحة الارواح)</span>
                                    <span>غناء والحان الشيخ زكريا احمد</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/dulab_rahat_al_arwah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دولاب راحة الارواج</b>
                                    <span>عائشة رضوان (الجزائر)</span>
                                    <span><img src="/img/cd.png"> اسطوانة مصر</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/rahat-el-arwah/dulab_ayyuhal_saqi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>دولاب راحة الارواج</b>
                                    <span>المطرب صباح فخري (حلب)</span>
                                    <span><img src="/img/cd.png"> من حفلة في قصر بيت الدين</span>
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
