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
            <?php } else if($page_language == "de") { ?>
            <form class="search-bar" action="/de/results.php" method="get">
                <input type="search" placeholder="Suche" class="form-control" name="search" autocomplete="off" name="q">
                <button type="submit"><i class="fa fa-fw fa-search"></i></button>
            </form>
            <?php } ?>

            <!-- Language Selector -->
            <?php
            $languages_array = [
                "en" => "English",
                "de" => "Deutsch",
                "ar" => "العربية"
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

        <!-- Navigation -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">

                <?php if($page_language == "en") { ?>
                <!-- Navbar -->
                <div class="collapse navbar-collapse" id="navbarDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?php if($page == "en/index.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/en/index.php"><i class="fa fa-fw fa-home"></i></a>
                        </li>
                        <li class="nav-item <?php if($page == "en/instr.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/en/instr.php">Instruments</a>
                        </li>
                        <li class="nav-item <?php if($page == "en/forms.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/en/forms.php">Forms</a>
                        </li>
                        <li class="nav-item <?php if($page == "en/jins.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/en/jins.php">Jins</a>
                        </li>
                        <li class="nav-item <?php if($page == "en/maqam.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/en/maqam.php">Maqam</a>
                        </li>
                        <li class="nav-item <?php if($page == "en/iqaa.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/en/iqaa.php">Rhythms</a>
                        </li>
                        <li class="nav-item <?php if($page == "en/book.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/en/book.php">Book</a>
                        </li>
                    </ul>
                </div>
                <?php } else if($page_language == "ar") { ?>
                <!-- Navbar -->
                <div class="collapse navbar-collapse" id="navbarDefault">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?php if($page == "ar/index.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/ar/index.php"><i class="fa fa-fw fa-home"></i></a>
                        </li>
                        <li class="nav-item <?php if($page == "ar/instr.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/ar/instr.php">الآلات</a>
                        </li>
                        <li class="nav-item <?php if($page == "ar/forms.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/ar/forms.php">القوالب</a>
                        </li>
                        <li class="nav-item <?php if($page == "ar/jins.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/ar/jins.php">الاجناس</a>
                        </li>
                        <li class="nav-item <?php if($page == "ar/maqam.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/ar/maqam.php">المقامات</a>
                        </li>
                        <li class="nav-item <?php if($page == "ar/iqaa.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/ar/iqaa.php">الايقاعات</a>
                        </li>
                        <li class="nav-item <?php if($page == "ar/book.php") { echo "active"; } ?>">
                            <a class="nav-link" href="/ar/book.php">الإصدارات</a>
                        </li>
                    </ul>
                </div>
                <?php } else if($page_language == "de") { ?>
                <!-- Navbar -->
                <div class="collapse navbar-collapse" id="navbarDefault">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item <?php if($page == "de/index.php") { echo "active"; } ?>">
							<a class="nav-link" href="/de/index.php"><i class="fa fa-fw fa-home"></i></a>
						</li>
						<li class="nav-item <?php if($page == "ar/instr.php") { echo "active"; } ?>">
							<a class="nav-link" href="/de/instr.php">Instrumente</a>
						</li>
						<li class="nav-item <?php if($page == "ar/forms.php") { echo "active"; } ?>">
							<a class="nav-link" href="/de/forms.php">Formen</a>
						</li>
						<li class="nav-item <?php if($page == "ar/jins.php") { echo "active"; } ?>">
							<a class="nav-link" href="/de/jins.php">Jins</a>
						</li>
						<li class="nav-item <?php if($page == "ar/maqam.php") { echo "active"; } ?>">
							<a class="nav-link" href="/de/maqam.php">Maqam</a>
						</li>
						<li class="nav-item <?php if($page == "ar/iqaa.php") { echo "active"; } ?>">
							<a class="nav-link" href="/de/iqaa.php">Rhythmus</a>
						</li>
						<li class="nav-item <?php if($page == "ar/book.php") { echo "active"; } ?>">
							<a class="nav-link" href="/de/book.php">Buch</a>
						</li>
					</ul>
				</div>
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