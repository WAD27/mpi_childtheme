<div class="main-header__modules">
	<div class="inline-modules _nowrap">
		<?php MintModules::icon_mobile(); ?>
		<?php MintModules::text(); ?>
		<?php MintModules::icon_social(); ?>
		<?php MintModules::icon_lwa(); ?>
		<?php //MintModules::icon_wishlist(); ?>
		<?php //MintModules::icon_minicart(); ?>
		<?php //MintModules::icon_search(); ?>
		<?php //MintModules::icon_currency(); ?>
		<?php //MintModules::icon_language_flags(); ?>

		<?php if (MintOptions::get('header--mobile_menu')) { ?>
			<?php MintModules::icon_mobile_menu(); ?>
		<?php } ?>
	</div>
</div>
