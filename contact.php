<?php

/**
 * 
 * Template Name: Contact
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

	#qodef-page-footer.qodef--footer-logo-area #qodef-page-footer-logo-area {
		display: none;
	}

	#qodef-page-header {
		display: none !important;
	}

	#qodef-page-mobile-header {
		display: none !important;
	}

	#qodef-page-inner {
		padding: 0 !important;
	}

	.customHeaderWrapper {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	.customHeader {
		padding: 30px 0;
	}

	@media screen and (max-width:1120px) {
		.customHeader {
			padding: 20px 0;
		}
	}

	.btn.weddingBtn:hover {
		color: white !important;
		background-color: black;
		transition: .3s ease-in-out;
	}

	@media screen and (max-width:1080px) {
		.btn.weddingBtn {
			display: none;
		}
	}

	.singleStudiobanner {
		height: 90vh;
		position: relative;
	}

	.singleStudiobanner img {
		object-fit: cover;
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
	}

	.singleStudiobanner .bannerTitle {
		/* 		height:80%; */
		z-index: 1;
		position: relative;
		/* 		display:grid; */
		/* 		place-items:center; */
		color: white;
	}

	.singleStudiobanner .bannerTitle h1 {
		font-size: clamp(40px, 10vw, 104px);
	}

	.singleStudiobanner .bannerContact {
		/* 		height:20%; */
		z-index: 1;
		position: relative;
	}

	.flex {
		display: flex;
	}

	@media screen and (max-width: 1080px) {
		.flex {
			flex-direction: column;
			gap: 20px !important;
		}

		.singleStudiobanner .bannerTitle {
			height: 70%;
		}

		.singleStudiobanner img {
			object-position: left;
		}
	}

	#qodef-grid-inner {
		align-items: center;
	}

	.venue {
		padding: 80px 0 80px 0;
		color: white;

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
		grid-template-columns: repeat(3, 1fr);
		margin-bottom: 10rem;
		align-items: center;
	}

	.venue .venue-top-nav li {
		border-right: 1px solid white;
		text-align: center;
		align-items: center;
		list-style: none;
	}


	.venue .venue-top-nav li:last-child {
		border-right: none;
		/* 		text-align: center; */
	}

	.venue .venue-top-nav li p {
		text-transform: uppercase;
		font-size: clamp(18px, 5vw, 23px);
		opacity: 0.5;
		cursor: pointer;
	}

	.venue .venue-top-nav li p i {
		font-weight: unset;
		font-size: 25px;
		display: none;
	}

	.venue .venue-top-nav li p:hover,
	.venue .venue-top-nav li.active p {
		text-decoration: underline;
		opacity: 1;
	}

	.venue .parag {
		/* 		font-size: clamp(2rem, calc(3rem + 1vw), 4.5rem); */
		font-size: 32px;
		text-align: center;
		text-wrap: balance;
		line-height: 1.2;
	}

	.venue .venue-menu {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		gap: 5rem 2rem;
		margin-top: 10rem;
	}

	.venue .venue-menu a {
		font-size: 28px;
		padding: 10px 50px !important;
		margin: 10px 0;
		color: black;
		border: 1px solid black;
	}

	.venue .venue-menu a:hover {
		background: black;
		color: white !important;
	}

	.venueTabContent {
		display: none;
	}

	.venueContent {
		display: none;
	}

	.venueContent.active {
		display: block;
	}

	div.parag {
		display: none;

	}

	div.parag.active {
		display: block;
		font-size: 32px;
	}

	.accordionTitle {
		border-radius: 50px;
		border: 2px solid black;
		width: 700px;
		height: 80px;
		margin: 0 auto 100px auto;
		display: flex;
		align-items: center;
		text-align: center;
		font-size: clamp(16px, 5vw, 32px);
		overflow: hidden;
	}

	.accordionTitle span.active {
		background: black;
		color: white;
		padding: 0;
		margin: 0;
		width: 50%;
		height: 100%;
		display: grid;
		place-items: center;
		border-radius: 50px;
	}

	.accordionTitle span {
		color: black;
		padding: 0;
		margin: 0;
		width: 50%;
		height: 100%;
		display: grid;
		place-items: center;
		cursor: pointer;
	}

	@media screen and (max-width:1080px) {
		.accordionTitle {
			width: 100%;
			height: 70px;
		}
	}

	@media screen and (max-width:1280px) {
		.venue .venue-top-nav {
			grid-template-columns: 1fr;
		}

		.venue .venue-top-nav li {
			border-right: none;
			text-align: left
		}

		.venue .venue-top-nav li p {
			width: 100%;
			display: flex;
			justify-content: space-between;
			padding: 20px 0;
			text-decoration: none;
			border-bottom: 1px solid white
		}

		.venue .venue-top-nav li p i {
			display: block;
		}

		.venue .venue-top-nav li p:hover,
		.venue .venue-top-nav li.active p {
			text-decoration: none;
			opacity: 1;
		}

		div.parag.active {
			display: none;
		}

		.venueTabContent.active {
			display: block;
		}

		.venue .venue-menu a {
			width: 150px;
			font-size: 20px;
			display: inline-block;
			width: 100%;
		}

		.venue .venue-menu {
			display: grid;
			grid-template-columns: 1fr 1fr;
			grid-gap: 0 2rem;
		}
	}

	@media screen and (max-width:600px) {
		.venue .venue-menu a {
			font-size: 18px;
		}

		.venue .venue-menu {
			grid-template-columns: 1fr;
		}
	}

	.videoSlider {
		padding: 80px 80px;
		position: relative;
		text-align: center;
	}

	@media screen and (max-width:1080px) {
		.videoSlider {
			padding: 80px 30px;
		}
	}

	.videoSlider h2 {
		color: black;
		font-size: clamp(36px, 5vw, 52px);
		font-weight: 500;
		margin-bottom: 100px;
	}

	.videoSlider .tns-outer {
		position: relative;
	}

	.videoSlider .tns-controls button:first-child {
		position: absolute;
		top: 50%;
		left: -30px;
		transform: translatey(-50%);
		z-index: 1;
	}

	.videoSlider .tns-controls button:last-child {
		position: absolute;
		top: 50%;
		right: -30px;
		transform: translatey(-50%);
		z-index: 1;
	}

	@media screen and (max-width:1020px) {
		.videoSlider iframe {
			height: 400px !important;
		}
	}

	.sliderClientTestimonials {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-gap: 20px;
	}

	.coupleTestimonials .tns-controls {
		position: absolute;
		bottom: 0;
		display: block !important;
		place-items: center;
		left: 50%;
		transform: translatex(-50%);
	}


	.coupleTestimonials {
		position: relative;
		color: black;
		padding: 80px 0;
	}

	.coupleTestimonials h3 {
		color: black;
		font-size: 36px;
	}

	.coupleTestimonials h2 {
		font-size: clamp(36px, 5vw, 52px);
		font-weight: 500;
		color: black;
		text-align: center;
		margin-bottom: 30px;
	}

	.sliderItemClientTestimonials {

		border: 1px solid #E0E0E0;
	}

	.sliderItemClientTestimonials img {
		width: 100%;
		height: 380px;
		object-fit: cover;
	}

	.clientTestimonialsContent {
		padding: 20px;
	}

	.seperatorNav .arrowSVG svg {
		fill: black !important;
		cursor: pointer;
	}

	.arrowSVG svg rect {
		width: 115px;
	}

	.arrowSVG svg path {
		transform: translatex(-13px);
		transition: 0.3s ease-in-out;
	}

	.nextPost:hover .arrowSVG svg path {
		transform: translatex(0);
		transition: 0.3s ease-in-out
	}

	@media screen and (max-width:1080px) {
		.nextPost {
			text-align: center;
		}

		.seperatorWrapper {
			align-items: center;
		}
	}

	.nextPost {
		display: flex;
	}

	.nextPost h3 {
		font-size: clamp(32px, 3vw, 52px);
	}

	.arrowImg {
		display: none;
	}

	@media screen and (max-width:768px) {
		.arrowImg {
			display: block;
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
		place-items: center;
		height: 100%;
	}

	.cta .cta-wrapper>div {
		display: flex;
		justify-content: space-between;
		align-items: center;
		width: 100%;
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
		font-weight: 600;
		text-transform: uppercase;
	}

	@media screen and (max-width:1080px) {
		.cta .cta-wrapper>div {
			flex-direction: column;
			text-align: center;
		}

		.cta-content h3 {
			font-size: 41px;
		}

		.cta {
			background-position: left;
		}
	}


	.footer {
		padding: 8rem 0 0;
		background: var(--dark);
		color: white;
	}

	.footer-wrapper {
		display: grid;
		grid-template-columns: 1.5fr 2fr;
		align-items: start;
		grid-gap: 200px;
	}

	.footerLinksPage {
		display: flex;
		gap: 100px;
	}

	.footer-item h3 {
		text-transform: uppercase;
		margin-bottom: 2rem;
		font-size: 18px;
		font-weight: 400;
		color: white;
	}

	.footer-item p {
		font-size: 24px;
	}

	.footer-item ul li {
		margin-bottom: 5px;
	}

	.footer-item ul li a {
		font-size: 14px;
		color: white;
	}

	.footer-item ul li a:hover {
		text-decoration: underline;
	}

	@media screen and (max-width:1020px) {
		.footer-wrapper {
			grid-template-columns: 1fr;
			grid-gap: 45px;
		}
	}

	@media screen and (max-width:780px) {
		.footerLinksPage {
			flex-direction: column;
			gap: 0;
		}
	}

	#qodef-page-footer-top-area {
		display: none !important;
	}

	.qodef-icon-list-item.qodef-icon--title-only .qodef-e-title .qodef-e-title-inner {
		border: 1px solid white !important;
		color: white !important;
	}

	.qodef-icon-list-item.qodef-icon--title-only .qodef-e-title:hover .qodef-e-title-inner {
		background: white !important;
		color: black !important;
	}

	.qodef-icon-list-item.qodef-icon--title-only .qodef-e-title:hover .qodef-e-title-inner .qodef-e-title-text {
		color: black !important;
	}

	.customFooterwrapper {
		display: flex;
		justify-content: space-between;
		align-items: center;
	}

	@media screen and (max-width:960px) {
		.customFooterwrapper {
			flex-wrap: wrap;
		}

		.customFooterItem {
			margin-bottom: 20px;
		}
	}
