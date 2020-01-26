<?php
/**
 * @package Viral
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('vl-article-content'); ?>>
	<header class="entry-header">
		<?php viral_post_date(); ?>
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
		?>
	</header>
	
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->