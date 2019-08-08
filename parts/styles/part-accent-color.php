<?php
$accent_color = esc_attr(MintOptions::get('general_styles--accent'));

if (!empty($accent_color)) {

	$accent_color_hover = MintCSS::adjustBrightness($accent_color, -33);

?>

	a,
	blockquote cite,
	.add-menu .menu-item .current-menu-ancestor>a,
	.add-menu .menu-item .current-menu-item>a,
	.add-menu .menu-item .menu-item:hover>a,
	.bottom-footer-menu .current-menu-ancestor>a,
	.bottom-footer-menu .current-menu-item>a,
	.bottom-footer-menu a:hover,
	.main-menu .menu-item .current-menu-ancestor>a,
	.main-menu .menu-item .current-menu-item>a,
	.main-menu .menu-item .menu-item:hover>a,
	.top-header-menu .current-menu-ancestor>a,
	.top-header-menu .current-menu-item>a,
	.top-header-menu a:hover,
	label[for]._focus,
	label[for]:hover,
	.button._o:hover,
	button._o:hover,
	input[type=button]._o:hover,
	input[type=reset]._o:hover,
	input[type=submit]._o:hover,
	.product_list_widget a:hover,
	.theme-widget.widget_archive._sidebar a:hover,
	.theme-widget.widget_categories._sidebar a:hover,
	.theme-widget.widget_layered_nav._sidebar a:hover,
	.theme-widget.widget_meta._sidebar a:hover,
	.theme-widget.widget_nav_menu._sidebar a:hover,
	.theme-widget.widget_pages._sidebar a:hover,
	.theme-widget.widget_product_categories .current-cat a,
	.theme-widget.widget_product_categories._sidebar a:hover,
	.theme-widget.widget_recent_comments._sidebar a:hover,
	.theme-widget.widget_recent_entries._sidebar a:hover,
	.theme-widget.widget_text._sidebar a:hover,
	.theme-widget.widget_price_filter button,
	.product_list_widget .amount,
	.widget_shopping_cart_content .total .amount,
	.comment-respond .stars a.active,
	.theme-comments__nav a:hover,
	.tooltip:hover .tooltip__title,
	.no-results-page__label,
	.post-standard__link:hover,
	.post-boxed__title-link:hover,
	.post-pagination a:hover,
	a:hover .post-nav__title,
	.posts-nav__list-item a:hover,
	.projects-categories__link._active,
	.wc-form .stars a.active,
	.project-card:not(._has-animation):hover .project-card__title,
	.products-list-pagination a:hover,
	.products-table__item-column._product a:hover,
	.product-card__price,
	.product-card__quick-view,
	.product-page__price,
	.product-page__add-to-cart .woocommerce-variation-price .price,
	.checkout-billing .stars a.active,
	.checkout-shipping .stars a.active,
	.product-page-meta__item-desc a:hover,
	.checkout-payment ul label a,
	.flex-direction-nav .flex-next,
	.flex-direction-nav .flex-prev,
	.lwa__links a:hover,
	.vc_tta-accordion.vc_tta-style-outline.vc_tta-shape-square.vc_tta-color-black .vc_tta-panel .vc_tta-panel-title>a:hover,
	.aio-icon-component .aio-icon,
	.stats-block .stats-number,
	.ult_design_1 .ult_price_body_block .ult_price_body .ult_price_figure,
	.grid-item__title a:hover,
	.arrow-down,
	.arrow-left,
	.arrow-right,
	.arrow-up,
	.hamburger._close:after,
	.hamburger._close:before
	{
		color: <?php echo $accent_color; ?>;
	}

	.stats-block .counter_prefix,
	.stats-block .counter_suffix
	{
		color: <?php echo $accent_color; ?> !important;
	}

	::-moz-selection {
		background-color: <?php echo $accent_color; ?>;
	}

	::selection {
		background-color: <?php echo $accent_color; ?>;
	}

	.button,
	button,
	input[type=button],
	input[type=reset],
	input[type=submit],
	.add-menu a:after,
	.main-menu a:after,
	.inline-module__label,
	.popup._accent,
	.theme-widget.widget_layered_nav .chosen a:hover:before,
	.popup__half._right,
	.theme-widget.widget_product_tag_cloud a:hover,
	.theme-widget.widget_tag_cloud a:hover,
	.theme-widget.widget_layered_nav_filters a:hover,
	.tooltip__content,
	.search-results-card__label,
	.go-to-top:hover,
	.post-standard._quote,
	.post-boxed__categories a,
	.post-grid__categories a,
	.post-masonry__categories a,
	.post-metro__categories a,
	.post-standard__categories a,
	.post-grid._quote,
	.post-grid__img-wrapper:after,
	.post-masonry._quote,
	.post-masonry__img-wrapper:after,
	.post-boxed._quote,
	.post-boxed__img-wrapper:after,
	.post-single__tags a:hover,
	.project-card._animation_5 .project-card__img-wrapper:after,
	.project-card._animation_5 .project-card__img-wrapper:before,
	.project-card._animation_5:after,
	.project-card._animation_5:before,
	.project-card._animation_6 .project-card__content,
	.preload:not(.pace-done),
	.ui-slider .ui-slider-range,
	.vc_toggle_round .vc_toggle_icon,
	.vc_toggle_round.vc_toggle_color_inverted .vc_toggle_icon::after,
	.vc_toggle_round.vc_toggle_color_inverted .vc_toggle_icon::before,
	.vc_toggle_simple .vc_toggle_icon::after,
	.vc_toggle_simple .vc_toggle_icon::before,
	.ult-ib-effect-style1:after,
	.flip-box-wrap .flip_link a,
	.launch-demo a:after,
	a.vc_single_image-wrapper.prettyphoto:after,
	.aio-icon-component .aio-icon.circle,
	.aio-icon-component .aio-icon.square,
	.ubtn-bottom-bg .ubtn-hover,
	.ubtn-center-dg-bg .ubtn-hover,
	.ubtn-center-hz-bg .ubtn-hover,
	.ubtn-center-vt-bg .ubtn-hover,
	.ubtn-left-bg .ubtn-hover,
	.ubtn-right-bg .ubtn-hover,
	.ubtn-top-bg .ubtn-hover,
	.timeline-feature-item .timeline-dot,
	.timeline-wrapper .timeline-dot,
	.timeline-line o,
	.timeline-line z,
	.timeline-separator-text .sep-text,
	.dropcaps_7:first-letter,
	.dropcaps_7b:first-letter,
	.dropcaps_9:first-letter,
	.dropcaps_9b:first-letter,
	.ult_design_1.ult-cs-black .ult_pricing_table .ult_price_link .ult_price_action_button,
	.ult_design_1.ult-cs-blue .ult_pricing_table .ult_price_link .ult_price_action_button,
	.ult_design_1.ult-cs-gray .ult_pricing_table .ult_price_link .ult_price_action_button,
	.ult_design_1.ult-cs-green .ult_pricing_table .ult_price_link .ult_price_action_button,
	.ult_design_1.ult-cs-red .ult_pricing_table .ult_price_link .ult_price_action_button,
	.ult_design_1.ult-cs-yellow .ult_pricing_table .ult_price_link .ult_price_action_button,
	.ult_featured.ult_design_1 .ult_pricing_table:before,
	.ult_design_4 .ult_pricing_table .ult_price_link .ult_price_action_button,
	.ult-cs-black.ult_design_4 .ult_pricing_table .ult_price_link .ult_price_action_button,
	.grid-item__categories a,
	.team-member__social-link:hover,
	.theme-selection-accent
	{
		background-color: <?php echo $accent_color; ?>;
	}

	.uavc-icons .aio-icon:hover,
	.vc_row .uavc-icons .aio-icon:hover
	{
		background: <?php echo $accent_color; ?> !important;
	}

	.popup-menu a,
	.title-wrapper__subtitle a,
	.title-wrapper__subtitle span,
	.project-card._animation_3 .project-card__category,
	.project-card._animation_5 .project-card__category,
	.project-card._animation_9 .project-card__category,
	.team-member._card .team-member__subtitle-inner,
	.theme-underline,
	.theme-underline-bold
	{
		background-image: -webkit-linear-gradient(top, <?php echo $accent_color; ?> 0, <?php echo $accent_color; ?> 100%);
		background-image: linear-gradient(to bottom, <?php echo $accent_color; ?> 0, <?php echo $accent_color; ?> 100%);
	}

	.tooltip__content:after,
	.dropcaps_8:first-letter,
	.dropcaps_8b:first-letter,
	.team-member__content
	{
		border-top-color: <?php echo $accent_color; ?>;
	}

	.ult-cs-black.ult_design_4 .ult_pricing_table
	{
		border-top-color: <?php echo $accent_color; ?> !important;
	}

	.products-category__link:hover:after,
	.dropcaps_8:first-letter,
	.dropcaps_8b:first-letter,
	.vc_grid-filter.vc_grid-filter-default>.vc_grid-filter-item.vc_active
	{
		border-bottom-color: <?php echo $accent_color; ?>;
	}

	blockquote,
	input[type=date]:focus,
	input[type=datetime-local]:focus,
	input[type=datetime]:focus,
	input[type=email]:focus,
	input[type=month]:focus,
	input[type=number]:focus,
	input[type=password]:focus,
	input[type=search]:focus,
	input[type=tel]:focus,
	input[type=text]:focus,
	input[type=time]:focus,
	input[type=url]:focus,
	input[type=week]:focus,
	select:focus,
	textarea:focus,
	.vc_tta-accordion.vc_tta-style-outline.vc_tta-shape-square.vc_tta-color-black .vc_active .vc_tta-panel-heading .vc_tta-controls-icon::after,
	.vc_tta-accordion.vc_tta-style-outline.vc_tta-shape-square.vc_tta-color-black .vc_active .vc_tta-panel-heading .vc_tta-controls-icon::before,
	.vc_tta-accordion.vc_tta-style-outline.vc_tta-shape-square.vc_tta-color-black .vc_tta-panel-heading:focus .vc_tta-controls-icon::after,
	.vc_tta-accordion.vc_tta-style-outline.vc_tta-shape-square.vc_tta-color-black .vc_tta-panel-heading:focus .vc_tta-controls-icon::before,
	.vc_tta-accordion.vc_tta-style-outline.vc_tta-shape-square.vc_tta-color-black .vc_tta-panel-heading:hover .vc_tta-controls-icon::after,
	.vc_tta-accordion.vc_tta-style-outline.vc_tta-shape-square.vc_tta-color-black .vc_tta-panel-heading:hover .vc_tta-controls-icon::before,
	.ui-slider .ui-slider-handle,
	.vc_toggle_round.vc_toggle_color_inverted .vc_toggle_icon,
	.vc_tta-accordion.vc_tta-style-outline.vc_tta-shape-square.vc_tta-color-black .vc_tta-controls-icon::after,
	.vc_tta-accordion.vc_tta-style-outline.vc_tta-shape-square.vc_tta-color-black .vc_tta-controls-icon::before,
	.vc_tta-tabs.vc_tta-style-outline.vc_tta-o-no-fill.vc_tta-color-black .vc_tta-tab.vc_active>a,
	.dropcaps_4:first-letter,
	.dropcaps_4b:first-letter
	{
		border-color: <?php echo $accent_color; ?>;
	}

	@media (min-width:768px) {
		.main-header._template8 {
			background-image: -webkit-linear-gradient(left,#fff 50%,<?php echo $accent_color; ?> 50%,<?php echo $accent_color; ?> 100%);
			background-image: linear-gradient(to right,#fff 50%,<?php echo $accent_color; ?> 50%,<?php echo $accent_color; ?> 100%)
		}

		.product-page-tabs__nav-link:after {
			background-color: <?php echo $accent_color; ?>;
		}
	}

	a:hover,
	.checkout-payment ul label a:hover,
	.theme-widget.widget_price_filter button:hover
	{
		color: <?php echo $accent_color_hover; ?>;
	}

	.button:hover,
	button:hover,
	input[type=button]:hover,
	input[type=reset]:hover,
	input[type=submit]:hover,
	.search-results-card__label:hover,
	.post-standard__categories a:hover,
	.post-grid__categories a:hover,
	.post-masonry__categories a:hover,
	.post-metro__categories a:hover,
	.post-boxed__categories a:hover,
	.vc_toggle_round .vc_toggle_title:hover .vc_toggle_icon,
	.vc_toggle_round.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::after,
	.vc_toggle_round.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon::before,
	.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::after,
	.vc_toggle_simple .vc_toggle_title:hover .vc_toggle_icon::before,
	.flip-box-wrap .flip_link a:hover,
	.ult_design_1.ult-cs-black .ult_pricing_table .ult_price_link .ult_price_action_button:hover,
	.ult_design_1.ult-cs-blue .ult_pricing_table .ult_price_link .ult_price_action_button:hover,
	.ult_design_1.ult-cs-gray .ult_pricing_table .ult_price_link .ult_price_action_button:hover,
	.ult_design_1.ult-cs-green .ult_pricing_table .ult_price_link .ult_price_action_button:hover,
	.ult_design_1.ult-cs-red .ult_pricing_table .ult_price_link .ult_price_action_button:hover,
	.ult_design_1.ult-cs-yellow .ult_pricing_table .ult_price_link .ult_price_action_button:hover,
	.ult-cs-black.ult_design_4 .ult_pricing_table .ult_price_link .ult_price_action_button:hover,
	.grid-item__categories a:hover
	{
		background-color: <?php echo $accent_color_hover; ?>;
	}

	.vc_toggle_round.vc_toggle_color_inverted .vc_toggle_title:hover .vc_toggle_icon
	{
		border-color: <?php echo $accent_color_hover; ?>;
	}

<?php

}
