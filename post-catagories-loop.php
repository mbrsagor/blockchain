<?php 
/* 
Template Name: Post Catagories
 */
get_header(); ?>
	<section id="blog">
		<div class="container">
			<div class="blog_page">
				<div class="full_width">
					<div class="left_side_catagories">
						<?php 
							$Desing = new WP_Query(array(
								'post_type' => 'post',
								'posts_per_page' => 4,
								'category_name' => 'Web Desing',
							));
						?>
						<?php
							while( $Desing->have_posts() ) : $Desing->the_post(); ?>
								<div class="post_tilte">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								</div>
								<div class="post_info">
									Posted by: <i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php the_author(); ?> </a> | Posted on: <i class="fa fa-calendar"></i> <?php the_date('F d, Y'); ?> | <i class="fa fa-folder-open blogin-color"></i><a href="<?php the_permalink(); ?>"> <?php the_category(); ?> </a> | <i class="fa fa-comment blogin-color"></i> <?php comments_popup_link('no comments','one comments','% comments','comments-style','comments off'); ?>
								</div>
								<div class="post_content">
									<p><?php the_content(); ?></p>
								</div>
								<div class="readmore">
									<a href="<?php the_permalink(); ?>">read more..</a>
								</div>
							<?php endwhile; ?>
					</div>
					<div class="right_side_catagories">
						<?php 
							$Development = new WP_Query(array(
								'post_type' => 'post',
								'posts_per_page' => 4,
								'category_name' => 'Web Development',
							));
						?>
						<?php
							while( $Development->have_posts() ) : $Development->the_post(); ?>
								<div class="post_tilte">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								</div>
								<div class="post_info">
									Posted by: <i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php the_author(); ?> </a> | Posted on: <i class="fa fa-calendar"></i> <?php the_date('F d, Y'); ?> | <i class="fa fa-folder-open blogin-color"></i><a href="<?php the_permalink(); ?>"> <?php the_category(); ?> </a> | <i class="fa fa-comment blogin-color"></i> <?php comments_popup_link('no comments','one comments','% comments','comments-style','comments off'); ?>
								</div>
								<div class="post_content">
									<p><?php the_content(); ?></p>
								</div>
								<div class="readmore">
									<a href="<?php the_permalink(); ?>">read more..</a>
								</div>
							<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>	