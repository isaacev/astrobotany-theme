<header id="banner">
  <?php
    $page_id = get_option('page_for_posts');
    $url = get_the_post_thumbnail_url($page_id, [ 1500, 250 ]);
  ?>
  <img id="banner-image" src="<?php echo $url; ?>">
</header>
