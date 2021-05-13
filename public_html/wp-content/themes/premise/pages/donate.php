<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<body id="top-of-page">
    <?php include(locate_template('parts/header.php')); ?>

    <div id="donate">
        <?php include(locate_template('parts/hero/donate.php')); ?>
        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-none .d-sm-block d-lg-block left">
                        <?php if(have_rows('left_content')): ?>
                        <div class="half">
                            <?php while(have_rows('left_content')) :
                             the_row();
                             $text = get_sub_field('left_text');
                             $button = get_sub_field('left_button');
                            ?>
                            <p class="text-black"><?php echo $text; ?></p>
                            <a href="<?php echo $button['url']; ?>" class="button orange"><?php echo $button['title']; ?></a>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6 d-none .d-sm-block d-lg-block right">
                        <?php if(have_rows('right_content')): ?>
                        <div class="half">
                            <?php while(have_rows('right_content')) :
                            the_row();
                            $text = get_sub_field('right_text');
                            $button = get_sub_field('right_button');
                            ?>
                            <p class="text-black"><?php echo $text; ?></p>
                            <a href="<?php echo $button['url']; ?>" class="button blue"><?php echo $button['title']; ?></a>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include(locate_template('parts/footer.php')); ?>
</body>

<?php get_footer(); ?>