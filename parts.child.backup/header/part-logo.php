<div class="main-header__logo-wrapper">
	<?php
	$logo = '';
	$logo = MintOptions::get('header--logo_dark');
	$logo_retina = '';
	$logo_retina = MintOptions::get('header--logo_dark_retina');
	$retina = is_array($logo_retina) && $logo_retina['url'] ? true : false;

	$logo_light = '';
	$logo_light = MintOptions::get('header--logo_light');
	$logo_light_retina = '';
	$logo_light_retina = MintOptions::get('header--logo_light_retina');
	$retina_light = is_array($logo_light_retina) && $logo_light_retina['url'] ? true : false;

	if ((is_array($logo) && $logo['url']) || (is_array($logo_light) && $logo_light['url'])) { ?>

		<div class="main-header__logo _dark" style="width:<?php echo esc_attr($logo['width']); ?>px">
			<a class="main-header__logo-link" href="<?php echo esc_url(home_url('/')); ?>">
				<img
					class="main-header__logo-img <?php if ($retina) { ?>_not-retina<?php } ?>"
					alt="<?php bloginfo('name'); ?>"
					src="<?php echo esc_url($logo['url']); ?>"
				>
				<?php if ($retina) {
					?><img
						class="main-header__logo-img _retina"
						alt="<?php bloginfo('name'); ?>"
						src="<?php echo esc_url($logo_retina['url']); ?>"
					><?php
				} ?>
			</a>
		</div>

		<?php if (MintOptions::get('header--color_scheme') == 'light') { ?>

			<div class="main-header__logo _light" style="width:<?php echo esc_attr($logo_light['width']); ?>px">
				<a class="main-header__logo-link" href="<?php echo esc_url(home_url('/')); ?>">
					<img
						class="main-header__logo-img <?php if ($retina_light) { ?>_not-retina<?php } ?>"
						alt="<?php bloginfo('name'); ?>"
						src="<?php echo esc_url($logo_light['url']); ?>"
					>
					<?php if ($retina_light) {
						?><img
							class="main-header__logo-img _retina"
							alt="<?php bloginfo('name'); ?>"
							src="<?php echo esc_url($logo_light_retina['url']); ?>"
						><?php
					} ?>
				</a>
			</div>

		<?php }

	} else { ?>

		<div class="main-header__logo">
			<a href="<?php echo esc_url(home_url('/')); ?>" class="main-header__logo-link"><?php bloginfo('name'); ?></a>
		</div>

	<?php } ?>
</div>
