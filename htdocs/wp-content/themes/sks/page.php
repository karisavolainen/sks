<?php 

if( get_field('redirect_url') ){
	$redirectURL = get_field('redirect_url');
	wp_redirect(clean_url($redirectURL), 301);
	exit;
}

get_header(); 
get_sidebar('top');
get_sidebar('breadcrum'); 
?>



<div id="section-content" role="main" class="section">
    <div class="container">

		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<div class="row">
				<div class="col-sm-12">
					<?php the_content() ?>
				</div><!--/.col-sm-12-->
			</div><!--/.row-->
			<?php endwhile; ?>	
		<?php endif; ?>

		<?php showDynamicContent() ?>
        
    </div><!--/.container-->
</div><!--/#content-->




<?php get_footer(); ?>