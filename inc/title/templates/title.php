<div class="qodef-page-title qodef-m <?php echo esc_attr( einar_get_page_title_classes() ); ?>">
	<?php
	// Hook to include additional content before page title inner
	do_action( 'einar_action_before_page_title_inner' );
	?>
	<div class="qodef-m-inner">
		<?php
		// Include module content template
		echo apply_filters( 'einar_filter_title_content_template', einar_get_template_part( 'title', 'templates/title-content' ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		?>
	</div>
	<?php
	// Hook to include additional content after page title inner
	do_action( 'einar_action_after_page_title_inner' );
	?>
</div>
