<?php
/*
Template Name: Subpage
*/
?>

<?php
	get_header();
	$image_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
?>

<div id="section-landing" class="clip-right-top bg-image" <?php if( $image_url ) { ?> style="background: url(<?php echo $image_url; ?>);"<?php } ?>>
	<div class="container top">
		<div class="row">
			<div class="col-sm-12 text-center text-center-xxs text-center-xs">
				<img class="animated fadeIn" id="skslogo" src="/wp-content/uploads/sks-all.svg" alt="Logo">
			</div>
			<div class="text-center"><a class="btn" href="mailto:kari@karisavolainen.com">Ota yhteyttä</a></div>

			</div>
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
	<!--div class="container-fluid"-->
		<!--div class="row"-->
		<div class="wrapper">
			<div class="masonry">

				<?php

				$imgs = get_field('images');

				if( $imgs ): ?>

				        <?php foreach( $imgs as $image ): ?>
				            <div class="item">
				                <a href="<?php echo $image['url']; ?>" class="fresco"   data-fresco-group="unique_name">
				                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				                <p><?php echo $image['caption']; ?></p>
				            </div>
				        <?php endforeach; ?>

				<?php endif; ?>
			</div>
		</div>
        <!--/div--><!--/.row-->
    <!--/div--><!--/.container-->
</div><!--/#section-me-->
<?php get_footer(); ?>
