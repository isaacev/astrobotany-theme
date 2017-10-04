<!DOCTYPE html>
<html>
  <head>
    <?php

     $social_thumbnail_url = get_template_directory_uri() . '/assets/default.png';

    ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

    <meta property="og:image" content="<?php echo $social_thumbnail_url; ?>">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta name="twitter:image" content="<?php echo $social_thumbnail_url; ?>"/>
  </head>
  <body <?php body_class(is_front_page() ? 'is-front-page' : false); ?>>
    <header id="primary">
      <nav>
        <h1><a href="<?php echo get_site_url(); ?>">astrobotany</a></h1>

        <input id="show-mobile-menu" type="checkbox">
        <label for="show-mobile-menu"></label>

        <?php wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_id'        => 'menu',
          'item_spacing'   => 'discard',
          'depth'          => 1,
        )); ?>
      </nav>
      <?php if (is_front_page()): ?>
        <?php get_template_part('template-parts/part/solar-system'); ?>
      <?php endif; ?>
    </header>
    <main>
