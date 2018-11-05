<header>
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
      <p class="meta-field">By: <em>TODO</em></p>
      <p class="meta-field">Category: <em>TODO</em></p>
    </div>
  </div>
</header>
