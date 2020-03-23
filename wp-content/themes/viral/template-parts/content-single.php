<article id="post-<?php the_ID(); ?>" <?php post_class('vl-article-content'); ?>>
	<header class="entry-header">
		<?php viral_post_date(); ?>
		<?php
			if ( function_exists('yoast_breadcrumb') ) {
			  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
			}
		?>
	</header>

	<div class="mb30">
		<!-- no momento posts -->
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-6833961077444956"
		     data-ad-slot="9424397759"
		     data-ad-format="auto"
		     data-full-width-responsive="true"></ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</div>
	
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->