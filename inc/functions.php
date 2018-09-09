<?php
function sort_by_name($a,$b) {
    return preg_replace('/[^A-Za-z0-9\- ]/', '', $a[1]) > preg_replace('/[^A-Za-z0-9\- ]/', '', $b[1]);
}
function sort_by_name_de($a,$b) {
    return preg_replace('/[^A-Za-z0-9\- ]/', '', $a[3]) > preg_replace('/[^A-Za-z0-9\- ]/', '', $b[3]);
}
function sort_by_name_ar($a,$b) {
    return preg_replace('/[^A-Za-z0-9\- ]/', '', $a[2]) > preg_replace('/[^A-Za-z0-9\- ]/', '', $b[2]);
}
function generateSideMenu($sidemenu_items, $page, $page_language) {
    
    if($page_language == "en") {
        /* sort by 2nd column */
        uasort($sidemenu_items,"sort_by_name");

    } else if($page_language == "ar") {
        /* sort by 3rd column */
        uasort($sidemenu_items,"sort_by_name_ar");
    } else if($page_language == "de") {
        /* sort by 4th column */
        uasort($sidemenu_items,"sort_by_name_de");
    }
    
    echo '<ul class="sub-menu">';
        echo '<li class="d-block d-sm-none"><a href="#" class="hide-side-menu"><i class="fa fa-fw fa-times"></i></a></li>';
        foreach($sidemenu_items as $item) {
            echo '<li';
            if($page == $page_language."/".$item[0]) { echo ' class="active"'; }
            echo '>';
                echo '<a href="/'.$page_language.'/'.$item[0].'">';
                if($page_language == "en") {
                    echo $item[1];
                } else if($page_language == "ar") {
                    echo $item[2];
                } else if($page_language == "de") {
                    echo $item[3];
                }
                echo '</a>';
            echo '</li>';
        }
    echo '</ul>';
}
?>