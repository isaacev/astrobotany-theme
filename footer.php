    </main>
    <footer id="primary">
      <nav>
        <div class="panel">
          <h2><a href="<?php echo get_site_url(); ?>"><?php bloginfo('name'); ?></a></h2>
          <p id="copyright">&copy; <?php echo date('Y'); ?></p>
          <a href="http://dnestudios.com"><img id="associated" src="<?php echo get_template_directory_uri(); ?>/assets/dne.png"></a>
        </div>
        <?php if (has_nav_menu('footer')): ?>
          <div class="panel">
            <h2>explore</h2>
            <?php wp_nav_menu(array(
              'theme_location' => 'footer',
              'menu_id'        => 'menu',
              'item_spacing'   => 'discard',
              'depth'          => 1,
            )); ?>
          </div>
        <?php endif; ?>
        <?php if (get_theme_mod('astrobotany_social')): ?>
          <div class="panel">
            <h2>connect</h2>
            <ul id="social">
              <?php print_social_link('facebook', [
                'before' => '<li>',
                'inner'  => '<div class="social-link site-facebook"></div><span>Facebook</span>',
                'after'  => '</li>',
              ]); ?>
              <?php print_social_link('twitter', [
                'before' => '<li>',
                'inner'  => '<div class="social-link site-twitter"></div><span>Twitter</span>',
                'after'  => '</li>',
              ]); ?>
              <?php print_social_link('linkedin', [
                'before' => '<li>',
                'inner'  => '<div class="social-link site-linkedin"></div><span>LinkedIn</span>',
                'after'  => '</li>',
              ]); ?>
              <?php print_social_link('instagram', [
                'before' => '<li>',
                'inner'  => '<div class="social-link site-instagram"></div><span>Instagram</span>',
                'after'  => '</li>',
              ]); ?>
              <?php print_social_link('youtube', [
                'before' => '<li>',
                'inner'  => '<div class="social-link site-youtube"></div><span>YouTube</span>',
                'after'  => '</li>',
              ]); ?>
              <?php print_social_link('reddit', [
                'before' => '<li>',
                'inner'  => '<div class="social-link site-reddit"></div><span>Reddit</span>',
                'after'  => '</li>',
              ]); ?>
            </ul>
          </div>
        <?php endif; ?>
      </nav>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
