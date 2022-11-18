<?php
/*================================
Adding stylesheets and js files
=================================*/
function portfolio_theme_scripts(){
  //Bootstrap CSS
  wp_enqueue_style('bootstrap-css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');

  //Main CSS
  wp_enqueue_style('main-stylesheet', get_stylesheet_uri());

  //JS Files
  wp_enqueue_script('bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js');
  wp_enqueue_script('custom-js', get_stylesheet_directory_uri() . '/js/scripts.js');
}

add_action('wp_enqueue_scripts', 'portfolio_theme_scripts');

/*================================
Add featured images to website
=================================*/
add_theme_support('post-thumbnails');

/*================================
Remove error
=================================*/
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );

/*================================
Custom Logo Header
=================================*/
$custom_logo_header = array(
  'width'   => 176,
  'height'  => 52,
  'uploads' => true
);

add_theme_support('custom-header', $custom_logo_header);

/*================================
Register/create menus
=================================*/
function register_site_menus(){
  register_nav_menus(array(
    'main-menu' => __('Main Menu'),
    'footer-left' => __('Left Footer Menu'),
    'footer-middle' => __('Middle Footer Menu'),
    'footer-right' => __('Right Footer Menu')
  ));
}

add_action('init', 'register_site_menus');

/*================================
Create Widget Areas
=================================*/
function blank_widgets_init(){
  register_sidebar(array(
    'name'          => ('Sidebar Widget'),
    'id'            => 'sidebar-widget',
    'description'   => 'Area in sidebar for content',
    'before_widget' => '<div class="sidebar-widget-container">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));

  register_sidebar(array(
    'name'          => ('Left Footer Widget'),
    'id'            => 'left-footer-widget',
    'description'   => 'Area in left footer for content',
    'before_widget' => '<div class="left-footer-widget-container">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));

  register_sidebar(array(
    'name'          => ('Left Header Widget'),
    'id'            => 'left-header-widget',
    'description'   => 'Area in left header for content',
    'before_widget' => '<div class="left-header-widget-container">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ));
}

add_action('widgets_init','blank_widgets_init');

/*================================
Post Archive Data
=================================*/
function post_data(){
  $archive_year = get_the_time('Y');
  $archive_month = get_the_time('m');
  $archive_day = get_the_time('d');
  ?>
  <p>Written By: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php echo get_the_author(); ?></a> | Published On: <a href="<?php echo get_day_link($archive_year,$archive_month,$archive_day); ?>"><?php echo "$archive_month/$archive_day/$archive_year"; ?></a></p>
  <?php
}
?>
