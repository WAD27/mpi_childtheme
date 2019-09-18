<?php
$menu = MintOptions::get('bottom_footer--menu');
$menu_at_left = MintOptions::get('bottom_footer--menu_left');
$left_cols_sm = absint(MintOptions::get('bottom_footer--left_cols_sm'));
$right_cols_sm = absint(MintOptions::get('bottom_footer--right_cols_sm'));

if ($menu) {
	if (has_nav_menu('bottom_footer')) {
		$bottom_footer_menu = wp_nav_menu( array(
			'theme_location' => 'bottom_footer',
			'menu' => MintOptions::get('menu--bottom_footer'),
			'menu_class' => 'bottom-footer-menu js-scroll-nav inline-module__menu',
			'container' => 'nav',
			'container_class' => 'inline-module',
			'echo' => false,
			'depth' => 1,
		) );
	} else {
		$bottom_footer_menu = '<div class="inline-module"><div class="inline-module__menu">' . esc_html__('Assign a menu at Appearance > Menus', 'mint') . '</div></div>';
	}
}

?>

<div class="bottom-footer">
	<div class="container">
		<div class="row">

			<?php if ($left_cols_sm) { ?>
				<div class="<?php echo 'col-sm-' . $left_cols_sm; ?>">
					<div class="
						inline-modules
						text-center
						text-<?php echo esc_attr(MintOptions::get('bottom_footer_styles--first_align')); ?>-sm
					">

						<?php MintModules::text('bottom_footer', false, false); ?>

						<?php if ($menu && $menu_at_left) { ?>
							<span class="inline-module _separator hidden-xs"></span>
							<?php echo balanceTags($bottom_footer_menu); ?>
						<?php } ?>

					</div>
				</div>
			<?php } ?>

			<?php if ($right_cols_sm) { ?>
				<div class="<?php echo 'col-sm-' . $right_cols_sm; ?>">
					<div class="
						inline-modules
						text-center
						text-<?php echo esc_attr(MintOptions::get('bottom_footer_styles--second_align')); ?>-sm
					">

						<?php if ($menu && !$menu_at_left) { ?>
							<?php echo balanceTags($bottom_footer_menu); ?>
							<span class="inline-module _separator hidden-xs"></span>
						<?php } ?>

						<?php MintModules::icon_social('bottom_footer', false, false); ?>

						<?php MintModules::icon_currency('bottom_footer', false); ?>

						<?php MintModules::icon_language_flags('bottom_footer', false); ?>

					</div>
				</div>
			<?php } ?>

		</div>
	</div>
</div>
