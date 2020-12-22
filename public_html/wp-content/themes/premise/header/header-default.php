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
    <?php wp_head(); ?>
</head>

<body id="top-of-page" <?php body_class(); ?>>

    <header class="header cf">
        <a href="<?php bloginfo('url'); ?>" class="brand">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png">
            <span>Child Evangelism</span>
        </a>
        
        <div class="nav">
            <?php if(have_rows('navigation','options')): ?>
                <nav class="desktop header">
                    <?php include(locate_template('parts/navigation.php')); ?>
                </nav>

                <div class="mm-trigger">
                    <i class="far fa-bars"></i>
                </div>
                
                <nav class="mobile header">
                    <?php include(locate_template('parts/navigation.php')); ?>
                </nav>
            <?php endif; ?>
        </div>
    </header>
