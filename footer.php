<section id="footer_top">
		<div class="container">
			<div class="widgets">
				<div class="one_fourth_footer">
					<?php dynamic_sidebar('footer'); ?>
				</div>
				<div class="one_fourth_footer">
					<?php dynamic_sidebar('footer-second'); ?>
				</div>
				<div class="one_fourth_footer">
					<?php dynamic_sidebar('footer-third'); ?>
				</div>
				
			</div>
		</div>
	</section>
	<section id="footer_bottom">
		<div class="container">
			<div class="copy_write_bar">
				<p><?php global $shagor; echo $shagor ['footer-text'] ?></p>
			</div>
		</div>
	</section>
	<!-- JavaScraipt file -->
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.slicknav.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			maxwidth: 1900,
			namespace: "centered-btns"
		  });
		});
	</script>
	<?php wp_footer(); ?>
</body>
</html>