</style>
<?php get_header() ?>

<?php echo do_shortcode('[customMcHeader]') ?>



<div class="singleStudiobanner">
	<img src="<?php echo the_post_thumbnail_url(); ?>" alt="Description of image">
	<div class="customContainer">
		<div class="bannerContact">
			<div style="display:flex;flex-direction:column;height:100%; justify-content:space-between">
				<div class="wrapper flex" style="padding-top:50px;gap:30px">
					<p style="font-size:15px;line-height:17px;">
						UNIQUE EAST LONDON EVENT <br> & WEDDING VENUES <br> FOR HIRE
					</p>
					<p style="font-size:15px;line-height:17px;">
						GET IN TOUCH <br> 020 7033 9006 <br> LINK@SHOREDITCH.COM
					</p>
					<p style="font-size:15px;line-height:17px;">
						MONDAY TO FRIDAY <br> 9AM - 6PM
					</p>
				</div>

				<div class="bannerTitle">
					<h1 style="text-transform:uppercase">
						<?php /* the_title(); */ ?>
						GET IN TOUCH
					</h1>
				</div>
			</div>
		</div>
	</div>
</div>




<?php the_content(); ?>



<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
<script>
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




	const accordionTitle = document.querySelectorAll('.accordionTitle span');
	const venueContent = document.querySelectorAll('.venueContent');


	const secFaq = document.querySelector(".secFaq");
	const btnFaq = document.getElementById("btnFaq");

	const secFaqB = document.querySelector(".secFaqB");
	const btnFaqB = document.getElementById("btnFaqB");

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
	});

	btnFaqB.addEventListener('click', () => {
		secFaqB.classList.toggle('active');
	});
</script>

<?php get_footer() ?>