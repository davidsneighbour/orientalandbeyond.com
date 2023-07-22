<?php

/**
 * @todo check if this is still needed
 */
function set_posts_per_page_for_testimonials( $query ) {
  if ( !is_admin() && $query->is_main_query() && is_post_type_archive( 'dnb_testimonials' ) ) {
    $query->set( 'posts_per_page', '5' );
  }
}
add_action( 'pre_get_posts', 'set_posts_per_page_for_testimonials' );

/**
 * Add Google Analytics code to all pages
 */
function dnb_google_analytics_head_tag() {
  ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-T3Z0ZVQ1B3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-T3Z0ZVQ1B3');
</script>
  <?php
}
add_action('wp_head', 'dnb_google_analytics_head_tag', 100);

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
