<?php

/**
 * This template renders the header of a page. This template does not render
 * the page's content. That is handled in the "page-content.php" file.
 */

?>

<?php if (is_page()): ?>
  <?php page_header([
    'header' => get_the_title(),
  ]); ?>
<?php endif; ?>
