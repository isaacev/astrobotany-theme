<article class="excerpt featured">
  <figure>
    <div class="overlay">
      <?php if (has_post_thumbnail()): ?>
        <img src="<?= get_the_post_thumbnail_url(); ?>" />
      <?php endif; ?>
      <div class="header">
        <p class="timestamp"><?php the_date(); ?></p>
        <h2 class="headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      </div>
    </div>
  </figure>
  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga
    assumenda necessitatibus inventore reiciendis voluptatum, nemo iste,
    repellat distinctio amet, fugiat sequi officiis deserunt autem
    dignissimos praesentium corrupti! Earum, qui eaque?</p>
</article>
