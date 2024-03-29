<?php
$category_image_on_bg = MintOptions::get('title_wrapper--category_image_on_bg');
$category_image_src = MintShop::get_category_image_src();
$align = MintOptions::get('title_wrapper_styles--align');
$full_height = MintOptions::get('title_wrapper--full_height');
?>

<div class="
title-wrapper
js-title-wrapper
_parallax
<?php
echo ' text-' . $align;
if (!MintOptions::get('title_wrapper--parallax')) { ?> _parallax<?php }
?>
">

<div
class="title-wrapper__bg js-title-wrapper-bg"
style="
background-image:url(<?php

	if (is_single() && get_post_type() === "mpi-team") {

		echo get_field('mpi_team_foto_header');

	} else if(is_archive()) {

		echo site_url() . '/wp-content/uploads/2019/10/placeholder.chido_.2.jpg';

	} else {

		echo get_the_post_thumbnail_url();
	}

	?>);
	background-position:center;
	background-size:cover;
	"
	></div>

	<!-- <div class="title-wrapper__bg-pattern"></div> -->

	<div
	class="title-wrapper__bg-overlay"
	style="background-color:<?php
	$bg_overlay = MintOptions::get('title_wrapper_styles--bg_overlay');
	echo empty($bg_overlay['rgba']) ? '' : esc_attr($bg_overlay['rgba']);
	?>;"
	></div>


	<div class="js-under-header-wrapper"></div>


	<div class="title-wrapper__center js-title-wrapper-center">
		<div class="container">
			<?php


			// Single post categories

			if (is_singular('post') && MintHelpers::is_categorized_blog() && MintOptions::get('single_post--categories')) {
				?>
				<div class="title-wrapper__row">
					<div class="title-wrapper__subtitle"><?php the_category(', '); ?></div>
				</div>
				<?php
			}

			// Title

			?>
			<div class="title-wrapper__row _title">
				<h1 class="title-wrapper__title">
					<?php

					if (is_home() && is_front_page()) {

						bloginfo('name');

					} elseif (MintShop::is_woocommerce()) {

						woocommerce_page_title();

					} elseif (is_home()) {

						single_post_title();

					} elseif (is_tax('projects_category')) {

						single_cat_title();

					} elseif (is_archive() && get_post_type() == 'project') {

						echo MintOptions::get('projects--title');

					} elseif (is_archive()) {

						// the_archive_title();
						echo "CASOS DE EXITO";

					} elseif (is_search()) {

						printf(esc_html__('Resultado de busqueda: %s', 'mint'), get_search_query());

					} elseif (!have_posts()) {

						esc_html_e('Nothing Found', 'mint');

					} elseif (is_single() && get_post_type() === "mpi-team") {

						echo get_field('mpi_team_nombre');


					} else {

						the_title();

					}

					?>
				</h1>
			</div>


			<?php
			// Subtitle
			if (!is_singular('post') && MintOptions::get('title_wrapper--subtitle')) {
				?>
				<div class="title-wrapper__row">
					<div class="title-wrapper__subtitle">
						<span><?php echo esc_attr(MintOptions::get('title_wrapper--subtitle')); ?></span>
					</div>
				</div>
				<?php
			} elseif (is_single() && get_post_type() === "mpi-team") {
				?>
				<div class="title-wrapper__row">
					<div class="title-wrapper__subtitle">
						<span><?php echo get_field('mpi_team_puesto'); ?></span>
					</div>
				</div>

				<?php
			}

			// Subcategories

			if (MintShop::is_woocommerce()) {
				woocommerce_product_subcategories(
					array(
						'before' => '<div class="title-wrapper__row"><div class="row">',
						'after' => '</div></div>'
					)
				);
			}


			// Description

			if (MintOptions::get('title_wrapper--desc') && !is_search()) {

				$classes = 'title-wrapper__desc _' . $align;

				if (MintShop::is_woocommerce()) {

					?>
					<div class="title-wrapper__row">
					<div class="<?php echo esc_attr($classes); ?>">
					<?php do_action( 'woocommerce_archive_description' ); ?>
					</div>
					</div>
					<?php

				} elseif (is_archive()) {

					the_archive_description(
						'<div class="title-wrapper__row"><div class="' . $classes . '">',
						'</div></div>'
					);

				} elseif (is_singular('post')) {
					$classes .= ' _post';

					?>
					<div class="title-wrapper__row">
					<div class="<?php echo esc_attr($classes); ?>">

					<time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
					<span class="icon-clock"></span> <?php echo get_the_date(); ?>
					</time>

					<?php if (
						!post_password_required() &&
						comments_open() &&
						get_comments_number() != 0
					) { ?>
						<span class="js-scroll-nav">
						<a href="#comments">
						<span class="icon-speech-bubble"></span> <?php comments_number(
							esc_html__('No comments', 'mint'),
							esc_html__('1 comment', 'mint'),
							esc_html__('% comments', 'mint')
						); ?>
						</a>
						</span>
						<?php } ?>

						</div>
						</div>
						<?php

					} elseif (is_home() && MintOptions::get('posts--desc') != '') {

						?>
						<div class="title-wrapper__row">
						<div class="<?php echo esc_attr($classes); ?>">
						<?php echo wp_kses_post(MintOptions::get('posts--desc')); ?>
						</div>
						</div>
						<?php

					} elseif (MintOptions::get('local_title_wrapper--desc_text', false) != '') {

						?>
						<div class="title-wrapper__row">
						<div class="<?php echo esc_attr($classes); ?>">
						<?php echo wp_kses_post(MintOptions::get('local_title_wrapper--desc_text', false)); ?>
						</div>
						</div>
						<?php

					}

				}


				// end title-wrapper__center ?>
				</div>
				</div>


				<?php


				// Single post author and share

				if (is_singular('post') && $full_height && MintOptions::get('single_post--share')) {

					?>
					<div class="title-wrapper__bottom js-title-wrapper-bottom">
					<div class="container">
					<?php MintModules::share_buttons(); ?>
					</div>
					</div>
					<?php

				}


				// Breadcrumb

				if (MintOptions::get('title_wrapper--breadcrumb') && !is_search() && !is_singular('post')) {
					$classes = 'title-wrapper__bottom js-title-wrapper-bottom';
					if ($full_height && $align === 'center') {
						$classes .= ' _first';
					}

					if (function_exists('yoast_breadcrumb')) {
						yoast_breadcrumb(
							'<div class="' . $classes . '"><div class="container"><nav class="breadcrumb">',
							'</nav></div></div>'
						);
					} elseif (MintShop::is_woocommerce()) {
						woocommerce_breadcrumb(array(
							'wrap_before' => '<div class="' . $classes . '"><div class="container"><nav class="breadcrumb">',
							'wrap_after' => '</nav></div></div>'
						));
					}

				}


				// Scroll Down

				if ($full_height && !is_singular('post')) {
					?>
					<nav
					class="
					title-wrapper__bottom _last
					js-title-wrapper-bottom
					js-scroll-nav
					"
					>
					<div class="container">
					<a
					href="#scroll-down-btn"
					id="scroll-down-btn"
					class="title-wrapper__arrow-down <?php echo '_' . $align; ?>"
					title="<?php esc_attr_e('Scroll Down', 'mint'); ?>"
					>
					<i class="arrow-down"></i>
					</a>
					</div>
					</nav>
					<?php
				}

				?>


				</div>
