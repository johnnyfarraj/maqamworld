<?php defined('_DEFVAR') or exit('Restricted Access'); ?>
<ul class="sub-menu">
    <li class="d-block d-sm-none"><a href="#" class="hide-side-menu"><i class="fa fa-fw fa-times"></i></a></li>

    <li><a href="/es/instr/accordion.php">Arabisches Akkordeon</a></li>
    <li><a href="/es/instr/buzuq.php">Buzuk</a></li>
    <li><a href="/es/instr/daff.php">Daf</a></li>
    <li><a href="/es/instr/mazhar.php">Ägyptisches Mazhar</a></li>
    <li><a href="/es/instr/guitar.php">Elektrische Gitarre</a></li>
    <li><a href="/es/instr/org.php">Elektrische Orgel</a></li>
    <li><a href="/es/instr/katim.php">Katim</a></li>
    <li><a href="/es/instr/nay.php">Nay</a></li>
    <li><a href="/es/instr/keyboard.php">Orientalisches Keyboard</a></li>
    <li><a href="/es/instr/oud.php">Oud (‘Ud)</a></li>
    <li><a href="/es/instr/piano.php">Arabisches Klavier</a></li>
    <li><a href="/es/instr/qanun.php">Kanun</a></li>
    <li><a href="/es/instr/riqq.php">Riq</a></li>
    <li><a href="/es/instr/sagat.php">Sagat</a></li>
    <li><a href="/es/instr/saxophone.php">Saxofon</a></li>
    <li><a href="/es/instr/tabla.php">Tabla (Dirbakki)</a></li>
    <li><a href="/es/instr/tabl_baladi.php">Tabl Baladi</a></li>
    <li><a href="/es/instr/trumpet.php">Trompete</a></li>
    <li><a href="/es/instr/violin.php">Violine</a></li>
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