<?php
/**
 * Template name: Contact page
 *
 * This is the template that displays contact page content.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package practice_blog
 */

get_header();
?>
	<!--contact us-->
    <section class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5><?php the_title(); ?></h5>
                    </div>
                </div>
            </div>
            <div class="row mt-20">
                
                <div class="col-lg-8 mb-20">
                    <div class="contact">
                        <div class="google-map">
                            <?php dynamic_sidebar( 'google-map' ); ?>
                            <form class="widget-form contact_form " method="POST" id="main_contact_form">
                                <h6><?php esc_html_e('Feel free to contact any time.'); ?></h6>
                                <p><?php esc_html_e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, repudiandae.'); ?></p>
                                    
                                <?php echo do_shortcode('[contact-form-7 id="2343" title="Contact form 1"]'); ?>
                            </form>    
                        </div>
                    </div> 
                    <div class="col-lg-4 max-width">
                     <!--widget-latest-posts-->
                    <?php 
                    get_sidebar();
                    ?>            
                </div>
                </div>
                
            </div>
        </div>
    </section>
<?php
get_footer();