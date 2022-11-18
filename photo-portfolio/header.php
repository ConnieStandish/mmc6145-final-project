<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Fontawesome -->
    <!-- <script src="https://kit.fontawesome.com/4f19959d2d.js" crossorigin="anonymous"></script> -->

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header>
      <?php dynamic_sidebar('left-header-widget'); ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 logo-container">
            <?php
              //Display logo image if set, if not display title
                if (get_header_image() == '') {?>
                  <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                  <h2><a href="<?php echo get_home_url(); ?>">Photography</h2>
                  <?php
                }else{ ?>
                  <a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Website Logo" /></a>
              <?php
                }
            ?>
          </div>

          <div class="col-6-lg navigation">
            <nav class="custom-nav-menu">
              <ul>
                  <?php
                    wp_nav_menu(array(
                      'theme_location' => 'main-menu'
                    ));
                  ?>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </header>
