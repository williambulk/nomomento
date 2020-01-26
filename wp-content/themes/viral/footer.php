<?php
/**
 * @package Viral
 */

?>

	</div>

	<footer id="vl-colophon" class="site-footer">
	<?php if(is_active_sidebar('viral-footer1') || is_active_sidebar('viral-footer2') || is_active_sidebar('viral-footer3') || is_active_sidebar('viral-footer4')){ ?>
	<div class="vl-top-footer">
		<div class="vl-container">
			<div class="vl-top-footer-inner vl-clearfix">
				<div class="desktop-only vl-footer-2 vl-footer-block">
					<?php dynamic_sidebar('viral-footer2') ?>
				</div>

				<div class="vl-footer-3 vl-footer-block">
					<?php dynamic_sidebar('viral-footer3') ?>
				</div>

				<div class="mobile-only vl-footer-2 vl-footer-block">
					<?php dynamic_sidebar('viral-footer2') ?>
				</div>

				<div class="vl-footer-4 vl-footer-block">
					<?php dynamic_sidebar('viral-footer4') ?>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>

	<div class="vl-bottom-footer">
		<div class="vl-container">
			<div class="vl-site-info">
				No Momento &copy; <?php echo date('Y'); ?>
			</div>
		</div>
	</div>
	</footer>
</div>

<div id="vl-back-top" class="vl-hide"><i class="fa fa-angle-up" aria-hidden="true"></i></div>

<?php wp_footer(); ?>

</body>
</html>