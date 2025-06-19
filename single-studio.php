<?php
/**
 * Template Name: Single Studio
 * 
 * */

?>

<style>
	.qodef-header-standard--right #qodef-page-header-inner .qodef-header-navigation {
		display:none;
	}
	#qodef-page-header {
		background-color: #1a1a1a !important;
	}
	#qodef-page-header{
		display:none !important;
	}
	#qodef-page-footer.qodef--footer-logo-area #qodef-page-footer-logo-area {
		display: none;
	}
	.customContainer {
	  margin-left: auto;
	  margin-right: auto;
	  padding-left: 2.5rem;
	  padding-right: 2.5rem;
	}

	@media screen and (min-width: 768px) {
	  .customContainer {
		  padding-left: 93px;
		  padding-right: 93px;
	  }
	}
	
	.singleStudiobanner {
		height:90vh;
		position: relative;
	}
	.singleStudiobanner img {
		object-fit: cover;
		position:absolute;
		top:0;
		left:0;
		width: 100%;
		height:100%;
	}
	#qodef-page-inner {
		padding: 0 !important;
	}
	.qodef-content-grid {
		width: unset !important;
	}
	.singleStudiobanner .bannerTitle{
		height:80%;
		z-index: 1;
		position:relative;
		display:grid;
		place-items:center;
		color:white;
	}
	.singleStudiobanner .bannerTitle h1{ 
		 font-size: clamp(40px, 10vw, 150px);
	}
	.singleStudiobanner .bannerContact{
		height:20%;
		z-index: 1;
		position:relative;
	}
	.flex {
		display:flex;
	}
	@media screen and (max-width: 1080px) {
		.flex {
			flex-direction:column;
			gap:20px !important; 
		}
		.singleStudiobanner .bannerTitle{
			height:70%;	
		}
	}
	.studioDesc .wrapper{
		display:grid;
		grid-template-columns:2fr 1.5fr;
		grid-gap:100px;
		align-items:center;
	}
	.studioDesc .wrapperCols {
		grid-template-columns: 1fr;
	}
	@media screen and (max-width:1080px){
	    .studioDesc .wrapper{
			grid-template-columns:1fr;
		}
	}
	.recentClientLogo {
		display:flex;
		align-items:center;
		gap:20px;
	}
	@media screen and (max-width:1680px){
		.recentClientLogo {
			flex-direction:column;
			gap:30px;
			justify-content:center;
			text-align:center;
		}
	}
    @media screen and (max-width:1080px){
		.recentClientLogo {
			flex-direction:row;
		}
	}
	 @media screen and (max-width:760px){
		.recentClientLogo {
			flex-direction:column;
		}
	}
	
	.videoSlider {
		padding: 0 80px;
		height: 800px;
		position:relative;
	}
	.videoSlider .tns-outer {
		position:relative;
	}
	.videoSlider .tns-controls button:first-child {
		position: absolute;
		top:50%;
		left:-30px;
		transform:translatey(-50%);
		z-index: 1;
	}
	.videoSlider .tns-controls button:last-child {
		position: absolute;
		top:50%;
		right:-30px;
		transform:translatey(-50%);
		z-index: 1;
	}
	
	@media screen and (max-width:1020px){
		.videoSlider {
			height: 400px;
		}
		.videoSlider iframe{
			height: 400px !important;
		}
	}
	
	.venue {
	   padding: 110px 0;
	}
	.venue h2 {
		text-align: center;
		text-transform: uppercase;
/* 		font-size: clamp(3rem, calc(4rem + 1vw), 5rem); */
		font-size: clamp(32px, 6vw, 52px) !important;
		margin-bottom: 80px;
		font-weight: 500;
	}


	.venue .venue-top-nav {
/* 		display: grid;
		grid-template-columns: repeat(6,1fr); */
		display:flex;
		justify-content:center;
		margin-bottom: 10rem;
		align-items:center;
	}

	.venue .venue-top-nav li {
		border-right: 1px solid rgba(255,255,255,0.6);
		text-align: center;
		align-items:center;
		padding: 0 40px;
	}

	
		.venue .venue-top-nav li:last-child {
		border-right: none;
/* 		text-align: center; */
	}
	.venue .venue-top-nav li p {
		text-transform: uppercase;
		font-size: clamp(18px, 5vw, 25px);
		opacity: 0.5;
		cursor:pointer;
	}

	.venue .venue-top-nav li p i {
		font-weight:unset;
		font-size:25px;
		display:none;
	}

	.venue .venue-top-nav li p:hover,
	.venue .venue-top-nav li.active p  {
		text-decoration: underline;
		opacity: 1;
	}

	.venue  .parag {
/* 		font-size: clamp(2rem, calc(3rem + 1vw), 4.5rem); */
		font-size: 32px;
		text-align: center;
	 text-wrap: balance;
	 line-height: 1.2;
	}

	.venue .venue-menu {
		display: flex;
		flex-wrap:wrap;
		justify-content:center;
		gap: 5rem 2rem;
		margin-top: 10rem;
	}

	.venue .venue-menu a {
		font-size: 28px;
		padding:10px 50px !important;
		margin:10px 0;
	}


