<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package practice_blog
 */

?>
<!--newslettre-->
    <section class="newslettre">
        <div class="container-fluid">
            <div class="newslettre-width text-center">
                <div class="newslettre-info">
                    <h5> <?php esc_html_e('Subscribe to our Newslatter'); ?></h5>
                    <p> <?php esc_html_e('Sign up for free and be the first to get notified about new posts'); ?> </p>
                </div>
                <form action="#" class="newslettre-form">
                    <div class="form-flex">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your email adress" required="required">
                        </div>
                        <button class="submit-btn" type="submit">Subscribe</button>
                    </div>
                </form>
                <div class="social-icones">
                    <?php
                    if ( is_active_sidebar( 'social-footer' ) ) {
                        dynamic_sidebar( 'social-footer' ); 
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    
    <!--footer-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright">
                        <?php
                        if ( is_active_sidebar( 'sidebar-2' ) ) {
                            dynamic_sidebar( 'sidebar-2' ); 
                        }
                        ?>
                    </div>
                    <div class="back">
                        <a href="#" class="back-top">
                            <i class="arrow_up"></i>
                            <?php esc_html_e(''); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--search popup-->
    <?php
        get_template_part( 'template-parts/search-popup' );
    ?>

<?php wp_footer(); ?>

</body>
</html>