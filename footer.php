<?php
/**
 * The template for displaying the footer.
 */

$sidebar_location = MintHelpers::get_sidebar_location();

$expanded_content = false;
if (MintOptions::get('layout--content_width') == 'expanded') {
	$expanded_content = true;
}

?>

					</main>

					<?php if ($sidebar_location == 'both_right' || $sidebar_location == 'both_left') { ?>

						<aside class="
							theme-sidebar
							<?php if ($sidebar_location == 'both_left') { ?>_left<?php } else { ?>_right<?php } ?>
							col-sm-3
							<?php if ($expanded_content) { ?>col-xl-2<?php } ?>
						" role="complementary">
							<?php dynamic_sidebar('sidebar_left'); ?>
						</aside>

					<?php } ?>

					<?php if ($sidebar_location == 'left' || $sidebar_location == 'right') { ?>

						<aside class="
							theme-sidebar
							_<?php echo esc_attr($sidebar_location); ?>
							col-sm-5
							col-md-4
							<?php if ($expanded_content) { ?>col-xl-3<?php } ?>
						" role="complementary">
							<?php dynamic_sidebar('sidebar_' . $sidebar_location); ?>
						</aside>

					<?php } elseif ($sidebar_location) { ?>

						<aside class="
							theme-sidebar
							<?php if ($sidebar_location == 'both_left') { ?>_left<?php } else { ?>_right<?php } ?>
							col-sm-3
							<?php if ($expanded_content) { ?>col-xl-2<?php } ?>
						" role="complementary">
							<?php dynamic_sidebar('sidebar_right'); ?>
						</aside>

					<?php } ?>

				<?php if ($sidebar_location) { ?></div><?php } ?>

			<?php if (!(is_singular(array('product')) && !$sidebar_location)) { ?></div><?php } ?>

		</div>

		<div class="main-content-after">
			<?php MintHelpers::get_dynamic_area(MintOptions::get('content--dynamic_area__after')); ?>
		</div>

		<footer class="footer-wrapper">

			<?php if (MintOptions::get('footer--fixed')) { ?>
				<div class="fixed-footer js-fixed-footer">
					<div class="fixed-footer__inner js-fixed-footer-inner">
			<?php } ?>

			<?php


			// Main Footer

			if (
				MintOptions::get('footer') &&
				!(function_exists('is_account_page') && is_account_page() && !is_user_logged_in())
			) {
				get_template_part('parts/footer');
			}


			// Bottom footer

			if (
				MintOptions::get('bottom_footer') &&
				!(function_exists('is_account_page') && is_account_page() && !is_user_logged_in())
			) {
				get_template_part('parts/bottom_footer');
			}

			?>

			<?php if (MintOptions::get('footer--fixed')) { ?>
					</div>
				</div>
			<?php } ?>

		</footer>

		<?php if (MintOptions::get('general--go_to_top')) { ?>
			<a href="#" class="go-to-top js-go-to-top"><span class="icon-arrow-up"></span></a>
		<?php } ?>

		<div class="popup-quick-view js-quick-view">
			<div class="popup-quick-view__loader"><i class="fa fa-spinner fa-pulse fa-3x"></i></div>
			<a href="#" class="popup-quick-view__close-bg js-hide-quick-view"></a>
			<span class="vertical-helper hidden-xs"></span><div class="popup-quick-view__content js-quick-view-content"></div>
		</div>
	</section>

	<!-- PhotoSwipe -->
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="pswp__bg"></div>
		<div class="pswp__scroll-wrap">
			<div class="pswp__container">
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
				<div class="pswp__item"></div>
			</div>
			<div class="pswp__ui pswp__ui--hidden">
				<div class="pswp__top-bar">
					<div class="pswp__counter"></div>
					<button class="pswp__button pswp__button--close" title="<?php esc_attr_e('Close (Esc)', 'mint'); ?>"></button>
					<button class="pswp__button pswp__button--fs" title="<?php esc_attr_e('Toggle fullscreen', 'mint'); ?>"></button>
					<button class="pswp__button pswp__button--zoom" title="<?php esc_attr_e('Zoom in/out', 'mint'); ?>"></button>
					<div class="pswp__preloader">
						<div class="pswp__preloader__icn">
							<div class="pswp__preloader__cut">
								<div class="pswp__preloader__donut"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
					<div class="pswp__share-tooltip"></div>
				</div>
				<button class="pswp__button pswp__button--arrow--left" title="<?php esc_attr_e('Previous (arrow left)', 'mint'); ?>">
				</button>
				<button class="pswp__button pswp__button--arrow--right" title="<?php esc_attr_e('Next (arrow right)', 'mint'); ?>">
				</button>
				<div class="pswp__caption">
					<div class="pswp__caption__center"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- End PhotoSwipe -->

	<?php if (MintOptions::get('general--typekit_kit_id')) { ?>
		<script src="https://use.typekit.net/<?php echo esc_url(MintOptions::get('general--typekit_kit_id')); ?>.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<?php } ?>
	<?php wp_footer(); ?>
</body>
</html>