/* 	.venue .venue-menu a:hover{
		background: black;
		color: white;
	} */
	.venueTabContent {
		display:none;
	}
	div.parag {
		display:none;
	}
	div.parag.active {
		display:block;
		font-size:32px;
	}
	@media screen and (max-width:1280px){
		.venue .venue-top-nav {
/* 			grid-template-columns: 1fr; */
			flex-direction:column;
			align-items:normal;
		}
		.venue .venue-top-nav li {
			border-right:none;
			text-align:left;
		    padding: 0;
		}
		.venue .venue-top-nav li p {
			width:100%;
			display:flex;
			justify-content:space-between;
			padding:20px 0;
			text-decoration:none;
			border-bottom:1px solid white;
		}
		.venue .venue-top-nav li p i{
			display:block;
		}
		.venue .venue-top-nav li p:hover,
		.venue .venue-top-nav li.active p  {
			text-decoration: none;
			opacity: 1;
		}
		div.parag.active {
			display:none;
		}
		.venueTabContent.active {
			display:block;
		}
		.venue .venue-menu a {
			width:150px;		
			font-size:20px;
			display:inline-block;
			width:100%;
		}
		.venue .venue-menu {
			display:grid;
			grid-template-columns:1fr 1fr;
			grid-gap:0 2rem;
		}
	}
	@media screen and (max-width:600px){
		.venue .venue-menu a {
			font-size:18px;	
		}
		.venue .venue-menu {
			grid-template-columns:1fr;	
		}
	}
	.gallery-wrapper {
		display:grid;
		grid-template-columns:1fr 1fr;
	}
		.gallery-wrapper img{
		width:100%;
			height:100%;
			object-fit:cover;
	}

	@media screen and (max-width:1080px){
		.gallery-wrapper {
			grid-template-columns:1fr;
		}
	}
	
	.cta {
    height: 473px;
    background-image: url('https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/Group-24.png');
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.cta .cta-wrapper {
    display: grid;
    place-items:center;
	height:100%;
}
	
	.cta .cta-wrapper > div {
		display:flex;
		justify-content:space-between;
		align-items:center;
		width:100%;
	}

.cta-content p {
    text-transform: uppercase;
    font-size: 3rem;
    font-size: 500;
}

.cta-content h3 {
   font-size: 104px;
    text-transform: uppercase;
    line-height: 1;
}

.cta-wrapper a {
    font-size: clamp(23px, 5vw, 60px);
    font-weight:600;
	text-transform:uppercase;
}

	@media screen and (max-width:1080px){
		.cta .cta-wrapper > div {
		flex-direction:column;
			text-align:center;
		}
		.cta-content h3 { 
			font-size:41px;	
		}
		.cta { 
		background-position:left;	
		}
	}
	
/* .cta-wrapper a:hover {
    background: var(--dark);
    color: var(--light);
} */

.footer {
    padding: 8rem 0 0;
    background: var(--dark);
    color: var(--light);
}

.footer-wrapper {
    display:grid;
	grid-template-columns:1.5fr 2fr;
	align-items:start;
	grid-gap:200px;
}
	
	.footerLinksPage {
		display:flex;
		gap:100px;
	}

.footer-item h3 {
    text-transform: uppercase;
    margin-bottom: 2rem;
	font-size: 18px;
	font-weight:400;
}

	.footer-item p {
		font-size:24px;
	}
	
.footer-item ul li {
    margin-bottom: 1rem;
}

.footer-item ul li a {
    font-size: 14px;
}

.footer-item ul li a:hover {
    text-decoration: underline;
}
	@media screen and (max-width:1020px) {
		.footer-wrapper{
			grid-template-columns:1fr;
			grid-gap:45px;
		}
	}
	@media screen and (max-width:780px){
			.footerLinksPage {
			flex-direction:column;
			gap:0;
		}
	}
			.arrowSVG svg {
			fill:white !important;
			cursor:pointer;
		}
		
		.arrowSVG svg rect {
			width:115px;
		}
		.arrowSVG svg path {
			transform: translatex(-13px);
			transition: 0.3s ease-in-out;
		}
		
		.nextPost:hover .arrowSVG svg path {
			transform: translatex(0);
			transition: 0.3s ease-in-out
		}
	
	@media screen and (max-width:1080px){
		.nextPost {
			text-align:center;
		}
		.seperatorWrapper {
			align-items:center;
		}
	}
	.nextPost {
		display:flex;
	}
	.nextPost h3{
		font-size: clamp(32px, 3vw, 52px);
	}
	.arrowImg {
		display:none;
	}
	@media screen and (max-width:768px){
		.arrowImg {
			display:block;
		}
	}
	.recentClient button{
		display:none;
	}
	.recentClientWrapper {
		display:grid;
		grid-template-columns: 1fr 0.5fr 1fr;
		align-items:center;
	}
	
	@media screen and (max-width:1340px){
		.recentClientWrapper {
			grid-template-columns: 1fr;
			grid-gap: 30px;
			text-align:center;
		}
	}
	@media screen and (max-width:1080px){
		.recentClientWrapper {
			grid-template-columns: 1fr 0.5fr 1fr;
		}
	}
	@media screen and (max-width:860px){
		.recentClientWrapper {
			grid-template-columns: 1fr;
		}
	}
	#qodef-page-header{
		display:none !important;
	}
	#qodef-page-mobile-header {
		display:none !important;
	}
	.customHeaderWrapper {
		display:flex;
		justify-content:space-between;
		align-items:center;
	}
	.customHeader {
		padding:30px 0;
	}
	@media screen and (max-width:1120px){
		.customHeader {
		padding:20px 0;
		}
	}
	
