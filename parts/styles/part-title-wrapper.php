<?php
if (MintHelpers::is_title_wrapper() && have_posts()) {
?>

	.title-wrapper {
		<?php
		MintCSS::border('title_wrapper_styles--border');
		MintCSS::padding('title_wrapper_styles--padding');
		?>
	}

	.title-wrapper__bg {
		<?php
		MintCSS::bg('title_wrapper_styles--bg');
		?>
	}

	.title-wrapper__subtitle {
		<?php
		MintCSS::font('title_wrapper_styles--font_subtitle');
		?>
	}

	.title-wrapper__title {
		<?php
		MintCSS::font('title_wrapper_styles--font_title');
		?>
	}

	.title-wrapper__desc {
		<?php
		MintCSS::font('title_wrapper_styles--font_desc');
		?>
	}

	.title-wrapper .breadcrumb {
		<?php
		MintCSS::font('title_wrapper_styles--font_breadcrumb');
		?>
	}

<?php
}
