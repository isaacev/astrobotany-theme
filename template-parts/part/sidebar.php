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
  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <!-- Astrobotany NEWS Ad -->
  <ins class="adsbygoogle"
       style="display:inline-block;width:300px;height:250px"
       data-ad-client="ca-pub-4857359479760947"
       data-ad-slot="1711020854"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>
</aside>
