<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Formas Vocais Compostas";
$page_description = "Formas Vocais Compostas";
$page_keywords = "arabic, music, arab world,  middle east, vocal composed forms, song forms, qadd, muwashah, dawr, duet, moologue, wasla, ughniya, taqtuqa";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="forms-page">

    <?php
      $page = "pt/form/vocal_comp.php";
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
                        <h1>Formas Vocais Compostas</h1>
                        <h3>O Dawr, o Muwashah, o Qadd, a Taqtuqa, a Ughniya, a Qasida, o Monólogo e o Dueto.</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Formas</a>
                    <div class="clearfix"></div>

                    <p>Formas compostas vocais são o arroz com feijão da Música Árabe, já que ela é uma tradição predominantemente vocal.</p>

                    <div id="muwashah" class="heading jins text-center full-width">
                        <h3>O Muwashshah</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/muwashah.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Muwashshah</a>
                    </div>
                    <p>
                    	O Muwashshah (plural <em>Muwashahat</em>) é uma forma vocal complexa baseada em poemas Árabes clássicos da Andaluzia (por conta disso <em>muwashahat</em> às vezes são qualificados como Andaluzes ainda que suas melodias compostas sejam invariavelmente da região compreendida entre a Síria e o Egito, e datam apenas do último ou penúltimo séculos).
                    </p>
                    <p>
                        Muwashshah usam com frequência ritmos cíclicos complexos e ímpares (veja <a href="../iqaa.php">iqa‘at</a>) começando em 5/4, e indo até 7/4, 7/8, 10/8, 11/8, 13/8, 17/8 e assim por diante. As melodias de <em>Muwashahat</em> são complexas, com frequência sincopadas e se apoiam nesses <em>iqa‘at</em>.
                    </p>
                    <p>
                        O modo tradicional de executar um <em>muwashah</em> é com um mutrib (vocalista principal) e um conjunto que inclui backing vocals. O <em>mutrib</em> pode pegar uma seção composta e repetir várias vezes, cada vez com uma improvisação ou modulação de <a href="../maqam.php">maqam</a> diferente (essa prática se chama <em>tafrid</em>). Essas improvisações solo se alternam num vai-e-vem com os backing vocals cantando a melodia composta.
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
                                    <span>Gravação de <strong>Muwashah Mala al-Kasat</strong> em <a href="../maqam/rast.php">Maqam Rast</a> por Muhammad Khayri (música por Muhammad ‘Uthman).
                                    </span>
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
                                <span>Gravação de <strong>Muwashah Imla li al-Aqdaha</strong> em <a href="../maqam/bayati.php">Maqam Bayati</a> por Sabah Fakhri.</span>
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
                                    <b>Wasla de Hasan al-Haffar</b>
                                    <span>Gravação de Hasan al-Haffar de uma Wasla Muwashahat em <a href="../maqam/nahawand.php">Maqam Nahawand</a>, composta por Omar al-Batsh.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qadd" class="heading jins text-center full-width">
                        <h3>O Qadd</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/qadd.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Qadd</a>
                    </div>
                    <p>
                        O Qadd (plural <em>qudud</em>) é uma canção tradicional leve e simples que floresceu em Alepo, na Síria. <em>Qudud</em> são geralmente tocados no final de uma wasla, depois de peças mais pesadas como adwar, qasa'id ou muwashahat. As letras de qudud estão no dialeto de Alepo (ou às vezes no egípcio) e são muito acessíveis, pés-no-chão e fáceis de memorizar.
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
                                    <b>Qudud de Muhammad Khayri</b>
                                    <span>Depois de um <a href="improv.php#mawwal">Mawwal Baghdadi</a>, Muhammad Khayri canta os qudud <strong>Awwal ‘Ishrit Mahbubi</strong>, <strong>Zaman Zaman</strong> e <strong>Ah Ya Hilu</strong> em <a href="../maqam/bayati.php">Maqam Bayati</a>.</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="dawr" class="heading jins text-center full-width">
                        <h3>O Dawr</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/dawr.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Dawr</a>
                    </div>
                    <p>
                        O Dawr (plural <em>Adwar</em>) é uma forma composta Egípcia que floresceu por volta da virada do século 19<sup>e</sup> continuou até a década de 1930. O <em>dawr</em> é complexo para compor e executar, e também demanda ao ser cantado, e foi o centro da <a href="#wasla">wasla</a> por um longo tempo. As letras de dawr são sempre em Egípcio coloquial.
                    </p>
                    <p>
                        O <em>dawr</em> geralmente começa com um <a href="instr_comp.php#dulab">dulab</a>, e então diferentes seções vocais, seguidas pelo “Ahat” (uma seção em que o cantor e os backing vocals trocam melodias com a palavra “Ah”, no formato de pergunta e resposta).
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
                                    <span>Su‘ad Muhammad (Líbano) fazendo um cover de <strong>Dawr Inta Fahim</strong> em <a href="../maqam/huzam.php">Maqam Huzam</a>, composto por Zakariya Ahmad.
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
                                    <span><strong>Dawr Ahibb Ashufak Kulli Youm</strong> (1931) em <a href="../maqam/nahawand.php">Maqam Nahawand</a>, por Muhammad Abdel Wahab.
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
                                    <span>Gravação de <strong>Dawr Dayya‘ti Mustaqbal Hayati</strong> em <a href="../maqam/bayati_shuri.php">Maqam Bayati Shuri</a>, por Sabah Fakhri (1914, música por Sayyed Darwish).
                                 </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="taqtuqa" class="heading jins text-center full-width">
                        <h3>A Taqtuqa</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/taqtuqa.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Taqtuqa</a>
                    </div>
                    <p>
                        A Taqtuqa (plural <em>Taqatiq</em>) é a canção árabe padrão de 3 ou 4 minutos com múltiplos versos e um refrão que se repete. <em>Taqatiq</em> geralmente usam <a href="../iqaa.php">iqa‘at</a> simples como <a href="../iqaa/maqsum.php">Iqa‘ Maqsum</a> e possuem letras acessíveis e uma melodia que é simples de memorizar e cantar junto.
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
                                    <span><strong>Hayrana Leh</strong> em <a href="../maqam/rast.php">Maqam Rast</a> por Leila Murad (1930, composto por Dawud Husni).
                                 </span>
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
                                    <span><strong>Ya Dala‘ Dalla‘</strong> por Sabah em <a href="../maqam/rast.php">Maqam Rast</a> (1974, música por Farid al-Atrash).
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
                                    <span>Canção <strong>Min Azzibak</strong> em <a href="../maqam/rast.php">Maqam Rast</a> por Muhammad Abdel Wahab (c.1930s).
                                 </span>
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
                                    <span>Canção <strong>Waraqu il-Asfar</strong> em <a href="../maqam/rast.php">Maqam Rast</a> por Fairouz, composta por Philemon Wehbe.
                                 </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="ughniya" class="heading jins text-center full-width">
                        <h3>A Ughniya (Canção Longa)</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/ughniya.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Ughniya</a>
                    </div>
                    <p>
                        A Ughniya (plural <em>aghani</em>) é uma canção longa desenvolvida a partir de meados do século XX. A ughniya pode durar até uma hora em uma apresentação ao vivo e possui uma introdução longa (veja <a href="instr_comp.php#muqaddima">A Muqaddima</a>) bem como seções múltiplas com modulações completas de maqam. A ughniya geralmente é tocada com uma grande orquestra e conta com cantores célebres como Umm Kulthum, Abdel Halim Hafez e Warda.
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
                                    <span><strong>Qari'at al-Fingan</strong> por Abdel Halim Hafez (1976, composta por Muhammad al-Mugi).
                                 </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="qasida" class="heading jins text-center full-width">
                        <h3>A Qasida (composta)</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/qasida.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Qasida</a>
                    </div>
                    <p> 
                        O Qasida (plural <em>Qasa'id</em>) é um poema com métrica em Árabe clássico, e a forma composta usa (‘using’ in the original, is that correct? Shouldn’t it be ‘uses’?) este poema como sua letra. A <em>qasida</em> geralmente é executado por um vocalista solo acompanhado por um conjunto, e tende a ser longo e elaborado para realçar o vocalista.
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
                                    <span>Qasida <strong>al-Atlal</strong> por Umm Kulthum (1966), composta por Riyad al-Sunbati.
                                 </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="monologue" class="heading jins text-center full-width">
                        <h3>O Monólogo</h3>
                    </div>
                    <p>
                        O Monólogo é uma canção composta baseada vagamente na ária da música operística. Era uma forma popular por volta da metade do século XX. O monólogo é executado por um cantor com um conjunto o acompanhando, e não possui nenhuma seção que se repete, o que significa que continua-se introduzindo novas frases e melodias do começo ao fim.
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
                                    <span>Monólogo <strong>Ya Tuyur</strong> (1941) por Asmahan, composto por Muhammad al-Qasabgi.
                                 </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="duet" class="heading jins text-center full-width">
                        <h3>O Dueto</h3>
                    </div>
                    <p> 
                        O Dueto é uma peça composta que conta com dois cantores, usualmente um homem e uma mulher, cantando juntos ou cada um por vez. Era popular principalmente em filmes e peças do começo do século XX. Por conta disso, as letras dos duetos tendem a ser românticas, dramáticas e teatrais.
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
                                    <span><strong>Ya Din-Na‘im</strong> por Muhammad Abdel Wahab e Leila Murad, composta por Muhammad Abdel Wahab, do filme <strong>Yahya al-Hubb</strong> (1938).
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
                                    <span><strong>Ya Salam ‘Ala Hubbi w Hubbak</strong> por Farid al-Atrash e Shadia, composta por Farid al-Atrash, do filme <strong>Inta Habibi</strong> (1957).
                                 </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div id="wasla" class="heading jins text-center full-width">
                        <h3>A Wasla</h3>
                    </div>
                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/wasla.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Wasla</a>
                    </div>
                    <p> 
                        A Wasla (plural <em>waslat</em>) é uma forma que contém <em>wasla</em> formas que são tocadas consecutivamente como uma unidade, geralmente num mesmo <a href="../maqam.php">maqam</a>. Uma wasla curta pode levar de 5 a 10 minutos, enquanto uma wasla mais longa pode se aproximar de uma hora. As peças dentro da wasla são ordenadas de tal forma que começam devagar e estabelecem o <em>maqam</em> (frequentemente com peças instrumentais), depois apresentam uma peça vocal complexa e exigente. A <em>wasla</em> finalmente termina com peças simples e curtas, criando um arco geral cujo ápice está no meio.
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
                                    <span>Wasla de Saleh Abdel Hayy em <a href="../maqam/rast.php">Maqam Rast</a> com um <a href="improv.php#taqsim">Taqsim</a> no oud(link), parte de um <a href="ottoman.php#samai">Sama‘i</a> Rast por Tatyos Effendi, um Taqsim para <a href="../instr/violin.php">violino</a>, <a href="improv.php#layali">Layali</a> acompanhadas pelo <a href="../instr/qanun.php">qanun</a>, e finalmente a <a href="vocal_comp.php#taqtuqa">Taqtuqa</a> <strong>Leh Ya Banafseg</strong> (1961), composta por Riyad al-Sunbati.
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
                                    <span> Uma Wasla em <a href="../maqam/rast.php">Maqam Rast</a> pelo cantor Egípcio ‘Abbas al-Bleidi incluindo um <a href="../form/improv.php#taqsim">Taqsim</a> no <a href="../instr/oud.php">oud</a> por George Michel, parte de uma <a href="ottoman.php#samai">Sama‘i</a> Rast por Tatyos Effendi, um Taqsim no <a href="../instr/violin.php">violino</a> por Muhammad al-‘Aqqad, Muwashah Atani Zamani, um Taqsim de <a href="../instr/qanun.php">qanun</a> por Fihmi ‘Awad, então Layali, e finalmente <strong>Dawr ‘Ishna w Shufna</strong> (composta por Muhammad ‘Uthman).
                                 </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore outros grupos de formas:</p>
                    <ul>
                        <!-- Formas Vocais Compostas -->
                        <li><a href="instr_comp.php">Formas Instrumentais Compostas</a></li>
                        <li><a href="ottoman.php">Formas Instrumentais Otomanas</a></li>
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
