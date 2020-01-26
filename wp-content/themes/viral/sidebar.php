<?php
/**
 * @package Viral
 */

if ( ! is_active_sidebar( 'viral-sidebar' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area hide-on-small mg30" role="complementary">
	<?php dynamic_sidebar( 'viral-sidebar' ); ?>
</div><!-- #secondary -->
