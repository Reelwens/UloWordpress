<?php

add_action('wp_enqueue_scripts', 'ajout_scripts');

function ajout_scripts() {


wp_register_script('script.js', JS_URL.'/script.js', array('jquery'),'1.1', true);

wp_enqueue_script('script.js');



// enregistrement d'un nouveau style
wp_register_style( 'app.min.css', CSS_URL.'/app.min.css');

// appel du style dans la page
wp_enqueue_style( 'app.min.css' );


wp_register_style( 'google_font','https://fonts.googleapis.com/css?family=Roboto');

wp_enqueue_style( 'google_font' );


}

add_action( 'wp_enqueue_scripts', 'ajout_scripts' );
