<?php $template = absint(MintOptions::get('header--template'));?>

<div class="
	main-header
	js-main-header
	<?php
	if (
		is_404() ||
		!have_posts() ||
		(is_singular() && get_post_type() == 'product') ||
		(function_exists('is_account_page') && is_account_page() && !is_user_logged_in())
	) {
		echo ' _text_dark';
	} else {
		echo ' _text_' . esc_attr(MintOptions::get('header--color_scheme'));
	}
	echo ' _template' . $template;
	if (MintOptions::get('header_styles--gradient')) { echo ' _gradient'; }
	if (MintOptions::get('header--boxed')) { echo ' _boxed'; }
	if ($template === 8) { echo ' _fixed'; }
	if (MintOptions::get('header--fixed')) { echo ' js-fixed-header'; }
	?>
"><div class="container"><div class="main-header__inner">

	<?php get_template_part( 'parts/header/template', $template ); ?>

</div></div></div>
