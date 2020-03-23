<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header('enquetes'); ?>

<style type="text/css">
	
	h1, h3 {
		font-family: 'Lato', sans-serif;
	    font-weight: 400;
	    line-height: 1.3em;
	}

	p {
		font-family: 'Lato', sans-serif;
		line-height: 1.5em;
		font-size: 16px !important;
	}

</style>

	<?php while ( have_posts() ) : the_post(); ?>

		<div class="black">
		    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
		    <img alt="<?php the_title(); ?>" class="imagem-capa" src="<?php echo $featured_img_url; ?>" />
		</div>
		<div class="container">
			<div class="row mg20">
				<div class="col s10 push-s1 m8 push-m2">
                    <h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
		</div>

	<?php endwhile; ?>

	<div class="container">
        <div class="row pb50">
        	<!-- COMENTARIOS -->
        	<div class="col s12 m8 push-m2">
        		<?php global $wp; ?>
        		<div class="col s10 push-s1 m12">
        			<h3>// COMENTÁRIOS:</h3>
        		</div>
			</div>
			<div class="col s10 push-s1 m8 push-m2">
        		<div class="fb-comments" data-href="<?php echo home_url($wp->request); ?>" data-width="100%"></div>
        	</div>
        </div>
    </div>

<?php get_footer(); ?>