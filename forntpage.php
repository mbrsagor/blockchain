<?php
/* 
Template Name: Homepage
 */
 get_header(); ?>
	<?php get_template_part('slider'); ?>
	<section id="services">
		<div class="container">
			<div class="services_title">
				<h2>Our Services At Galne</h2>
			</div>
			<div class="service">
				<div class="one_third">
					<i class="fa fa-apple"></i><h4>Web Desing</h4>
					<p>Pellentesque sed iaculis urna, faucibus gravida tortor. Sed imperdiet vitae tellus non finibus. Sed in nunc laoreet, rutrum risus.</p>
				</div>
				<div class="one_third">
					<i class="fa fa-wordpress"></i><h4>Web Development</h4>
					<p>Pellentesque sed iaculis urna, faucibus gravida tortor. Sed imperdiet vitae tellus non finibus. Sed in nunc laoreet, rutrum risus.</p>
				</div>
				<div class="one_third">
					<i class="fa fa-android"></i><h4>Android Apps Development</h4>
					<p>Pellentesque sed iaculis urna, faucibus gravida tortor. Sed imperdiet vitae tellus non finibus. Sed in nunc laoreet, rutrum risus.</p>
				</div>
				<div class="one_third">
					<i class="fa fa-laptop"></i><h4>Java Development</h4>
					<p>Pellentesque sed iaculis urna, faucibus gravida tortor. Sed imperdiet vitae tellus non finibus. Sed in nunc laoreet, rutrum risus.</p>
				</div>
				<div class="one_third">
					<i class="fa fa-desktop"></i><h4>Networking & Hardware</h4>
					<p>Pellentesque sed iaculis urna, faucibus gravida tortor. Sed imperdiet vitae tellus non finibus. Sed in nunc laoreet, rutrum risus.</p>
				</div>
				<div class="one_third">
					<i class="fa fa-facebook"></i><h4>Facebook Marketing</h4>
					<p>Pellentesque sed iaculis urna, faucibus gravida tortor. Sed imperdiet vitae tellus non finibus. Sed in nunc laoreet, rutrum risus.</p>
				</div>
				
			</div>
		</div>
	</section>
	<section id="who">
		<div class="container">
			<?php
				$about = new WP_Query(array(
					'post_type' => 'about',
					'posts_per_page' => 1,
				));
			?>
			<?php while( $about->have_posts() ) : $about->the_post(); ?>
			<div class="services_title">
				<h2><?php the_title(); ?></h2>
			</div>
			<?php endwhile; ?>
			<div class="service">
				<div class="forth_colom_services">
					<img src="<?php echo get_template_directory_uri(); ?>/images/services4.jpg"/>
					<div class="over_lay"></div>
					<div class="icon_man">
						<i class="fa fa-google-plus"></i>
						<i class="fa fa-facebook"></i>
					</div>
				</div>
				<div class="forth_colom_services">
					<img src="<?php echo get_template_directory_uri(); ?>/images/services2.jpg"/>
					<div class="over_lay"></div>
					<div class="icon_man">
						<i class="fa fa-google-plus"></i>
						<i class="fa fa-facebook"></i>
					</div>
				</div>
				<div class="forth_colom_services">
					<img src="<?php echo get_template_directory_uri(); ?>/images/services3.jpg"/>
					<div class="over_lay"></div>
					<div class="icon_man">
						<i class="fa fa-google-plus"></i>
						<i class="fa fa-facebook"></i>
					</div>
				</div>
				<?php while( $about->have_posts() ) : $about->the_post(); ?>
				<div class="service_text">
					<?php the_content(); ?>
				</div>
			</div>
			<?php endwhile; ?>
		</div>
	</section>
	<section id="latest_post">
		<div class="container">
			<div class="services_title">
				<h2>Latest News</h2>
			</div>
			<div class="post">
				<?php 
					$latest = new WP_Query(array(
						'post_type' => 'post',
						'posts_per_page' => 1,
						'category_name' => 'Web Desing',
					));
				?>
				<?php while( $latest->have_posts() ) : $latest->the_post(); ?>
				<div class="post_tilte">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				</div>
				<div class="post_info">
					Posted by: <i class="fa fa-user"></i> <a href="<?php the_permalink(); ?>"><?php the_author(); ?> </a> | Posted on: <i class="fa fa-calendar"></i> <?php the_date('F d, Y'); ?> | <i class="fa fa-folder-open blogin-color"></i><a href="<?php the_permalink(); ?>"> <?php the_category(); ?> </a> | <i class="fa fa-comment blogin-color"></i> <?php comments_popup_link('no comments','one comments','% comments','comments-style','comments off'); ?>
				</div>
				<div class="post_content">
					<?php the_content(); ?>
				</div>
				<div class="readmore"><a href="<?php the_permalink(); ?>">read more..</a></div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php get_footer(); ?>