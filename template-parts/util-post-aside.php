<?php

if (function_exists('print_avatar_url') === false):
function print_avatar_url () {
  $author_id = get_the_author_meta('ID');
  $args = array('size' => 64);
  echo get_avatar_url($author_id, $args);
}
endif;

if (function_exists('print_edit_link') === false):
function print_edit_link () {
  $open_tag  = '<p class="edit">';
  $link_text = 'Edit';
  $close_tag = '</p>';
  edit_post_link($link_text, $open_tag, $close_tag);
}
endif;

if (function_exists('print_formatted_post_date') === false):
function print_formatted_post_date () {
  $format = 'M j<\s\u\p>S</\s\u\p> Y';
  echo get_the_date($format);
}
endif;

?>

<aside>
  <img class="avatar" src="<?php print_avatar_url(); ?>">
  <p class="author"><?php echo get_the_author(); ?></p>
  <p class="date"><?php print_formatted_post_date(); ?></p>
  <?php if (is_single()): ?>
    <?php print_edit_link(); ?>
  <?php endif; ?>
</aside>
