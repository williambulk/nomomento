<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- METAS -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <meta name="sniply-options" content="block" />
    <!-- TÍTULO -->
    <title>
      <?php if ( is_category() ) {
        echo 'Categoria de &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_tag() ) {
        echo 'Arquivo de &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
      } elseif ( is_archive() ) {
        wp_title(''); echo ' Arquivo | '; bloginfo( 'name' );
      } elseif ( is_search() ) {
        echo 'Buscar por &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' );
      } elseif ( is_home() || is_front_page() ) {
        bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
      }  elseif ( is_404() ) {
        echo 'Erro 404 - Não Encontrado | '; bloginfo( 'name' );
      } elseif ( is_single() ) {
        wp_title('');
      } else {
        echo wp_title( ' | ', false, right ); bloginfo( 'name' );
      } ?>
    </title>
    <!-- IMPORTAÇÃO DO MATERIALIZE -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/materialize.min.css"  media="screen,projection"/>
    <!-- IMPORTAÇÃO DO STYLE.CSS -->
    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url') ?>/style.css"  media="screen,projection"/>
    <!-- FAVICON -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_url'); ?>/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">
    <!-- SCRIPTS -->
    <script data-ad-client="ca-pub-6833961077444956" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="<?php bloginfo('template_url') ?>/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143615486-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-143615486-1');
    </script>
    <!-- WP HEAD -->
    <?php wp_head(); ?>
  </head>
  <body>
  <!-- HEADER --> 
  <!-- NAVBAR -->
  <div class="navbar-fixed">
    <nav class="white z-depth-2">
      <div class="container">
        <div class="nav-wrapper">
          <a href="<?php echo get_home_url(); ?>" class="brand-logo">
            <img style="width: 300px; margin-top: 10px" src="<?php bloginfo('template_url'); ?>/img/logo/logo.png" />
          </a>
        </div>
      </div>
    </nav>
  </div>