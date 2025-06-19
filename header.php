<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
	 <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
<!-- 	<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> -->
<!-- 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');
	html, body {
		font-family: "Outfit" !important;
	}
		body{
			overflow-y:scroll;
		}
/* 		*{
			font-family: "Outfit" !important;	
		} */
		body,
		p,
		h1, h2, h3, h4, h5, h6,
		a,
		li,
		span,
		div,
		section {
		  font-family: "Outfit" !important;	
		}

		html {
		  scroll-behavior: smooth;
		}
		.qodef-interactive-banners .qodef-m-image img {
			height: 916px;
		}
		.qodef-interactive-banners .qodef-ib-item .qodef-ib-item-inner {
			background-color: #1a1a1a;
			transition: 0.4s ease-in-out
		}
		.qodef-interactive-banners .qodef-ib-item .qodef-ib-item-inner:hover {
			background-color: black;
			transition: 0.4s ease-in-out
		}
		.qodef-interactive-banners .qodef-m-image img {
			opacity: 1 !important;
			object-fit:cover !important;
		}
		.qodef-interactive-banners .qodef-ib-item .qodef-ib-item-inner {
			mix-blend-mode: plus-lighter !important;
		}
		.qodef-interactive-banners .qodef-ib-content-holder .qodef-ib-item .qodef-ib-item-title h4{
			font-weight: 300;
		}
		.qodef-interactive-banners .qodef-ib-additional-link h5 {
			font-weight: 300;
		}
		.qodef-grid>.qodef-grid-inner {
			column-gap: 0 !important;
			row-gap: 0 !important;
		}
		.qodef-portfolio-list .qodef-e-content {
			    position: absolute !important;
				bottom: 2rem !important;
				z-index: 1 !important;
				display: revert !important;
			}
		.qodef-portfolio-list.qodef-item-layout--info-below .qodef-e-top-holder {
			display: none;
		}
		.qodef-portfolio-list .qodef-e-title {
			margin-left:2rem !important;
			font-weight: 300!important;
		}
		.btn {
		width:207px;
		text-align:center;
		padding: 5px 20px;
		font-size: 22px;
		border:1px solid white;
		border-radius:50px;
		transition: 0.5s ease-in-out;
		color: white;
		cursor:pointer;
	   }
		.btn:hover {
			background-color:white;
			color:#1a1a1a !important;
		}
		.btn:hover h2 {
			color:#1a1a1a !important;
			transition: 0.5s ease-in-out
		}
		.qodef-fullscreen-menu--opened #qodef-page-header .qodef-header-logo-link img.qodef--dark, .qodef-fullscreen-menu--opened #qodef-page-header .qodef-header-logo-link img.qodef--main {
			opacity: 1 !important;
		}
		.qodef-fullscreen-menu--opened #qodef-page-header .qodef-header-logo-link img.qodef--light {
			display: none;
		}
		.qodef-fullscreen-menu--opened #qodef-page-header .qodef-header-logo-link img.qodef--dark {
			display: none;
		}
		.qodef-fullscreen-menu--opened #qodef-page-mobile-header .qodef-mobile-header-logo-link img.qodef--light {
			display: none;
		}
		.qodef-fullscreen-menu--opened #qodef-page-mobile-header .qodef-mobile-header-logo-link img.qodef--dark { 
			display: none	
		}
		#qodef-page-mobile-header #qodef-page-mobile-header-inner .widget_einar_core_woo_dropdown_cart {
			display: none;
		}
		#qodef-page-footer-top-area {
			background-color: #1a1a1a !important;
		}
		.widget_einar_core_woo_dropdown_cart .qodef-widget-dropdown-cart-inner {
			display: none !important;
		}
		
		#qodef-page-footer-top-area .qodef-grid-item:nth-child(2){
			display:flex !important;
			justify-content:start !important;
			align-items:anchor-center !important;
			margin-bottom: 30px;
		}
		
		#qodef-page-footer-top-area .qodef-grid-item:nth-child(3){
				
				justify-content:start !important;
			
			}
		
		@media screen and (min-width:680px){
			#qodef-page-footer-top-area .qodef-grid-item:nth-child(2){
			display:flex !important;
			justify-content:end !important;
			align-items:anchor-center !important;
			margin-bottom: 0;
			}
			#qodef-page-footer-top-area .qodef-grid-item:nth-child(3){
				display:flex !important;
				justify-content:end !important;
				align-items:anchor-center !important;
			}
		}
			



		.qodef-e-decoration {
			display: none !important; 
		}
	

		#qodef-back-to-top {
			background:white !important;
		}
		.arrowSVG svg {
			fill:white !important;
		}
		
		.arrowSVG svg rect {
			width:115px;
		}
		.arrowSVG svg path {
			transform: translatex(-13px);
			transition: 0.3s ease-in-out;
		}
		
		.elementor-483 .elementor-element.elementor-element-51a2ab5:hover .arrowSVG svg path {
			transform: translatex(0);
			transition: 0.3s ease-in-out
		}
		.hidden {
			display:none !important; 
		}
