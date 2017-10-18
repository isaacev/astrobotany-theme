<?php

class AstrobotanyCommentWalker extends Walker_Comment {
  function __construct() {
    echo '<ol class="comment-list">';
  }

  function start_el (&$output, $comment, $depth=0, $args=[], $id=0) {
    $GLOBALS['comment'] = $comment;
    $depth++;

    $author_name   = $comment->comment_author;
    $parent        = $comment->comment_parent;
    $total_replies = count($comment->get_children());
    $toggle_msg    = ($total_replies == 1) ? '1 reply' : $total_replies . ' replies';

    ?>
      <li class="comment" id="comment-<?php comment_ID(); ?>">
        <article class="comment-body">
          <img class="author-avatar" src="http://via.placeholder.com/60x60">
          <p class="comment-meta">
            <a class="comment-author" href="#"><?php echo $author_name; ?></a>
            <span class="comment-timestamp"><?php comment_date('g:ia M j<\s\u\p>S</\s\u\p> Y'); ?></span>
            <?php comment_reply_link([
              'depth'     => $depth,
              'max_depth' => $args['max_depth'],
            ]); ?>
            <?php if ($parent != '0'): ?>
              <a href="#comment-<?php echo $parent; ?>">Parent</a>
            <?php endif; ?>
          </p>
          <div class="comment-content copy"><?php echo wp_kses(get_comment_text(), [
            'a'      => [ 'href' => [] ],
            'br'     => [],
            'em'     => [],
            'strong' => [],
          ]); ?></div>
        </article>
        <?php if (($total_replies > 0) and ($depth < $args['max_depth'])): ?>
          <input type="checkbox" checked id="reply-toggle-<?php comment_ID(); ?>" class="reply-toggle">
          <div class="reply-toggle-label">
            <label for="reply-toggle-<?php comment_ID(); ?>"><?php echo $toggle_msg; ?></label>
          </div>
        <?php endif; ?>
    <?php
  }

  function start_lvl (&$output, $depth=0, $args=[], $id=0) {
    echo '<ol class="comment-children">';
  }

  function end_lvl (&$output, $depth=0, $args=[], $id=0) {
    echo '</ol>';
  }

  function end_el (&$output, $comment, $depth=0, $args=[], $id=0) {
    echo '</li>';
  }

  function __destruct () {
    echo '</ol>';
  }
}

?>

<section class="comments">
  <?php if (have_comments()): ?>
    <?php wp_list_comments([
      'walker'    => new AstrobotanyCommentWalker,
      'max_depth' => 5,
    ]); ?>
  <?php else: ?>
    <h2>no comments</h2>
  <?php endif; ?>
  <?php comment_form(); ?>
</section>
