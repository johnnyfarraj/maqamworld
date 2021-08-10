<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Formas Instrumentais Otomanas";
$page_description = "Formas Instrumentais Otomanas";
$page_keywords = "arabic, music, arab, world, maqam, jins, ottoman instrumental composed forms, samai, sama'i, longa, bashraf, khana, taslim, oud, qanun, nay, quarter tone, tetrachord, modal, middle east";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "pt/form/ottoman.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Formas</a>
                    <?php include('../sidemenu-form.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Formas Instrumentais Otomanas</h1>
                        <h3>O Sama‘i, a Longa e o Bashraf</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Formas</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/khana.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Khana</a>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/taslim.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Taslim</a>
                    </div>

                    <p>
                        Três formas instrumentais compostas foram pegas emprestadas da música Turca/Otomana e ainda são parte da música Árabe até hoje: o Sama‘i, a Longa e o Bashraf. O Sama‘i foi a que melhor sobreviveu dos três, já que músicos Árabes continuam compondo nessa forma no século XXI.
                    </p>
                    <p>
                        Todas essas três formas são baseadas num refrão repetido chamado "<em>taslim</em>" e alguns versos diferentes chamados "<em>khana</em>". As três composições também estão ancoradas num <a href="../maqam.php">maqam</a> e apresentam o <em>sayr</em>  desse <em>maqam</em> bem como suas modulações populares. Por essa razão, o maqam (e o compositor) são parte do nome da composição.
                    </p>

                    <div id="samai" class="heading jins text-center full-width">
                        <h3>The Sama‘i</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/samai.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Sama‘i</a>
                    </div>
                    <p> 
                        O Sama‘i é uma forma instrumental composta consistindo de quatro <em>khana</em>-s, cada um seguido pelo mesmo <em>taslim</em>. A estrutura de um Sama‘i é K1, T, K2, T, K3, T, K4, T. Todas as seções são compostas no <a href="../iqaa/samai_thaqil.php">Iqa‘ Sama‘i Thaqil</a>, exceto a 4<sup>a</sup> <em>khana</em>, que é geralmente composta em um ciclo rítmico ímpar curto como <a href="../iqaa/samai_saraband.php">Iqa‘ Sama‘i Saraband</a> ou <a href="../iqaa/samai_darij.php">Iqa‘ Sama‘i Darij</a>.
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
                                    <b>Sama‘i Bayati - Ibrahim al-‘Aryan</b>
                                    <span>Sama‘i em <a href="../maqam/bayati.php">Maqam Bayati</a> por Ibrahim al-‘Aryan (Egito), gravada pela Tunisian Radio Orchestra.
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
                                    <b>Sama‘i Hijazkar Kurd - Rawhi al-Khammash</b>
                                    <span></span>
                                    <span>Sama‘i em <a href="../maqam/hijazkar_kurd.php">Maqam Hijazkar Kurd</a> por Rohi al-Khammash (Palestina/Iraque), apresentando <a href="../iqaa/jurjina.php">Iqa‘ Jurjina</a> na 4<sup>a</sup> khana.
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
                                    <b>Sama‘i Kurd - ‘Abdu Dagher</b>
                                    <span></span>
                                    <span>Sama‘i em <a href="../maqam/kurd.php">Maqam Kurd</a> por ‘Abdu Dagher (Egito), que apresenta uma longa <a href="instr_comp.php#muqaddima">muqaddima</a> (introdução composta).
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
                                    <b>Sama‘i Rast - George Michel</b>
                                    <span>Sama‘i em <a href="../maqam/rast.php">Maqam Rast</a> por George Michel (Egito), gravada pela Tunisian Radio Orchestra.
                                 </span>
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
                                    <b>Sama‘i Nawa Athar - Jamil ‘Uways</b>
                                    <span>Sama‘i em <a href="../maqam/nawa_athar.php">Maqam Nawa Athar</a> por Jamil ‘Uways (Síria).
                                 </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="longa" class="heading jins text-center full-width">
                        <h3>A Longa</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/longa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Longa</a>
                    </div>
                    <p> A Longa é a segunda forma Otomana instrumental mais popular. Geralmente é composta no curto e saltitante <a href="../iqaa/fox.php">Iqa‘ Fox</a> para os <em>khana</em>-s, e no <a href="../iqaa/malfuf.php">Iqa‘ Malfuf</a> para o <em>taslim</em>.
                    </p>
                    <p> Muitas longas da era Otomana usavam maqamat semitonais como <a href="../maqam/nahawand.php">Nahawand</a>, <a href="../maqam/hijaz.php">Hijaz</a>, <a href="../maqam/nikriz.php">Nikriz</a>, e usavam melodias que evocavam música do Leste Europeu. Muitos compositores Árabes ainda seguem a mesma abordagem.
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
                                    <b>Longa Farahfaza - Riyad al-Sunbati</b>
                                    <span>Longa em <a href="../maqam/nahawand.php">Maqam Farahfaza</a> por Riyad al-Sunbati (Egito), gravado pelo Simon Shaheen Ensemble.
                                 </span>
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
                                    <b>Longa ‘Ajam - ‘Abdu Daghir</b>
                                    <span>Longa em <a href="../maqam/ajam.php">Maqam ‘Ajam</a> por ‘Abdu Daghir (Egito), gravado por seu conjunto.
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
                                    <b>Longa Nahawand - Dr. Alfred Gamil</b>
                                    <span>Longa em <a href="../maqam/nahawand.php">Maqam Nahawand</a> por Dr. Alfred Gamil (Egito), gravado por seu conjunto.
                                 </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="bashraf" class="heading jins text-center full-width">
                        <h3>O Bashraf</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/bashraf.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Bashraf</a>
                    </div>
                    <p> 
                        O bashraf é a forma instrumental Otomana menos difundida, e permanece principalmente no domínio das lições musicais e exercícios instrumentais. O bashraf consiste em 4 <em>khana</em>-s, cada um seguido pelo mesmo <em>taslim</em>, e é raramente composto por músicos Árabes.
                    </p>
                    <p> 
                        Diferentemente do sama‘i, o bashraf geralmente segue um único <a href="../iqaa.php">iqa‘</a> ao longo da composição, na maioria dos casos um iqa’ com métrica par como <a href="../iqaa/masmudi_kabir.php">Masmudi Kabir (8/4)</a>, <a href="../iqaa/mukhammas.php">Mukhammas (16/4)</a>, Shanbar (24/4), Dawr al-Kabir (28/4)ou ciclos rítmicos Otomanos mais longos.
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
                                    <span>Bashraf em <a href="../maqam/nahawand.php">Maqam Farahfaza</a> por Ismail Hakki Bey (Otomano), gravado pelo conjunto Simon Shaheen.
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
                                    <span>Bashraf Kara Batak em <a href="../maqam/sikah.php">Maqam Sikah</a>, gravado em 1929 por Sami al-Shawwa (Síria) no <a href="../instr/violin.php">violino</a> e Muhammad al-Qasabgi (Egito) no <a href="../instr/oud.php">oud</a>.
                                 </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- add Bashraf Rast Tatyos Effendi -->

                    <p>Explore outros grupos de formas:</p>
                    <ul>
                        <li><a href="vocal_comp.php">Formas Vocais Compostas</a></li>
                        <li><a href="instr_comp.php">Formas Instrumentais Compostas</a></li>
                        <li><a href="improv.php">Formas Improvisadas</a></li>
                    </ul>

                </div>
                <div class="col-sm-12">
                    <?php include($ROOT . 'inc/768x90.php'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'pt/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    </body>

</html>
