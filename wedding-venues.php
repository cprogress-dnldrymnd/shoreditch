<?php
/**
 * 
 * Template Name: Wedding Venues
 * 
 * */
?>
<style>
	.customContainer {
	  margin-left: auto;
	  margin-right: auto;
	  padding-left: 1.5rem;
	  padding-right: 1.5rem;
	}

	@media screen and (min-width: 768px) {
	  .customContainer {
		  padding-left: 93px;
		  padding-right: 93px;
	  }
	}
	
	.qodef-content-grid {
		width: unset !important;
	}
	#qodef-page-footer.qodef--footer-logo-area #qodef-page-footer-logo-area{
		display:none;
	}
	#qodef-page-header{
		display:none !important;
	}
	#qodef-page-mobile-header {
		display:none !important;
	}
	#qodef-page-inner {
		padding: 0 !important;
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
	.btn.weddingBtn:hover {
		color:white !important;
		background-color:black;
		transition:.3s ease-in-out;
	}
	@media screen and (max-width:1080px){
		.btn.weddingBtn {
			display:none;
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
	#qodef-grid-inner {
		align-items:center;
	}
	
	.venue {
	   padding: 110px 0 0 0;
	   color:black;
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
		display: grid;
		grid-template-columns: repeat(4,1fr);
		margin-bottom: 10rem;
		align-items:center;
	}

	.venue .venue-top-nav li {
		border-right: 1px solid black;
		text-align: center;
		align-items:center;
		list-style:none;
	}

	
		.venue .venue-top-nav li:last-child {
		border-right: none;
/* 		text-align: center; */
	}
	.venue .venue-top-nav li p {
		text-transform: uppercase;
		font-size: clamp(18px, 5vw, 23px);
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
		color:black;
		border:1px solid black;
	}

	.venue .venue-menu a:hover{
		background: black;
		color: white !important;
	}
	.venueTabContent {
		display:none;
	}
	.venueContent {
		display:none;
	}
	.venueContent.active {
		display:block;
	}
	div.parag {
		display:none;
		
	}
	div.parag.active {
		display:block;
		font-size:32px;
	}
	.accordionTitle {
		border-radius:50px;
		border:2px solid black;
		width:700px;
		height:80px;
		margin:0 auto 100px auto;
		display:flex;
		align-items:center;
		text-align:center;
		font-size:clamp(16px,5vw,32px);
		overflow:hidden;
	}
	.accordionTitle span.active{
		background:black;
		color:white;
		padding: 0;
		margin:0;
		width:50%;
		height:100%;
		display:grid;
		place-items:center;
		border-radius:50px;
	}
	.accordionTitle span{
		color:black;
		padding: 0;
		margin:0;
		width:50%;
		height:100%;
		display:grid;
		place-items:center;
		cursor:pointer;
	}
	@media screen and (max-width:1080px){
		.accordionTitle {
			width:100%;
			height:70px;
		}
	}
	@media screen and (max-width:1280px){
		.venue .venue-top-nav {
			grid-template-columns: 1fr;
		}
		.venue .venue-top-nav li {
			border-right:none;
			text-align:left
		}
		.venue .venue-top-nav li p {
			width:100%;
			display:flex;
			justify-content:space-between;
			padding:20px 0;
			text-decoration:none;
			border-bottom:1px solid black;
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
	
	.videoSlider {
		padding: 80px 80px;
		position:relative;
		text-align:center;
	}
	
	@media screen and (max-width:1080px){
		.videoSlider {
			padding: 80px 30px;
		}
	}

	.videoSlider h2 {
		color:black;
		font-size:clamp(36px,5vw,52px);
		font-weight:500;
		margin-bottom:100px;
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
		.videoSlider iframe{
			height: 400px !important;
		}
	}
	.sliderClientTestimonials {
		display:grid;
		grid-template-columns:1fr 1fr 1fr;
		grid-gap:20px;
	}
	.coupleTestimonials .tns-controls {
		position:absolute;
		bottom:0;
		display:block !important;
		place-items:center;
		left:50%;
		transform:translatex(-50%);
	}

		
	.coupleTestimonials {
		position:relative;
		color:black;
		padding:80px 0;
	}
	.coupleTestimonials h3{
		color:black;
		font-size:36px;
	}
	.coupleTestimonials h2{
		font-size:clamp(36px,5vw,52px);
		font-weight:500;
		color:black;
		text-align:center;
		margin-bottom:30px;
	}
	.sliderItemClientTestimonials {
		
		border:1px solid #E0E0E0;
	}
	.sliderItemClientTestimonials img{
		width:100%;
		height:380px;
		object-fit:cover;
	}
	.clientTestimonialsContent {
		padding:20px;
	}
		.seperatorNav .arrowSVG svg {
			fill:black !important;
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
	

		.cta {
		height: 473px;
		background-image: url('https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/NoPath-Copy-3.jpg');
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
	
	
	.footer {
    padding: 8rem 0 0;
    background: var(--dark);
    color: black;
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
	color:black;
}

	.footer-item p {
		font-size:24px;
	}
	
.footer-item ul li {
    margin-bottom: 5px;
}

.footer-item ul li a {
    font-size: 14px;
	color:black;
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
	
	#qodef-page-footer-top-area {
		display:none !important;
	}
	
	.qodef-icon-list-item.qodef-icon--title-only .qodef-e-title .qodef-e-title-inner{
		border: 1px solid black !important;
		color:black !important;
	}
	.qodef-icon-list-item.qodef-icon--title-only .qodef-e-title:hover .qodef-e-title-inner{
		background:black !important;
		color:white !important;
	}
	.qodef-icon-list-item.qodef-icon--title-only .qodef-e-title:hover .qodef-e-title-inner .qodef-e-title-text{
		color:white !important;
	}
	
	.customFooterwrapper {
		display:flex;
		justify-content:space-between;
		align-items:center;
	}
	@media screen and (max-width:960px){
		.customFooterwrapper { 
			flex-wrap:wrap;	
		}
		.customFooterItem {
			margin-bottom:20px;
		}
	}
	/* 	*****FAQ********** */
	.secFaq {
		padding: 80px 0 80px 0;
		display: none;
	}
	.secFaq.active {
		display:block;
	}
	.secFaqB {
		padding: 80px 0 80px 0;
		display: none;
	}
	.secFaqB.active {
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
		color:black;
	}
	.faqQuestion img {
		width:20px;
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
		color: #2b2b2b;
	}
	
	.inputGroup input[type="text"],
	.inputGroup input[type="email"],
	.inputGroup input[type="date"] {
		color:black;
		border-bottom: 1px solid black;
		padding:5px 0;
	}
	.inputGroup input[type="text"]:focus,
	.inputGroup input[type="email"]:focus,
	.inputGroup input[type="date"]:focus {
		color:black;
		border-bottom:1px solid black;
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
	input[type="submit"].btnBlack{
		font-size:22px;
		padding:15px 
	}
	input[type="submit"].btnBlack:hover{
		color:white !important;
		background-color:black !important;
		transition: 0.5s ease-in-out !important;
	}
	.btnBlack{
		color:black;
		border:1px solid black;
		border-radius:50px;
		padding:5px 10px;
		font-size:13px;
		display:inline-block;
		width:max-content;
		margin-top:5px;
		margin-bottom:5px;
		cursor:pointer;
		transition: 0.5s ease-in-out;
	}
	.btnBlack:hover{
		color:white;
		background-color:black;
		transition: 0.5s ease-in-out;
	}
	.btnBlack.active{
		background:black;
		color:white;
	}
		.wpcf7-submit {
		color:black !important;
		border:1px solid black !important;
		width:100% !important;
		display:flex !important;
		justify-content:center !important;
		transition: 0.3s ease-in-out !important;
	}
	.wpcf7-submit:hover {
		color:white !important;
		background:black !important;
		transition: 0.3s ease-in-out !important;
	}
	.enquireFormSingle {
		display:none;
		padding-top:110px;
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
</style>
<?php get_header() ?>

<!-- 	<div class="customHeader" style="">
		<div class="customContainer">
			<div class="customHeaderWrapper">
				<a href="<?php echo home_url(); ?>">
					<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/LOGOBLACH.svg" atl="themainlogo">
				</a>
				<div class="flex" style="align-items:center;gap: 40px">
						<a href="<?php echo home_url() ?>/wedding-enquiries">
						<button class="btn weddingBtn" style="color:black;border:1px solid black" value="">CONTACT US</button>					
						</a>				
					<a href="javascript:void(0)" class="qodef-opener-icon qodef-m qodef-source--predefined qodef-fullscreen-menu-opener" style="z-index: 999">
					<span class="qodef-m-icon qodef--open">
						<svg class="qodef-svg--menu-cross" fill="black" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="currentColor"><rect y="9" width="21" height="3"></rect><rect x="9" width="3" height="21"></rect></svg>	</span>
							<span class="qodef-m-icon qodef--close">
							<svg class="qodef-svg--close" xmlns="http://www.w3.org/2000/svg" width="16.9706" height="16.9706" viewBox="0 0 16.9706 16.9706" fill="currentColor"><rect x="-2.0147" y="6.9853" width="21" height="3" transform="translate(-3.5147 8.4853) rotate(-45)"></rect><rect x="6.9853" y="-2.0147" width="3" height="21" transform="translate(-3.5147 8.4853) rotate(-45)"></rect></svg>		</span>
					</a>
				</div>
			
			</div>
		</div>
	</div> -->

	 <?php echo do_shortcode('[customMcHeader]') ?>


	<div class="singleStudiobanner">
		<img src="<?php echo the_post_thumbnail_url(); ?>" alt="Description of image">
		<div class="bannerTitle">
			<h1 style="text-transform:uppercase;text-align:center">
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
						GET IN TOUCH AND<br> LET'S START PLANNING <br> YOUR WEDDING, YOUR WAY. 
					</p>
				</div>
			</div>
		</div>
	</div>

	<?php the_content(); ?>

	<section class="venue">
      <div class="customContainer">
		<div class="accordionTitle">
			<span id="accordionTitle-1" class="first active">KACHETTE</span>
			<span id="accordionTitle-2" class="second">
				SHOREDITCH
			</span>
		</div>
		  
        <?php
           
			$shoreditch_details = get_field('shoreditch_details');
			if ($shoreditch_details) {
				echo $shoreditch_details;
			}
			
		?>
		  
		<?php
           
			$kachette_details = get_field('kachette_details');
			if ($kachette_details) {
				echo $kachette_details;
			}
			
		?>
		  
		<?php
           
			$kachette_faq = get_field('kachette_faq');
			if ($kachette_faq) {
				echo $kachette_faq;
			}
			
		?>
		  
		<?php
           
			$shoreditch_studio_faq = get_field('shoreditch_studio_faq');
			if ($shoreditch_studio_faq) {
				echo $shoreditch_studio_faq;
			}
			
		?>
		  	<section class="enquireFormSingle">
			<div class="customContainer">
		  		<div class="theForm">
					<h2 style="color:black">
						WEDDING ENQUIRY
					</h2>
					<p>
						Our venues are perfect for weddings with 80 to 180 seated guests or 200 guest standing receptions. Please Provide details of your wedding plans and we will get back to you soon.
					</p>
					<?php echo do_shortcode('[contact-form-7 id="3f212ae" title="Wedding Enquiry Form"]') ?>
				</div>
			</div>
		  </section>
		  

		  
		

		 <div style="border:1px solid lightgray;margin-top:110px"></div>
      </div>
    </section>


		<div class="videoSlider">
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

	<div class="coupleTestimonials">
		<h2>Couple Testimonials</h2>
		<div class="customContainer">
			<div class="mySliderTestimonial">
					
				<?php 
				  $args = array(
					  'post_type' => 'couple-testimonial',
					  'posts_per_page' => -1,
				  );
				  $newQuery = new WP_Query($args);
			  	?>

			  <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
				<div style="padding:10px;">
					<div class="sliderItemClientTestimonials">
					<img src="<?php echo get_the_post_thumbnail_url()?>" alt="">
					<div class="clientTestimonialsContent">
						<h3>
							<?php the_title(); ?> 
						</h3>
						<?php the_content(); ?>
					</div>
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
	</div>

	
	<div class="seperatorNav" style="padding:80px 0;color:black">
		<div class="customContainer" >
			
			<div class="seperatorWrapper flex" style="border-top:1px solid lightgray; justify-content:space-between">
				<a href="<?php echo home_url() ?>">
					<div class="" style="gap:20px; align-items:center;display:flex;">
						<div>
							<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/Group-79-1.png" alt="gripdots" >
						</div>
						<h3 style="font-size:24px;color:black">
							BACK TO HOME
						</h3>
					</div>
				</a>
				
					<div class="nextPost" style="align-items:center;gap:30px">
					<div>

						<a href="<?php echo home_url() ?>/wedding-suppliers">
							<h3 style="font-weight:400;text-transform:capitalize;color:black;">
								See Wedding Suppliers
							</h3>
						</a>
						

					</div>

						<div class="addWidth arrowSVG arrowMoving">
							<svg xmlns="http://www.w3.org/2000/svg" width="128" fill="black" height="50" viewBox="0 0 128 50"><rect y="24" width="115" height="2"></rect><path d="M111,13C104,6,99,0,99,0H96s6,11,11,18l5,7-5,7c-5,7-11,18-11,18h3s5-6,12-13c9-9,17-11,17-11V24S120,22,111,13Z"></path></svg>
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
					<a href="<?php echo home_url() ?>/wedding-inquiries/" class="btn">Contact Us</a>
				</div>
			</div>
        </div>
      </div>
    </section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
<script>
	var sliderx = tns({
			container: ".my-slider-wed-venue-a",
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
			
		var slidery = tns({
			container: ".my-slider-wed-venue-b",
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
	
	var sliderTestimonial = tns({
			container: ".mySliderTestimonial",
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
			responsive: {
				768: {
				  items: 1
				},
				1024: {
				  items: 3,
				  gutter: 20,
		 	      edgePadding: 20,
				}
			  }
		  });
	
	const accordionTitle = document.querySelectorAll('.accordionTitle span');
	const venueContent = document.querySelectorAll('.venueContent');
	
	
	const secFaq = document.querySelector(".secFaq");
	const btnFaq = document.getElementById("btnFaq");
	
	const secFaqB = document.querySelector(".secFaqB");
	const btnFaqB = document.getElementById("btnFaqB");
	
	const enquireFormSingle = document.querySelector(".enquireFormSingle");
	const btnEnquireB = document.getElementById('btnEnquireB')	
	const btnEnquire = document.getElementById('btnEnquire')	
	
		 accordionTitle.forEach((accordionTitleMenu) => {
		 accordionTitleMenu.addEventListener("click", () => {
			 removeAccordionTitleActive();
			 accordionTitleMenu.classList.add("active");
			 const activeAccordionCont = document.querySelector(`#${accordionTitleMenu.id}-content`);
			 removeVenueContent();
			 activeAccordionCont.classList.add("active")
			 secFaq.classList.remove("active");
			 secFaqB.classList.remove("active");
				 });
		 });
	
		 function removeAccordionTitleActive() {
		 accordionTitle.forEach((accordionTitleMenu) => {
			 accordionTitleMenu.classList.remove("active");
		 	});
		 }

		 function removeVenueContent() {
			 venueContent.forEach((venueCont) => {
			 venueCont.classList.remove("active");
		 	});
		 }
	
	  document.querySelectorAll('.faq-items').forEach(faqItems => {
		  faqItems.addEventListener('click', () => {
			faqItems.classList.toggle('active');
		  });
		});
		

		  btnFaq.addEventListener('click', () => {
			secFaq.classList.toggle('active');
			enquireFormSingle.classList.remove('active');
		  });
	
	      btnFaqB.addEventListener('click', () => {
			secFaqB.classList.toggle('active');
			enquireFormSingle.classList.remove('active');
		  });
	
	
	
		
		  btnEnquire.addEventListener('click', () => {
			enquireFormSingle.classList.toggle('active');
			secFaq.classList.remove('active');
			secFaqB.classList.remove('active');
		  });
	
		  btnEnquireA.addEventListener('click', () => {
			secFaq.classList.remove('active');
			secFaqB.classList.remove('active');
			enquireFormSingle.classList.toggle('active');
		  });
		
		
	const formWeddingVenueLi = document.querySelectorAll('.formWeddingVenue ul li');
	
			
		 formWeddingVenueLi.forEach((formWeddingVenueList) => {
		 formWeddingVenueList.addEventListener("click", () => {
			 removeformWeddingVenueLi();
			 formWeddingVenueList.classList.add('active');
				 });
		 });
	
		function removeformWeddingVenueLi() {
			 formWeddingVenueLi.forEach((formWeddingVenueLiMenu) => {
				 formWeddingVenueLiMenu.classList.remove("active");
			 });
		 }


		const formWeddingBudgetLi = document.querySelectorAll('.formWeddingBudget ul li');
	
			
		 formWeddingBudgetLi.forEach((formWeddingBudgetList) => {
		 formWeddingBudgetList.addEventListener("click", () => {
			 removeformWeddingBudgetLi();
			 formWeddingBudgetList.classList.add('active');
				 });
		 });
	
		function removeformWeddingBudgetLi() {
			 formWeddingBudgetLi.forEach((formWeddingBudgetLiMenu) => {
				 formWeddingBudgetLiMenu.classList.remove("active");
			 });
		 }
	
		
	
		
	
	

</script>

<?php get_footer() ?>