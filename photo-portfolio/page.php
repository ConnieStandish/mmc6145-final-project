<?php get_header(); ?>

<main class="container site-content">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post(); ?>

      <div class="single-page">
        <div class="featured-img">
          <?php the_post_thumbnail('medium') ?>
        </div>

        <div class="text-container">
          <h2><?php the_title(); ?></h2>
          <p class="body-content"><?php echo the_content(); ?></p>
        </div>

      </div>
      <?php
    }//End of while (have_posts)
  }//End of if (have_posts)
  ?>
</main>

<?php get_footer(); ?>
