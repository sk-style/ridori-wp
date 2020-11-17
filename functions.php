<?php
/* セットアップ
------------------------------------------------- */
function my_setup() {
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'automatic-feed-links' );
  add_theme_support( 'title-tag' );
  add_theme_support( 'html5', array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ));
}
add_action( 'after_setup_theme', 'my_setup' );

/* css・jsの読み込み
------------------------------------------------- */
function my_script_init() {
  // css
  wp_enqueue_style( 'swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/css/swiper.min.css', array(), '5.4.5', 'all' );
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.14.0/css/all.css', array(), '5.14.0', 'all' );
  wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all' );
  wp_enqueue_style( 'my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
  // js
  if( is_front_page() ) {
    wp_enqueue_script( 'scroll-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-simplyscroll/2.1.1/jquery.simplyscroll.min.js', array( 'jquery' ), '2.1.1', true );
    wp_enqueue_script('home-js', get_template_directory_uri() . '/js/script_home.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js', array( 'jquery' ), '5.4.5', true );
    wp_enqueue_script( 'fitie-js', get_template_directory_uri() . '/js/fitie.js', array( 'jquery' ), '1.0.0', true );
    
  } elseif( is_page('menu') ) {
    wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/script_menu.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js', array( 'jquery' ), '5.4.5', true );
    wp_enqueue_script( 'fitie-js', get_template_directory_uri() . '/js/fitie.js', array( 'jquery' ), '1.0.0', true );
  }
    wp_enqueue_script( 'wow-js', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script('my-js', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_script_init' );

/* 子ページを取得
------------------------------------------------- */
function get_child_pages( $number = -1, $specified_id = null ) {
  if ( isset( $specified_id ) ):
      $parent_id = $specified_id;
  else:
    $parent_id = get_the_ID();
  endif;
  $args = array(
    'posts_per_page' => $number,
    'post_type' => 'page',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'post_parent' => $parent_id,
  );
  $child_pages = new WP_Query( $args );
  return $child_pages;
}

/* Booking Calendar 
------------------------------------------------- */
function booking_calendar_prev($message, $daytime) {
	return date_i18n('F', $daytime);
}
add_filter('mtssb_prev_title', 'booking_calendar_prev', 10, 2);
 
function booking_calendar_next($message, $daytime) {
    return date_i18n('F', $daytime);
}
add_filter('mtssb_next_title', 'booking_calendar_next', 10, 2);


?>