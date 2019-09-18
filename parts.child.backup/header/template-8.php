<?php get_template_part( 'parts/header/part', 'logo' ); ?>

<div class="main-header__popup-menu">
	<div class="inline-modules">
		<?php MintModules::icon_popup_menu(); ?>
	</div>
</div>

<div class="main-header__modules">
	<div class="inline-modules">
		<?php MintModules::text('header', true, false); ?>
	</div>
</div>
