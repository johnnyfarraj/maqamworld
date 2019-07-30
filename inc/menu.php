    <header>
        <!-- Logo and Search bar -->
        <div class="container">
            <!-- Logo -->
            <a href="<?php echo '/'.$page_language; ?>/index.php" class="logo"><img src="/img/logo.jpg"></a>

            <!-- Mobile Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="clearfix d-block d-md-none"></div>

            <!-- Search bar -->
            <?php if($page_language == "en") { ?>
            <form class="search-bar" action="/en/results.php" method="get">
                <input type="search" placeholder="Search" class="form-control" name="search" autocomplete="off" name="q">
                <button type="submit"><i class="fa fa-fw fa-search"></i></button>
            </form>
            <?php } else if($page_language == "ar") { ?>
            <form class="search-bar" action="/ar/results.php" method="get">
                <input type="search" placeholder="بحث" class="form-control" name="search" autocomplete="off" name="q">
                <button type="submit"><i class="fa fa-fw fa-search"></i></button>
            </form>
            <?php } else if($page_language == "fr") { ?>
            <form class="search-bar" action="/fr/results.php" method="get">
                <input type="search" placeholder="Recherche" class="form-control" name="search" autocomplete="off" name="q">
                <button type="submit"><i class="fa fa-fw fa-search"></i></button>
            </form>
            <?php } else if($page_language == "de") { ?>
            <form class="search-bar" action="/de/results.php" method="get">
                <input type="search" placeholder="Suche" class="form-control" name="search" autocomplete="off" name="q">
                <button type="submit"><i class="fa fa-fw fa-search"></i></button>
            </form>
            <?php } else if($page_language == "it") { ?>
            <form class="search-bar" action="/it/results.php" method="get">
                <input type="search" placeholder="Ricerca" class="form-control" name="search" autocomplete="off" name="q">
                <button type="submit"><i class="fa fa-fw fa-search"></i></button>
            </form>
            <?php } ?>

            <!-- Language Selector -->
            <?php
            $languages_array = [
                "en" => "English",
                "fr" => "Français",
                "ar" => "العربية",
                "de" => "Deutsch",
                "it" => "Italiano"
            ];
            ?>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $languages_array[$page_language]; ?>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <?php
                        foreach($languages_array as $short => $long) {
                            if($short == $page_language) {
                                $link = "#";
                            } else {
                                $link = "/".$short."/".str_replace($page_language."/", "", $page);
                            }
                            echo '<a class="dropdown-item" href="'.$link.'">'.$long.'</a>';
                        }
                    ?>
                </div>
            </div>

            <!-- Clearfix (DO NOT REMOVE) -->
            <div class="clearfix"></div>
        </div>

        <!-- FRENCH Navigation -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <!-- Navbar -->
                <?php if($page_language == "en") { ?>
	                <?php include($ROOT . 'en/navbar.php');?>
                <?php } else if($page_language == "ar") { ?>
	                <?php include($ROOT . 'ar/navbar.php');?>
                <?php } else if($page_language == "fr") { ?>
	                <?php include($ROOT . 'fr/navbar.php');?>
                <?php } else if($page_language == "de") { ?>
	                <?php include($ROOT . 'de/navbar.php');?>
                <?php } else if($page_language == "it") { ?>
	                <?php include($ROOT . 'it/navbar.php');?>
                <?php } ?>
            </div>
        </nav>
    </header>

    <!-- Pronuncation player -->
    <div style="opacity:0;visibility:hidden;position:absolute;z-index:-99;">
        <audio id="pronunciation-player" controls>
            <source src="/name/ajam.mp3" type="audio/mp3">
        </audio>
    </div>