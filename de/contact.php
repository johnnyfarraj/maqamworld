<?php

/* Must be relative path */
include('../inc/config.php');

/* SEO settings for this page */
$page_title = "Kontakt Maqam-Welt";
$page_description = "Kontakt Maqam-Welt";
$page_keywords = "Maqam-Welt";
$page_language = "de"; // must set the page language

include($ROOT . 'inc/head.php');
?>

  <body>

    <?php
      $page = "de/contact.php";
      include($ROOT . 'inc/menu.php');
    ?>

    <div class="page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-4 ml-auto mr-auto">
                    <div class="heading text-center">
                        <h1>Senden Sie uns eine Nachricht</h1>
                        <h3>Maqam-Welt nimmt Ihre Ansichten ernst und wird Ihre Kommentare so schnell wie möglich beantworten.</h3>
                    </div>
                    <form action="contact.php" method="post" class="contact-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Vorname" autocomplete="off" name="firstname" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nachname" autocomplete="off" name="lastname" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="E-Mail" autocomplete="off" name="email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Nachricht" autocomplete="off" id="message-area" maxlength="500" name="message" style="min-height: 100px;" required></textarea>
                            <p class="text-right characters-used"><span id="used">0</span>/500</p>
                        </div>
                        <div id="recaptcha"></div>
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-primary">Nachricht senden</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include($ROOT . 'de/footer.php'); ?>
    <?php include($ROOT . 'inc/javascriptFiles.php'); ?>

    <script>
        $(document).ready(function() {
            $("#message-area").keyup(function(e) {
                $(this).val($(this).val().substring(0, 500));
                $("#used").text($(this).val().length);
            })
            $(".contact-form").submit(function(e) {
                e.preventDefault();
                $(".contact-form .btn-primary").html("<i class='fa fa-fw fa-circle-o-notch fa-spin'></i>Senden der Nachricht").prop("disabled", true);
                $.ajax({
                    url: 'email.php',
                    data: $(".contact-form").serialize(),
                    type: 'post',
                    success: function(result) {
                        console.log(result);
                        result = JSON.parse(result);
                        if(result.status == "success") {
                            $("form").hide();
                            $(".heading h1").text("Nachricht wurde gesendet");
                            $(".heading h3").text(result.message)
                        } else {
                            $(".contact-form .btn-primary").html("Senden der Nachricht").prop("disabled", false);
                        }
                    }
                })
            })
        })
    </script>
  </body>
</html>