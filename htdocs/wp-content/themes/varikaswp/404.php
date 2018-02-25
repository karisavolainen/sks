<?php get_header(); ?>




<div id="content" role="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-md-9 text-center">
                <h1>404 - <?php _e('Page not found', 'varikaswp'); ?></h1>
                
                <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'varikaswp'); ?></p>
                    <h6><?php _e( 'You can return', 'varikaswp' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'varikaswp' ); ?>"><?php _e( '&larr; Home', 'varikaswp' ); ?></a> <?php _e( 'or search for the page you were looking for', 'varikaswp' ); ?></h6>
                
                <div class="col-md-6 col-md-offset-3">
                    <?php get_search_form(); ?>
                </div>
            </div><!--/.col-sm-8-->
            
            
            <?php get_sidebar(); ?>

        </div><!--/.row-->
    </div><!--/.container-->
</div><!--/#content-->




<?php get_footer(); ?>
