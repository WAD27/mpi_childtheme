<div class="
	main-header__add-menu
	<?php if (MintOptions::get('header--mobile_menu')) { echo 'hidden-xs hidden-sm hidden-md'; } ?>
">
	<?php
	if (has_nav_menu('additional')) {
		wp_nav_menu( array(
			'theme_location' => 'additional',
			'menu' => MintOptions::get('menu--additional'),
			'menu_class' => 'js-scroll-nav add-menu',
			'container' => 'nav',
		) );
	} else {
		esc_html_e('Assign a menu at Appearance > Menus', 'mint');
	}
	?>
</div>
