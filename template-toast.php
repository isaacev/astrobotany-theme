<?php /* Template Name: TOAST Template */

get_header();

if (have_posts()) {
  while (have_posts()) { the_post(); ?>

    <style>
      #toast-template-header {
        text-align: center;
      }

      img#toast-credits {
        max-width: 100%;
        width: 600px;
        margin: 16px auto;
      }
    </style>

    <header id="toast-template-header">
      <h1><?php echo get_the_title(); ?></h1>
      <img id="toast-credits" src="<?php echo get_template_directory_uri(); ?>/assets/toast-credits.jpg">
    </header>

    <?php get_template_part('template-parts/part/page-content');
  }
}

get_footer();
