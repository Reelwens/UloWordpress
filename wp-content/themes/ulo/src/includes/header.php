<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Ulo — Votre nouvelle caméra de sécurité</title>
    <meta name="description" content="Ulo est une caméra de surveillance mignonne représentée par une chouette." />
    <link rel="icon" type="image/png" href="wp-content/themes/ulo/dist/images/logo.png" sizes="64x64">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Ulo — Caméra de surveillance">
    <meta name="twitter:description" content="Ulo est une caméra de surveillance mignonne représentée par une chouette.">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="http://image.noelshack.com/fichiers/2017/46/7/1511111565-home-header.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="Ulo — Caméra de surveillance" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="http://image.noelshack.com/fichiers/2017/46/7/1511111565-home-header.png" />
    <meta property="og:description" content="Ulo est une caméra de surveillance mignonne représentée par une chouette." />
    <meta property="og:site_name" content="Ulo — Caméra de surveillance" />

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="wp-content/themes/ulo/dist/styles/app.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

    <?php wp_head(); ?>
</head>
<body id="<?= $ID ?>">

<div class="landing">
    <div class="container">

        <div class="menu">
            <div class="menuItem active">
                <a href="<?php bloginfo('url') ?>">Accueil</a>
            </div>
            <div class="menuItem">
                <a href="<?php echo get_page_link( get_page_by_title( 'features' )->ID ); ?>">Fonctionnalités</a>
            </div>
            <div class="menuItem">
                <a href="<?php echo get_page_link( get_page_by_title( 'press' )->ID ); ?>">Presse</a>
            </div>
            <div class="menuItem">
                <a href="<?php echo get_page_link( get_page_by_title( 'testimony' )->ID ); ?>">Témoignages</a>
            </div>
        </div>

        <h1>Fonctionnalités</h1>

    </div>
</div>
<?php // SYNTAXE : wp_nav_menu( array $args = array() )
$args=array(
    'theme_location' => 'header', // nom du slug
    'menu' => 'header_fr', // nom à donner cette occurence du menu
    'menu_class' => 'menu_header', // class à attribuer au menu
    'menu_id' => 'menu_id', // id à attribuer au menu
    // voir les autres arguments possibles sur le codex
);
wp_nav_menu($args);
?>