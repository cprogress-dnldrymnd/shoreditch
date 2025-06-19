<?php
get_header();
?>

<style>
	.qodef-header-standard--right #qodef-page-header-inner .qodef-header-navigation {
		display:none;
	}
	#qodef-page-header {
		background-color: #1a1a1a !important;
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
</style>

	<div class="customHeader" style="">
		<div class="customContainer">
			<div class="customHeaderWrapper">
					<a href="<?php echo home_url(); ?>">
				<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/themainlogopng.png" atl="themainlogo">
			</a>
			<a href="javascript:void(0)" class="qodef-opener-icon qodef-m qodef-source--predefined qodef-fullscreen-menu-opener" style="z-index: 999">
			<span class="qodef-m-icon qodef--open">
				<svg class="qodef-svg--menu-cross" xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="currentColor"><rect y="9" width="21" height="3"></rect><rect x="9" width="3" height="21"></rect></svg>	</span>
					<span class="qodef-m-icon qodef--close">
					<svg class="qodef-svg--close" xmlns="http://www.w3.org/2000/svg" width="16.9706" height="16.9706" viewBox="0 0 16.9706 16.9706" fill="currentColor"><rect x="-2.0147" y="6.9853" width="21" height="3" transform="translate(-3.5147 8.4853) rotate(-45)"></rect><rect x="6.9853" y="-2.0147" width="3" height="21" transform="translate(-3.5147 8.4853) rotate(-45)"></rect></svg>		</span>
			</a>
			</div>
		</div>
	</div>

<?php
// Include content template
einar_template_part( 'content', 'templates/content', '404' );

?>

<?php

get_footer();

?>