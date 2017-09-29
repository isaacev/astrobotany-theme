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
  <article>
    <?php if (is_single()): ?>
      <?php the_content(); ?>
    <?php else: ?>
      <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <?php the_excerpt(); ?>
      <p><a href="<?php the_permalink(); ?>">Read more</a></p>
    <?php endif; ?>
  </article>
  <aside>
    <a href="<?php print_author_profile_url(); ?>">
      <img class="avatar" src="<?php print_author_profile_picture_url(); ?>">
    </a>
    <p class="author"><?php print_author_name(); ?></p>
    <p class="date"><?php print_post_date(); ?></p>
    <?php if (is_single()): ?>
      <?php print_tags(); ?>
    <?php endif; ?>
  </aside>
</article>
