<?php

if (has_post_thumbnail()) {
  $legal_overlay_formats = [
    'normal',
    'normal-overlay',
    'blowup',
    'blowup-overlay',
  ];
  $overlay_format = get_post_meta($post->ID, OVERLAY_FORMAT_KEY, true);
  $overlay_class = 'format-' . one_of($legal_overlay_formats, $overlay_format);

  $legal_header_colors = ['black', 'white'];
  $header_color = get_post_meta($post->ID, HEADER_COLOR_KEY, true);
  $header_class = 'header-' . one_of($legal_header_colors, $header_color);

  $legal_headline_colors = ['black', 'white'];
  $headline_color = get_post_meta($post->ID, HEADLINE_COLOR_KEY, true);
  $headline_class = 'headline-' . one_of($legal_headline_colors, $headline_color);
} else {
  $overlay_class = 'format-normal';
  $header_class = 'header-black';
  $headline_class = 'headline-black';
}

?>
<header class="<?= $overlay_class; ?> <?= $header_class; ?> <?= $headline_class; ?>">
  <?php get_template_part('partials/navigation'); ?>
  <div id="figure-and-title">
    <?php if (has_post_thumbnail()): ?>
      <figure id="figure">
        <img src="<?= get_the_post_thumbnail_url(); ?>" />
      </figure>
    <?php endif; ?>
    <div id="title" class="row">
      <div class="narrow">
        <p id="timestamp"><?php the_date(); ?></p>
        <h1 id="headline"><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
  <div id="meta" class="row">
    <div class="narrow">
      <p class="meta-field">
        <span>Author</span>
        <?php the_author_posts_link(); ?>
      </p>

      <?php
        $categories = get_the_terms($post->ID, 'category');
        $tags = get_the_terms($post->ID, 'post_tag');
      ?>
      <?php if ($categories !== false && count($categories) > 0): ?>
        <p class="meta-field">
          <?php if (count($categories) == 1): ?>
            <span>Category</span>
          <?php else: ?>
            <span>Categories</span>
          <?php endif; ?>
          <?php foreach ($categories as $cat): ?>
            <?php
              $url = get_term_link($cat->term_id);
              $name = $cat->name;
            ?>
            <a href="<?= $url; ?>" class="category"><?= $name; ?></a>
          <?php endforeach; ?>
        </p>
      <?php endif; ?>
      <?php if ($tags !== false && count($tags) > 0): ?>
        <p class="meta-field">
          <?php if (count($tags) == 1): ?>
            <span>Tag</span>
          <?php else: ?>
            <span>Tags</span>
          <?php endif; ?>
          <?php foreach ($tags as $tag): ?>
            <?php
              $url = get_tag_link($tag->term_id);
              $name = $tag->name;
            ?>
            <a href="<?= $url; ?>" class="tag"><?= $name; ?></a>
          <?php endforeach; ?>
        </p>
      <?php endif; ?>
    </div>
  </div>
</header>
