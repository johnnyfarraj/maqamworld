<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "مقام سيكاه بلدي";
$page_description = "مقام سيكاه بلدي";
$page_keywords = "عود, مقام سيكاه بلدي,موسيقى عربية ,قانون, ناي, مقام, جنس, آلات, طرب, عالم المقامات, ايقاع";
$page_language = "ar";

include($ROOT . 'inc/head.php');
?>

  <body class="rtl maqams-page">

    <?php
      $page = "ar/maqam/sikah_baladi.php";
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
                        <h1>مقام سيكاه بلدي</h1>
                        <h3>(لا ينتمي لأي عائلة مقامية)</h3>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>دليل المقامات</a>
                    <div class="clearfix"></div>

                     <div class="notation" id="notation1">
                        <img src="../note/maqam/sikah_baladi.png" class="img-fluid" usemap="#notemap">
                        <div class="shape"></div>
                        <a class="linkArea"></a>
                        <p class="clicknotes_ar">إضغط على العلامة الموسيقية بالفأرة حتى تسمع نغمتها.</p>
                    </div>

                    <map name="notemap">
	  <area shape="circle" coords="69,90,13" href="#" alt="دو↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
	  <area shape="circle" coords="149,98,13" href="#" alt="سي<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="xxx" data-parent="#notation1">
	  <area shape="circle" coords="227,106,13" href="#" alt="لا<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
	  <area shape="circle" coords="302,114,13" href="#" alt="صول" class="playNote" data-frequency="xxx" data-parent="#notation1">
	  <area shape="circle" coords="381,122,13" href="#" alt="فا<i class='icon-halfsharp'></i>↑" class="playNote" data-frequency="xxxx" data-parent="#notation1">
	  <area shape="circle" coords="462,131,13" href="#" alt="مي<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
	  <area shape="circle" coords="533,139,13" href="#" alt="ري" class="playNote" data-frequency="xxx" data-parent="#notation1">
	  <area shape="circle" coords="605,147,13" href="#" alt="دو♯" class="playNote" data-frequency="xxx" data-parent="#notation1">
 	<area shape="circle" coords="672,147,13" href="#" alt="دو↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
	  <area shape="circle" coords="737,155,13" href="#" alt="سي<i class='icon-halfflat'></i>↑" class="playNote" data-frequency="xxx" data-parent="#notation1">
	  <area shape="circle" coords="817,164,13" href="#" alt="لا<i class='icon-halfflat'></i>↓" class="playNote" data-frequency="xxx" data-parent="#notation1">
	  <area shape="circle" coords="893,173,13" href="#" alt="صول" class="playNote" data-frequency="xxx" data-parent="#notation1">
                      <!-- Links -->
                      <area shape="rect" coords="186,4,360,37" href="../jins/sikah_baladi.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="692,12,864,46" href="../jins/sikah_baladi.php" class="mapLink" data-parent="#notation1">
                      <area shape="rect" coords="360,185,550,218" href="../jins/hijazkar.php" class="mapLink" data-parent="#notation1">
                      </map>
		<br>

                     <h5>
		مقام سيكاه بلدي هو من اصعب المقامات العربية عزفاً.
		سلّم هذا المقام وسيره مزيج بين <a href="huzam.php">مقام هُزام</a> (المصوّر على علامة غير علامة السيكاه)
		و<a href="hijazkar.php">مقام حجازكار</a> (مع تعديل بعض المسافات)،
		والنتيجة هي مقام يشبه هذين المقامين.
		اما المسافات في سلّم مقام سيكاه بلدي فأي منها لا يطابق مسافات الصوت او نصف الصوت كما في السلّم الغربي المتساوي الابعاد،
		لذلك لا يمكن ان يُعزف هذا المقام بدقة وإحكام على اية آلات غربية او مشرّقة.
		</h5>
        <h5>لا ينتمي مقام سيكاه بلدي لأي عائلة مقامية.</h5>
		<br>

                    <div class="player-area">
                        <audio id="player" controls>
                            <source src="/audio/maqam/sikah_baladi/sahirtu.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track " data-song="/audio/maqam/sikah_baladi/sahirtu.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>اغنية سهرت منه الليالي (١٩٣٥)</b>
                                    <span>غناء والحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/kulli_da_kan_leh.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية كل ده كان ليه (١٩٥٤)</b>
                                    <span>غناء والحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/el_habib_el_maghul.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الحبيب المجهول (١٩٧٢)</b>
                                    <span>غناء والحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/al_karnak.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الكرنك (١٩٤١)</b>
                                    <span>غناء والحان محمد عبد الوهاب (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                   <div class="track" data-song="/audio/maqam/sikah_baladi/shams_el_asil.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية شمس الاصيل (١٩٥٨)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/el_hobb_kida.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية الحبّ كده (١٩٥٩)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                     <div class="track" data-song="/audio/maqam/sikah_baladi/yalli_kan_yishgik_anini.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية ياللي كان نشجيك انيني (١٩٤٩)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/aruh_li_min.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>اغنية اروح لمين (١٩٥٨)</b>
                                    <span>ام كلثوم</span>
                                    <span>الحان رياض السنباطي (مصر)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/taqsim_buzuq_matar.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقسيم على البُزق</b>
                                    <span>مطر محمد (لبنان)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/maqam/sikah_baladi/taqsim_qanun_salman_.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>تقسيم على القانون</b>
                                    <span>ابراهام سلمان (العراق)</span>
                                    <span><img src="/img/cd.png"> اسطوانة سلطنة</span>
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
