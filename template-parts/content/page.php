<?php

/**
 * This template renders the content for an entire page.
 */

?>

<?php page_header([
  'header' => get_the_title(),
]); ?>

<article id="page-<?php the_ID(); ?>">
  <?php the_content(); ?>
</article>
