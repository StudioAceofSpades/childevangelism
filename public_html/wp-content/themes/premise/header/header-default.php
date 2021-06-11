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
