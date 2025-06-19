			</div><!-- close #qodef-page-inner div from header.php -->
		</div><!-- close #qodef-page-outer div from header.php -->
		<?php
		// Hook to include page footer template
		do_action( 'einar_action_page_footer_template' );

		// Hook to include additional content before wrapper close tag
		do_action( 'einar_action_before_wrapper_close_tag' );
		?>
	</div><!-- close #qodef-page-wrapper div from header.php -->
	<?php
	// Hook to include additional content before body tag closed
	do_action( 'einar_action_before_body_tag_close' );
	?>
	<script
		  src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.min.js"
		  integrity="sha512-sfTO4Pp4bdGjTlI1WZZ7zqcbBIo4NY51k1Gr99l1ezQIRboEqAbCNegL3vP65zQwP6aJjqqdDm1GPULlqp94Qw=="
		  crossorigin="anonymous"
		  referrerpolicy="no-referrer"></script>
		<script>
			document.addEventListener('DOMContentLoaded', function() {
			  if (document.querySelector('.my-slider')) {
				 var slider = tns({
					container: ".my-slider",
					items: 1,
					slideBy: "page",
					autoplay: false,
					autoHeight: true,
					loop: true,
					nav: false,
					controlsText: [
					  '<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/Group-17.png" alt="" width="60" height="64">',
					  '<img src="https://shoreditch.theprogressteam.com/wp-content/uploads/2025/02/Group-15.png" alt="" width="60" height="64">',
					],
				  });
			  }
			});
			

			
			document.addEventListener('DOMContentLoaded', function() {
			  if (document.querySelector('.my-slider-b')) {
				var sliderb = tns({
					container: ".my-slider-b",
					items: 1,
					slideBy: "page",
					autoplay: true,
					autoplayTimeout: 3000, // Adjust fade duration
					speed: 1000, // Transition speed
					mode: "gallery", // Enables fade effect
					controls: false,
					nav: false
				  });
			  }
			});

			
		document.addEventListener('DOMContentLoaded', function() {
			  if (document.querySelector('.my-slider-c')) {
						var sliderc = tns({
						container: ".my-slider-c",
						items: 1,
						slideBy: "page",
						autoplay: true,
						autoplayTimeout: 3000, // Adjust fade duration
						speed: 1000, // Transition speed
						mode: "gallery", // Enables fade effect
						controls: false,
						nav: false
					  });
			  }
			});

			

			
		
		const elementsB = document.querySelectorAll('.qodef-ib-item-description p:nth-child(2)');
		elementsB.forEach(el => {
			const text = el.textContent;
			const parts = text.split(' ');
			if (parts.length > 2) {
			  const newText = parts.slice(0, 2).join(' ') + '<br>' + parts.slice(2).join(' ');
			  el.innerHTML = newText;
			}
		});
			
		const elementsC = document.querySelectorAll('.qodef-ib-item-description p:nth-child(3)');
		elementsC.forEach(ell => {
		const textt = ell.textContent;
		const partss = textt.split(' ');
		if (partss.length > 2) {
		  const newTextt = partss.slice(0, 2).join(' ') + '<br>' + partss.slice(2).join(' ');
		  ell.innerHTML = newTextt;
		}
		});


			
		</script>
<?php wp_footer(); ?>
</body>
</html>
