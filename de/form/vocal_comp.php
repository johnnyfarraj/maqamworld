<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Vokale komponierte Formen";
$page_description = "Vokale komponierte Formen";
$page_keywords = "arabic, music, arab world,  middle east, vocal composed forms, song forms, qadd, muwashah, dawr, duet, moologue, wasla, ughniya, taqtuqa";
$page_language = "de"; // en / ar <!-- YOU MUST PUT THIS -->

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "de/form/vocal_comp.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i>Formen-Verzeichnis</a>
                    <?php include($ROOT . 'de/sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Vokale komponierte Formen</h1>
                        <h3>Der Dawr, der Muwashah, der Qadd, die Taqtuqa,</h3>
                        <h3>die Ughniya, die Qasida, der Monolog und das Duett</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i>Formen-Verzeichnis</a>
                    <div class="clearfix"></div>

                    <p>Die vokalen komponierten Formen sind das A und O der arabischen Musik, da es sich vor allem um eine Vokale Tradition handelt.</p>

                    <div id="muwashah" class="heading jins text-center full-width">
                        <h3>Der Muwashah</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/muwashah.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Muwashah</a>
                    </div>
                    <p>Der Muwashah (Plural: Muwashahat) ist eine komplexe Vokalform, die auf klassischen arabischen Gedichten aus Andalusien basiert. Daher werden Muwashahat manchmal als andalusisch eingestuft, obwohl die zugehörigen Melodien aus dem Gebiet von Syrien bis Ägypten stammen und erst in den vergangenen ein, zwei Jahrhunderten geschrieben wurden.
                    </p>
                    <p>Muwashahat benutzen oft ungerade und komplexe Rhythmusmuster (siehe <a href="../iqaa.php">Iqa‘at</a>), also 5/4, 7/4, 7/8, 10/8, 11/8, 13/8, 17/8 und so weiter. Muwashah-Melodien sind schwierig, oft synkopiert und bringen Schwung in die Iqa‘at.
                    </p>
                    <p>Traditionell singen ein Mutrib (Hauptsänger) und ein Ensemble von Hintergrundsängern den Muwashah. Der Mutrib kann einen komponierten Teil mehrfach wiederholen, allerdings variiert er ihn dann durch Improvisation und <a href="../maqam.php">Maqam</a>-Modulation. Diese Praxis nennt sich Tafrid. Die Solo-Improvisationen wechseln sich mit Ensemblepassagen ab, in denen der Chor den komponierten Teil singt.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=eK6iCYSuaKI">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/eK6iCYSuaKI/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muwashah Mala al-Kasat</b>
                                    <span>Muhammad Khayris Aufnahme des Muwashah Mala al-Kasat im Maqam Rast, komponiert von Muhammad ‘Uthman</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=FIbZbvU7UZ8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/FIbZbvU7UZ8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muwashah Imla li al-Aqdaha</b>
                                <span>Sabah Fakhris Einspielung von Muwashah Imla li al-Aqdaha im Maqam Bayati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=asf278QZx4E">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/asf278QZx4E/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Hasan al-Haffar Wasla</b>
                                    <span>Hasan al-Haffars Aufnahme eines Muwashah-Wasla im Maqam Nahawand, komponiert von ‘Umar al-Batsh.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qadd" class="heading jins text-center full-width">
                        <h3>Der Qadd</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/qadd.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache der Qadd</a>
                    </div>
                    <p>Der Qadd (Plural: Qudud) ist ein leichtes und einfaches traditionelles Lied, das vor allem in Aleppo zur Blüte kam. Qudud werden gewöhnlich am Ende eines Wasla vorgetragen. Voran gehen schwerere Stücke wie Adwar, Qasa'id oder Muwashat. Qadd-Texte sind im umgangssprachlichen aleppischen, manchmal auch ägyptischen Dialekt gehalten. Sie sind sehr eingängig und leicht zu merken.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zX7gJKlDDyY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zX7gJKlDDyY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhammad Khayri - Qudud</b>
                                    <span>Nach einem Mawwal Baghdadi singt Muhammad Khayri die Qudud "Awwal ‘Ishrit Mahbubi", "Zaman Zaman" und "Ah Ya Hilu" im Maqam Bayati.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="dawr" class="heading jins text-center full-width">
                        <h3>Der Dawr</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/dawr.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache der Dawr</a>
                    </div>
                    <p>Der Dawr (Plural: Adwar) ist eine ägyptische komponierte Vokalform, die am Ende des neunzehnten Jahrhunderts florierte und bis in die Dreißigerjahre des zwanzigsten Jahrhunderts sehr beliebt war. Der Dawr ist eine komplexe Komposition, die anspruchsvoll in der Aufführungspraxis auch und gerade für den Sänger ist. Er war lange das Zentrum der Wasla. Die Texte sind ausschließlich in umgangssprachlichen ägyptischen Arabisch gehalten.
                    </p>
                    <p>Der Dawr beginnt gewöhnlich mit einem <a href="instr_comp.php#dulab">Dulab</a>, dann kommt ein anderer Vokalteil, gefolgt von dem Ahat, einem Teil, bei dem die Melodie zwischen Sänger und Hintergrundsängern im Call-and-Response-Stil wechselt. Der Text lautet schlicht "Ah".
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=UzVLpFNjsgs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/UzVLpFNjsgs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr Inta Fahim</b>
                                    <span>Su‘ad Muhammads Aufnahme von Dawr Inta Fahim, komponiert von Zakariya Ahmad</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=iL71BmxC9Do">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/iL71BmxC9Do/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr Ahibb Ashufak Kulli Youm (1931)</b>
                                    <span>Dawr Ahibb Ashufak Kulli Youm (1931) von Muhammad Abdel Wahab</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IrfNZ3oN0Yg">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IrfNZ3oN0Yg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr Dayya‘ti Mustaqbal Hayati (1914)</b>
                                    <span>Sabah Fakhris Aufnahme von Dawr Dayya‘ti Mustaqbal Bayati (1914) von Sayyed Darwish</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqtuqa" class="heading jins text-center full-width">
                        <h3>Die Taqtuqa</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/taqtuqa.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Taqtuqa</a>
                    </div>
                    <p>Die Taqtuqa (Plural: Taqatiq) ist das arabische Standardlied. Es hat eine Länge von drei bis vier Minuten. Strophe und Refrain wechseln sich mehrfach ab. Taqatiq benutzen gewöhnlich einfache <a href="../iqaa.php">iqa‘at</a> wie <a href="../iqaa/maqsum.php">Iqa‘ Maqsum</a> und haben leicht zugängliche Texte und eine Melodie, die man sich leicht merken und mitsingen kann.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=uO8eElxaaUY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/uO8eElxaaUY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Hayrana Leh (1930)</b>
                                    <span>Leila Murads Hayrana Leh (1930), komponiert von Dawud Husni</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_UxfjsIe6nI">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_UxfjsIe6nI/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Dala‘ Dalla‘ (1974)</b>
                                    <span>Sabah Ya Dala‘ Dalla‘ (1974) von Farid al-Atrash</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TEAgQgA_mBA">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TEAgQgA_mBA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Min Azzibak (c.1930s)</b>
                                    <span>Muhammad Abdel Wahabs Min Azzibak (zirka 1930er)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=a-7eto6cJq8">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/a-7eto6cJq8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Waraqu il-Asfar</b>
                                    <span>Fairouzs Waraqu il-Asfar von Philemon Wehbe</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="ughniya" class="heading jins text-center full-width">
                        <h3>Die Ughniya (Liebeslied)</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/ughniya.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Ughniya</a>
                    </div>
                    <p>Die Ughniya (Plural: Aghani) ist ein langes Liebeslied, das sich im der Mitte des zwanzigsten Jahrhunderts entwickelt hat. Sie kann bis zu einer Stunde dauern, wenn sie live gespielt wird, und hat ein langes Intro (siehe <a href="instr_comp.php#muqaddima">Muqaddima</a>) sowie verschiedene Teile mit ausführlichen Maqam-Modulationen. Die Ughniya wird gewöhnlich mit großem Orchester vorgetragen, die Megastars wie Umm Kulthum, Abdel Halim Hafez und Warda begleiten.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Ptd3R51Qj-s&t=723s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Ptd3R51Qj-s/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Qari'at al-Fingan (1976)</b>
                                    <span>Abdel Halim Hafezs Qari'at al-Fingan (1976), komponiert von Muhammad al-Mugi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>Die Qasida (komponiert)</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/qasida.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Qasida</a>
                    </div>
                    <p>Die Qasida (Plural: Qasa'id) nutzt als Text ein Gedicht in einem Metrum in klassischem Arabisch. Die Qasida wird gewöhnlich von einem Sänger vorgetragen, der von einem Ensemble unterstützt wird. Sie ist meist lang und kunstvoll, damit der Sänger sein Können herausstellen kann.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=5z8LvG5tfOE">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/5z8LvG5tfOE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>al-Atlal (1966)</b>
                                    <span>Umm Kulthums Al-Atlal (1966), komponiert von Riyat al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="monologue" class="heading jins text-center full-width">
                        <h3>Der Monolog</h3>
                    </div>
                    <p>Der Monolog ist ein durchkomponiertes Lied, das sich an die Arientradition der Oper anlehnt. Er war besonders in der Mitte des zwanzigsten Jahrhunderts beliebt. Der Monolog wird von einem Sänger aufgeführt, der von einem Orchester unterstützt wird. Dort gibt es keine Wiederholung von Teilen. Also werden immer neue Teile aneinandergehängt.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=t-easvB208E">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/t-easvB208E/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Tuyur (1941)</b>
                                    <span>Asmahans Ya Turut (1941), komponiert von Muhammad al-Qasabgi</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="duet" class="heading jins text-center full-width">
                        <h3>Das Duett</h3>
                    </div>
                    <p>Das Duett ist ein komponiertes Stück mit zwei Sängern, oft ein Mann und eine Frau, die sich abwechseln oder gemeinsam singen. Es war vor allem am Anfang des zwanzigsten Jahrhunderts im Musicals und Filmen beliebt. Die Texte neigen zur Romantik, dem Dramatischen und Theatralischen.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=is-xYmL9YVc">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/is-xYmL9YVc/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Din-Na‘im</b>
                                    <span>Muhammad Abdel Wahab und Leila Murad singen Ya Din-Na‘im, komponiert von Muhammad Abdel Wahab, aus dem Film "Yahya al-Hubb" (1938).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=amjqJ_MGg0A">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/amjqJ_MGg0A/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Ya Salam ‘Ala Hubbi w Hubbak (1957)</b>
                                    <span>Farid al-Atrash und Shadia singen Ya Salam ‘Ala Hibbi w Hubbak, komponiert von Farid al-Atrash, im Film "Inta Habibi" (1957).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="wasla" class="heading jins text-center full-width">
                        <h3>Die Wasla</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/wasla.mp3"><i class="fa fa-fw fa-volume-up"></i> Aussprache von Wasla</a>
                    </div>
                    <p>Die Wasla (Plural: Waslat) ist eine Form, die andere Formen beinhaltet, die nacheinander als eine Einheit aufgeführt werden, gewöhnlich stehen sie im selben <a href="../maqam.php">Maqam</a>. Eine kurze Wasla dauert fünf bis zehn Minuten, längere etwa eine Stunde. Die Stücke innerhalb der Wasla sind so geordnet, dass sie langsam anfangen und erst einmal den Maqam vorstellen. Dies geschieht meist instrumental. Dann kommen die komplexen Stücke, die den Musikern viel Können abverlangen. Die Wasla endet meist mit einem einfachen und kurzen Stück. Der Spannungsbogen geht also von einfach über komplex zu einfach zurück.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D0DQxDwgDw8&t=1103s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D0DQxDwgDw8/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Leh Ya Banafseg (1961)</b>
                                    <span>Saleh Abdel Hayys Wasla in Maqam Rast mit Oud-Taqsim, einem Teil von Sama‘i Rast von Tatyos Effendi, einem Violin-Taqsim, Layali mit Kanun-Begleitung und schließlich der Taqtuqa "Leh Ya Banafseg" (1961), komponiert von Riyad al-Sunbati</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=AdAuadp8tq4">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/AdAuadp8tq4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Dawr ‘Ishna w Shufna</b>
                                    <span>Eine Wasla im Maqam Rast des ägyptischen Sängers ‘Abbas al-Bleidi inklusive Oud-Taqsim von George Michel, einem Teil von Sama‘i Rast von Tatyos Effendi, einem Violin-Taqsim von Muhammad al-‘Aqqad, Muwashah Atani Zamani, einem Kanun-Tawsim von Gihmi ‘Awad, dann Layali und schließlich Dawr ‘Ishna w Shufna</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Erkunden Sie andere Formgruppen:</p>
                    <ul>
                    	<!--
                        <li><a href="vocal_comp.php">Vokale komponierte Formen</a></li>
                        -->
                        <li><a href="instr_comp.php">Instrumentale komponierte Formen</a></li>
                        <li><a href="ottoman.php">Kompositorische ottomanische Instrumentalformen</a></li>
                        <li><a href="improv.php">Improvisierte Formen</a></li>
                    </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
