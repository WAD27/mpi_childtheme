<?php
/**
 * The header for our theme.
 */

$sidebar_location = MintHelpers::get_sidebar_location();

$expanded_content = false;
if (MintOptions::get('layout--content_width') == 'expanded') {
	$expanded_content = true;
}

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<?php if (MintOptions::get('general--responsiveness')) { ?>
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
	<?php } ?>

	<?php
	if (MintOptions::get('general--preloader')) {
		add_filter('body_class', function($classes) {
			return array_merge($classes, array('preload'));
		});
		// Sorry, this script can't be with wp_enqueue_script, because data attribute is required
		?>
		<script
			data-pace-options='{"ajax":false,"restartOnPushState":false}'
			src="<?php echo get_template_directory_uri(); ?>/assets/vendor/PACE/pace.min.js"
		></script>
	<?php } ?>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<section class="main-wrapper">
		<div class="main-wrapper__border _top"></div>
		<div class="main-wrapper__border _right"></div>
		<div class="main-wrapper__border _bottom"></div>
		<div class="main-wrapper__border _left"></div>

		<header>

			<div class="
				header-wrapper
				js-header-wrapper
				<?php if (MintHelpers::is_negative_header()) { echo '_negative'; } ?>
			">
				<?php
				// Top header

				if (
					MintOptions::get('top_header') &&
					!(function_exists('is_account_page') && is_account_page() && !is_user_logged_in())
				) {
					get_template_part('parts/top_header');
				}


				// Header

				if (MintOptions::get('header')) {
					get_template_part('parts/header');
				}
				?>
			</div>


			<?php
			// Title wrapper

			if (MintHelpers::is_title_wrapper() && have_posts()) {
				get_template_part('parts/title_wrapper');
			}
			?>

		</header>

		<div class="main-content-before">
			<?php MintHelpers::get_dynamic_area(MintOptions::get('content--dynamic_area__before')); ?>
		</div>

		<div class="
			main-content-wrapper
			<?php
			if (
				(!is_singular() && get_post_type() == 'post') ||
				MintShop::is_shop() || MintShop::is_product_taxonomy() ||
				(is_search() && have_posts())
			) {
				echo '_bg_gray';
			}
			?>
		">
			<?php if (!(is_singular(array('product')) && !$sidebar_location)) { ?>
				<div class="container">
			<?php } ?>

				<?php if ($sidebar_location) { ?><div class="row"><?php } ?>

					<?php if ($sidebar_location == 'both') { ?>
						<aside class="
							theme-sidebar
							_left
							col-sm-3
							<?php if ($expanded_content) { ?>col-xl-2<?php } ?>
						" role="complementary">
							<?php dynamic_sidebar('sidebar_left'); ?>
						</aside>
					<?php } ?>

					<main id="main-content" class="main-content
						<?php
						if ($sidebar_location == 'left' || $sidebar_location == 'right') {

							?> col-sm-7 col-md-8 <?php

							if ($expanded_content) { ?> col-xl-9 <?php }

						} elseif ($sidebar_location) {

							?> col-sm-6 <?php
							if ($expanded_content) { ?>col-xl-8 <?php }

						}

						if ($sidebar_location == 'left' || $sidebar_location == 'both_left') {

							?> pull-right-sm <?php

						}
						?>
					">
