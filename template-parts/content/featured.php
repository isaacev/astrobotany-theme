<?php

/**
 * This template is rendered for the first "sticky" post in the blog archive.
 */

?>

<?php if (is_single()): ?>
  <?php get_template_part('template-parts/content/post', get_post_format()); ?>
<?php else: ?>
  <article id="post-<?php the_ID(); ?>" <?php post_class('featured-post'); ?>>
    <article class="copy">
      <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <a href="<?php the_permalink(); ?>">
          <img class="featured-image" src="<?php echo $image[0]; ?>">
        </a>
      <?php endif; ?>
      <h3><em>Featured:</em></h3>
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php echo $post->ID; ?></h1>
      <p><?php print_author_name(); ?> &mdash; <em><?php print_post_date(); ?></em></p>
    </article>
  </article>
<?php endif; ?>
