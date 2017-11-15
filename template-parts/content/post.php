<?php

/**
 * This template is rendered any place where a post content is required. This
 * includes archives, search results, blog pages, etc.
 *
 * This template renders public data associated with the post like:
 *  - title
 *  - contents (either in full or excerpt form)
 *  - author name
 *  - author profile picture
 *  - publication date
 */

?>

<?php if (is_single()): ?>
  <?php page_header([
    'header' => get_the_title(),
  ]); ?>
<?php endif; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <article class="copy">
    <?php if (is_single()): ?>
      <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <a href="<?php the_permalink(); ?>" class="featured-image" style="background-image:url('<?php echo $image[0]; ?>');"></a>
      <?php endif; ?>
      <?php the_content(); ?>
    <?php else: ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><?php print_author_name(); ?> &mdash; <em><?php print_post_date(); ?></em></p>
      <?php the_excerpt(); ?>
    <?php endif; ?>
  </article>
  <?php if (is_single()): ?>
    <aside>
      <p class="author"><?php print_author_name(); ?></p>
      <p class="date"><?php print_post_date(); ?></p>
      <?php if (is_single()): ?>
        <?php print_tags(); ?>
      <?php endif; ?>
    </aside>
  <?php endif; ?>
</article>

<?php if (is_single()): ?>
  <?php comments_template(); ?>
<?php endif; ?>
