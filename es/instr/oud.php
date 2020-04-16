<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "El Oud";
$page_description = "El Oud";
$page_keywords = "Instrumentos Árabes Tradicionales, El Buzuq, El Nay, El Oud, El Qanun, El Violin";
$page_language = "es";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "en/instr/oud.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>El Oud (Ud)</h1>
                        <h3>Un laúd sin trastes</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de los Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/oud.jpg" alt="El Oud">
                        <span>TODO Syrian oud made by Nahat Brothers (right) and Iraqi oud made by Muhammad Fadil (left). &copy; 2018 MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/oud.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronunciación de Oud</a>
                    </div>

                    <p>
                        El Oud (también escrito "Ud") es uno de los instrumentos más populares en la música árabe. Su nombre significa "una tira delgada de madera" en árabe, y se refiere a las tiras de madera utilizadas para hacer su cuerpo en forma de pera. El cuello del oud es corto en comparación con su cuerpo y no tiene trastes. Esto permite que el sonido logre una excelente entonación y lo hace ideal para realizar el <a href="../maqam.php">maqamat</a> árabe.
                    </p>
                    <p>
                        El sonido generalmente tiene 5 pares de cuerdas sintonizadas al unísono y una sola cuerda de bajo, aunque algunos sonidos tienen un par adicional. La afinación más común (baja a alta) es C, F, A, D, G, C, lo que hace que todos los intervalos (excepto F a A) sean cuartos perfectos. Las cuerdas se hicieron históricamente de tripas de animales, y fueron arrancadas con una púa conocida como <em>risha</em> (árabe para pluma). Las cuerdas modernas están hechas de acero enrollado sobre nylon, y las rishas modernas están hechas de plástico, concha de tortuga, cuerno de animal o incluso bambú.
                    </p>
                    <p>
                        El oud tiene un timbre cálido y un amplio rango tonal (aproximadamente 3 octavas), y puede transmitir la melodía y el ritmo igualmente bien porque es percusivo. Esto hace que sea perfectamente adecuado para acompañar a un cantante. También es el instrumento favorito de los compositores para escribir una nueva melodía. Oud <a href="../form/improv.php#taqsim">taqasim</a> también es muy popular en los conciertos en vivo y en las grabaciones.
                    </p>
                    <p>
                        El oud árabe es en general el mismo instrumento que existe en muchos otros países de la región (por ejemplo, Turquía, Grecia, Irán) con pequeñas diferencias en las dimensiones, el estilo y el timbre. El "laúd" europeo es un descendiente del oud, del cual toma su nombre (al-oud).
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dDrVYyoMi-4&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dDrVYyoMi-4/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Muhammad al-Qasabgi</b>
                                    <span>Egyptian oud virtuoso and composer Muhammad al-Qasabgi playing some Taqasim in <a href="../maqam/rast.php">Maqam Rast</a>.
                                    (Recorded at the Arabic Music Conservatory, Cairo, 1955)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=zGoY5QYLnYs&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/zGoY5QYLnYs/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Farid al-Atrash</b>
                                    <span>Syrian oud virtuoso Farid al-Atrash (also known as the "King of Oud") playing a very famous Oud Taqsim in <a href="../maqam/bayati.php">Maqam Bayati</a> preceding his composition "al-Rabi‘" (1949)</span>
                                </div>
                            </label>
                        </div>
                    </div>

			         <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=OCmheJ929fo&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/OCmheJ929fo/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>Simon Shaheen</b>
                                    <span>Palestinian oud player Simon Shaheen plays an in <a href="../maqam/hijaz.php">Maqam Hijaz</a>, recorded at the Metropolitan Museum in New York, 1987</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=Jf3WeItCpXA&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/Jf3WeItCpXA/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>George Michel</b>
                                    <span>Egyptian oud player George Michel playing an Oud Taqsim in <a href="../maqam/nahawand.php">Maqam Nahawand</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=7iB4JFYArFg&t=0">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/7iB4JFYArFg/hqdefault.jpg">
                                    </div>
                                </div><!--
                             --><div class="info">
                                    <b>‘Amer ‘Ammouri</b>
                                    <span>Syrian oud player ‘Amer ‘Ammouri playing an Oud Taqsim in <a href="../maqam/bayati.php">Maqam Bayati</a>, as part of Sabah Fakhri's orchestra (recorded at the Cairo Opera House)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore otros instrumentos tradicionales:</p>
                    <ul>
                        <li><a href="nay.php">El Nay</a></li>
                        <li><a href="qanun.php">El Qanun</a></li>
                        <li><a href="violin.php">El Violin Árabe</a></li>
                        <li><a href="buzuq.php">El Buzuq</a></li>
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
