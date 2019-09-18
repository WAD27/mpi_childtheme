<?php
if (MintOptions::get('bottom_footer')) {
?>

	.bottom-footer {
		<?php
		MintCSS::border('bottom_footer_styles--border');
		MintCSS::padding('bottom_footer_styles--padding');
		MintCSS::bg('bottom_footer_styles--bg');
		?>
	}

	.bottom-footer .inline-module__text,
	.bottom-footer .inline-module__menu,
	.bottom-footer .inline-module__link {
		<?php
		MintCSS::font('bottom_footer_styles--font');
		?>
	}

<?php
}
