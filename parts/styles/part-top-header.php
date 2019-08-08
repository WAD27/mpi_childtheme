<?php
if (MintOptions::get('top_header')) {
?>

	.top-header {
		<?php
		MintCSS::border('top_header_styles--border');
		MintCSS::padding('top_header_styles--padding');
		MintCSS::bg('top_header_styles--bg');
		?>
	}

	.top-header .inline-module__text,
	.top-header .inline-module__menu,
	.top-header .inline-module__link {
		<?php
		MintCSS::font('top_header_styles--font');
		?>
	}

<?php
}
