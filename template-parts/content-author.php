<?php

if (function_exists('get_author_data') === false):
function get_author_data () {
  $author = get_user_by('slug', get_query_var('author_name'));
  return $author;
}
endif;

if (function_exists('print_author_id') === false):
function print_author_id () {
  $author_id = get_author_data()->ID;
  echo $author_id;
}
endif;

if (function_exists('print_author_name') === false):
function print_author_name () {
  $author_id = get_author_data()->ID;
  $display_name = get_the_author_meta('display_name', $author_id);
  $nice_name = get_the_author_meta('user_nicename', $author_id);
  echo $display_name ? $display_name : $nice_name;
}
endif;

if (function_exists('print_author_avatar_url') === false):
function print_author_avatar_url () {
  $author_id = get_author_data()->ID;
  $args = array('size' => 96);
  echo get_avatar_url($author_id, $args);
}
endif;

if (function_exists('author_has_bio') === false):
function author_has_bio () {
  $author_id = get_author_data()->ID;
  return (get_the_author_meta('description', $author_id) != '');
}
endif;

if (function_exists('print_author_bio') === false):
function print_author_bio () {
  $author_id = get_author_data()->ID;
  echo get_the_author_meta('description', $author_id);
}
endif;

if (function_exists('print_author_edit_link') === false):
function print_author_edit_link () {
  if (can_edit_other_user_profiles() || can_edit_own_profile()) {
    $author_id = get_author_data()->ID;
    $link_url  = get_edit_user_link($author_id);
    $link_text = 'Edit';
    echo '<a href="' . $link_url . '">' . $link_text . '</a>';
  }
}
endif;

if (function_exists('can_edit_other_user_profiles') === false):
function can_edit_other_user_profiles () {
  return current_user_can('edit_users');
}
endif;

if (function_exists('can_edit_own_profile') === false):
function can_edit_own_profile () {
  $current_id = get_current_user_id();
  $author_id = get_author_data()->ID;
  return $current_id === $author_id;
}
endif;

?>

<section id="author-<?php print_author_id(); ?>" class="author">
  <h1>Posts by <?php print_author_name(); ?></h1>
  <img src="<?php print_author_avatar_url(); ?>">
  <?php if (author_has_bio()): ?>
    <p class="bio"><?php print_author_bio(); ?></p>
  <?php endif; ?>

  <?php if (can_edit_other_user_profiles() || can_edit_own_profile()): ?>
    <p class="edit"><?php print_author_edit_link(); ?></p>
  <?php endif; ?>
</section>
