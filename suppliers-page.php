<?php
/**
 * Template Name: Suppliers Page
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
	
	
	
	.videoSlider {
		padding: 80px 80px;
		position:relative;
		text-align:center;
	}
	@media screen and (max-width: 1080px) {
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
	}
	.clientTestimonialsContent {
		padding:20px;
	}
		.seperatorNav .arrowSVG svg {
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
	

		.cta {
		height: 473px;
		background-image: url('https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/Group-24.jpg');
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
	
	.filter {
		color:black;
	}
	
	.supplier-category-item.btn{
		color:white !important;
		border:1px solid white !important;
		margin:10px;
		display:block;
		width: max-content;
		
	}
	.supplier-category-item.btn.active {
		background-color:white;
		color:black !important;
	}
	.supplier-category-item.btn:hover{
		background:white;
		color:black !important;
	}
	@media screen and (max-width:680px){
		span.supplier-category-item.btn{
			font-size:12px;
			width:100%;
			margin: 5px 0;
		}
	}  
	.supplier-category-list {
		display:ruby;
	}
	
	.supplierItem {
		text-align:center;
		padding:30px 50px;
	}
	@media screen and (max-width:1080px){
		.supplierItem {
			padding:20px 10px;
		}
	}
	
	.supplierItem img{
		position:absolute;
		top:0;
		left:0;
		width:100%;
		height:100%;
		object-fit:cover;
		object-position:center;
		 filter: brightness(0.4);
	}
	
	.supplierItem p{
		opacity:0;
		transition:0.5s ease-in-out;
	}
	
	.supplierItem h3 {
		transform:translatey(160px);
		transition:0.3s ease-in-out;
	}
	.supplierMain a.btn.visit {
		color:white;
		border:1px solid white;
		margin-top: 20px;
		display:block;
		width:max-content;
	}
	.supplierMain a.btn.visit:hover {
		color:black !important;
		background:white;
	}
	.supplierMain {
		display:none !important;
	}
	.supplierMain.active {
	    display: block !important;
	}
	.supplierMain.filtered {
		display: block !important;
	}
	.supplierSlider {
		display:flex;
	}
	.filterList.disable {
		pointer-events:none;
		opacity:.5;
	}
	.supplierItem:hover h3 {
		transform:translatey(0);
		transition:0.3s ease-in-out;
	}
	
	.supplierItem:hover p {
		opacity: 1;
		transition:0.5s ease-in-out;
		transition-delay:0.3s;
	}
	.supplierInfo {
		position:relative;
	}
	.supplierInfo .tns-controls button:first-child {
		position:absolute;
		top:50%;
		left:20px;
		transform:translatey(-50%);
		z-index:1;
	}
	.supplierInfo .tns-controls button:last-child {
		position:absolute;
		top:50%;
		right:20px;
		transform:translatey(-50%);
		z-index:1;
	}
	.suppDetails {
		position:absolute;
		bottom: 0;
		left:50%;
		transform: translatex(-50%);
	}
	@media screen and (max-width:1080px){
		.suppDetails a{
			font-size:16px;
		}
	}
	.supplierItem {
		height:547px;
	}
</style>
<?php get_header() ?>

<!-- 	<div class="customHeader" style="">
		<div class="customContainer">
			<div class="customHeaderWrapper">
				<a href="<?php /* echo home_url();*/ ?>">
					<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/LOGOBLACH.svg" atl="themainlogo">
				</a>
				<div class="flex" style="align-items:center;gap: 40px">
					<a href="<?php /* echo home_url() */ ?>/wedding-enquiries">
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
			<h1 style="text-transform:uppercase">
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

	<div class="filter" style="padding:60px 0">
		<div class="customContainer">
			<h4 style="font-size:22px;color:white;">
				FILTER
			</h4>
			<div class="filterWrapper">
			<div class="supplier-category-list">
				<span id="filterAllBtn" class="supplier-category-item btn active">All</span>
				<?php 
				$terms = get_terms( array(
					'taxonomy' => 'supplier-type',
					'hide_empty' => false,
				));

				if ( $terms && ! is_wp_error( $terms ) ) {
					foreach ( $terms as $term ) {
						echo '<span class="supplier-category-item btn filter-btn filterList" data-term="' . esc_html( $term->slug ) . '">' . esc_html( $term->name ) . '</span>';
					}
				} else {
					echo '<p>No supplier categories found.</p>';
				}
				?>
			</div>
			</div>
		</div>
	</div>

	<div id="supplier-results" class="supplierInfo" style="padding:60px 0">
		<div class="customContainer">
			<div style="display:flex;align-items:center;gap:10px;">
				<div>
					<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/cursor-click.png" alt="">
				</div>
				<p style="color:white;font-size:25px;">
					HOVER TO REVEAL INFORMATION
				</p>
			</div>
			<div class="supplierSlider">
				<?php 
						$term = "no";
								$args = array(
								'post_type' => 'supplier',
								'posts_per_page' => -1,
								'tax_query'      => array(
											array(
												'taxonomy' => 'is-wedding-supplier',
												'field'    => 'slug',
												'terms'    => $term,
											),
										),
								);
								$newQuery = new WP_Query($args);
				?>

				<?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
				
				<div class="supplierMain active <?php echo implode(', ', wp_list_pluck(get_the_terms(get_the_ID(), 'supplier-type'), 'slug')); ?>" data-linkset="<?php echo implode(', ', wp_list_pluck(get_the_terms(get_the_ID(), 'supplier-type'), 'slug')); ?>">
					
					<div class="supplierItem" style="position:relative">
						<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
						<div style="z-index:1;position:relative;height:95%;">
							<h3>
								<?php the_title(); ?>
							</h3> 
							<div style="margin-bottom:20px;min-height:180px;display:grid;place-items:center">
								<div>
									<?php the_content();?>
								</div>
							</div>
							<div class="suppDetails" style="display:grid;place-items:center;text-align:center">
								<?php 
									$mobileNumber = get_field('mobile_number');
										if ($mobileNumber !== ""){
								?>
								<a href="tel:<?php echo $mobileNumber; ?>" class="btn" style="display:block;width:max-content;"><?php echo $mobileNumber; ?></a> <br>
								<?php } ?>
								<?php 
									$theEmail = get_field('email');
										if ($theEmail !== ""){
								?>
								<a href="mailto:<?php echo $theEmail; ?>" class="btn" style="display:block;width:max-content;"><?php echo $theEmail; ?></a>
								<?php } ?>
							</div>
						</div>
					</div>
					<?php 
						$websiteLink = get_field('website_link');
						if ($websiteLink !== ""){
					?>
					<a href="<?php echo $websiteLink;  ?>" class="btn visit">VISIT SITE</a>
					<?php } ?>
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
							<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/04/Group-79.png" alt="gripdots" >
						</div>
						<h3 style="font-size:24px;color:white">
							BACK TO HOME
						</h3>
					</div>
				</a>
				
					<div class="nextPost" style="align-items:center;gap:30px">
					<div>

						<a href="<?php echo home_url() ?>/wedding-venues">
							<h3 style="font-weight:400;text-transform:capitalize;color:white;">
								See Wedding Venues
							</h3>
						</a>
						

					</div>

						<div class="addWidth arrowSVG arrowMoving">
							<svg xmlns="http://www.w3.org/2000/svg" width="128" fill="white" height="50" viewBox="0 0 128 50"><rect y="24" width="115" height="2"></rect><path d="M111,13C104,6,99,0,99,0H96s6,11,11,18l5,7-5,7c-5,7-11,18-11,18h3s5-6,12-13c9-9,17-11,17-11V24S120,22,111,13Z"></path></svg>
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
	
		function handleClick(event) {
		  event.preventDefault(); // Prevents the default behavior of the anchor tag (i.e., jumping to the top of the page)
		  alert('Button clicked!');
		}
	
	

	const allFilter = document.getElementById('filterAllBtn');
	const filterList = document.querySelectorAll('.filterList');
	

	
	allFilter.addEventListener("click", () => {
		allFilter.classList.add("active");
		
		const mainSupplier = document.querySelectorAll(".supplierMain");
		mainSupplier.forEach(mainItem => {
			mainItem.classList.add("active");
			mainItem.classList.remove("filtered");
		});
		
		filterList.forEach(filterListItem => {
			filterListItem.classList.remove("active");
		});
	})
	
	
		let sliderSupplier;
