<?php

$featured_posts = new WP_Query([ 'category_name' => 'featured' ]);

?>

<?php get_header(); ?>

<header>
  <?php get_template_part('partials/navigation'); ?>
</header>

<main>
  <div id="featured">
    <?php if ($featured_posts->have_posts()): ?>
      <?php while ($featured_posts->have_posts()): ?>
        <?php $featured_posts->the_post(); ?>
        <?php get_template_part('partials/post/excerpt', 'featured'); ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <div id="latest">
    <h2>Latest posts</h2>
    <?php if (have_posts()): ?>
      <ol>
        <?php while (have_posts()): ?>
          <?php the_post(); ?>
          <?php get_template_part('partials/post/excerpt', 'listed'); ?>
        <?php endwhile; ?>
      </ol>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
