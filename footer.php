<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kadence
 */

namespace Kadence;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Hook for bottom of inner wrap.
 */
do_action( 'kadence_after_content' );
?>
	</div><!-- #inner-wrap -->
	<?php
	do_action( 'kadence_before_footer' );
	/**
	 * Kadence footer hook.
	 *
	 * @hooked Kadence/footer_markup - 10
	 */
	do_action( 'kadence_footer' );

	do_action( 'kadence_after_footer' );
	?>
</div><!-- #wrapper -->
<?php do_action( 'kadence_after_wrapper' ); ?>

<!-- wp_nav_menu -->
<footer>
<?php 
	wp_nav_menu(array(
		'theme_location' => 'footer',
 		'menu_class' => 'planty-class',		
		)); 
?>
</footer>
<!-- fin wp_nav_menu -->
<?php wp_footer(); ?>

</body>
</html>
