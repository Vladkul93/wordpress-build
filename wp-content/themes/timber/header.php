<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> <?php bloginfo('description');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./css/normalize.css" type="text/html">
    <link rel="stylesheet" href="css/style.css"> -->
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>./assets/img/houses.jpg" type="image/x-icon">

    <?php wp_head(); ?>
</head>

<body>
    <header class="header" style="background-image: url(<?php the_field('top__bg') ?>);">
        <div class="header__inner">
            <img src="<?php bloginfo('template_url'); ?>./assets/img/logo.png " alt="">
            <div class="header__name">
                <?php the_field('header__name')?>
            </div>
            <a class="phone" href="tel:<?php the_field('phone')?>"><?php the_field('phone')?></a>
            <div class="header__title">
                <?php the_field('header__title')?>
            </div>
            <div class="hrader__sale">
                <img src="<?php the_field('header__sale')?>" alt="">
            </div>
        </div>
    </header>