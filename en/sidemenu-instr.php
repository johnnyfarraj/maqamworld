<?php defined('_DEFVAR') or exit('Restricted Access'); ?>
<ul class="sub-menu">
    <li class="d-block d-sm-none"><a href="#" class="hide-side-menu"><i class="fa fa-fw fa-times"></i></a></li>
    <li><a href="/en/instr/accordion.php">Accordion</a></li>
    <li><a href="/en/instr/buzuq.php">Buzuq</a></li>
    <li><a href="/en/instr/daff.php">Daff</a></li>
    <li><a href="/en/instr/mazhar.php">Egyptian Mazhar</a></li>
    <li><a href="/en/instr/guitar.php">Electric Guitar</a></li>
    <li><a href="/en/instr/org.php">Electric Organ (Org)</a></li>
    <li><a href="/en/instr/katim.php">Katim</a></li>
    <li><a href="/en/instr/nay.php">Nay</a></li>
    <li><a href="/en/instr/keyboard.php">Oriental Keyboard</a></li>
    <li><a href="/en/instr/oud.php">Oud ('Ud)</a></li>
    <li><a href="/en/instr/piano.php">Piano</a></li>
    <li><a href="/en/instr/qanun.php">Qanun</a></li>
    <li><a href="/en/instr/riqq.php">Riqq</a></li>
    <li><a href="/en/instr/sagat.php">Sagat</a></li>
    <li><a href="/en/instr/saxophone.php">Saxophone</a></li>
    <li><a href="/en/instr/tabla.php">Tabla</a></li>
    <li><a href="/en/instr/tabl_baladi.php">Tabl Baladi</a></li>
    <li><a href="/en/instr/trumpet.php">Trumpet</a></li>
    <li><a href="/en/instr/violin.php">Violin</a></li>
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