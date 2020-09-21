<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <!-- <script src="./assets/js/vendor/jquery-1.10.2.min.js"></script>
  <script src="./assets/js/hamburger.js"></script> -->
  <title>index</title>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />

  <?php wp_head(); ?>
</head>
<body>
  <header>
    <div class="inner">
      <div class="titleWrap">
        <a href="<?php echo content_url(); ?>/index">
          <h1 class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header_logo.png" alt="PIX TECH BLOG">
          </h1>
          <p class="subTitle spNone">
            未経験からエンジニアを目指す!
          </p>
        </a>
      </div>
      <nav>
        <ul class="list" style="list-style:none;">
        <li><a href="<?php echo content_url(); ?>/article">記事一覧</a></li>
          <li><a href="<?php echo content_url(); ?>/admin">運営者情報</a></li>
          <li><a href="<?php echo content_url(); ?>/contact_form">お問い合わせ</a></li>
        </ul>
      </nav>
      <div class="hamburger pcNone">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="menu">
        <ul>
          <li><a href="article">記事一覧</a></li>
          <li><a href="admin">運営者情報</a></li>
          <li><a href="contact_form">お問い合わせ</a></li>
        </ul>
      </div>
    </div>
  </header>
