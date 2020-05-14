<section id="slide">
	<div class="slideshow">
			<?php 
				$slider = new WP_Query(array(
					'post_type' => 'slide',
					'posts_per_page' => -1,
				));
			?>
		<ul class="rslides" id="slider">
			<?php while( $slider->have_posts() ) : $slider->the_post(); ?>
				<li><?php the_post_thumbnail(); ?></li>
			<?php endwhile; ?>
		</ul>
	</div>
</section>