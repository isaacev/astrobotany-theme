<aside id="sidebar">
  <div id="links">
    <?php if (has_nav_menu('sidebar')): ?>
      <h2>Navigation</h2>
      <?php wp_nav_menu(array(
        'theme_location' => 'sidebar',
        'menu_id'        => 'sidebar',
        'item_spacing'   => 'discard',
      )); ?>
    <?php endif; ?>

    <h2>Archives</h2>
    <ul>
      <?php wp_get_archives([
        'array' => 'monthly',
        'limit' => 10,
      ]); ?>
    </ul>
  </div>
</aside>
