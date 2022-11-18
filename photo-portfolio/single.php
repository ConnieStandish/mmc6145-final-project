<?php get_header(); ?>

<main class="container site-content">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post(); ?>

      <div class="single-post">
        <div class="post-data">
          <?php //Display author and publish data
          post_data();?>
        </div>
        <div class="text-container">
          <p class="post-content"><?php echo the_content(); ?></p>
        </div>
      </div>
      <?php
    }//End of while (have_posts)
  }//End of if (have_posts)
  ?>
</main>

<?php get_footer(); ?>
