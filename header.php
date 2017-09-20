<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <nav>
        <h1>astrobotany</h1>
        <?php wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_id'        => 'menu',
          'item_spacing'   => 'discard',
        )); ?>
      </nav>
    </header>
    <main>
