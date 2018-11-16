<nav id="nav">
  <div class="centered">
    <span id="wordmark"><?php bloginfo('name'); ?></span>
    <?php wp_nav_menu([
      'theme_location' => 'primary',
      'menu_id'        => 'links',
      'item_spacing'   => 'discard',
      'depth'          => 1,
      'container'      => false,
    ]); ?>
  </div>
</nav>
