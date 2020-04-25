<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Formas Otomanos";
$page_description = "Formas Otomanos";
$page_keywords = "Formas Otomanos, Las Formas Musicales Árabes, sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "en/form/ottoman.php";
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
                        <h1>Las Formas Otomanos Compuestas Instrumentales</h1>
                        <h3>El Sama‘i, La Longa y El Bashraf</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de las Formas</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/khana.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Khana</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/taslim.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Taslim</a>
                    </div>

                    <p>
                        Hay tres formas compuestas de la instrumentación que estaban prestadas de la música turca/otomana y ya son parte de la música árabe hoy: el Sama’i, el Longa, y el Bashraf. El Sama’i ha sobrevivido lo mejor de las tres, como los músicos árabes continúan hasta el día de hoy en el siglo XXI preparando esta forma.
                    </p>
                    <p>
                        Las tres formas están basadas de un coro que repite que se llama “<em>taslim</em>” y una cantidad de diferentes versos que se llama “<em>khana</em>.” Las tres composiciones están basadas en un <a href="../maqam.php">maqam</a> y tienen ese “<em>sayr</em>” del <em>maqam</em>, además que sus modulaciones populares. Por esta razón, el maqam y su compositor son parte del nombre de la composición.
                    </p>

                    <div id="samai" class="heading jins text-center full-width">
                        <h3>El Sama‘i</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/samai.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Sama‘i</a>
                    </div>
                    <p> 
                        El Sama’i es una forma compuesta instrumental que consiste en cuatro <em>khana</em>, cada una seguida por la misma <em>taslim</em>. La estructura de un Sama’i es K1, T, K2, T, K3, T, K4, T. Todas las secciones son compuestas en el <a href="../iqaa/samai_thaqil.php">Iqa‘ Sama‘i Thaqil</a>, salvo el cuarto khana lo cual normalmente está compuesta de un ciclo rítmico y corto como <a href="../iqaa/samai_saraband.php">Iqa‘ Sama‘i Saraband</a> o <a href="../iqaa/samai_darij.php">Iqa‘ Sama‘i Darij</a>.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=5s1KylUC9_Q">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/5s1KylUC9_Q/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Bayati de Ibrahim al-‘Aryan</b>
                                    <span>Sama’i en el <a href="../maqam/bayati.php">Maqam Bayati</a> de Ibrahim al-‘Aryan (Egípto) grabado de la Orquesta Radio Tunisie.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=uNncmnhL05k">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/uNncmnhL05k/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Hijazkar Kurd de Rohi al-Khammash</b>
                                    <span></span>
                                    <span>Sama’i en el <a href="../maqam/hijazkar_kurd.php">Maqam Hijazkar Kurd</a> de Rohi al-Khammash (Palestina/Iraq), usando <a href="../iqaa/jurjina.php">Iqa‘ Jurjina</a> el el khana cuarto.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IQkQoZcC0jk">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IQkQoZcC0jk/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Kurd de ‘Abdu Dagher</b>
                                    <span></span>
                                    <span>Sama’i en el <a href="../maqam/kurd.php">Maqam Kurd</a> de ‘Abdu Dagher (Egípto) lo cual usa un larga <a href="instr_comp.php#muqaddima">muqaddima</a> (introducción compuesto).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=_OZo-QBb6jY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/_OZo-QBb6jY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Rast de George Michel</b>
                                    <span>Sama’i en el <a href="../maqam/rast.php">Maqam Rast</a> de George Michel (Egípto) grabado de la Orquesta Radio Tunisie.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=opETYjZGZtM">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/opETYjZGZtM/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Sama‘i Nawa Athar de Jamil ‘Uways</b>
                                    <span>Sama’i en el <a href="../maqam/nawa_athar.php">Maqam Nawa Athar</a> de Jamil Uways (Siria).
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="longa" class="heading jins text-center full-width">
                        <h3>La Longa</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/longa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Longa</a>
                    </div>
                    <p> 
                        La Longa es la forma que es la segunda más popular de las formas instrumentales del periodo otomano. Normalmente está compuesta en la corta y salta forma <a href="../iqaa/fox.php">Iqa‘ Fox</a> para los <em>khana</em> y <a href="../iqaa/malfuf.php">Iqa‘ Malfuf</a> para el <em>taslim</em>.
                    </p>
                    <p>
                        Ambos longas de la época otomana empleaban maqamat semi-tonal como <a href="../maqam/nahawand.php">Nahawand</a>, <a href="../maqam/hijaz.php">Hijaz</a>, y <a href="../maqam/nikriz.php">Nikriz</a>, y también empleaban las melodías que evocaban a la música del Oeste de Europa. Muchos compositores árabes ya siguen siendo esa manera de crear.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=JnTGci4VSXo">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/JnTGci4VSXo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Longa Farahfaza de Riyad al-Sunbati</b>
                                    <span>La Longa en el <a href="../maqam/nahawand.php">Maqam Farahfaza</a> de Riyad al-Sunbati (Egípto) grabado por el Conjunto Simon Shaheen.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7aVU7mPkCTs">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7aVU7mPkCTs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Longa ‘Ajam de ‘Abdu Daghir</b>
                                    <span>Longa en el <a href="../maqam/ajam.php">Maqam ‘Ajam</a> de ‘Abdu Daghir (Egípto) grabado por su conjunto.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=oa5fAO1YXSY">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/oa5fAO1YXSY/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Longa Nahawand de Dr. Alfred Gamil</b>
                                    <span>Longa en el <a href="../maqam/nahawand.php">Maqam Nahawand</a> de Dr. Alfred Gamil (Egípto) grabado por su conjunto.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="bashraf" class="heading jins text-center full-width">
                        <h3>El Bashraf</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/bashraf.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Bashraf</a>
                    </div>
                    <p>
                        El Bashraf es la forma menos común de las formas instrumentales de los otomanos y se queda típicamente en el área de lecciones de música y los ejercicios instrumentales. El Bashraf consiste en cuatro <em>khana</em>, cada una seguida por el mismo <em>taslim</em>, y es poco común usado de los músicos árabes. 
                    </p>
                    <p>
                        Diferente al sama’i, el bashraf normalmente sigue un solo <a href="../iqaa.php">iqa‘</a> durante toda la composición, en muchos casos de un <em>iqa’</em> de ritmo par como el <a href="../iqaa/masmudi_kabir.php">Masmudi Kabir (8/4)</a>, <a href="../iqaa/mukhammas.php">Mukhammas (16/4)</a>, Shanbar (24/4), Dawr Al Kabir (28/4) o un ciclo rítmico otomano más largo.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=NmNMjWyhiyE">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/NmNMjWyhiyE/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Bashraf Farahfaza</b>
                                    <span>Bashraf en el <a href="../maqam/nahawand.php">Maqam Farahfaza</a> de Ismail Hakki Bey (Otomano), grabado por el conjunto Simon Shaheen. 
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=aZY8TuOB68w">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/aZY8TuOB68w/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Bashraf Kara Batak Sikah (1929)</b>
                                    <span>Bashraf Kara Batak en el <a href="../maqam/sikah.php">Maqam Sikah</a>, grabado en el año 1929 de Sami al-Shawwa (Siria) en el <a href="../instr/violin.php">violin</a> y Muhammad al-Qasabgi (Egípto) en el <a href="../instr/oud.php">oud</a>.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros grupos de formas:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Formas Vocálicas Compuestas</a></li>
                        <li><a href="instr_comp.php">Formas Compuestas Instrumentales</a></li>
                        <!-- <li><a href="ottoman.php">Formas Otomanos</a></li> -->
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
