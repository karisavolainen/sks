<?php get_header(); ?>




<div id="content" role="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-9">
            <?php if (have_posts()) : ?>
            
                <?php while (have_posts()) : the_post(); ?>
                    <?php varikaswp_display_post(true); ?>
                <?php endwhile; ?>	
    
                <?php varikaswp_page_navi(true); ?>	

            <?php else : ?>
                <article id="post-not-found">
                    <p><?php _e("No posts found.", "varikaswp"); ?></p>
                </article>
            <?php endif; ?>
            </div><!--/.col-sm-8-->
            

            <?php get_sidebar(); ?>

        </div><!--/.row-->
    </div><!--/.container-->
</div><!--/#content-->




<?php get_footer(); ?>