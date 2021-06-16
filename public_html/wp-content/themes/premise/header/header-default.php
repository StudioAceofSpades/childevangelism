<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); } if (CFCT_DEBUG) { cfct_banner(__FILE__); } ?>
<!DOCTYPE html>

<!--

Authors: Studio Ace of Spades
Website: http://studioaceofspades.com
E-Mail: jon@studioaceofspade.com

-->

<head>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
    <title><?php wp_title( '-', true, 'right' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="<?php bloginfo('name'); ?>"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="<?php bloginfo('template_directory'); ?>/img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="<?php bloginfo('template_directory'); ?>/img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="<?php bloginfo('template_directory'); ?>/img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="<?php bloginfo('template_directory'); ?>/img/favicon/mstile-310x310.png" />

    <?php wp_head(); ?>
</head>

<body id="top-of-page" <?php body_class(); ?>>
    <header class="header cf">
        <div class="container">
            <a href="<?php bloginfo('url'); ?>" class="brand">
                <img src="<?php bloginfo('template_directory'); ?>/img/logo1.png">
                <span class="text">Child Evangelism<br>Ministries</span>
            </a>
            
            <div class="nav-wrapper">
                <?php if(have_rows('navigation','options')): ?>
                    <nav class="main">
                        <?php include(locate_template('parts/navigation.php')); ?>
                    </nav>

                    <div class="mm-trigger">
                        <i class="far fa-bars"></i>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>
