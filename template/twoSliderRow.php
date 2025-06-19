<style>
	.twoSliderRowWrapper {
		display:grid;
		grid-template-columns:1fr 1fr;
		align-items:center;
	}
	.my-slider-wed-venue-a div{
		height: 900px;
	}
	.my-slider-wed-venue-a div img{
		height: 100%;
		object-fit:cover;
		width:100%;
	}
	.my-slider-wed-venue-b div{
		height: 900px;
	}
	.my-slider-wed-venue-b div img{
		height: 100%;
		object-fit:cover;
		width:100%;
	}
	.twoSliderRow .tns-outer {
		position:relative;
	}
	.twoSliderRow .tns-controls {
		position:absolute;
		right:50px;
		bottom:75px;
		z-index:1;
	}
	.twoSliderRow .sliderTitle {
		position:absolute;
		left:50px;
		bottom:75px;
		z-index:1;
		font-size:clamp(20px,5vw,42px);
		line-height:1;
	}
	@media screen and (max-width:1080px){
		.twoSliderRowWrapper {
			grid-template-columns:1fr;
		}
		.my-slider-wed-venue-a div{
			height: 500px;
		}
		.my-slider-wed-venue-b div{
			height: 500px;
		}
		.twoSliderRow .tns-controls {
			bottom:20px;
			left:45px;
		}.twoSliderRow .sliderTitle {
			bottom:85px;	
		}
	}
</style>

<div class="twoSliderRow">
	<?php the_title() ?>
	<div class="twoSliderRowWrapper">
		<div class="tns-outer">
			 <?php
           
				$kachette_gallery = get_field('kachette_gallery');
				if ($kachette_gallery) {
					echo $kachette_gallery;
				}

			?>
			<div class="sliderTitle">
				<p>
					KACHETTE
				</p>
			</div>
		</div>
		<div class="tns-outer">
			<?php
           
				$shoreditch_gallery = get_field('shoreditch_gallery');
				if ($shoreditch_gallery) {
					echo $shoreditch_gallery;
				}

			?>
			<div class="sliderTitle">
				<p>
					SHOREDITCH <br> STUDIOS
				</p>
			</div>
		</div>

	</div>	
</div>
