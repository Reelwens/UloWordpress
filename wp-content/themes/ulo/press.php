<?php get_header(); /* Template Name: press */?>

<div class="features">
    <div class="background">
        <div class="bkgTop"></div>
        <img src="../wp-content/themes/ulo/dist/images/bkgArrow.svg" alt="background">
    </div>

    <div class="floatGroup container">
        <div class="imgContainer">
            <img src="../wp-content/themes/ulo/dist/images/kickstarter-logo-color.png" alt="kickstarter">
        </div>

        <div class="content">
            <iframe width="100%" height="280" src="https://www.youtube.com/embed/HZzPVAKikmo" frameborder="0" gesture="media" allowfullscreen></iframe>
            <?php
            $args = array(
                'post_type'        => 'contenu',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'Type',
                        'field'    => 'slug',
                        'terms'    => 'Kickstarter',
                    ),
                ),
            );

            // The Query
            $the_query = new WP_Query( $args );

            // The Loop
            if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                    echo '<p>'. get_the_content() .'</p>';

                }
                /* Restore original Post Data */
                wp_reset_postdata();
            } else {
                // no posts found
            }

            ?>
        </div>

    </div>
</div>

<div class="speak">
    <div class="container">

        <div class="title">
            <h2>Ils parlent de nous</h2>
            <div class="line"></div>
        </div>

    </div>
</div>

<div class="grid container">
    <?php
    $args = array(
        'post_type'        => 'contenu',
        'order'            => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'Type',
                'field'    => 'slug',
                'terms'    => 'Sponsor',
            ),
        ),
    );

    // The Query
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo get_the_content();

        }
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        // no posts found
    }

    ?>

<!--    <img src="../wp-content/themes/ulo/dist/images/logo_blogDomadoo2.png" alt="logo">
    <img src="../wp-content/themes/ulo/dist/images/logo-connect_object.jpg" alt="logo">
    <img src="../wp-content/themes/ulo/dist/images/logo_gadgetflow2.png" alt="logo">
    <img src="../wp-content/themes/ulo/dist/images/logo-objetconnecte.net-objets-connectes-innovants.png" alt="logo">
    <img src="../wp-content/themes/ulo/dist/images/tn-logo-2016.png" alt="logo">
    <img src="../wp-content/themes/ulo/dist/images/logo-journal-geek.png" alt="logo">
    <img src="../wp-content/themes/ulo/dist/images/téléchargement.jpeg" alt="logo">
    <img src="../wp-content/themes/ulo/dist/images/cool.png" alt="logo">
    <img src="../wp-content/themes/ulo/dist/images/planet-sansfil.jpg" alt="logo">-->
</div>

<?php get_footer(); ?>
<!-- Scripts -->
<script src="../wp-content/themes/ulo/dist/scripts/script.js" charset="utf-8"></script>

</body>
</html>