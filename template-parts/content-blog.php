<?php
/**
 * Template part for displaying single blog post content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package practice_blog
 */

?>

<?php
while ( have_posts() ) :
the_post();
endwhile;
?>
<div class="post-single">

	<!--post image -->
	<div class="post-single-image">
	<?php the_post_thumbnail();?>
	</div>

	<!--title and info -->
	<div class="post-single-content">
		<a href="#" class="categorie"><?php $post_categories = wp_get_post_categories();
									if( $post_categories ){ 
										foreach($post_categories as $name){
											echo $name;
										}}?></a> 
		<h4><?php the_title(); ?> </h4>
		<div class="post-single-info">
			<ul class="list-inline">
				<li><a href="#"><?php echo get_avatar( get_the_author_meta( 'ID' ), 100 ); ?></a></li>
				<li><a href="#"><?php the_author_meta('display_name'); ?></a> </li>
				<li class="dot"></li>
				<li><?php the_date( get_option( 'F j, Y' ) ); ?></li>
				<li class="dot"></li>
				<li><?php echo get_comments_number( );?> Comments</li>
			</ul>
		</div>
	</div>

	<!--content-->
	<div class="post-single-body">
		<?php
			the_content();
		?>
	</div>

	<!--tags and share-->
	<div class="post-single-footer">
		<div class="tags">
			<?php the_tags( '<ul class="list-inline"><li>', '</li><li>', '</li></ul>' ); ?>                                
		</div>
		<div class="social-media">
			<ul class="list-inline">
				<li>
					<a href="#" class="color-pinterest">
						<i class="fab fa-pinterest"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
