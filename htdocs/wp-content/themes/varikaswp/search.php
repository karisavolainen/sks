<?php get_header(); ?>




<div id="content" role="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-9">
            <h1><?= _x('Results:', 'label', 'varikaswp'); ?> <?= esc_attr(get_search_query()); ?></h1>
                
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php varikaswp_display_post(true); ?>
                <?php endwhile; ?>	
    
                <?php varikaswp_page_navi(true); ?>	

            <?php else : ?>
                <article id="post-not-found">
                    <p><?php _e('No posts found.', 'varikaswp'); ?></p>
                </article>
            <?php endif; ?>
            </div><!--/.col-sm-8-->
            

            <?php get_sidebar(); ?>

        </div><!--/.row-->
    </div><!--/.container-->
</div><!--/#content-->




<?php get_footer(); ?>












<?php get_header(); ?>

<div id="content" class="row">

	<div id="main" class="<?php simple_boostrap_main_classes(); ?>" role="main">
		
		<div class="block block-title">
			<h1><?php echo _x("Search for:", "label", "varikaswp"); ?> <?php echo esc_attr(get_search_query()); ?></h1>
		</div>

		<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
		
		<?php simple_boostrap_display_post(true); ?>
		
		<?php endwhile; ?>	
		
		<?php simple_boostrap_page_navi(); ?>		
		
		<?php else : ?>
		
		<!-- this area shows up if there are no results -->
		
		<article id="post-not-found" class="block">
		    <p><?php _e("No items found.", "varikaswp"); ?></p>
		</article>
		
		<?php endif; ?>

	</div>
	
	<?php get_sidebar("left"); ?>
	<?php get_sidebar("right"); ?>

</div>

<?php get_footer(); ?>