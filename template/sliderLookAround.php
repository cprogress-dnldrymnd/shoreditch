    <style>
      .grid {
        display: grid;
      }
      .grid-cols-2 {
        grid-template-columns: 1fr 1fr;
      }
		
		.slidesItem {
			height:900px;
		}
		
      @media screen and (max-width: 1060px) {
        .grid-cols-2 {
          grid-template-columns: 1fr;
        }
	   .slidesItem {
			height:unset;
		}
	   .slidesItem img{
		   height:400px !important;
		   object-fit:cover;
		   width:100% !important;
		}
		  .iframeWalkAround {
			  height: 500px !important;
		  }
      }

		
		
      @media screen and (max-width: 1060px) {
        .grid-cols-2 {
          grid-template-columns: 1fr;
        }
      }

      .items-center {
        align-items: center;
      }

      .sliderContent {
        padding: 50px 50px 100px 50px;
        color: white;
        margin-bottom: 20px;
/* 		max-width:740px; */
      }
      .sliderContent h2 {
        line-height: 1;
        font-size: 60px;
      }


      .tns-controls {
        position: absolute;
        bottom: 0;
        left: calc(50px + 50%);
      }

      @media screen and (min-width: 1500px) {
        .tns-controls {
          position: absolute;
          bottom: 10%;
          left: calc(70px + 50%);
        }
      }

      @media screen and (max-width: 1060px) {
        .tns-controls {
          position: absolute;
          bottom: 0;
          left: 50%;
          transform: translateX(-50%);
          z-index: 1;
        }
		  .sliderContent{
			  width:100%;
			  padding: 50px 2rem 100px 2rem;
		  }
		  .sliderContent h2 { 
			font-size:35px;  
		  }
      }

      .tns-controls button {
        background: none;
        border: none;
        cursor: pointer;
        z-index: 1;
        position: relative;
      }
      .relative {
        position: relative;
      }

      .btnSliderContactUs {
        position: absolute;
        bottom: 30px;
        right: 70px;
      }

      @media screen and (min-width: 1500px) {
        .btnSliderContactUs {
          position: absolute;
          bottom: calc(15px + 10%);
          right: 70px;
        }
      }

      @media screen and (max-width: 1060px) {
        .btnSliderContactUs {
          position: static;
          margin-top: 30px;
          display: inline-block;
          place-self: center;
        }
      }

      .slidesItem img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
		
		.font17 p {
			font-size: 17px !important;
			font-weight: 300;
		}
		.hidden {
			display:none !important;
		}
   </style>

 <div class="mainSliderLookAround relative">
      <div class="my-slider">
		  
		   <?php 
			  $args = array(
				  'post_type' => 'studio',
				  'posts_per_page' => 3,
			  );
			  $newQuery = new WP_Query($args)
		  ?>

		  <?php if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();?>
		  
        <div class="test <?php the_field('walk_around_enable') ?>">
          <div class="slidesItem grid grid-cols-2">
<!--             <img
             src="<?php /* echo get_the_post_thumbnail_url() */ ?>"
              alt="" /> -->
			  <div>
				  <?php echo get_field('ifram3d') ?>
			  </div>
            <div class="sliderContent relative">
              <h2 style="font-weight:400"><?php the_title() ?></h2>
              <div class="font17">
				<?php the_content(); ?>  
			  </div>
              <a href="#" class="btn btnSliderContactUs">CONTACT US</a>
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
    