<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title(); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style_compressor.php">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>

        <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2.min.js"></script>

        <!--WORDPRESS CODE-->
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_head(); ?>
        <!--//////////-->
    </head>
    <body <?php body_class( $class ); ?>>
        <div id="nav-top">
            <a id="btn_nav-main">Menú</a>
            <?php
                $args = array(
                    'depth'       => 3,
                    'sort_column' => 'menu_order, post_title',
                    'menu_class'  => 'nav-main',
                    'echo'        => true,
                    //'show_home'   => 'Inicio',
                );
                wp_page_menu( $args );
            ?>
            <a id="btn_nav-social"></a>
            <nav id="nav-social">
                <span>
                    <a id="icon-cl" target="_blank" href="<?php echo get_theme_mod('calendario');?>">Calendario</a>
                    <a id="icon-nl" target="_blank" href="<?php echo get_theme_mod('boletines');?>">Boletines</a>
                </span>
                <a id="icon-fb" target="_blank" href="<?php echo get_theme_mod('facebook','https://www.facebook.com/kadampa');?>">Facebook</a>
                <a id="icon-yt" target="_blank" href="<?php echo get_theme_mod('youtube','https://www.youtube.com/channel/UCRvpT2dbLasFvBNOUSdhOAg');?>">Youtube</a>
                <a id="icon-tw" target="_blank" href="<?php echo get_theme_mod('twitter','https://twitter.com/kadampa');?>">Twitter</a>
                <a id="icon-fk" target="_blank" href="<?php echo get_theme_mod('flickr','https://www.flickr.com/groups/kadampa/');?>">Flickr</a>
            </nav>
            <span id="bg-socialresponsive"></span>
        </div>