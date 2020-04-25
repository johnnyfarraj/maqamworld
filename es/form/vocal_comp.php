<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Formas Vocálicas Compuestas";
$page_description = "Formas Vocálicas Compuestas";
$page_keywords = "Las Formas Musicales Árabes, Las Formas Vocálicas Compuestas, sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "en/form/vocal_comp.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de las Formas</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Formas Vocálicas Compuestas</h1>
                        <h3>El Dawr, El Muwashah, El Qadd, La Taqtuqa, La Ughniya, La Qasida, El Monólogo y El Dúo</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de las Formas</a>
                    <div class="clearfix"></div>

                    <p>Formas vocálicas compuestas son el pan y la mantequilla de la música árabe, ya que es una tradición vocal abrumadora.</p>

                    <div id="muwashah" class="heading jins text-center full-width">
                        <h3>The Muwashshah</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/muwashah.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Muwashshah</a>
                    </div>
                    <p>
                    	El Muwashah (el plural <em>Muwashahat</em>) es una forma vocal compleja basada de los poemas de la edad clásica árabe de Andalucía (por lo tanto son algunas veces calificadas como andaluces aunque las melodías son de verdad de Siria hasta Egípto y solo tienen uno o dos siglos de edad).</p>
                    <p>
                        A menudo los <em>muwashahat</em> usan los ciclos rítmicos raros y complejos (ver <a href="../iqaa.php">iqa‘at</a>) empezando desde 5/4, a 7/4, 7/8, 10/8, 11/8, 13/8, 17/8 y más. Las melodías son intrincadas, muchas veces sincopadas y aprovechan estas <a href="../iqaa.php">iqa‘at</a>.
                    </p>
                    <p>
                        La manera tradicional era realizar una <em>muwashah</em> con un <em>mutrib</em> (cantante principal) y un conjunto que incluye los cantantes del fondo. El <em>mutrib</em> puede tomar una sección compuesta y repetirla muchas veces, cada vez con una improvisación diferente o modulación del <a href="../maqam.php">maqam</a> (esta práctica se llama <em>tafrid</em>). Las improvisaciones solos revezan de id y vuelta con los cantantes del fondo cantando la melodía compuesta.
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
                                    <span>La grabación de Muhammad Khayri de la canción <strong>Muwashah Mala al-Kasat</strong> en el <a href="../maqam/rast.php">Maqam Rast</a> (música de Muhammad ‘Uthman).</span>
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
                                    <span>La grabación de Sabah Fakhri de la canción <strong>Muwashah Imla li al-Aqdaha</strong> en el <a href="../maqam/bayati.php">Maqam Bayati</a>.
                                </span>
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
                                    <span>La grabación de Hasan al-Haffar de la canción Muwashahat Wasla en el <a href="../maqam/nahawand.php">Maqam Nahawand</a>, todo compuesto de Omar al-Batsh.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qadd" class="heading jins text-center full-width">
                        <h3>El Qadd</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qadd.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Qadd</a>
                    </div>
                    <p>
                        El Qadd (plural <em>qudud</em>) es una canción tradicional ligera y simple que floreció en Alepo, Siria. Qudud son normalmente realizados al fin de un wasla, después de piezas más pesadas como adwar, qasa’id o muwashahat. Las letras del qudud están en los dialectos coloquiales de Alepo (algunas veces en el egipciano) y son muy accesibles, sencillos y fáciles de memorizar.
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
                                    <span>Seguir un <a href="improv.php#mawwal">Mawwal Baghdadi</a>, Muhammad Khayri canta Qudud <strong>Awwal ‘Ishrit Mahbubi</strong>, <strong>Zaman Zaman</strong> y <strong>Ah Ya Hilu</strong> en el <a href="../maqam/bayati.php">Maqam Bayati</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="dawr" class="heading jins text-center full-width">
                        <h3>El Dawr</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/dawr.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Dawr</a>
                    </div>
                    <p> 
                        El Dawr (el plural <em>Adwar</em>) es una forma compuesta vocálica de Egípto que floreció al principio del siglo XIX y que continúa hasta los años 30. Es complejo para componer y desempeñar y muy duro para cantar, y fue el centro de <a href="#wasla">wasla</a> durante un periodo largo. La letra está siempre en el egipciano coloquial.
                    </p>
                    <p> 
                        Normalmente empieza con un <a href="instr_comp.php#dulab">dulab</a>, luego hay secciones vocálicas diferentes, siguiendo un “Ahat” (una sección donde el cantante principal y los cantantes del fondo intercambian las melodías con la letra “Ah” en la manera de llamada y respuesta.
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
                                    <span>Su’ad Muhammad (Líbano) hace una versión de <strong>Dawr Inta Fahim</strong> en el <a href="../maqam/huzam.php">Maqam Huzam</a> compuesto de Zakariyya Ahmad.
                                </span>
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
                                    <span><strong>Dawr Ahibb Ashufak Kulli Youm</strong> (1931) en el <a href="../maqam/nahawand.php">Maqam Nahawand</a> de Muhammad Abdel Wahab.
                                </span>
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
                                    <span>La grabación de Sabah Fakhri de la canción <strong>Dawr Dayya‘ti Mustaqbal Hayati</strong> en el <a href="../maqam/bayati_shuri.php">Maqam Bayati Shuri</a> (1914, música de Sayyed Darwish).
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqtuqa" class="heading jins text-center full-width">
                        <h3>La Taqtuqa</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/taqtuqa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Taqtuqa</a>
                    </div>
                    <p> 
                        La Taqtuqa (plural <em>Taqatiq</em>) es una canción árabe estándar de 3-4 minutos con múltiples versos y un coro repetitivo. Taqatiq normalmente usa <a href="../iqaa.php">iqa‘at</a> simple como <a href="../iqaa/maqsum.php">Iqa‘ Maqsum</a> y tiene letras accesibles y una melodía que es fácil para memorizar y cantar a la vez.
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
                                    <span><strong>Hayrana Leh</strong> de Leila Murad en el <a href="../maqam/rast.php">Maqam Rast</a> (1930, compuesto de Dawud Husni).</span>
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
                                    <span>La canción de Sabah, <strong>Ya Dala‘ Dalla‘</strong> en el <a href="../maqam/rast.php">Maqam Rast</a> (1974, música de Farid al-Atrash).
                                </span>
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
                                    <span>La canción de Muhammad Abdel Wahab, <strong>Min Azzibak</strong> en el <a href="../maqam/rast.php">Maqam Rast</a> (c. 1930).</span>
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
                                    <span>La canción de Fairouz, <strong>Waraqu il-Asfar</strong> en el <a href="../maqam/rast.php">Maqam Rast</a>, compuesto de Philemon Wehbe.
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="ughniya" class="heading jins text-center full-width">
                        <h3>La Ughniya (Larga Canción)</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/ughniya.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Ughniya</a>
                    </div>
                    <p>
                        La Ughniya (plural <em>aghani</em>) es una larga canción que crece hacia mediados del siglo XX. Puede durar hasta una hora en una configuración en vivo y que tiene una larga introducción (ver <a href="instr_comp.php#muqaddima">La Muqaddima</a>) tanto como las múltiples secciones con todas las modulaciones del <a href="../maqam.php">maqam</a>. Normalmente se realiza con una gran orquesta y que tiene los cantantes de estrellas como Umm Kulthum, Abdel Halim Hafez y Warda. 
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
                                    <span><strong>Qari'at al-Fingan</strong> de Abdel Halim Hafez (1976, compuesto de Muhammad al-Mugi).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>La Qasida (Compuesta )</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/qasida.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Qasida</a>
                    </div>
                    <p> 
                        La Qasida (el plural <em>Qasa'id</em>) es un poema métrico en el árabe clásico, y la forma compuesta usa ese poema como su letra. Normalmente se realiza de un cantante solamente acompañado de un conjunto y es muy largo y elaborado para iluminar el cantante. 
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
                                    <span>Qasida <strong>al-Atlal</strong> de Umm Kulthum (1966) compuesto de Riyad al-Sunbati.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="monologue" class="heading jins text-center full-width">
                        <h3>El Monólogo</h3>
                    </div>
                    <p> 
                        El Monólogo es una canción compuesta basada del aria en la tradición de la música operística. Fue una forma popular a mediados del siglo XX. El monólogo lo realiza un cantante con un conjunto y no tiene secciones repetidas, esto que significa que siempre está introduciendo nuevas frases y melodías desde el principio hasta el fin.
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
                                    <span>El Monólogo <strong>Ya Tuyur</strong> de Asmahan (1941) compuesto de Muhammad al-Qasabgi.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="duet" class="heading jins text-center full-width">
                        <h3>El Dúo</h3>
                    </div>
                    <p> El Dúo es una canción compuesta con dos cantantes, a menudo con un hombre y una mujer, que toman al mismo tiempo o que cantan juntos. Era popular en los tiempos tempranos del siglo XX en las obras del teatro y en las películas. Como estos, la letra pertenece a la romántica, dramática y teatral.
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
                                    <span><strong>Ya Din-Na‘im</strong> de Muhammad Abdel Wahab y Leila Murad, compuesto de Muhammad Abdel Wahab para la película <strong>Yahya al-Hubb</strong> (1938).
                                </span>
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
                                    <span><strong>Ya Salam ‘Ala Hubbi w Hubbak</strong> de Farid al-Atrash y Shadia, compuesto de Farid al-Atrash, de la película <strong>Inta Habibi</strong> (1957).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="wasla" class="heading jins text-center full-width">
                        <h3>La Wasla</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/wasla.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Wasla</a>
                    </div>
                    <p> 
                        La Wasla (el plural <em>waslat</em>) es una forma que cabe otras formas que son realizadas consecutivamente como unidad singular, normalmente en el mismo <a href="../maqam.php">maqam</a>. Una corta puede durar 5-10 minutos, mientras que una larga pueda durar una hora. Los pedazos adentro son ordenados a tal manera que empiezan lento y le establecen el maqam (a menudo con los pedazos del instrumento) luego que presente la compleja y difícil canción vocal. Finalmente, termina con pedazos simples y cortos, creciendo un arco que tiene la cima en el medio.
                    </p>
                    <p>

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
                                    <span>
                                        La <em>Wasla</em> de Saleh Abdel Hayy en el <a href="../maqam/rast.php">Maqam Rast</a>, usando un <a href="improv.php#taqsim">Taqsim</a> por el <a href="../instr/oud.php">oud</a>, parte del <a href="ottoman.php#samai">Sama‘i</a> de Tatyos Effendi, un Taqsim por un <a href="../instr/violin.php">violin</a>, <a href="improv.php#layali">Layali</a> acompañada del <a href="../instr/qanun.php">qanun</a>, y finalmente la <a href="vocal_comp.php#taqtuqa">Taqtuqa</a> Leh Ya Banafseg (1961), compuesto de Riyad al-Sunbati.
                                    </span>
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
                                    <span> 
                                        Una Wasla en el <a href="../maqam/rast.php">Maqam Rast</a>, realizado del cantante egipcio ‘Abbas al-Bleidi incluyendo un <a href="improv.php#taqsim">Taqsim</a> por el <a href="../instr/oud.php">oud</a> de George Michel, parte de un <a href="ottoman.php#samai">Sama‘i</a> Rast de Tatyos Effendi, un <a href="../instr/violin.php">violin</a> Taqsim de Muhammad al-’Aqqad, Muwashah Atani Zamani, un <a href="../instr/qanun.php">qanun</a> Taqsim de Fihmi ‘Awad, luego Layali, de final <strong>Dawr ‘Ishna w Shufna</strong> (compuesto de Muhammad ‘Uthman).
                                </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros grupos de formas:</p>
                    <ul>
                        <!-- <li><a href="vocal_comp.php">Formas Vocálicas Compuestas</a></li> -->
                        <li><a href="instr_comp.php">Formas Compuestas Instrumentales</a></li>
                        <li><a href="ottoman.php">Formas Otomanos</a></li>
                        <li><a href="improv.php">Formas Improvisadas</a></li>
                    </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'es/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
