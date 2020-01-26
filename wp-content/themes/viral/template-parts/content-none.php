<?php
/**
 * @package Viral
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1><?php esc_html_e( 'Nada encontrado aqui', 'viral' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'viral' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Desculpa, mas a sua pesquisa não retornou nenhum resultado. Tente novamente.', 'viral' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'Parece que não há nenhum conteúdo aqui ainda. Tente buscar abaixo ou retorne para a página inicial.', 'viral' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
