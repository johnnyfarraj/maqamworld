<?php

if($page_title == "") {
    $page_title = "Arabic Maqam World";
}

if($page_description == "") {
    $page_description = "Arabic Music Maqam World";
}

if($page_keywords == "") {
    $page_keywords = "arabic, music, arab, world, maqam, jins, oud, qanun, nay, quarter tone, tetrachord, modal, tarab, middle east";
}

?>
<!-- Author: Filip Todorov www.filiptodorov.com -->
<!doctype html>
<html lang="en" <?php if($page_language == "ar") { echo 'dir="rtl"'; } ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO tags -->
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta name="author" content="Johnny Farraj">

    <!-- Page settings -->
    <title><?php echo $page_title; ?></title>
    <link rel="icon" href="/img/favicon.png">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/fonts.css" rel="stylesheet">
    <link href="/css/plyr.css" rel="stylesheet">
    <link href="/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/owl.theme.default.min.css" rel="stylesheet">

    <script src="/js/jquery-3.3.1.min.js"></script>

  </head>