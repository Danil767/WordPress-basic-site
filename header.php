<!doctype html>
<html lang="en ">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http - equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo('description'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;1,700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">


  <?php wp_head(); ?>

</head>

<body>

  <header class="header" style="background-image: url(<?php the_field('home_bg'); ?>);">
    <div class="header__inner">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/home.png" alt="logo">
      <div class="header__name">
        <?php the_field('header_name'); ?>
      </div>
      <a class="phone" href="tel:<?php the_field('phone'); ?>">
        <?php the_field('phone'); ?>
      </a>
      <div class="header__title">
        <?php the_field('header_title'); ?>
      </div>
      <div class="header__sale">
        <img src="<?php the_field('header__sale'); ?>" alt="img-sale">
      </div>
    </div>
  </header>