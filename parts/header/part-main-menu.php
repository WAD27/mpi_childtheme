<div class="
	main-header__main-menu
	<?php if (MintOptions::get('header--mobile_menu')) { echo 'hidden-xs hidden-sm hidden-md'; } ?>
">
	<?php
	if (has_nav_menu('main')) {
		wp_nav_menu( array(
			'theme_location' => 'main',
			'menu' => MintOptions::get('menu--main'),
			'menu_class' => 'js-scroll-nav main-menu',
			'container' => 'nav',
		) );
	} else {
		esc_html_e('Assign a menu at Appearance > Menus', 'mint');
	}
	?>
</div>
