<?php
/**
 * Template part for displaying contents
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package practice_blog
 */

?>


<div class="card">
	<div class="post-card">
	<div class="post-card-image">
		<a href="<?php the_permalink();?>">
			<?php the_post_thumbnail();?>
		</a>
	</div>
	<div class="post-card-content">
		<a href="#" class="categorie"><?php $post_categories = wp_get_post_categories();
									if( $post_categories ){ 
										foreach($post_categories as $name){
											echo $name;
										}}; ?></a>  
		<h5><a href="<?php the_permalink();?>"></a><?php the_title(); ?> </h5>
		<p><?php the_excerpt();?></p>

		<div class="post-card-info">
			<ul class="list-inline">
				<li><a href="#"><?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?></a></li>
				<li>
					<a href="#"><?php the_author_meta('display_name'); ?></a>
				</li>
				<li class="dot"></li>
				<li><?php the_date( get_option( 'F j, Y' ) ); ?></li>
			</ul>
		</div>
	</div>
	</div>
</div>

	