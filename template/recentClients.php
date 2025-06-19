<style>

.my-slider-b img {
  width: 100%;
  height: auto;
  opacity: 0;
  transition: opacity 1s ease-in-out;
}

.tns-slide-active img {
  opacity: 1;
}
	.recentClient .tns-outer button{
		display:none;
	}
	.recentClientWrapper {
		display:grid;
		grid-template-columns: 1fr 0.5fr 1fr;
		align-items:center;
	}
	
	@media screen and (max-width:680px){
		.recentClientWrapper {
			grid-template-columns: 1fr;
			grid-gap: 30px;
			text-align:center;
		}
	}
	:root {
        --marquee-width: 100vw;
        --marquee-height: 20vh;
        /* --marquee-elements: 12; */ /* defined with JavaScript */
        --marquee-elements-displayed: 5;
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
		width: 0 auto !important;
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
        width: 100%;
        /* height: 100%; */
      }

      @media (max-width: 600px) {
        :root {
          --marquee-width: 100vw;
          --marquee-height: 16vh;
          --marquee-elements-displayed: 3;
        }
        .marquee:before,
        .marquee:after {
          width: 5rem;
        }
		.marquee-content li img {
        width: 150px;
        /* height: 100%; */
      	}
      }
</style>


<div class="clientSlides">
	<div class="customContainer">
		<div class="marquee">
		  <ul class="marquee-content">
			  
			  <?php 
				  $args = array(
					  'post_type' => 'client',
					  'posts_per_page' => -1,
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
				  echo "no available content yet";
				  endif;
				  wp_reset_postdata();
			  ?>
			
		  </ul>
    	</div>
	</div>
</div>

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