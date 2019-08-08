<?php
if (MintOptions::get('footer')) {
?>

	.main-footer {
		<?php
		MintCSS::border('footer_styles--border');
		MintCSS::padding('footer_styles--padding');
		MintCSS::bg('footer_styles--bg');
		MintCSS::font('footer_styles--font');
		?>
	}

	.main-footer .widget__h {
		<?php
		MintCSS::font('footer_styles--font_widget');
		?>
	}

<?php
}
