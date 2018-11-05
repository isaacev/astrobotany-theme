<header id="header">
  <div class="centered">
    <div id="brand">
      <span id="wordmark"><?php bloginfo('name'); ?></span>
    </div>
    <nav id="links"><?= strip_tags(wp_nav_menu([
      'theme_location' => 'primary',
      'menu_id'        => 'menu',
      'item_spacing'   => 'discard',
      'depth'          => 1,
      'echo'           => false,
      'container'      => false,
    ]), '<a>'); ?></nav>
  </div>
</header>
