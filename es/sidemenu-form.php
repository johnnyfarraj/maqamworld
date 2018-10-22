<?php defined('_DEFVAR') or exit('Restricted Access'); ?>
<ul class="sub-menu">
    <li class="d-block d-sm-none"><a href="#" class="hide-side-menu"><i class="fa fa-fw fa-times"></i></a></li>

    <li><a href="/es/form/ottoman.php#bashraf">Bashraf</a></li>
    <li><a href="/es/form/instr_comp.php#darij">Darij</a></li>
    <li><a href="/es/form/vocal_comp.php#dawr">Dawr</a></li>
    <li><a href="/es/form/vocal_comp.php#duet">Duett</a></li>
    <li><a href="/es/form/instr_comp.php#dulab">Dulab</a></li>
    <li><a href="/es/form/improv.php#layali">Layali</a></li>
    <li><a href="/es/form/ottoman.php#longa">Longa</a></li>
    <li><a href="/es/form/instr_comp.php#maqtua">Maqtu‘a</a></li>
    <li><a href="/es/form/improv.php#mawwal">Mawwal</a></li>
    <li><a href="/es/form/vocal_comp.php#monologue">Monolog</a></li>
    <li><a href="/es/form/vocal_comp.php#muwashah">Muwashah</a></li>
    <li><a href="/es/form/vocal_comp.php#qadd">Qadd</a></li>
    <li><a href="/es/form/vocal_comp.php#qasida">Qasida (komponierte)</a></li>
    <li><a href="/es/form/improv.php#qasida">Qasida (improvisierte)</a></li>
    <li><a href="/es/form/ottoman.php#samai">Sama‘i</a></li>
    <li><a href="/es/form/instr_comp.php#tahmila">Tahmila</a></li>
    <li><a href="/es/form/improv.php#taqsim">Taqsim</a></li>
    <li><a href="/es/form/vocal_comp.php#taqtuqa">Taqtuqa</a></li>
    <li><a href="/es/form/vocal_comp.php#ughniya">Ughniya</a></li>
    <li><a href="/es/form/vocal_comp.php#wasla">Wasla</a></li>

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