<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(is_front_page() ? 'is-front-page' : false); ?>>
    <header id="primary">
      <nav class="<?php if (get_theme_mod('show_solar_system', true)) { echo "border"; } ?>">
        <h1><a href="<?php echo get_site_url(); ?>"><?php bloginfo('name'); ?></a></h1>

        <?php wp_nav_menu(array(
          'theme_location' => 'primary',
          'menu_id'        => 'menu',
          'item_spacing'   => 'discard',
          'depth'          => 1,
        )); ?>
      </nav>
    </header>
    <main>
