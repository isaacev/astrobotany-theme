<?php

/**
 * This template displays a message when no applicable content can be found. the
 * specific message displayed depends on the type of page this template is being
 * included within.
 */

?>

<article class="empty">
  <?php if (is_page()): ?>
    <p>This page hasn&rsquo;t been written yet.</p>
  <?php elseif (is_author()): ?>
    <p>The author hasn&rsquo;t written any posts yet.</p>
  <?php else: ?>
    <p>Sorry! Nothing could be found.</p>
  <?php endif; ?>
</article>
