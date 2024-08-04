<?php

function revealify_enqueue_style() {
  wp_enqueue_style( 'revealify', get_stylesheet_uri() );
  wp_enqueue_style( 'revealify', get_template_directory_uri() . '/css/reveal.css', false );
}

function revealify_enqueue_script() {
  wp_enqueue_script( 'revealify', get_template_directory_uri() . '/js/reveal.js', false );
}

function get_the_post_video_url($post_id) { 
  $background_video_url = get_field('background_video_url', $post_id, TRUE);
  return $background_video_url;
}

add_action( 'wp_enqueue_scripts', 'revealify_enqueue_style' );
add_action( 'wp_enqueue_scripts', 'revealify_enqueue_script' );

add_theme_support('post-thumbnails');