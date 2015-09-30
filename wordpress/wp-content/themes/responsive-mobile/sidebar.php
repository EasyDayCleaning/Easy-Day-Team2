<?php
/**
 * Default Sidebar
 *
 * @package      responsive_mobile
 * @license      license.txt
 * @copyright    2014 CyberChimps Inc
 * @since        0.0.1
 *
 * Please do not edit this file. This file is part of the responsive_mobile Framework and all modifications
 * should be made in a child theme.
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*
 * Load the correct sidebar according to the page layout
 */
$layout = responsive_mobile_get_layout();
switch ( $layout ) {
	case 'content-sidebar-page':
		get_sidebar( 'right' );
		return;
		break;

	case 'sidebar-content-page':
		get_sidebar( 'left' );
		return;
		break;

	case 'content-sidebar-half-page':
		get_sidebar( 'right-half' );
		return;
		break;

	case 'sidebar-content-half-page':
		get_sidebar( 'left-half' );
		return;
		break;

	case 'full-width-page':
		return;
		break;
}
?>

<?php responsive_mobile_widgets_before(); ?>
<div id="widgets" class="widget-area default-sidebar" role="complementary" itemscope="itemscope" itemtype="http://schema.org/WPSideBar">
	<?php responsive_mobile_widgets(); ?>
	<?php if ( !dynamic_sidebar( 'main-sidebar' ) ) : ?>

		<aside id="archives" class="widget-wrapper">
			<h3 class="widget-title"><?php _e( 'In Archive', 'responsive-mobile' ); ?></h3>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</aside>

	<?php endif; // end sidebar widget area ?>
	<?php responsive_mobile_widgets_end(); ?>
</div><!-- #default-sidebar -->
<?php responsive_mobile_widgets_after(); ?>
