<header class="blowup">
  <?php get_template_part('template-parts/nav'); ?>
  <div id="figure-and-title">
    <figure id="figure">
      <img src="<?= get_the_post_thumbnail_url(); ?>" />
    </figure>
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
<article class="row">
  <div class="narrow"><?php the_content(); ?></div>
</article>