/* 	*****FAQ********** */
	.secFaq {
		padding: 0 0 80px 0;
		display: none;
	}
	.secFaq.active {
		display:block;
	}
	.faq-items {
		max-width:1250px;
		margin: 0 auto;
		padding:10px 0;
		border:bottom 1px solid gray;
		cursor:pointer;
	}
	.faqQuestion p{
		font-size: clamp(18px, 4vw, 25px);
		color:white;
	}
	p.secFaqTitle{
	  font-size: clamp(32px, 6vw, 52px) !important;
      font-weight: 500;
	}
	.faqQuestion-wrapper {
		display:flex;
	}
	.faq-items.active .faqAnswer{
		height: auto;
	}
	.faqAnswer {
		color: lightgray;
	}
	
/* 	Form Part CSS */
	
	.inputGroup input[type="text"],
	.inputGroup input[type="email"],
	.inputGroup input[type="date"] {
		color:white;
		border-bottom: 1px solid gray;
		padding:5px 0;
	}
	.inputGroup input[type="text"]:focus,
	.inputGroup input[type="email"]:focus,
	.inputGroup input[type="date"]:focus {
		color:white;
		border-bottom:1px solid gray;
	}
	.inputGroup input[type="text"]:hover,
	.inputGroup input[type="email"]:hover,
	.inputGroup input[type="date"]:hover {
		cursor:text;
	}
	.inputGroup input[type="text"]::placeholder,
	.inputGroup input[type="email"]::placeholder,
	.inputGroup input[type="date"]::placeholder {
		color:gray !important;
		opacity: 0.7;
	}
	.theForm .form .textBoxes{
		display:grid;
		grid-template-columns: 1fr 1fr;
		grid-gap:10px;
	}
	@media screen and (max-width:1080px){
		.theForm .form .textBoxes{
			grid-template-columns:1fr;
		}
	}

	.btnWhite{
		color:white;
		border:1px solid white;
		border-radius:50px;
		padding:5px 10px;
		font-size:14px;
		display:inline-block;
		width:max-content;
		margin-top:5px;
		margin-bottom:5px;
		cursor:pointer;
		transition: 0.5s ease-in-out;
	}
	.btnWhite:hover{
		color:black;
		background-color:white;
		transition: 0.5s ease-in-out;
	}
	.btnWhite.active{
		color:black;
		background-color:white;
		transition: 0.5s ease-in-out;
	}
	input[type="submit"].btnWhite{
		font-size:22px;
		padding:15px 
	}
	input[type="submit"].btnWhite:hover{
		color:black !important;
		background-color:white !important;
		transition: 0.5s ease-in-out !important;
	}
	.submitBtn button {
		width:100% !important;
		border:1px solid white;
		text-align:center !important;
		color:white;
		justify-content:center;
	}
	.enquireFormSingle {
		display:none;
		padding-bottom:110px;
		max-width: 1200px;
		margin: 0 auto;
	}
	.enquireFormSingle.active {
		display:block;
	}
	.wpcf7-spinner {
		position:absolute !important;
		top:10px;
		left:51%;
		animation: spin 1s linear infinite;
	}
	
	@keyframes spin {
	  from { transform: rotate(0deg); }
	  to { transform: rotate(360deg); }
	}
	.hideThisElement {
		visibility: hidden;
		height:0;
	}
	
	  :root {
        --marquee-width: 40vw;
        --marquee-height: 10vh;
        /* --marquee-elements: 12; */ /* defined with JavaScript */
        --marquee-elements-displayed: 3;
        --marquee-element-width: calc(
          var(--marquee-width) / var(--marquee-elements-displayed)
        );
        --marquee-animation-duration: calc(var(--marquee-elements) * 5s);
      }

      .marquee {
        width: var(--marquee-width);
        height: var(--marquee-height);
        overflow: hidden;
        position: relative;
		margin: 0 auto;
      }
      .marquee:before,
      .marquee:after {
        position: absolute;
        top: 0;
        width: 10rem;
        height: 100%;
        content: "";
        z-index: 1;
      }
      .marquee:before {
        left: 0;
        background: linear-gradient(to right, #1a1a1a 0%, transparent 100%);
      }
      .marquee:after {
        right: 0;
        background: linear-gradient(to left, #1a1a1a 0%, transparent 100%);
      }
      .marquee-content {
        list-style: none;
        height: 100%;
        display: flex;
        animation: scrolling var(--marquee-animation-duration) linear infinite;
      }
      /* .marquee-content:hover {
  animation-play-state: paused;
} */
      @keyframes scrolling {
        0% {
          transform: translateX(0);
        }
        100% {
          transform: translateX(
            calc(-1 * var(--marquee-element-width) * var(--marquee-elements))
          );
        }
      }
      .marquee-content li {
        display: flex;
        justify-content: center;
        align-items: center;
        /* text-align: center; */
        flex-shrink: 0;
        width: var(--marquee-element-width);
        max-height: 100%;
        font-size: calc(var(--marquee-height) * 3 / 4); /* 5rem; */
        white-space: nowrap;
      }

      .marquee-content li img {
        width: 150px;
        height: 100px;
      }

      @media screen and (max-width: 600px) {
		 :root {
        --marquee-width: 80vw;
        --marquee-height: 10vh;
        /* --marquee-elements: 12; */ /* defined with JavaScript */
        --marquee-elements-displayed: 2;
		  }
        .marquee:before,
        .marquee:after {
          width: 2rem;
        }
		.marquee-content li img {
        width: 150px;
		height:100px;
      	}
      }
	.marquee.hidden {
		display:none;
	}
	.hidden {
		display:none;
	}

</style>


<?php get_header() ?>
	

     <?php echo do_shortcode('[customMcHeader]') ?>
	
	<div class="singleStudiobanner">
		<img src="<?php echo the_post_thumbnail_url(); ?>" style="filter:brightness(0.8);" alt="Description of image">
		<div class="bannerTitle">
			<h1 style="text-transform:uppercase; text-align:center;">
				<?php the_title(); ?>
			</h1>
			
		</div>
		<div class="bannerContact">
			<div class="customContainer">
				<div class="wrapper flex" style="gap:100px">
					<p style="font-size:15px;line-height:17px;">
						<?php the_field('studio_address') ?>
					</p>
					<p style="font-size:15px;line-height:17px;">
						GET IN TOUCH <br> 020 7033 9006 <br> LINK@SHOREDITCH.COM
					</p>
				</div>
			</div>
		</div>
	</div>

   <div class="studioDesc" style="padding: 65px 0">
	   <div class="customContainer">
		   <?php 
				$getTitle = get_the_title(); 
				
				if($getTitle == "CHRISTMAS PARTIES"){
		   ?>
		   <div class="wrapperCols">
			   <?php } else { ?>
			   
			    <div class="wrapper"> 
					
				<?php } ?>
			   <div class="infoTxt">
				   <?php the_field('studion_single_page_info') ?>
			   </div>
<!-- 			   <div class="recentClientLogo">
					<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/cocacola.png" alt="Description of image">
				    <img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/x.png" alt="Description of image" style="height:78.38px">
				   <h2 style="font-size:51px; margin:0">
					   <?php the_title(); ?>
				   </h2>
			   </div> -->
				<?php
					$getTitle = get_the_title(); 	
					if($getTitle == "CHRISTMAS PARTIES"){
				?>
				<div class="marquee hidden">
				<?php }else{ ?>
				<div class="marquee">
				<?php } ?>
				  <ul class="marquee-content">

					  <?php 
					  	  $theTitle = get_the_title();
						  $args = array(
							  'post_type' => 'client',
							  'posts_per_page' => -1,
							    'tax_query' => array(
									  array(
										  'taxonomy' => 'category',   // change this to your taxonomy name
										  'field'    => 'slug',              // or 'term_id' if you prefer
										  'terms'    => $theTitle, // replace with your terms
									  ),
								 ),
						  );
						  $newQuery = new WP_Query($args)
					  ?>

					  <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

					  <li>
						<div>	
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" style="height:76px; object-fit:contain">
						</div>
					  </li>


						<?php
						  endwhile;
						  else :
						  //echo "no available content yet";
						  endif;
						  wp_reset_postdata();
					  ?>

				  </ul>
				</div>
		   </div>
	   </div>
   </div>

	<div class="videoSlider <?php the_field('feature_video_enable') ?>">
		<div class="my-slider-d">
			
				<?php 
						
							  $theTitle = get_the_title();
							  $args = array(
								  'post_type' => 'featured-video',
								  'posts_per_page' => -1,
								  'tax_query' => array(
									  array(
										  'taxonomy' => 'category',   // change this to your taxonomy name
										  'field'    => 'slug',              // or 'term_id' if you prefer
										  'terms'    => $theTitle, // replace with your terms
									  ),
								  ),
							  );
							  $newQuery = new WP_Query($args)
						  ?>

						  <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
			
				<div>
					<div class="iframe-container">
					<iframe style="width:100%; height:100%" 
						src="https://www.youtube.com/embed/<?php the_field('youtube_video_id') ?>" 
						title="YouTube video player" 
						frameborder="0" 
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
						allowfullscreen>
					</iframe>
					</div>
				</div>
			
				 <?php
							  endwhile;
							  else :
							  echo "no available content yet";
							  endif;
							  wp_reset_postdata();
						  ?>

		</div>
	</div>


	
		<?php
			$venueInfo = get_field('venue_information');
			if ($venueInfo) {
				echo $venueInfo;
			}
		?>

        <?php
           
			$faq = get_field('faq');
			if ($faq) {
				echo $faq;
			}
			
		?>

		<section class="enquireFormSingle">
			<div class="customContainer">
				<div class="weddingInquiriesWrapper">
				<div class="theForm">
					<h2>
						VENUE HIRE ENQUIRY
					</h2>
					<p>
						Please provide information for your event enquiry and out team will get back to you soon with venue rates and availability.
					</p>
					<div style="margin-bottom:10px;">
					<a
					  class="qodef-shortcode qodef-m qodef-button qodef-layout--textual qodef-button-arrow--no qodef-html--link"
					  href="mailto:contact@example.com"
					  target="_self">
						<span class="qodef-m-inner">
						  <svg
							 fill="white"
							class="qodef-svg--arrow-button-simple"
							xmlns="http://www.w3.org/2000/svg"
							width="34.8962"
							height="15"
							viewBox="0 0 34.8962 15"
							fill="currentColor">
							<rect y="6.25" width="33" height="1.5"></rect>
							<path
							  d="M 29.5837 3.64 C 27.3962 1.68 25.8337 0 25.8337 0 h -0.9375 a 60.295 60.295 0 0 0 3.4375 5.04 L 29.8962 7 L 28.3337 8.96 A 60.295 60.295 0 0 0 24.8963 14 h 0.9375 s 1.5625 -1.68 3.75 -3.64 a 13.2224 13.2224 0 0 1 5.3125 -3.08 V 6.72 A 13.2224 13.2224 0 0 1 29.5837 3.64 Z"></path>
						  </svg>
						  <span class="qodef-m-text" style="color:white">LINK@SHOREDITCH.COM</span>
						</span>
					  </a>
					</div>
					<div style="margin-bottom:20px;">
					<a
					  class="qodef-shortcode qodef-m qodef-button qodef-layout--textual qodef-button-arrow--no qodef-html--link"
					  href="tel:020 7033 9006"
					  target="_self">
						<span class="qodef-m-inner">
						  <svg
							 fill="white"
							class="qodef-svg--arrow-button-simple"
							xmlns="http://www.w3.org/2000/svg"
							width="34.8962"
							height="15"
							viewBox="0 0 34.8962 15"
							fill="currentColor">
							<rect y="6.25" width="33" height="1.5"></rect>
							<path
							  d="M 29.5837 3.64 C 27.3962 1.68 25.8337 0 25.8337 0 h -0.9375 a 60.295 60.295 0 0 0 3.4375 5.04 L 29.8962 7 L 28.3337 8.96 A 60.295 60.295 0 0 0 24.8963 14 h 0.9375 s 1.5625 -1.68 3.75 -3.64 a 13.2224 13.2224 0 0 1 5.3125 -3.08 V 6.72 A 13.2224 13.2224 0 0 1 29.5837 3.64 Z"></path>
						  </svg>
						  <span class="qodef-m-text" style="color:white">020 7033 9006</span>
						</span>
					  </a>
					</div>
					<?php echo do_shortcode('[contact-form-7 id="5fd962f" title="Venue Hire"]') ?>
				</div>
			</div>
		</section>
			
			
		 <?php 
				$getTitle = get_the_title(); 
				
				if($getTitle == "CHRISTMAS PARTIES"){
					the_content();
				}
		 ?>

	
	   <?php
			$studioGallery = get_field('studio_gallery');
			if ($studioGallery) {
				echo $studioGallery;
			}
		?>

 	<?php the_content() ?>

	<div class="seperatorNav" style="padding:80px 0;">
		<div class="customContainer" >
			
			<div class="seperatorWrapper flex" style="border-top:1px solid white; justify-content:space-between">
				<a href="<?php echo home_url() ?>">
					<div class="" style="gap:20px; align-items:center;display:flex;">
						<div>
							<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/Group-79.png" alt="gripdots" >
						</div>
						<h3 style="font-size:24px;">
							BACK TO HOME
						</h3>
					</div>
				</a>
				
					<div class="nextPost" style="align-items:center;gap:30px">
					<div>
						<?php 
								$current_post_id = get_the_ID();

								$args = array(
								'post_type' => 'studio',
								'posts_per_page' => 1,
								'post__not_in'   => array($current_post_id),
								'orderby'        => 'rand',
								);
								$newQuery = new WP_Query($args)
						?>

						<?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>

						<a href="<?php echo the_permalink() ?>">
							<h3 style="font-weight:400;text-transform:capitalize">
								See <?php the_title() ?>
							</h3>
						</a>
						

						<?php
							endwhile;
							else :
								echo "no available content yet";
							endif;
							wp_reset_postdata();
						?>	
					</div>

						<div class="addWidth arrowSVG arrowMoving">
							<svg xmlns="http://www.w3.org/2000/svg" width="128" height="50" viewBox="0 0 128 50"><rect y="24" width="115" height="2"></rect><path d="M111,13C104,6,99,0,99,0H96s6,11,11,18l5,7-5,7c-5,7-11,18-11,18h3s5-6,12-13c9-9,17-11,17-11V24S120,22,111,13Z"></path></svg>
						</div>
					</div>
				
			</div>
		</div>
	</div>

	<section class="cta">
      <div class="customContainer">
        <div class="cta-wrapper">
			<div>
			  <div class="cta-content">
				 <img
			  src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/themainlogopng.png"
			  alt="shoreditch gallery image"
			  loading="lazy"
			/>
				<h3>
				  Enquire<br />
				  Now
				</h3>
			  </div>
				<div>
					<a href="#" class="btn">Contact Us</a>
				</div>
			</div>
        </div>
      </div>
    </section>


	<?php echo do_shortcode('[customMcFooter]') ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>

	<script>
	
		
		document.addEventListener('DOMContentLoaded', function() {
		  if (document.querySelector('.my-slider-d')) {
				var slider = tns({
				container: ".my-slider-d",
				items: 1,
				slideBy: "page",
				autoplay: false,
				autoHeight: true,
				loop: false,
				nav: false,
				controlsText: [
				  '<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/Group-17.png" alt="" width="60" height="64">',
				  '<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/Group-15.png" alt="" width="60" height="64">',
				],
			  });
		  }
		});
		

		
		
		 const venueTopNavLi = document.querySelectorAll(".venue-top-nav li");
		 const theContent = document.querySelectorAll(".parag");
		 const theAccordion = document.querySelectorAll(".venueTabContent");
		
		
		
		 venueTopNavLi.forEach((topNavLi) => {
		 topNavLi.addEventListener("click", () => {
			removeActiveMenu();
			 topNavLi.classList.add("active");
			 const activeContent = document.querySelector(`#${topNavLi.id}-parag`);
			 removeContentActive();
			 activeContent.classList.add("active");
			 const activeAccordion = document.querySelector(`#${topNavLi.id}-venueTabContent`);
			 removeAccordionActive();
			 activeAccordion.classList.add("active")
				 });
		 });


		 function removeActiveMenu() {
		 venueTopNavLi.forEach((menu) => {
			 menu.classList.remove("active");
		 });
		 }

		 function removeContentActive() {
			 theContent.forEach((content) => {
			 content.classList.remove("active");
		 });
		 }
		
		 function removeAccordionActive() {
			 theAccordion.forEach((accordion) => {
			 accordion.classList.remove("active");
		 });
		 }

		function handleClick(event) {
		  event.preventDefault(); // Prevents the default behavior of the anchor tag (i.e., jumping to the top of the page)
		  alert('Button clicked!');
		}
		
		document.addEventListener('DOMContentLoaded', function() {
  	if (document.querySelector('.my-slider-e')) {
   				var sliderb = tns({
			container: ".my-slider-e",
			items: 1,
			slideBy: "page",
			autoplay: true,
			autoplayTimeout: 3000, // Adjust fade duration
			speed: 1000, // Transition speed
			mode: "gallery", // Enables fade effect
			controls: false,
			nav: false
		  });
	  }
	});

		

		
		
		document.querySelectorAll('.faq-items').forEach(faqItems => {
		  faqItems.addEventListener('click', () => {
			faqItems.classList.toggle('active');
		  });
		});
		
		const secFaq = document.querySelector(".secFaq");
		const btnFaq = document.getElementById("btnFaq");
		
		const enquireFormSingle = document.querySelector(".enquireFormSingle");
		const btnEnquire = document.getElementById('btnEnquire')
		
		if (btnFaq) {
		  btnFaq.addEventListener('click', () => {
			secFaq.classList.toggle('active');
			enquireFormSingle.classList.remove('active');
		  });
		}
		
		
		  btnEnquire.addEventListener('click', () => {
			enquireFormSingle.classList.toggle('active');
			secFaq.classList.remove('active');
		  });
		
		
	     const formWeddingVenueLi = document.querySelectorAll('.formWeddingVenueRequired ul li');
	     const venueRequired = document.getElementById('venueRequired');
		
		document.addEventListener('DOMContentLoaded', function () {
			let pageName = "<?php echo get_the_title(); ?>";
			console.log(pageName);

			if (pageName === "Kachette") {
				const formWeddingVenueLiFirst = document.querySelector('.formWeddingVenueRequired ul li:first-child');
				if (formWeddingVenueLiFirst) {
					formWeddingVenueLiFirst.classList.add('active');
				}

				const venueRequired = document.querySelector('#venueRequired');
				if (venueRequired) {
					venueRequired.value = "KACHETTE";
				}
			}
			if (pageName === "Kachette Annex") {
				const formWeddingVenueLiFirst = document.querySelector('.formWeddingVenueRequired ul li:nth-child(2)');
				if (formWeddingVenueLiFirst) {
					formWeddingVenueLiFirst.classList.add('active');
				}

				const venueRequired = document.querySelector('#venueRequired');
				if (venueRequired) {
					venueRequired.value = "KACHETTE ANNEX";
				}
			}
			if (pageName === "Shoreditch Studios") {
				const formWeddingVenueLiFirst = document.querySelector('.formWeddingVenueRequired ul li:nth-child(3)');
				if (formWeddingVenueLiFirst) {
					formWeddingVenueLiFirst.classList.add('active');
				}

				const venueRequired = document.querySelector('#venueRequired');
				if (venueRequired) {
					venueRequired.value = "SHOREDITCH STUDIOS";
				}
			}
		});
		
	
			
	
			
		 formWeddingVenueLi.forEach((formWeddingVenueList) => {
		 formWeddingVenueList.addEventListener("click", () => {
			 removeformWeddingVenueLi();
			 formWeddingVenueList.classList.add('active');
			 
			 const venue = formWeddingVenueList.getAttribute('data-venue');
			 venueRequired.value = venue;
				 });
		 });
	
		function removeformWeddingVenueLi() {
			 formWeddingVenueLi.forEach((formWeddingVenueLiMenu) => {
				 formWeddingVenueLiMenu.classList.remove("active");
			 });
		 }


		const formWeddingBudgetLi = document.querySelectorAll('.formWeddingVenueFind ul li');
		const howFindUs = document.getElementById('howFindUs');
	
			
		 formWeddingBudgetLi.forEach((formWeddingBudgetList) => {
		 formWeddingBudgetList.addEventListener("click", () => {
			 removeformWeddingBudgetLi();
			 formWeddingBudgetList.classList.add('active');
			 const howFind = formWeddingBudgetList.getAttribute('data-find');
			 howFindUs.value = howFind;
				 });
		 });
	
		function removeformWeddingBudgetLi() {
			 formWeddingBudgetLi.forEach((formWeddingBudgetLiMenu) => {
				 formWeddingBudgetLiMenu.classList.remove("active");
			 });
		 }
	
	</script>
    <script>
      const root = document.documentElement;
      const marqueeElementsDisplayed = getComputedStyle(root).getPropertyValue(
        "--marquee-elements-displayed"
      );
      const marqueeContent = document.querySelector("ul.marquee-content");

      root.style.setProperty(
        "--marquee-elements",
        marqueeContent.children.length
      );

      for (let i = 0; i < marqueeElementsDisplayed; i++) {
        marqueeContent.appendChild(marqueeContent.children[i].cloneNode(true));
      }
    </script>

<?php get_footer() ?>