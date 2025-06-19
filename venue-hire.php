<?php

/**
 * Template Name: Venue Hire
 * 
 * */

?>
<style>
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
	
		.footer {
    padding: 8rem 0 0;
    background: var(--dark);
    color: white;
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
	color:white;
}

	.footer-item p {
		font-size:24px;
	}
	
.footer-item ul li {
    margin-bottom: 5px;
}

.footer-item ul li a {
    font-size: 14px; 
	color:white;
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
		border: 1px solid white !important;
		color:white !important;
	}
	.qodef-icon-list-item.qodef-icon--title-only .qodef-e-title:hover .qodef-e-title-inner{
		background:white !important;
		color:black !important;
	}
	.qodef-icon-list-item.qodef-icon--title-only .qodef-e-title:hover .qodef-e-title-inner .qodef-e-title-text{
		color:black !important;
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
	.weddingInquiries {
		color:white;
	}
	.weddingInquiries h2 {
		font-size:clamp(26px,5vw,72px) !important;
		font-weight:700 !important;
		color:white;
	}
	.weddingInquiriesWrapper {
		display:grid;
		grid-template-columns: 1fr 1fr;
		grid-gap:40px;
	}
	@media screen and (max-width:1080px){
		.weddingInquiriesWrapper{
			grid-template-columns:1fr;
		}
	}
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
	.sliderInquiry img.theImg{
		height:100%;
/* 		width:100%; */
		object-fit:cover;
		filter:brightness(1);
		transition:0.3s ease-in-out;
	}
	.weddingInquirySliderImage .tns-controls{
		position:absolute;
		bottom:50px;
		right:50px;
		z-index:1;
		opacity:0;
		transition:0.3s ease-in-out;
	}

	.sliderInquiryItem {
		position:relative;
	}
	.weddingInquirySliderImage .sliderTitleInquiry{
		position:absolute;
		bottom:60px;
		left:50px;
		z-index:1;
		font-size:32px;
		font-weight:500;
		color:white;
		opacity:0;
		transition:0.3s ease-in-out;
	}
	.weddingInquirySliderImage:hover .tns-controls{
		opacity:1 !important;
	}
	.weddingInquirySliderImage:hover .sliderTitleInquiry{
		opacity:1 !important;
		transition:0.3s ease-in-out;
	}
	.weddingInquirySliderImage:hover img.theImg{
		filter:brightness(0.5);
		transition:0.3s ease-in-out;
	}
		@media screen and (max-width:1080px){
		.weddingInquirySliderImage .tns-controls{
			opacity:1;
			bottom:20px;
			left:20px;
		}
		.weddingInquirySliderImage .sliderTitleInquiry{
			opacity:1;
			left:27px;
			bottom:100px;
		}
		.weddingInquirySliderImage{
				margin-top:100px;
			}
		
	}
	@media screen and (max-width:1080px){
		.sliderInquiryItem {
			height: 700px;
		}
	}
	.hideThisElement {
		visibility: hidden;
		height:0;
	}
	input:-webkit-autofill {
	  background-color: transparent !important; 
	  -webkit-box-shadow: 0 0 0px 1000px transparent inset !important;
	  -webkit-text-fill-color: #000 !important;
	  transition: background-color 5000s ease-in-out 0s;
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
</style>

<?php get_header() ?>

<!-- 	<div class="customHeader" style="">
		<div class="customContainer">
			<div class="customHeaderWrapper">
				<a href="<?php /* echo home_url(); */?>">
					<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/themainlogopng.png" atl="themainlogo">
				</a>
				<div class="flex" style="align-items:center;gap: 40px">
					<button class="btn weddingBtn" style="color:white;border:1px solid white" value="">CONTACT US</button>					
					<a href="javascript:void(0)" class="qodef-opener-icon qodef-m qodef-source--predefined qodef-fullscreen-menu-opener" style="z-index: 999">
					<span class="qodef-m-icon qodef--open">
						<svg class="qodef-svg--menu-cross" fill="white" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="currentColor"><rect y="9" width="21" height="3"></rect><rect x="9" width="3" height="21"></rect></svg>	</span>
							<span class="qodef-m-icon qodef--close">
							<svg class="qodef-svg--close" xmlns="http://www.w3.org/2000/svg" width="16.9706" height="16.9706" viewBox="0 0 16.9706 16.9706" fill="currentColor"><rect x="-2.0147" y="6.9853" width="21" height="3" transform="translate(-3.5147 8.4853) rotate(-45)"></rect><rect x="6.9853" y="-2.0147" width="3" height="21" transform="translate(-3.5147 8.4853) rotate(-45)"></rect></svg>		</span>
					</a>
				</div>
			
			</div>
		</div>
	</div> -->

    <?php echo do_shortcode('[customMcHeader]') ?>
	



	<div class="weddingInquiries">
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
<!-- 					<div class="form">
						<div class="textBoxes">
							<div class="inputGroup">
								<input type="text" class="" placeholder="First Name">
							</div>
							<div class="inputGroup">
								<input type="text" class="" placeholder="Last Name">
							</div>
							<div class="inputGroup">
								<input type="email" class="" placeholder="Email Address">
							</div>
							<div class="inputGroup">
								<input type="email" class="" placeholder="Contact Number">
							</div>
							<div class="inputGroup">
								<input type="text" class="" placeholder="Event Description">
							</div>
							<div class="inputGroup">
								<input type="text" class="" placeholder="Event Dates">
							</div>
							<div class="inputGroup">
								<input type="text" class="" placeholder="Guest Numbers">
							</div>
							<div class="inputGroup">
								<input type="text" class="" placeholder="Rough Budget">
							</div>
						</div>
						
						<div class="formWeddingVenueRequired">
							<p>
								VENUE REQUIRED
							</p>
							<ul>
								<li class="btnWhite">KACHETTE</li>
								<li class="btnWhite">SHOREDITCH STUDIOS</li>
								<li class="btnWhite">INTERESTED IN BOTH VENUES</li>
								<li class="btnWhite">INFORMATION ON ALL VENUES</li>
							</ul>
						</div>
						<div class="formWeddingVenueFind">
							<p>
								HOW DID YOU FIND US?
							</p>
							<ul>
								<li class="btnWhite">RECOMMENDATION</li>
								<li class="btnWhite">GOOGLE SEARCH</li>
								<li class="btnWhite">SOCIAL MEDIA</li>
								<li class="btnWhite">TAG VENUE</li>
								<li class="btnWhite">HIRESPACE</li>
								<li class="btnWhite">APPEAR HERE</li>
								<li class="btnWhite">OTHER VENUE LISTING</li>
								<li class="btnWhite">OTHER</li>
							</ul>
						</div>
						<div class="inputGroup">
								<input type="text" class="" placeholder="Enter Message">
							</div>
						<div clas="submitBtn">
							<input type="submit" class="btnWhite" style="width:100%;border:1px solid white;text-align:center; color:white" >
						</div>
					</div> -->
					<?php echo do_shortcode('[contact-form-7 id="5fd962f" title="Venue Hire"]') ?>
				</div>
				<div class="weddingInquirySliderImage" style="position:relative">
					<div class="sliderInquiry">
						<div class="sliderInquiryItem">
							<img class="theImg" src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/gallery-1.webp" alt="">
							<div class="sliderTitleInquiry">
								KACHETTE
							</div>
						</div>
						<div class="sliderInquiryItem">
							<img class="theImg" src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/2_shoreditch_studios_christmasparty.jpg" alt="">
							<div class="sliderTitleInquiry">
								SHOREDITCH STUDIOS
							</div>
						</div>
						<div class="sliderInquiryItem">
							<img class="theImg" src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/IMG_0013-preview.jpeg" alt="">
							<div class="sliderTitleInquiry">
								KACHETTE ANNEX
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
<script>
	var sliderx = tns({
			container: ".sliderInquiry",
			items: 1,
			slideBy: "page",
			autoplay: false,
			loop: false,
			nav: false,
			controlsText: [
			  '<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/Group-17.png" alt="" width="60" height="64">',
			  '<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/Group-15.png" alt="" width="60" height="64">',
			],
		  });
	
	const formWeddingVenueLi = document.querySelectorAll('.formWeddingVenueRequired ul li');
	const venueRequired = document.getElementById('venueRequired');
			
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

<?php get_footer() ?>
