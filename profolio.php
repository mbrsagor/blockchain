<?php 
/* 
Template Name: Portfolio
 */
get_header(); ?>
	<section id="blog">
		<div class="container">
			<div class="blog_page">
				<div class="full_width">
					<?php 
						$port = new WP_Query(array(
							'post_type' => 'portfolio',
						));
					?>
					<?php while( $port->have_posts() ) : $port->the_post();?>
						<div class="post">
							<div class="post_content">
								<?php the_post_thumbnail(); ?>
								<p><?php the_content(); ?></p>
							</div>
						</div>
						<?php endwhile; ?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>	