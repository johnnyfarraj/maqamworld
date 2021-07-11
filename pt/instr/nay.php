<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "O Nay";
$page_description = "O Nay";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, arabic violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/nay.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="show-side-menu d-none d-md-block btn btn-primary above-list"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <?php include('../sidemenu-instr.php'); ?>
                </div>
                <div class="col-md-9 col-sm-9">

                    <div class="heading jins text-center">
                        <h1>O Nay</h1>
                        <h3>Uma flauta soprada pela extremidade</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/nay.jpg" alt="O Nay">
                        <span>Um conjunto de 7 nayat libaneses feitos por Atif Wehbi. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/name/nay.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Nay</a>
                    </div>

                    <p>O Nay ("junco" em farsi) é uma flauta aberta e soprada transversalmente feita de cana. O Nay é conhecido no Oriente Próximo desde a antiguidade. Tem nove juntas e geralmente 6 orifícios na frente para os dedos tocarem e 1 orifício na parte inferior para o polegar. É tocado com as pontas dos dedos. Nays têm diferentes comprimentos, cada um deles afinado em uma altura específica e chamado pelo nome da nota produzida com o primeiro orifício aberto (Ré 4) para o Nay mais comumente utilizado; nota mais grave: Dó 3).
                    </p>
                    
                    <p>Embora muito simples, o Nay é um dos instrumentos árabes mais difíceis de tocar. Um bom instrumentista pode produzir uma grande variedade de sons e ornamentos; é um instrumento extremamente comovente. Seu timbre poético o torna especialmente adequado para efeitos melancólicos que expressam tanto alegria quanto anseio. É o único instrumento de sopro usado na música clássica árabe, amplamente apreciado por seu som cálido e soproso e suas sutis inflexões tonais e dinâmicas.
                    </p>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=JhOs_1SodTA&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/JhOs_1SodTA/hqdefault.jpg">
                                    </div>
                                </div>
                             <div class="info">
                                    <b>Sayyed Salem</b>
                                    <span>Sayyed Salem (Egito), um membro de longa data da Umm Kulthum Orchestra (Egito) em um solo de Nay durante a canção <strong>Ba‘id ‘Annak</strong> (1965, composição de Baligh Hamdi)
                                 </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=D2oBZADKIS4&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/D2oBZADKIS4/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Mahmud ‘Effat</b>
                                    <span>O instrumentista e professor veterano Mahmud ‘Effat (Egito), um membro de longa data da Orquestra Diamante em um Taqsim no Nay em <a href="../maqam/saba.php">Maqam Saba</a></span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=5OflJML1yF8&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/5OflJML1yF8/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Reda Bdeir</b>
                                    <span>Reda Bdeir (Egito) toca a canção Kulli Da Kan Leh (1954, composição de Muhammad Abdel Wahab)</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=CozVcLFpOeM&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/CozVcLFpOeM/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Michael Ibrahim</b>
                                    <span>Michael Ibrahim (Síria), diretor da National Arab Orchestra (EUA) em um Taqsim no Nay em <a href="../maqam/saba.php">Maqam Saba</a> durante uma apresentação ao vivo da NAO
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore outros instrumentos tradicionais:</p>
                    <ul>
                        <li><a href="oud.php">O Oud</a></li>
                        <li><a href="qanun.php">O Qanoun</a></li>
                        <li><a href="violin.php">O Violino Árabe</a></li>
                        <li><a href="buzuq.php">O Buzuq</a></li>
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
