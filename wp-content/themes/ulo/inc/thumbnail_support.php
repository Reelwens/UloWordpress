<?php

add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );
}

/*add_action('after_setup_theme', 'create_image_format');
function create_image_format(){
    add_image_size('hub_article_thumbnail', 350, 175, true);
    add_image_size('hub_profil_thumbnail', 210, 100, false);
}*/

