<?php defined('_DEFVAR') or exit('Restricted Access'); ?>
<ul class="sub-menu">
    <li class="d-block d-sm-none"><a href="#" class="hide-side-menu"><i class="fa fa-fw fa-times"></i></a></li>
    <li><a href="/ar/form/vocal_comp.php#ughniya">الأغنية</a></li>
    <li><a href="/ar/form/ottoman.php#bashraf">البشرف</a></li>
    <li><a href="/ar/form/instr_comp.php#tahmila">التحميلة</a></li>
    <li><a href="/ar/form/improv.php#taqsim">التقسيم</a></li>
    <li><a href="/ar/form/vocal_comp.php#dawr">الدَور</a></li>
    <li><a href="/ar/form/vocal_comp.php#duet">الدُويت</a></li>
    <li><a href="/ar/form/instr_comp.php#darij">الدارج</a></li>
    <li><a href="/ar/form/instr_comp.php#dulab">الدولاب</a></li>
    <li><a href="/ar/form/ottoman.php#samai">السماعي</a></li>
    <li><a href="/ar/form/vocal_comp.php#taqtuqa">الطقطوقة</a></li>
    <li><a href="/ar/form/vocal_comp.php#qadd">القَدّ</a></li>
    <li><a href="/ar/form/improv.php#qasida">القصيدة المُرسلة</a></li>
    <li><a href="/ar/form/vocal_comp.php#qasida">القصيدة المُلحّنة</a></li>
    <li><a href="/ar/form/ottoman.php#longa">اللونجا</a></li>
    <li><a href="/ar/form/improv.php#layali">الليالي</a></li>
    <li><a href="/ar/form/instr_comp.php#maqtua">المقطوعة</a></li>
    <li><a href="/ar/form/vocal_comp.php#muwashah">الموَشّح</a></li>
    <li><a href="/ar/form/improv.php#mawwal">الموّال</a></li>
    <li><a href="/ar/form/vocal_comp.php#monologue">المونولوج</a></li>
    <li><a href="/ar/form/vocal_comp.php#wasla">الوصلة</a></li>
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