/* 		this disable the studio post click */
		#events .qodef-item-layout--info-below.qodef-hover-animation--overlay .qodef-e-media-image>a{
			pointer-events:none !important;
		}
		#events .qodef-interactive-banners .qode-e-link {
			pointer-events:none !important;
		}
		#events .qodef-interactive-banners.qodef-skin--light .qodef-ib-content-holder .qodef-ib-item .qodef-ib-item-title h4 {
			pointer-events:none !important;
		}
		#events .qodef-portfolio-list .qodef-e-title {
			pointer-events:none !important;
		}
		
		.elementor .elementor-background-video-hosted{
			scale: 1.01 !important;
		}
		#qodef-page-footer .widget a:hover .qodef-e-title-inner{
			background-color:white !important;
			color: #1a1a1a !important;
			transition: 0.3s ease-in-out !important;
		}
		.qodef-icon-list-item .qodef-e-title a:hover .qodef-e-title-inner {
			background-color:white !important;
			color: #1a1a1a !important;
			transition: 0.3s ease-in-out !important;
		}
		.qodef-icon-list-item .qodef-e-title a:hover .qodef-e-title-inner span {
		
			color: #1a1a1a !important;
			
		}
		.qodef-e-media-image , .elementor-widget-image img {
			width:100% !important;
		}
		.footerLogoImg img{
			width:auto !important;
		}
		@media (min-width: 460px) {
		#events .qodef-grid.qodef-responsive--custom.qodef-col-num--680--1>.qodef-grid-inner {
				--qode-columns: 2;
			}
		}
		@media (min-width: 960px) {
		#events .qodef-grid.qodef-responsive--custom.qodef-col-num--680--1>.qodef-grid-inner {
				--qode-columns: 4;
			}
		}
		::selection {
			background: #3399ff !important; /* or some other color */
  			color: white !important;
		}
		.qodef-fullscreen-menu--opened{
			overflow-y:scroll !important;
		}
		.qodef-fullscreen-menu>ul{
			width:100% !important;
		}
		.qodef-ib-item:after {
			content:"asdasd"
		}
		.qodef-portfolio-list .qodef-e-media-image a, .qodef-portfolio-list .qodef-e-media-image img {
			object-fit:cover;
		}
		.qodef-e-inner {
			height: 100%;
		}
		.qodef-e-media-image, .qodef-e-media {
			height:100%;
		}
		.qodef-item-layout--info-below.qodef-hover-animation--overlay .qodef-e-media-image>a {
			height: 100%;
		}
		.qodef-portfolio-list .qodef-e-media-image img{
			height: 100%;
		}
		@media screen and (max-width: 680px) {
    	.qodef-interactive-banners .qodef-ib-content-holder .qodef-ib-item {
			display: block;
			width: 100% !important;
			border-left: 0;
			border-right: 0;
		}
			
		}
	   @media screen and (max-width: 860px) {
		   	.portfolio-item.type-portfolio-item {
					height: 323px !important;
				}
		}
	</style>
	<?php wp_head(); ?>
</head>
	<?php if ( is_page('shoreditch-weddings') || is_page('wedding-suppliers') || is_page('wedding-enquiries') ) { ?>
	
    	<body style="background-color:#ffffff" <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
			
	<?php } else { ?>
			
		<body style="background-color:#1a1a1a" <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
			
	<?php } ?>
	<?php
	// Hook to include default WordPress hooks after body tag open
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	}

	// Hook to include additional content after body tag open
	do_action( 'einar_action_after_body_tag_open' );
	?>
	<div id="qodef-page-wrapper" class="<?php echo esc_attr( einar_get_page_wrapper_classes() ); ?>">
		<?php
		// Hook to include page header template
		do_action( 'einar_action_page_header_template' );
		?>
		<div id="qodef-page-outer">
			<?php
			// Include title template
			//get_template_part( 'title' );

			// Hook to include additional content before page inner content
			//do_action( 'einar_action_before_page_inner' );
			?>
			<div id="qodef-page-inner" class="<?php echo esc_attr( einar_get_page_inner_classes() ); ?>">
 