<?php

/* Must be relative path */
include('../../inc/config.php');

/* SEO settings for this page */
$page_title = "O Buzuq";
$page_description = "O Buzuq";
$page_keywords = "arabic, music, istruments, arab world, middle east, oud, 'ud, qanun, nay, buzuq, arabic violin";
$page_language = "pt";

include($ROOT . 'inc/head.php');
?>

  <body class="instruments-page">

    <?php
      $page = "pt/instr/buzuq.php";
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
                        <h1>O Buzuq</h1>
                        <h3>Um alaúde pequeno de braço longo com trastes</h3>
                    </div>

                    <a href="#" class="show-side-menu d-block d-md-none btn btn-primary"><i class="fa fa-fw fa-bars"></i> Índice de Instrumentos</a>
                    <div class="clearfix"></div>

                    <div class="image-with-caption">
                        <img src="/instr/buzuq.jpg" alt="O Buzuq">
                        <span>Dois buzuq-s feitos no Líbano. &copy; MaqamWorld</span>
                    </div>

                    <div class="text-center mt-2 mb-3 mobile-left">
                        <a href="#" class="pronunciation btn btn-default" data-audio="/audio/name/buzuq.mp3"><i class="fa fa-fw fa-volume-up"></i> Pronúncia de Buzuq</a>
                    </div>

                    <p>O Buzuq é um instrumento de cordas da família do <a href="oud.php">alaúde</a> com um corpo menor e um braço mais longo e com trastes. Em relação ao seu formato, é mais próximo do <em>Bouzouki</em> grego e do <em>Saz</em> turco. O Buzuq é originalmente um instrumento típico do Mediterrâneo Oriental (Palestina, Jordânia, Líbano e Síria), que é geralmente tocado solo. Mas está listado junto aos outros instrumentos tradicionais porque adentrou a música árabe popular em meados do século XX. Desde então, já apareceu em muitas gravações e apresentações ao vivo, tornando-se parte do conjunto árabe.
                    </p>
                    <p>
                    O Buzuq tradicional tinha duas fileiras de cordas de metal, uma dupla (Dó 4) e uma tripla (Sol 3), tocadas com um fino pedaço de chifre ou palheta de plástico. Hoje, os <em>buzuq</em>-s são feitos com três fileiras de cordas para expandir sua extensão. As cordas de metal, junto com as cravelhas metálicas (idênticas às de uma guitarra) conferem ao instrumento um som brilhante, enquanto a distribuição dos trastes cobre os quartos de tom mais comuns. Aliado ao fato de que o instrumentista pode mover os trastes levemente para ajustar sua afinação, isso permite que o buzuq execute as escalas <a href="../maqam.php">maqam</a> mais comuns com razoável precisão.
                    </p>
                    
                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=isAhZyRcA0M&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/isAhZyRcA0M/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Muhyiddin Ba‘yun</b>
                                    <span>O instrumentista e cantor libanês Muhyiddin Ba‘yun toca um Taqsim no Buzuq no <a href="../maqam/bayati.php">Maqam Bayati</a>
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IhiVXmTMihk&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IhiVXmTMihk/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Muhammad Abdel Karim</b>
                                    <span>O músico sírio Muhammad Abdel Karim (conhecido como “O Príncipe do Buzuq”) toca um Taqsim no Buzuq. Abdel Karim nos deixou muitas gravações, e seu estilo era doce e meditativo.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=TpNCZQguy9k&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/TpNCZQguy9k/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Matar Muhammad</b>
                                    <span>O virtuoso libanês Matar Muhammad toca um Taqsim no Buzuq em um concerto ao vivo. Os taqasim de Muhammad elevaram o buzuq ao mesmo nível de qualquer um dos outros instrumentos tradicionais árabes por sua complexidade, técnica, ornamentação, modulações de maqam e duração.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=IH9ONkilJkE&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/IH9ONkilJkE/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Zoro Yussef</b>
                                    <span>O instrumentista libanês-curdo Zoro Yussef (Zoro Seîd Yûsiv) toca um Taqsim no Buzuq em <a href="../maqam/rast.php">Maqam Rast</a>, em transmissão ao vivo na televisão libanesa.
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="youtube-track" data-youtube="https://www.youtube.com/watch?v=dPdFIgFkkog&t=0s">
                        <div class="radio">
                            <label>
                                <div class="thumb-area">
                                    <div class="thumb">
                                        <img src="https://img.youtube.com/vi/dPdFIgFkkog/hqdefault.jpg">
                                    </div>
                                </div>
                                <div class="info">
                                    <b>Marhabtayn</b>
                                    <span>A diva libanesa Sabah em sua canção <strong>Marhabtayn</strong> (gravada ao vivo no Kuwait) com um buzuq em sua orquestra (regida pelo violinista Abbud Abdel ‘Al).</span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <p>Explore outros instrumentos tradicionais:</p>
                    <ul>
                        <li><a href="oud.php">O Oud</a></li>
                        <li><a href="qanun.php">O Qanoun</a></li>
                        <li><a href="nay.php">O Nay</a></li>
                        <li><a href="violin.php">O Violino Árabe</a></li>
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
