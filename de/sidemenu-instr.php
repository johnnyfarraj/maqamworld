<?php defined('_DEFVAR') or exit('Restricted Access'); ?>
<ul class="sub-menu">
    <li class="d-block d-sm-none"><a href="#" class="hide-side-menu"><i class="fa fa-fw fa-times"></i></a></li>

    <li><a href="/de/instr/accordion.php">Arabisches Akkordeon</a></li>
    <li><a href="/de/instr/buzuq.php">Buzuk</a></li>
    <li><a href="/de/instr/daff.php">Daf</a></li>
    <li><a href="/de/instr/mazhar.php">Ägyptisches Mazhar</a></li>
    <li><a href="/de/instr/guitar.php">Elektrische Gitarre</a></li>
    <li><a href="/de/instr/org.php">Elektrische Orgel</a></li>
    <li><a href="/de/instr/katim.php">Katim</a></li>
    <li><a href="/de/instr/nay.php">Nay</a></li>
    <li><a href="/de/instr/keyboard.php">Orientalisches Keyboard</a></li>
    <li><a href="/de/instr/oud.php">Oud (‘Ud)</a></li>
    <li><a href="/de/instr/piano.php">Arabisches Klavier</a></li>
    <li><a href="/de/instr/qanun.php">Kanun</a></li>
    <li><a href="/de/instr/riqq.php">Riq</a></li>
    <li><a href="/de/instr/sagat.php">Sagat</a></li>
    <li><a href="/de/instr/saxophone.php">Saxofon</a></li>
    <li><a href="/de/instr/tabla.php">Tabla (Dirbakki)</a></li>
    <li><a href="/de/instr/tabl_baladi.php">Tabl Baladi</a></li>
    <li><a href="/de/instr/trumpet.php">Trompete</a></li>
    <li><a href="/de/instr/violin.php">Violine</a></li>
</ul>

<!-- Accept Hash after URL -->
<script>
    $(document).ready(function() {
        var hash = window.location.hash;
        if(hash != "") {
            $("a:regex(href, .*" + hash + "$)").parent().addClass("active");
        }
        $(".sub-menu li a:regex(href, ^" + window.location.pathname +"#.*)").click(function(e) {
            e.preventDefault();
            $(".sub-menu li").removeClass("active");
            $(this).parent().addClass("active");
            var element = $(this).prop("hash");
            $('html, body').animate({
                scrollTop: $(element).offset().top - $("header").outerHeight() - 5
            }, 600);
        })
        if (location.hash) {
            var element = location.hash;
            $('html, body').animate({
                scrollTop: $(element).offset().top - $("header").outerHeight() - 5
            }, 600);
        }
    })
</script>