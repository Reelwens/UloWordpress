<?php

define( 'THEME_PATH' ,          get_template_directory()            );
//define( 'TEMPLATE_PATH' ,       THEME_PATH .    '/templates'        );

define( 'THEME_URL' ,           get_template_directory_uri()        );
define( 'CSS_URL' ,             THEME_URL .    '/dist/styles'       );
define( 'IMAGES_URL' ,          THEME_URL .    '/dist/images'       );
define( 'JS_URL' ,              THEME_URL .    '/dist/scripts'      );
//define( 'FAVICONS_URL' ,        THEME_URL .    '/dist/favicon'      );
//define( 'ADMIN_IMAGES_URL' ,    IMAGES_URL .   '/admin'             );


foreach ( glob( THEME_PATH . "/inc/*.php" ) as $file ) {
    include_once $file;
}

/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');

function ajaxJs()
{
    wp_localize_script('main', 'ajaxurl', admin_url( 'admin-ajax.php' ) );
}
add_action('wp_enqueue_scripts', 'ajaxJs');




add_action( 'wp_ajax_send_email', 'callback_send_email' );
add_action( 'wp_ajax_nopriv_send_email', 'callback_send_email' );

function callback_send_email(){

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message= $_REQUEST['message'];
    $subject = "Contact Form";
    $email_body = "The following prospectus has contacted you.<br>".
        "Name: $name. <br>".
        "Email: $email. <br>".
        "Message: $message. <br>";
    $to = "lawlesque@gmail.com";
    $headers  = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From: $name <$email> \r\n";
    $headers .= "Reply-To: $email \r\n";
    $mail = mail($to,$subject,$email_body,$headers);

    if($mail){
        echo "Email Sent Successfully";
    }
}