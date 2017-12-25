<?php
/*
Template Name: Etusivu
*/
?>

<?php
	get_header();
	$image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>

<div id="section-landing" class="clip-right-top bg-image" <?php if( $image_url ) { ?> style="background: url(<?php echo $image_url; ?>);"<?php } ?>>
	<div class="container top">
		<div class="row">
			<div class="col-sm-12 hero text-center">
				<img class="animated fadeIn middle" id="skslogo" src="/wp-content/uploads/sks-all.svg" alt="Logo">
			</div>
			<div class="text-center"><a class="btn" href="mailto:kari@karisavolainen.com">Ota yhteyttä</a></div>

        </div><!--/.row-->
    </div><!--/.container-->
</div><!--/#section-landing-->

<div id="section-info" class="section section-dark">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<?php the_field('main_text'); ?>
			</div>
        </div><!--/.row-->
    </div><!--/.container-->
</div><!--/#section-info-->

<div id="section-me" class="section section-light">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 text-center text-center-xxs text-center-xs">

				<?php
					$image = get_field('second_image');
					if( !empty($image) ): ?>
						<img class="myimage" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				<?php endif;?>

			</div>
			<div class="col-sm-6 ">
				<?php the_field('second_text'); ?>
			</div>
        </div><!--/.row-->
    </div><!--/.container-->
</div><!--/#section-me-->

<div id="section-map" class="section">
	<div class="col-sm-12 nopad">
		<?php

		$location = get_field('google_map');

		if( !empty($location) ):
		?>
		<div class="acf-map">
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
		</div>
		<?php endif; ?>
	</div>
</div><!--/#section-me-->



<?php get_footer(); ?>
