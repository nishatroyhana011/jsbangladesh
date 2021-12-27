<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package practice_blog
 */

get_header();
?>

<section class="section pt-55 ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mb-20">
					<?php
						get_template_part('template-parts/content-blog');
					?>
					
					<!--prev and next posts-->	
					<div class="row">
							<?php
						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__( '<- Preview Post', 'pb' ) . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Post ->', 'pb' ) . '</span> <span class="nav-title">%title</span>',
							)
						);
						?>
						<div class="col-md-6">
							<div class="widget">
								<div class="widget-next-post">
									<div class="small-post">
										<div class="image">
											<a href="post-default.html">
											<img src="assets/img/latest/1.jpg" alt="...">
											</a>                                          
										</div>
										<div class="content">
											<div>
												<a class="link" href="post-default.html"><i class="arrow_left"></i>Preview post</a>
											</div>
											<a href="post-default.html">7 Healty Dinner Recipes for a Date Night at Home</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="widget">
								<div class="widget-previous-post">
									<div class="small-post">
										<div class="image">
											<a href="post-default.html">
												<img src="assets/img/blog/2.jpg" alt="...">
											</a>
										</div>
										<div class="content">
											<div>
												<a class="link" href="post-default.html">
													<span> Next post</span>
													<span class="arrow_right"></span>
												</a>
											</div>
											<a href="post-default.html">How to Choose Outfits for Work for woman and men</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
		
					<!--previous comments-->
					<div class="widget mb-50">
						<div class="title">
							<?php 
								wp_list_comments( );
							?>
							
						</div>
						<!--Leave-comments-->
						<?php 
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
						?>
					</div>
				</div>

				<!--sidebar-->
				<div class="col-lg-4 max-width">
				<?php
					get_sidebar();
				?>
				</div>
            </div>
        </div>
</section>

<?php

get_footer();
