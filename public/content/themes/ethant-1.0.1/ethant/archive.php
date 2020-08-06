<?php

/**
 * @author: VLThemes
 * @version: 1.0.1
 */

get_header();

?>

<main class="vlt-main vlt-main--padding">

	<?php

		get_template_part( 'template-parts/page-title/page-title', 'archive' );

		// Elementor `archive` location
		if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'archive' ) ) {
			get_template_part( 'template-parts/archive' );
		}

	?>

</main>
<!-- /.vlt-main -->

<?php get_footer(); ?>