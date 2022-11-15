<?php get_header(); ?>

<main class="container">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post(); ?>
        <div class="image-post row">
          <div class="featured-img col-md">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium') ?></a>
          </div>
        </div>

      <?php
    }//End of while (have_posts)
  }//End of if (have_posts)
  ?>
</main>

<?php get_footer(); ?>
