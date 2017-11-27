<?php get_header(); /* Template Name: testimony */ ?>

<div class="speak">
    <div class="container">

        <div class="title">
            <h2>Heureux clients</h2>
            <div class="line"></div>
        </div>

    </div>
</div>

<div class="container testimony">
    <?php
    $args = array(
        'post_type'        => 'contenu',
        'order'            => 'ASC',
        'tax_query' => array(
            array(
                'taxonomy' => 'Type',
                'field'    => 'slug',
                'terms'    => 'Client',
            ),
        ),
    );

    // The Query
    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            echo '<div class="bull">';
            echo '<p class="phrase">'. get_the_content() .'</p>';
    $image = get_field('image');

    if( !empty($image) ): ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

    <?php endif;
            echo '<div class="bio">';
            echo '<p class="name">'. get_field('auteur') .'</p>';
            echo '<p class="function">'. get_field('profession') .'</p>';
            echo '</div>';
            echo '</div>';

        }
        /* Restore original Post Data */
        wp_reset_postdata();
    } else {
        // no posts found
    }
    ?>
</div>

<div class="share" id="contact">
    <div class="container">

        <div class="title">
            <h2>Partagez votre expérience</h2>
            <div class="line"></div>
        </div>
    </div>
</div>

<div class="container contact">
    <div class="boxContact">
       <div class="leftForm">
            <p>Nom</p>
            <input type="text">

            <p>Prénom</p>
            <input type="text">

            <p>E-mail</p>
            <input type="mail">
        </div>

        <div class="rightForm">
            <p>Message</p>
            <textarea name="message"></textarea>
        </div>
    </div>

    <div class="bottomForm">
        <input type="submit">
    </div>
</div>

<?php get_footer(); ?>
<!-- Scripts -->
<script src="../wp-content/themes/ulo/dist/scripts/script.js" charset="utf-8"></script>

</body>
</html>