<?php get_header(); ?>
	<section id="blog">
		<div class="container">
			<div class="blog_page">
				<div class="main_blog">
					<div class="post_col">
						<?php while( have_posts() ) : the_post();?>
						<div class="post">
							<div class="post_tilte">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
							<div class="post_content">
								<p><?php the_content(); ?></p>
								<?php comment_form(); ?>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>	