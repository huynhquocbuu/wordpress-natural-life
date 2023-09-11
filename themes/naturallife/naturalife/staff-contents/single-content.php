<?php
/**
 * 
 * template for displaying staff detail page
 *
 */ 
?>

<div class="row">
	<div class="col col-12 order-2 order-sm-1 col-sm-8">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'naturalife' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>			
	</div>

	<div class="col col-12 order-1 order-sm-2 col-sm-4">
			<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>								
			<div class="entry-thumbnail aligncenter">
				<?php echo rtframework_get_resized_image_output( array( "image_url" => "", "image_id" => get_post_thumbnail_id(), "w" => 300, "h" => 100000, "crop" => "", "class" => "img-fluid" ) ); ?>
			</div>
		<?php endif; ?>						

		<div class="staff-single-media-links aligncenter margin-t30">
			<?php do_action("rtframework_staff_media_links",get_the_ID()) ?>
		</div>
	</div>
				
</div>
