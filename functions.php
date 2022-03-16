<?php



add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );

    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}


add_filter( 'rest_api_init', 'rest_only_for_authorized_users', 99 );

function rest_only_for_authorized_users($wp_rest_server){
    if ( !is_user_logged_in() ) {
        wp_die('You thought this is going to be that easy?','Cheater alert!',403);
    }
}


function injectAdsense(){
    if ( is_front_page() ) {
      } elseif ( is_home() ) {
        echo '<script data-ad-client="ca-pub-1106747567696734" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
      } else {
        echo '<script data-ad-client="ca-pub-1106747567696734" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>';
      }
}

add_action( 'wp_head', 'injectAdsense' );

function wc_prevent_clickjacking() {
    header( 'X-FRAME-OPTIONS: SAMEORIGIN' );
}
add_action( 'send_headers', 'wc_prevent_clickjacking', 10 );
