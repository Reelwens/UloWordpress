<?php get_header(); /* Template Name: features */ ?>

<div class="surveillance">
    <div class="container">

        <div class="title">
            <h2>Surveillance</h2>
            <div class="line"></div>
        </div>

    </div>
</div>

<div class="features">
    <div class="background">
        <div class="bkgTop"></div>
        <img src="../wp-content/themes/ulo/dist/images/bkgArrow.svg" alt="background">
    </div>

    <div class="floatGroup container">
        <?php
        $args = array(
            'post_type'        => 'contenu',
            'order'            => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'Type',
                    'field'    => 'slug',
                    'terms'    => 'Surveillance',
                ),
            ),
        );

        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<div class="heading">';
                echo get_the_post_thumbnail();
                echo '<p>'. get_the_title() .'</p>';
                echo '</div>';
                echo '<p class="bottomBorder">'. get_the_content() .'</p>';

            }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            // no posts found
        }

        ?>
    </div>
</div>

<div class="sécurité">
    <div class="container">

        <div class="title">
            <h2>Sécurité</h2>
            <div class="line"></div>
        </div>

    </div>
</div>



<div class="features">
    <div class="background">
        <div class="bkgTop"></div>
        <img src="../wp-content/themes/ulo/dist/images/bkgArrow.svg" alt="background">
    </div>

    <div class="floatGroup container">
        <?php
        $args = array(
            'post_type'        => 'contenu',
            'order'            => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'Type',
                    'field'    => 'slug',
                    'terms'    => 'Sécurité',
                ),
            ),
        );

        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<div class="heading">';
                echo get_the_post_thumbnail();
                echo '<p>'. get_the_title() .'</p>';
                echo '</div>';
                echo '<p class="bottomBorder">'. get_the_content() .'</p>';

            }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            // no posts found
        }

        ?>
         </div>
</div>

<div class="domotique">
    <div class="container">

        <div class="title">
            <h2>Domotique</h2>
            <div class="line"></div>
        </div>

    </div>
</div>

<div class="features">
    <div class="background">
        <div class="bkgTop"></div>
        <img src="../wp-content/themes/ulo/dist/images/bkgArrow.svg" alt="background">
    </div>

    <div class="floatGroup container">
        <?php
        $args = array(
            'post_type'        => 'contenu',
            'order'            => 'ASC',
            'tax_query' => array(
                array(
                    'taxonomy' => 'Type',
                    'field'    => 'slug',
                    'terms'    => 'Domotique',
                ),
            ),
        );

        // The Query
        $the_query = new WP_Query( $args );

        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo '<div class="heading">';
                echo get_the_post_thumbnail();
                echo '<p>'. get_the_title() .'</p>';
                echo '</div>';
                echo '<p class="bottomBorder">'. get_the_content() .'</p>';

            }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            // no posts found
        }

        ?>
   </div>
</div>


<?php get_footer(); ?>
<!-- Scripts -->
<script src="../wp-content/themes/ulo/dist/scripts/script.js" charset="utf-8"></script>

</body>
</html>
