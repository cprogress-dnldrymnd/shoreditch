<?php

/**
 * Template Name: Wedding Inquiries
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
	.weddingInquiries {
		color:black;
	}
	.weddingInquiries h2 {
		font-size:clamp(26px,5vw,72px) !important;
		font-weight:700 !important;
		color:black;
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
	.sliderInquiry img.theImg{
		height:100%;
		width:100%;
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
	
	@media screen and (max-width:1080px){
		.sliderInquiryItem {
			height: 700px;
		}
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
	.hideThisElement {
		visibility: hidden;
		height:0;
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
		.wpcf7-spinner {
		position:absolute !important;
		top:10px;
		left:51%;
		animation: spin 1s linear infinite;
	}
	.relative {
		position:relative;
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
				<a href="<?php /* echo home_url(); */ ?>">
					<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/LOGOBLACH.svg" atl="themainlogo">
				</a>
				<div class="flex" style="align-items:center;gap: 40px">
					<button class="btn weddingBtn" style="color:black;border:1px solid black" value="">CONTACT US</button>					
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
	


	<div class="weddingInquiries">
		<div class="customContainer">
			<div class="weddingInquiriesWrapper">
				<div class="theForm">
					<h2>
						WEDDING ENQUIRY
					</h2>
					<p>
						Our venues are perfect for weddings with 80 to 180 seated guests or 200 guest standing receptions. Please Provide details of your wedding plans and we will get back to you soon.
					</p>
<!-- 					<div class="form">
						<div class="textBoxes">
							<div class="inputGroup">
								<input type="text" class="" placeholder="Your Full Name">
							</div>
							<div class="inputGroup">
								<input type="text" class="" placeholder="Partner Full Name">
							</div>
							<div class="inputGroup">
								<input type="email" class="" placeholder="Email Address">
							</div>
							<div class="inputGroup">
								<input type="email" class="" placeholder="Contact Number">
							</div>
							<div class="inputGroup">
								<input type="text" class="" placeholder="Wedding Date">
							</div>
							<div class="inputGroup">
								<input type="text" class="" placeholder="Ceremony Guest">
							</div>
							<div class="inputGroup">
								<input type="text" class="" placeholder="Reception Guest">
							</div>
						</div>
						
						<div class="formWeddingVenue">
							<p>
								WEDDING VENUE
							</p>
							<ul>
								<li class="btnBlack">KACHETTE</li>
								<li class="btnBlack">SHOREDITCH STUDIOS</li>
								<li class="btnBlack">INTERESTED IN BOTH VENUES</li>
							</ul>
						</div>
						<div class="formWeddingBudget">
							<p>
								WEDDING BUDGET
							</p>
							<ul>
								<li class="btnBlack">£27,000 - £30,000 (Kachete 80-90 guests)</li>
								<li class="btnBlack">£31,000 - £33,000 (Kachete 100-110 guests)</li>
								<li class="btnBlack">£34,000 - £40,000 (Kachete 120-170 guests)</li>
								<li class="btnBlack">£29,000 - £32,000 (Shoreditch Studios 80-90 guests)</li>
								<li class="btnBlack">£32,000 - £35,000 (Shoreditch Studios 100-110 guests)</li>
								<li class="btnBlack">£35,000 - £40,000 (Shoreditch Studios 120-160 guests)</li>
							</ul>
						</div>
						<div class="inputGroup">
								<input type="text" class="" placeholder="More About Your Wedding Plans">
							</div>
						<div clas="submitBtn">
							<input type="submit" class="btnBlack" style="width:100%;border:1px solid black;text-align:center; color:black" >
						</div>
					</div> -->
					<?php echo do_shortcode('[contact-form-7 id="3f212ae" title="Wedding Enquiry Form"]') ?>
				</div>
				<div class="weddingInquirySliderImage" style="position:relative">
					<div class="sliderInquiry">
						<div class="sliderInquiryItem">
							<img class="theImg" src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/weddingInquiry.png" alt="">
							<div class="sliderTitleInquiry">
								SHOREDITCH STUDIO
							</div>
						</div>
						<div class="sliderInquiryItem">
							<img class="theImg" src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/weddingInquiry.png" alt="">
							<div class="sliderTitleInquiry">
								SHOREDITCH STUDIO
							</div>
						</div>
						<div class="sliderInquiryItem">
							<img class="theImg" src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/weddingInquiry.png" alt="">
							<div class="sliderTitleInquiry">
								SHOREDITCH STUDIO
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
