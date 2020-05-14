<?php get_header(); ?>
	<section id="blog">
		<div class="container">
			<div class="blog_page">
				<div class="main_blog">
					<div class="post_col">
						<?php while( have_posts() ) : the_post();?>
						<div class="post">
							<div class="thumbnail">
								<a href="<?php the_permalink(); ?>">
									<?php the_post_thumbnail(); ?>
								</a>
								<div class="top_lay"></div>
							</div>
							<div class="post_tilte">
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							</div>
							<div class="post_info">
								Posted by: <i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php the_author(); ?> </a> | Posted on: <i class="fa fa-calendar"></i> <?php the_date('F d, Y'); ?> | <i class="fa fa-folder-open blogin-color"></i><a href="<?php the_permalink(); ?>"> <?php the_category(); ?> </a> | <i class="fa fa-comment blogin-color"></i> <?php comments_popup_link('no comments','one comments','% comments','comments-style','comments off'); ?>
							</div>
							<div class="post_content">
								<p><?php the_content(); ?></p>
								<p><?php echo get_post_meta(get_the_ID(),'info',true); ?></p>
							</div>
							<div class="readmore">
								<a href="<?php the_permalink(); ?>">read more..</a>
							</div>
						</div>
						<?php endwhile; ?>
					</div>
				</div>
				<?php get_sidebar(); ?>
			</div>
			<div class="pagination">
				<ul>
					<?php 
						the_posts_pagination(array(
							
							'prev_text' => 'prev',
							'next_text' => 'next',
							'screen_reader_text' => ' ',
							
						)); 
					?>
				</ul>
			</div>
		</div>
	</section>
<?php get_footer(); ?>	