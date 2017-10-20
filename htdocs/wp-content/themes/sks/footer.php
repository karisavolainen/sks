<?php // START MAIN FOOTER ?>
<footer id="main-footer" class="section bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <!--  ?php dynamic_sidebar( 'footer_left' ); ? -->
                <?php the_field('sks-footer-left', 'option');?>
			</div>
			<div class="col-sm-4 text-center someicons">
          <?php the_field('sks-footer-center', 'option');?>
                <!--
                <a href="https://www.facebook.com/StudioKariSavolainen/"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/kari.savolainen/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
              -->
			</div>
            <div class="col-sm-4 text-center">
              <?php the_field('sks-footer-right', 'option');?>

                <!-- ?php dynamic_sidebar( 'footer_right' ); ? -->
			</div>
        </div><!--/.row-->
    </div><!--/.container-->
</footer>
<?php // END MAIN FOOTER ?>




    </div><!--/#content-wrapper-->
	<?php wp_footer(); // js scripts are inserted using this function ?>
</body>
</html>
