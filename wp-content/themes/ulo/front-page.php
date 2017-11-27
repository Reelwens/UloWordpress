<?php /* Template Name: front-page */ ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Ulo — Votre nouvelle caméra de sécurité</title>
    <meta name="description" content="Ulo est une caméra de surveillance mignonne représentée par une chouette." />
    <link rel="icon" type="image/png" href="images/logo.png" sizes="64x64">

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


    </head>
<body id="home">

<div class="landing">
    <div class="container">
        <?php
        $args=array(
            'theme_location' => 'header',
            'menu' => 'header_fr',
            'menu_class' => 'menu',
            'container_class' => 'container',
        );
        wp_nav_menu($args); ?>
        <h1>ULO, une chouette caméra de surveillance</h1>
        <div class="head-button"><a href="#">En savoir plus</a></div>

    </div>

    <img src="wp-content/themes/ulo/dist/images/down-arrow.svg" alt="Descendre" class="downArrow">
</div>

<div class="presentation">
    <div class="container">

        <?php
        $arguments = array(
            'post_type'      => 'contenu',
            'tax_query' => array(
                array(
                    'taxonomy' => 'Page',
                    'field'    => 'slug',
                    'terms'    => 'front-page',
                ),
            ),
        );

        // The Query
        $query = new WP_Query( $arguments );

        // The Loop
        if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
                $query->the_post();
                echo '<div class="title">';
                echo '<h2>' . get_the_title() .'</h2>';
                echo '<div class="line"></div>';
                echo '</div>';
                echo '<p class="content">'. get_the_content() . '</p>';
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            // no posts found
        }
        wp_reset_query()
        ?>

        </div>

    <div class="picturesPresentation">
        <img src="wp-content/themes/ulo/dist/images/ULO-image4.jpg" alt="Présentation Ulo">
        <img src="wp-content/themes/ulo/dist/images/ULO-image9.jpg" alt="Présentation Ulo 2">
    </div>
</div>

<div class="features">
    <div class="background">
        <div class="bkgTop"></div>
        <img src="wp-content/themes/ulo/dist/images/bkgArrow.svg" alt="background">
    </div>

    <div class="floatGroup container">
        <div class="title">
            <h2>Fonctionnalités</h2>
            <div class="line"></div>
        </div>

        <div class="featuresPresentation">

            <?php
            $args = array(
                'post_type'        => 'contenu',
                'order'            => 'ASC',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'Type',
                        'field'    => 'slug',
                        'terms'    => 'Fonctionnalités',
                    ),

                ),
            );

            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo '<div class="feature">';
                    echo get_the_post_thumbnail();
                    echo '<h3>'. get_the_title() .'</h3>';
                    echo '<p class="hidden-xs">'. get_the_content() .'</p>';
                    echo '</div>';
                }
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
            }

            ?>
        </div>

        <div class="buttonContainer"><div class="button"><a href="">Découvrir</a></div></div>
    </div>
</div>

<div class="catchLines">
    <?php
    $args = array(
        'post_type'        => 'contenu',
        'tax_query' => array(
            array(
                'taxonomy' => 'Page',
                'field'    => 'slug',
                'terms'    => 'front-page-end',
            ),
        ),
    );

    // The Query
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<h3>'. get_the_title() .'</h3>';
            echo get_the_content();
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        // no posts found
    }

    ?>
  </div>

<?php get_footer(); ?>
<!-- Scripts -->
<script src="wp-content/themes/ulo/dist/scripts/script.js" charset="utf-8"></script>


</body>
</html>