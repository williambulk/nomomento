<?php

get_header(); ?>

<div class="vl-container">
	<div id="primary" class="content-area">

		<header class="vl-main-header mb30">
			<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
			<img class="mb30" src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
			<?php the_title( '<h1>', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<div class="mb30">
				<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- no momento posts -->
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
			<div class="mb30">
				<?php global $wp; ?>
				<h3>// COMENTÁRIOS:</h3>
				<div class="fb-comments" data-href="<?php echo home_url($wp->request); ?>" data-width="100%"></div>
			</div>

		<?php endwhile; // End of the loop. ?>

	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
