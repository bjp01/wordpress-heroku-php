
<?php

	// Elementor `footer` location
	if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
		get_template_part( 'template-parts/footer/footer' );
	}

	do_action( 'ethant/after_site_wrapper' );

?>

<?php wp_footer(); ?>

</body>
</html>