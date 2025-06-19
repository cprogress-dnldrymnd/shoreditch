<?php
/**
 * Template Name: Home
 * 
 * */
?>
<style>
	.bannerText h1 {
		font-size:140px;
		line-height:1;
		font-weight:700;
		margin:0;
	}
</style>

<?php get_header();?>
   <div class="customContainer">
	    <div class="bannerText relative z-[2] !mt-[40vh]">
				<h1>
					SHOREDITCH LONDON
				</h1>
				<h1>
					EVENT VENUES
				</h1>
		</div>
	   <div class="wrapper flex items-center justify-between relative z-[2] ">
			<div class="bannerDetails social flex items-center justify-between">
				<div class="bannerContact flex gap-[40px] text-[15px] leading-[1.2]">
					<p>
						UNIQUE EAST LONDON EVENT <br> & WEDDING VENUES <br> FOR HIRE
					</p>
					<p>
						GET IN TOUCH <br> 020 7033 9006 <br> LINK@SHOREDITCH.COM
					</p>
					<p>
						MONDAY TO FRIDAY <br> 9AM - 6PM
					</p>
				</div>
			</div>
		   <div>
			   <ul class="flex items-center gap-[10px]">
				   <li class="text-[15px] mr-[30px]">CHECK US OUT</li>
				   <li><a href="#"><img src="<?php  echo get_template_directory_uri() ?>/imgs/instagram.png"></a></li>
				   <li><a href="#"><img src="<?php  echo get_template_directory_uri() ?>/imgs/pinterest.png"></a></li>
			   </ul>
		  </div>
	   </div>
	   
   </div>

</section>
	
	<?php the_content(); ?>



<?php get_footer(); ?>