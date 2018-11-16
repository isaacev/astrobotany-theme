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
        <span>By:</span>
        <?php the_author_posts_link(); ?>
      </p>
      <?php if (has_tag()): ?>
        <p class="meta-field">
          <span>Category:</span>
          <?php foreach (get_the_tags() as $tag): ?>
            <a href="<?= get_tag_link($tag->term_id); ?>" class="tag"><?= $tag->name; ?></a>
          <?php endforeach; ?>
        </p>
      <?php endif; ?>
    </div>
  </div>
</header>
