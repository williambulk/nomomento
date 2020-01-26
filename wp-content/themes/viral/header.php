<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/images/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/images/favicon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<script charset="UTF-8" src="//cdn.sendpulse.com/js/push/819fb9c2195c26d7d28b1b82c93b9135_1.js" async></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
         (adsbygoogle = window.adsbygoogle || []).push({
              google_ad_client: "ca-pub-6833961077444956",
              enable_page_level_ads: true
         });
    </script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="vl-page">
	<header id="vl-masthead" class="vl-site-header">
		<div class="vl-top-header desktop-only">
			<div class="vl-container clearfix">
				<div class="vl-top-left-header">
					<?php 
					/*
					* Left Header Hook
					* @hooked - viral_show_date - 10
					* @hooked - viral_header_text - 10
					* @hooked - viral_top_menu - 10
					*/
					do_action('viral_left_header_content') ?>
				</div>

				<div class="vl-top-right-header">
					<?php 
					/*
					* Right Header Hook
					* @hooked - viral_social_links - 10
					*/
					do_action('viral_right_header_content') ?>
				</div>
			</div>
		</div>

		<div class="vl-header">
			<div class="vl-container clearfix">
				<div id="vl-site-branding">
					<?php 
					if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) :
						the_custom_logo();
					else : 
						if ( is_front_page() ) : ?>
							<h1 class="vl-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php else : ?>
							<p class="vl-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
						<?php endif; ?>
						<p class="vl-site-description"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p>
					<?php endif; ?>
				</div><!-- .site-branding -->

				<?php if(is_active_sidebar('viral-header-ads')){ ?> 
				<div class="vl-header-ads">
					<?php dynamic_sidebar('viral-header-ads'); ?>
				</div>
				<?php } ?>
				<div class="vl-header-ads">
					<!-- No Momento Inicial -->
					<ins class="adsbygoogle"
					     style="display:inline-block;width:728px;height:90px"
					     data-ad-client="ca-pub-6833961077444956"
					     data-ad-slot="8790425907"></ins>
					<script>
					     (adsbygoogle = window.adsbygoogle || []).push({});
					</script>
				</div>
				<?php ?>
			</div>
		</div>

		<nav id="vl-site-navigation" class="vl-main-navigation desktop-only">
			<?php wp_nav_menu( 
					array( 
					'theme_location' => 'primary', 
					'container_class' => 'vl-menu vl-clearfix' ,
					'menu_class' => 'vl-clearfix',
					'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', 
					) 
				); 
			?>
		</nav>
		<!-- #vl-site-navigation desktop -->
		<ins class="adsbygoogle"
			style="display:block"
			data-ad-client="ca-pub-6833961077444956"
			data-ad-slot="9556906185"
			data-ad-format="auto"
			data-full-width-responsive="true">
		</ins>
		<script>
		     (adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	</header><!-- #vl-masthead -->

	<div id="vl-content" class="vl-site-content">