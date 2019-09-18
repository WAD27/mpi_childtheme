<?php
$layout = MintOptions::get('layout');

if ($layout == 'boxed' || $layout == 'boxed_laterals') {

	?>

	@media (min-width: 992px) {
		.main-wrapper {
			margin-left:auto;
			margin-right:auto;
			max-width:992px;
			<?php if ($layout == 'boxed') { ?>
				margin-top:45px;
				margin-bottom:45px;
			<?php } ?>
		}

		.main-header._fixed {
			width:100%!important;
		}

		.main-content-wrapper {
			overflow:hidden;
		}
	}

	@media (min-width: 1200px) {
		.main-wrapper {
			max-width:1200px;
		}
	}

	@media (min-width: 1260px) {
		.main-wrapper {
			max-width:1260px;
		}
	}

	<?php

} elseif ($layout == 'bordered') {

	$border = MintOptions::get('layout--border');

	if (!empty($border)) {

		?>

		@media (min-width: 992px) {
			.main-wrapper {
				<?php
				echo 'margin-top:' . (
					!empty($border['border-top']) && $border['border-top'] !== 'px'
					? $border['border-top'] : 0) . ';';
				echo 'margin-right:' . (
					!empty($border['border-right']) && $border['border-right'] !== 'px'
					? $border['border-right'] : 0) . ';';
				echo 'margin-bottom:' . (
					!empty($border['border-bottom']) && $border['border-bottom'] !== 'px'
					? $border['border-bottom'] : 0) . ';';
				echo 'margin-left:' . (
					!empty($border['border-left']) && $border['border-left'] !== 'px'
					? $border['border-left'] : 0) . ';';
				?>
			}

			.main-header._fixed {
				<?php
				echo 'top:' . (
					!empty($border['border-top']) && $border['border-top'] !== 'px'
					? $border['border-top'] : 0) . ';';
				echo 'left:' . (
					!empty($border['border-left']) && $border['border-left'] !== 'px'
					? $border['border-left'] : 0) . ';';
				echo 'right:' . (
					!empty($border['border-right']) && $border['border-right'] !== 'px'
					? $border['border-right'] : 0) . ';';
				?>
			}

			.main-content-wrapper {
				overflow:hidden;
			}

			.post-nav-prev.__fixed {
				<?php
				echo 'left:' . (
					!empty($border['border-left']) && $border['border-left'] !== 'px'
					? $border['border-left'] : 0) . ';';
				?>
			}

			.post-nav-next.__fixed {
				<?php
				echo 'right:' . (
					!empty($border['border-right']) && $border['border-right'] !== 'px'
					? $border['border-right'] : 0) . ';';
				?>
			}

			.vc_row[data-vc-stretch-content] {
				<?php
				echo 'border-left:' . (
					!empty($border['border-left']) && $border['border-left'] !== 'px'
					? $border['border-left'] : 0) . ' solid transparent !important;';
				echo 'border-right:' . (
					!empty($border['border-right']) && $border['border-right'] !== 'px'
					? $border['border-right'] : 0) . ' solid transparent !important;';
				?>
				background-clip:padding-box;
			}

			.main-wrapper__border._top {
				<?php
				MintCSS::border('layout--border', true, false, false, false);
				?>
			}
			.main-wrapper__border._right {
				<?php
				MintCSS::border('layout--border', false, true, false, false);
				?>
			}
			.main-wrapper__border._bottom {
				<?php
				MintCSS::border('layout--border', false, false, true, false);
				?>
			}
			.main-wrapper__border._left {
				<?php
				MintCSS::border('layout--border', false, false, false, true);
				?>
			}
		}

		<?php

	}

}


if (MintOptions::get('layout--header_width') == 'compact') {
	?>

	.top-header > .container,
	.main-header > .container {
		max-width:970px;
	}

	<?php
} elseif (MintOptions::get('layout--header_width') == 'expanded') {
	?>

	@media (min-width: 1260px) {
		.top-header > .container,
		.main-header > .container {
			width:100%;
			padding-right:60px;
			padding-left:60px;
		}
	}

	<?php
}


if (MintOptions::get('layout--content_width') == 'compact') {
	?>

	.main-content-before > .container,
	.main-content-wrapper > .container,
	.main-content-after > .container {
		max-width:970px;
	}

	<?php
} elseif (MintOptions::get('layout--content_width') == 'expanded') {
	?>

	@media (min-width: 1260px) {
		.main-content-before > .container,
		.main-content-wrapper > .container,
		.main-content-after > .container {
			width:100%;
			max-width:1740px;
			padding-right:60px;
			padding-left:60px;
		}
		<?php if (get_post_type() == 'post') { ?>
			.blog .main-content-wrapper > .container,
			.archive .main-content-wrapper > .container {
				max-width:none;
			}
		<?php } ?>
	}

	<?php
}


if (MintOptions::get('layout--footer_width') == 'compact') {
	?>

	.main-footer > .container,
	.bottom-footer > .container {
		max-width:970px;
	}

	<?php
} elseif (MintOptions::get('layout--footer_width') == 'expanded') {
	?>

	@media (min-width: 1260px) {
		.main-footer > .container,
		.bottom-footer > .container {
			width:100%;
			max-width:1740px;
			padding-right:60px;
			padding-left:60px;
		}
	}

	<?php
}
