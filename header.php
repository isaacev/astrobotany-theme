<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(is_front_page() ? 'is-front-page' : false); ?>>
    <header id="primary">
      <nav>
        <h1><a href="<?php echo get_site_url(); ?>">astrobotany</a></h1>
        <?php wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_id'        => 'menu',
          'item_spacing'   => 'discard',
        )); ?>
      </nav>
    </header>
    <main>