let selectedFilters = new Set();
const sliderContainer = document.querySelector(".supplierSlider");
const allSlides = Array.from(document.querySelectorAll(".supplierMain"));
const buttons = document.querySelectorAll(".filter-btn");


// Initialize slider
function initializeSlider() {
  sliderSupplier = tns({
    container: ".supplierSlider",
    items: 1,
    slideBy: "page",
    autoplay: false,
    loop: false,
    nav: false,
    controlsText: [
      '<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/Group-17.png" alt="" width="60" height="64">',
      '<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/Group-15.png" alt="" width="60" height="64">'
    ],
    responsive: {
      1080: {
        items: 2
      },
      1610: {
        items: 3
      }
    }
  });
}

// Filter and refresh slider
function updateSupplierSlider() {
  // Destroy slider
  if (sliderSupplier) {
    sliderSupplier.destroy();
  }

  // Clear current slides
  sliderContainer.innerHTML = '';

  // Filter slides
  const filteredSlides = allSlides.filter(slide => {
    const itemCategory = slide.dataset.term;
    return selectedFilters.size === 0 || selectedFilters.has(itemCategory);
  });

  // Append filtered slides
  filteredSlides.forEach(slide => {
    sliderContainer.appendChild(slide);
  });

  // Reinitialize slider
  initializeSlider();
}

// Button event listeners
buttons.forEach(btn => {
  btn.addEventListener("click", () => {
	 btn.classList.toggle("active");
	 allFilter.classList.remove('active');
	const mainSupplier = document.querySelectorAll(".supplierMain");
	  
	 mainSupplier.forEach(mainItem => {
		 mainItem.classList.remove('active');
	 })
	  
	mainSupplier.forEach(mainItem => {
	  if (mainItem.dataset.linkset === btn.dataset.term) {
		mainItem.classList.toggle("filtered"); // Be sure "yow" is a class name, not a string with punctuation
	   } 
	});
	  
    const term = btn.dataset.term;
	  console.log(term);

    // Toggle active filter
//     if (selectedFilters.has(term)) {
//       selectedFilters.delete(term);
//       btn.classList.remove("active");
//     } else {
//       selectedFilters.add(term);
//       btn.classList.add("active");
//     }

//     updateSupplierSlider();
  });
});

// Initial run
initializeSlider();

</script>

<?php get_footer() ?>