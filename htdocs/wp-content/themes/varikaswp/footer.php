
<?php // START MAIN FOOTER ?>
<footer id="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <?php dynamic_sidebar('footer1'); ?>
            </div><!--/.col-sm-6-->

            <div class="col-sm-6">
                <?php dynamic_sidebar('footer2'); ?>
            </div><!--/.col-sm-6-->
        </div><!--/.row-->
        <div class="row">
            <div id="madeby" class="col-sm-12">
                <p><?php _e('Madeby:', 'varikaswp'); ?> <a href="http://varikas.fi">Mainostoimisto Värikäs</a></p>
            </div>
        </div>
    </div><!--/.container-->
</footer>
<?php // END MAIN FOOTER ?>




    </div><!--/#content-wrapper-->
	<?php wp_footer(); // js scripts are inserted using this function ?>
</body>
</html>