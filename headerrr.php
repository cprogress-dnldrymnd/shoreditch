<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
	<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<style>
	@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');
	html, body {
		font-family: "Outfit" !important;
	}
	h1 , h2 , p {
		font-family: "Outfit" !important;
	}
	.customContainer {
		padding: 38px 20px;
	}
	header h2 {
		margin: 0 !important;
		font-size:30px;
	}
	.flex {
		display:flex;
	}
	.items-center{
		align-items:center;
	}
	.justify-between {
		justify-content:space-between;
	}
	.btn {
		width:207px;
		text-align:center;
		padding: 5px 20px;
		font-size: 22px;
		border:1px solid white;
		border-radius:50px;
	}
</style>
<body class="!bg-[#1a1a1a]" <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
	<?php
	// Hook to include default WordPress hooks after body tag open
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	}

	// Hook to include additional content after body tag open
	do_action( 'einar_action_after_body_tag_open' );
	?>
	<div id="qodef-page-wrapper" class="">
	  <section class="banner overflow-y-hidden h-screen">
	  <header class="relative z-[9]">
		  <div class="customContainer">
			  <div class="headerWrapper flex items-center justify-between">
				  <a href="<?php echo home_url(); ?>">
					  <h2>
						 SHOREDITCH	
					  </h2>
			      </a>
				  <div class="flex items-center" style="gap:20px">
					  <a href="" class="btn">CONTACT US</a>
						<svg class="qodef-svg--menu-cross" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="currentColor"><rect y="9" width="21" 						height="3"></rect><rect x="9" width="3" height="21"></rect></svg>	
				  </div>
			  </div>
			
		  </div>
	  </header>	
	   <picture id="poster" class="absolute top-0 w-full h-screen" style="z-index:0">
		  <source media="(min-width:650px)" srcset="<?php  echo get_template_directory_uri() ?>/imgs/bannerBg.jpg" class="object-cover h-screen">
		  <source media="(min-width:465px)" srcset="<?php echo get_template_directory_uri() ?>/imgs/bannerBg.jpg" class="object-cover h-screen">
		  <img src="<?php echo  get_template_directory_uri() ?>/imgs/bannerBg.jpg" alt="Flowers" class="w-full max-w-[2500px] mx-auto !h-screen object-cover">
	   </picture>