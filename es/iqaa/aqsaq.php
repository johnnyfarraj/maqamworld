<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "Iqa‘ Aqsaq";
$page_description = "Iqa‘ Aqsaq";
$page_keywords = "sistema modal, música árabe tradicional, árabe, maqam, jins, iqaa, ritmo, formas, instrumentos, Ciclos Rítmicos Árabes, El Iqa‘, Iqa‘ Aqsaq 9/8";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="iqaas-page">

    <?php
      $page = "es/iqaa/aqsaq.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <?php include('../sidemenu-iqaa.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>Iqa‘ Aqsaq 9/8</h1>
                    </div>
                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Iqa‘</a>
                    <div class="clearfix"></div>

                    <div class="text-center mt-2 mb-3">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/aqsaq.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Aqsaq</a>
                    </div>

                    <div class="notation">
                        <img src="/note/iqaa/aqsaq_f1.png" class="img-fluid">
                    </div>

                    <p>
                        Iqa‘ Aqsaq es muy popular en el género vocal <a href="../form/vocal_comp.php#muwashah">Muwashah</a>. Tiene un tiempo menos que el <a href="samai_thaqil.php">Iqa‘ Sama‘i Thaqil</a> pero a veces se puede tocar inmediatamente antes o después de una pieza en ese iqa‘, sin interrupción, durante una <a href="../form/vocal_comp.php#wasla">Wasla</a>.
					</p>

                    <div class="player-area">
                        <audio id="player" controls loop>
                            <source src="/audio/iqaa/aqsaq_form1/ma_htiyali.mp3" type="audio/mp3">
                        </audio>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/ma_htiyali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1" >
                                <div class="info">
                                    <b>Muwashah Ma-htiyali</b>
                                    <span>Louis Hage &amp; Aida Chalhoub</span>
                                    <span><img src="/img/cd.png"> Mouwashah - Chants Arabo-andalous</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/ana_min_wajdi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ana Min Wajdi Ana</b>
                                    <span>Aicha Redouane</span>
                                    <span><img src="/img/cd.png"> Egypte</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/jalla_man_bil_husni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Jalla Man Bil Husni Sawwar</b>
                                    <span>Orquesta Abdel Halim Noueira</span>
                                    <span>Música de Kamel al-Khula‘i</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/el_sama3_wel_rah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah el-Sama‘ wel-Rah</b>
                                    <span>Ibrahim el-Haggar</span>
                                    <span>Música de Dawud Husni</span>
                                </div>
                            </label>
                        </div>
                    </div>
                   
                    <div class="track" data-song="/audio/iqaa/aqsaq_form1/bashraf_bulbul_al_afrah.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Bashraf Bulbul al-Afrah</b>
                                    <span>Conjunto Morkos (Líbano)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/aqsaq_form1.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Aqsaq 9/8 - Form I</b>
                                    <span>Demostración en el Tabla por Faisal Zedan</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <br>
                    <div class="heading jins text-center">
                        <h3>Segunda forma de Iqa‘ Aqsaq</h3>
                    </div>
                    <div class="notation">
                        <img src="/note/iqaa/aqsaq_f2.png" class="img-fluid">
                    </div>
					<br>
                    <p>Una forma alternativa de Aqsaq reemplaza el silencio del sexto tiempo con otro dum, creando así una secuencia de 2 sonidos <em>dum</em> consecutivos que evoca <a href="samai_thaqil.php">Iqa‘ Sama‘i Thaqil</a>.
					</p>
					<br>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/ma_htiyali.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ma-htiyali</b>
                                    <span>Conjunto Al-Turath</span>
                                    <span><img src="/img/cd.png"> The Music In Spanish Al Andalus - Hijaz</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/ayyuha_al_saqi.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Ayuha al-Saqi</b>
                                    <span>Sabah Fakhri</span>
                                    <span>Música de Majdi al-‘Aqili</span>
                                    <span><img src="/img/cd.png"> Beiteddine Festival Vol. 1</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/azzibuni.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah ‘Adhibuni</b>
                                    <span>Conjunto Al-Kindi</span>
                                    <span>Música de Omar al-Batsh</span>
                                    <span><img src="/img/cd.png"> The Aleppian Music Room Vol. 1 - Hijazkar Kurd &amp; Saba</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track" data-song="/audio/iqaa/aqsaq_form2/bi_abi_bahil_jamal.mp3">
                        <div class="radio">
                            <label>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Muwashah Bi Abi Bahi al-Jamal</b>
                                    <span>Muhammad Khayri (Siria)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="track demo-track" data-song="/demo/iqaa/tabla/aqsaq_form2.mp3">
                        <div class="radio">
                            <label>
                            	<div class="thumb-area"><img src="/img/tabla.png" class=""></div>
                                <input type="radio" name="song" value="1">
                                <div class="info">
                                    <b>Iqa‘ Aqsaq 9/8 - Form II</b>
                                    <span>Demostración en el Tabla por Faisal Zedan</span>
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

    <?php include($ROOT . 'es/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

  </body>
</html>