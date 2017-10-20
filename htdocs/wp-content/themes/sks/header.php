<!doctype html>

<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= get_stylesheet_directory_uri(); ?>/img/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= get_stylesheet_directory_uri(); ?>/img/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= get_stylesheet_directory_uri(); ?>/img/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= get_stylesheet_directory_uri(); ?>/img/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= get_stylesheet_directory_uri(); ?>/img/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= get_stylesheet_directory_uri(); ?>/img/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= get_stylesheet_directory_uri(); ?>/img/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= get_stylesheet_directory_uri(); ?>/img/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri(); ?>/img/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?= get_stylesheet_directory_uri(); ?>/img/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri(); ?>/img/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= get_stylesheet_directory_uri(); ?>/img/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri(); ?>/img/ico/favicon-16x16.png">
    <link rel="manifest" href="<?= get_stylesheet_directory_uri(); ?>/img/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#2f9cae">
    <meta name="msapplication-TileImage" content="<?= get_stylesheet_directory_uri(); ?>/img/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#2f9cae">
		<meta property="fb:app_id" content="966242223397117" />
		<meta name="google-site-verification" content="_2oUM-lLO322rwbtqV3JCgI3NboCIjpXqD3QBYcG8po" />


	<?php wp_head(); ?>

	<script src="https://use.fontawesome.com/318bcf3d03.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDj5l_iUf6Evw8rokm26Ic5S3dxA_WarhA"></script>

</head>

<body <?php body_class(); ?>>

	<?php get_template_part( 'modals/modal', 'search' ); ?>

	<div id="content-wrapper">




<?php // START MAIN HEADER ?>
<header id="main-header">
    <nav id="main-nav" class="navbar navbar-default">

        <div class="container">
            <div class="navbar-header">
                <?php if ( has_nav_menu("main_nav") ): ?>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-responsive-collapse" data-target-2="#main-nav">
                    <span class="sr-only"><?php _e("Navigation", "sks"); ?></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php endif ?>
                <!--a class="navbar-brand" title="<?php bloginfo('description'); ?>" href="<?= esc_url(home_url('/')); ?>">
					<img class="svg" src="<?= get_stylesheet_directory_uri(); ?>/img/logo-svg.svg" alt="<?php bloginfo('name'); ?>">
                </a -->
            </div><!--/.navbar-header-->

            <?php if (has_nav_menu('main_nav')): ?>
            <div id="navbar-responsive-collapse" class="collapse navbar-collapse">
				<!-- ?php display_search_btn(false); ? -->
                <?php varikaswp_display_main_menu(); ?>
            </div><!--/.collapse-->
            <?php endif ?>

        </div><!--/.container-->
    </nav><!--/#main-nav-->
</header>
<?php // END MAIN HEADER ?>
