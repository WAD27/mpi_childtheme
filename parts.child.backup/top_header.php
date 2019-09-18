<?php
$menu = MintOptions::get('top_header--menu');
$menu_at_left = MintOptions::get('top_header--menu_left');
$menu_container_classes = 'inline-module visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block text-center';
$left_cols_sm = absint(MintOptions::get('top_header--left_cols_sm'));
$right_cols_sm = absint(MintOptions::get('top_header--right_cols_sm'));

if ($menu) {
	if (has_nav_menu('top_header')) {
		$top_header_menu = wp_nav_menu( array(
			'theme_location' => 'top_header',
			'menu' => MintOptions::get('menu--top_header'),
			'menu_class' => 'top-header-menu js-scroll-nav inline-module__menu',
			'container' => 'nav',
			'container_class' => $menu_container_classes,
			'echo' => false,
			'depth' => 1,
		) );
	} else {
		$top_header_menu = '<div class="' . $menu_container_classes . '"><div class="inline-module__menu">' . esc_html__('Assign a menu at Appearance > Menus', 'mint') . '</div></div>';
	}
}

?>

<div class="top-header">
	<div class="container">
		<div class="row _inline">

			<?php if ($left_cols_sm) { ?>
				<div class="<?php echo 'col-sm-' . $left_cols_sm; ?> _inline"><div>
					<div class="inline-modules text-center text-left-sm">

						<?php MintModules::text('top_header', false, false); ?>

						<?php if ($menu && $menu_at_left) { ?>
							<span class="inline-module _separator hidden-xs"></span>
							<?php echo balanceTags($top_header_menu); ?>
						<?php } ?>

					</div>
				</div></div>
			<?php } ?>

			<?php if ($right_cols_sm) { ?>
				<div class="<?php echo 'col-sm-' . $right_cols_sm; ?> _inline"><div>
					<div class="inline-modules text-center text-right-sm">

						<?php if ($menu && !$menu_at_left) { ?>
							<?php echo balanceTags($top_header_menu); ?>
							<span class="inline-module _separator hidden-xs"></span>
						<?php } ?>

						<?php MintModules::icon_lwa('top_header', false); ?>

						<?php MintModules::icon_wishlist('top_header', false, false); ?>

						<?php MintModules::icon_minicart('top_header', false); ?>

						<?php MintModules::icon_search('top_header', false); ?>

						<?php MintModules::icon_social('top_header', false, false); ?>

						<?php MintModules::icon_currency('top_header', false); ?>

						<?php MintModules::icon_language_flags('top_header', false); ?>

					</div>
				</div></div>
			<?php } ?>

		</div>
	</div>
</div>
