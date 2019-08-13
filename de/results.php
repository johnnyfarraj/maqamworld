<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "";
$page_description = "";
$page_keywords = "";
$page_language = "de";
include($ROOT . 'inc/head.php');

/* Security for searching */
include('../inc/functions.php');
$search_string = preg_replace('/[^A-Za-z0-9 "\']/', '', strip_tags(normalizeChars(addslashes($_GET['search']))));
?>

  <body>

    <?php
      $page = "de/results.php";
      include($ROOT . 'inc/menu.php');
    ?>
    <style>
        @media (min-width:768px) {
            .with-minimum {
                min-height: calc(100vh - 143px - 202px);
                height: auto;
            }
        }
    </style>

    <div class="page with-minimum" style="background: none;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="results">
                        <div class="heading">
                            <h1>Resultate der Suche</h1>
                            <h3>Resultate fur "<?php echo $search_string; ?>"</h3>
                        </div>
                        <i class="fa fa-fw fa-circle-o-notch fa-spin fa-2x"></i>
                        <p>Bitte haben Sie einen Augenblick Geduld. Wir durchsuchen die Website.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'search.php',
                data: {q: "<?php echo addslashes($search_string); ?>"},
                type: 'GET',
                success: function(result) {
                    console.log(result);
                    $("#results").html("");
                    result = JSON.parse(result);
                    $("#results").append('<div class="heading"><h1>Search Results</h1><h3>Results for "<?php echo addslashes($search_string); ?>"</h3></div>');
                    if(result.status == "error") {
                        $("#results").append("<p>" + result.message + "</p>");
                    } else {
                        $("#results").append("<p>" + result.totalFiles + " Stellen gefunden, die zu Ihrer Anfrage passen.</p>");
                    }
                    for(var res in result.files) {
                        $("#results").append('<div><a href="' + result.files[res].link + '" class="search-result">'+ result.files[res].title +'<span>' + result.files[res].link + '</span><b>Found the search string '+ result.files[res].appearances +' times</b></a></div>');
                    }
                }
            })
        })
    </script>
  </body>
</html>