<?php
$is_font_second = false;

$font = MintOptions::get('general_styles--font_second');
if (
	!empty($font['font-family']) ||
	!empty($font['font-weight']) ||
	!empty($font['font-style']) ||
	!empty($font['font-transform']) ||
	!empty($font['font-size']) ||
	!empty($font['line-height']) ||
	!empty($font['letter-spacing']) ||
	!empty($font['color'])
) {
	$is_font_second = true;
}

$font_family = MintOptions::get('general_styles--font_second__custom_family');

if (!empty($font_family)) {
	$is_font_second = true;
}

if ($is_font_second) {

?>

	h1,h2,h3,h4,h5,h6,
	blockquote cite,
	label[for],
	.button,
	button,
	input[type=button],
	input[type=reset],
	input[type=submit],
	.button._light,
	.button._o,
	button._light,
	button._o,
	input[type=button]._light,
	input[type=button]._o,
	input[type=reset]._light,
	input[type=reset]._o,
	input[type=submit]._light,
	input[type=submit]._o,
	.main-header__logo,
	.bottom-footer-menu,
	.top-header-menu,
	.add-menu .menu-item-header>a,
	.add-menu>.menu-item>a,
	.main-menu .menu-item-header>a,
	.main-menu>.menu-item>a,
	.popup-menu,
	.title-wrapper__subtitle,
	.title-wrapper__desc._post,
	.inline-module__label,
	.breadcrumb,
	.theme-widget.widget_layered_nav_filters a,
	.theme-widget.widget_product_tag_cloud a,
	.theme-widget.widget_tag_cloud a,
	.product_list_widget li,
	.theme-widget.widget_price_filter button,
	.theme-widget__title,
	.product_list_widget .quantity,
	.widget_shopping_cart_content .total .amount,
	.widget_shopping_cart_content .total strong,
	.tooltip__title-text,
	.share._buttons .share__icon-link,
	.search-results-card__label,
	.search-results-card__meta,
	.no-results-page__label,
	.no-results-page__link,
	.theme-comments__title,
	.theme-comments__nav ul,
	.theme-comment__date,
	.theme-comment__reply,
	.comment-respond__title,
	.post-author__title-wrapper,
	.post-boxed__categories a,
	.post-grid__categories a,
	.post-masonry__categories a,
	.post-metro__categories a,
	.post-standard__categories a,
	.post-standard._quote .post-standard__icon,
	.post-standard._quote .post-standard__title,
	.post-standard._link .post-standard__desc,
	.post-standard__date,
	.post-standard__comments,
	.post-standard__date-month,
	.post-grid._quote .post-grid__icon,
	.post-grid._quote .post-grid__title,
	.post-grid__meta,
	.post-masonry._quote .post-masonry__icon,
	.post-masonry._quote .post-masonry__title,
	.post-masonry__meta,
	.post-metro__date,
	.post-metro._quote .post-metro__title,
	.post-metro._status .post-metro__title,
	.post-metro._link .post-metro__desc,
	.post-boxed._quote .post-boxed__icon,
	.post-boxed._quote .post-boxed__title,
	.post-boxed._status .post-boxed__title,
	.post-boxed__meta,
	.post-single__title,
	.post-pagination,
	.post-single__tags a,
	.post-single__tags-title,
	.post-nav__subtitle,
	.post-nav__title,
	.posts-nav__list-item a,
	.projects-categories__link,
	.project-card__title,
	.project-card__categories,
	.cross-sells__title,
	.related-products__title,
	.upsells-products__title,
	.wc-coupon__input,
	.amount,
	.price,
	.wc-form__title,
	.wc-separator,
	.wc-box__title,
	.wc-box__edit,
	.wc-box td,
	.wc-box th,
	.wc-message__content a,
	.add-to-wishlist__text,
	.products-list-counter,
	.products-list-pagination,
	.products-category__link,
	.products-category-card__title,
	.products-table__title,
	.products-table__item-column._product,
	.product-card__price,
	.product-card__title,
	.product-card__quick-view,
	.product-label,
	.product-rating__link,
	.product-variations__td,
	.product-page__title,
	.product-page__add-to-cart .woocommerce-variation-availability .stock,
	.product-page-tabs__nav-link,
	.product-page-attributes__title,
	.product-page-meta__item-desc,
	.product-page-meta__item-title,
	.cart-totals td,
	.cart-totals th,
	.cart-totals__title,
	.checkout-billing__title,
	.checkout-shipping__title,
	.shipping-calculator-button,
	.checkout-payment ul label a,
	.checkout-order-review td,
	.checkout-order-review th,
	.checkout-order-review__title,
	.woocommerce-MyAccount-content>table th,
	.woocommerce-MyAccount-navigation ul li,
	.lwa__title,
	.lwa__links li,
	.vc_progress_bar .vc_general.vc_single_bar .vc_label,
	.uvc-heading .uvc-main-heading h1,
	.uvc-heading .uvc-main-heading h2,
	.uvc-heading .uvc-main-heading h3,
	.uvc-heading .uvc-main-heading h4,
	.uvc-heading .uvc-main-heading h5,
	.uvc-heading .uvc-main-heading h6,
	.uvc-sub-heading,
	.flip-box-wrap .flip-box h3,
	.ult-ib-effect-style1 .ult-new-ib-title,
	.flip-box-wrap .flip_link a,
	a.ultb3-btn,
	.ultb3-title,
	.ult_countdown,
	.uvc-type-wrap,
	.wpb_row .wpb_column .wpb_wrapper .ult_countdown,
	.launch-demo a:after,
	.stats-block .stats-desc,
	.ult_design_1.ult-cs-black .ult_pricing_table .ult_price_link .ult_price_action_button,
	.ult_design_1.ult-cs-red .ult_pricing_table .ult_price_link .ult_price_action_button,
	.ult_design_1.ult-cs-blue .ult_pricing_table .ult_price_link .ult_price_action_button,
	.ult_design_1.ult-cs-yellow .ult_pricing_table .ult_price_link .ult_price_action_button,
	.ult_design_1.ult-cs-green .ult_pricing_table .ult_price_link .ult_price_action_button,
	.ult_design_1.ult-cs-gray .ult_pricing_table .ult_price_link .ult_price_action_button,
	.ult_featured.ult_design_1 .ult_pricing_table:before,
	.ult_design_1 .ult_price_body_block .ult_price_body .ult_price_figure,
	.ult_design_4 .ult_pricing_table .ult_pricing_heading h3,
	.ult_design_4 .ult_pricing_table .ult_price_link .ult_price_action_button,
	.vc_grid-filter.vc_grid-filter-default>.vc_grid-filter-item,
	.vc_general.vc_btn3,
	.timeline-block .timeline-header h3,
	.timeline-header-block .timeline-header h3,
	.timeline-separator-text .sep-text,
	.grid-item__categories a,
	.grid-item__date,
	.team-member__subtitle,
	.dropcaps_1:first-letter,
	.dropcaps_2:first-letter,
	.dropcaps_3:first-letter,
	.dropcaps_4:first-letter,
	.dropcaps_5:first-letter,
	.dropcaps_6:first-letter,
	.dropcaps_7:first-letter,
	.dropcaps_8:first-letter,
	.dropcaps_9:first-letter,
	.dropcaps_1b:first-letter,
	.dropcaps_2b:first-letter,
	.dropcaps_3b:first-letter,
	.dropcaps_4b:first-letter,
	.dropcaps_5b:first-letter,
	.dropcaps_6b:first-letter,
	.dropcaps_7b:first-letter,
	.dropcaps_8b:first-letter,
	.dropcaps_9b:first-letter
	{
		<?php
		MintCSS::font('general_styles--font_second');
		?>
	}

	.popup .search-form__input::-webkit-input-placeholder {
		<?php
		MintCSS::font('general_styles--font_second');
		?>
	}

	.popup .search-form__input:-moz-placeholder {
		<?php
		MintCSS::font('general_styles--font_second');
		?>
	}

	.popup .search-form__input::-moz-placeholder {
		<?php
		MintCSS::font('general_styles--font_second');
		?>
	}

	.popup .search-form__input:-ms-input-placeholder {
		<?php
		MintCSS::font('general_styles--font_second');
		?>
	}

	@media (min-width:768px) {
		.main-header._template8 .main-header__modules {
			<?php
			MintCSS::font('general_styles--font_second');
			?>
		}
	}

<?php

}
