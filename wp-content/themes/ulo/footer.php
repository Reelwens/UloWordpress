<footer>
    <div class="mainFooter container">

        <div class="contact">
            <div class="title">
                <h2>Contact</h2>
                <div class="line"></div>

                <div class="contactBlocks">
                    <?php
                    $args = array(
                        'post_type'        => 'contenu',
                        'order'            => 'ASC',
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'Type',
                                'field'    => 'slug',
                                'terms'    => 'Footer',
                            ),
                        ),
                    );

                    // The Query
                    $the_query = new WP_Query( $args );

                    // The Loop
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post();
                            echo '<div class="contactBlock">';
                            $image = get_field('image');
                            if( !empty($image) ): ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif;

                            echo '<p>'. get_the_content() .'</p>';



                            echo '</div>';


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

        <div class="newsletter">
            <div class="title">
                <h2>Newsletter</h2>
                <div class="line"></div>
            </div>

            <?php
/*
 * Le but était de récuperer la valeur et du champ, et d'envoyer un email de confirmation. Cependant le mail ne partait pas.
 * Le plugin WP Mail SMTP a été testé afin de voir si le problème ne venait pas du serveur local. Pas de résultat concluant et manque de temps.
 *
 *
            add_action( 'wp_ajax_sendmail', 'post_function' );
            add_action( 'wp_ajax_nopriv_sendmail', 'post_function' );
            function post_function() {

                global $wpdb, $_POST;

                $email = $_POST['email'];
                $subject = "Newsletter Ulo";
                $message = $_POST['message'];
                $headers = 'De:' . "Ulo@gmail.com";

                if(wp_mail($email, $subject, $message, $headers))
                {
                    echo "sending mail test";
                }
                else
                {
                    echo "not";
                }

            }



            */?>

            <p class="mailAnswer">Entrez votre adresse e-mail pour<br />recevoir nos dernières actualités.</p>

            <input type="text" class="mailInput" id="inputMailFooter" placeholder="Adresse mail">
            <div class="button"><a id="sendMail" href="#">Je m'inscris</a></div>
        </div>

    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.36293684786!2d2.417315350998301!3d48.85128920905941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e67283a4697951%3A0x582f2d404081561e!2s8+Rue+de+Valmy%2C+93100+Montreuil!5e0!3m2!1sfr!2sfr!4v1511189721071" width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</footer>
<?php wp_footer();  ?>