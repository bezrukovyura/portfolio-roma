<?php get_header(); ?>
<div class="page">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<div class="title"><a href="<?php echo the_permalink() ?>"><?php the_title(); ?></a></div>

	<div class="info">
		<div class="description">
			<div class="title">Goal</div>
			<?php echo get_field("goal", get_the_ID());?>
		</div>

		<div class="description">
			<div class="title">Decision</div>
			<?php echo get_field("decision", get_the_ID());?>
		</div>
	</div>
	<div class="content"><?php the_content(); ?></div>
	<div class="pagination">
		<?php previous_post_link('%link', '<  last project') ?>

		<?php next_post_link('%link', 'next project  >') ?> 
	</div>
	<?php endwhile; ?>
	<?php endif; ?>

	<div class="all_projects">
		<?php
		$related = get_posts( 
			array( 
				'category__in' => wp_get_post_categories($post->ID),
				'numberposts' => 5,
				'post__not_in' => array($post->ID)
			) 
		);
		if( $related ) 
			foreach( $related as $post ) {
				setup_postdata($post);
			?>

				<a href="<?php echo $post->guid; ?><" class="item">
					<div class="lazy_img">
						<img src="<?php echo get_field("image", $post->ID);?>" alt="">
					</div>
					<h4 class="title"><?php echo $post->post_title; ?></h4>
					<div class="hash"><?php echo $post->post_excerpt; ?></div>
				</a>
								
				<?php
			}
		wp_reset_postdata(); 
		?>
	</div>
</div>
<?php get_footer(); ?>
 