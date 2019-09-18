<?php
if (MintOptions::get('header')) {
?>

	.main-header:not(._fixed) {
		<?php
		MintCSS::border('header_styles--border');
		MintCSS::padding('header_styles--padding');
		?>
	}

	.main-header:not(._fixed) .main-header__add-menu {
		<?php
		MintCSS::padding('header_styles--additional_menu_padding');
		?>
	}

	.main-header:not(._fixed) .main-header__logo-wrapper {
		<?php
		MintCSS::padding('header_styles--logo_padding');
		?>
	}

	.main-header:not(._fixed) .main-header__main-menu {
		<?php
		MintCSS::padding('header_styles--main_menu_padding');
		?>
	}

	.main-header:not(._fixed) .main-header__modules,
	.main-header:not(._fixed) .main-header__mobile-menu,
	.main-header._template8 .main-header__modules {
		<?php
		MintCSS::padding('header_styles--modules_padding');
		?>
	}

	.popup._mobile-menu,
	.popup._popup-menu .popup__half._left {
		<?php
		MintCSS::bg('popup_menu_styles--bg');
		?>
	}

<?php
}
