<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<body id="top-of-page">
    <?php include(locate_template('parts/header.php')); ?>

    <div id="ministries">
        <?php include(locate_template('parts/ministries.php')); ?>
        <section class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 d-none .d-sm-block d-lg-block left">
                    <?php if(have_rows('left_content')): ?>
                        <div class="half">
                            <?php while(have_rows('left_content')) :
                                the_row();
                                $title = get_sub_field('left_title');
                                $desc = get_sub_field('left_desc');
                                $button = get_sub_field('button');
                                $phone = get_sub_field('phone');
                            ?>
                            <p class="text-black"><?php echo $title; ?></p>
                            <p class="desc"><?php echo $desc; ?></p>
                            <?php if(have_rows('button')): ?>
                                <div class="button">
                                    <a href="<?php echo $button['url']; ?>" class="button blue"><?php echo $button['title']; ?></a>
                                </div>
                            <?php endif; ?>
                            <div class="phone">
                                <p><?php echo $phone; ?></p>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    </div>
                    <div class="col-lg-6 d-none .d-sm-block d-lg-block right">
                    <?php if(have_rows('right_content')): ?>
                        <div class="half">
                            <?php while(have_rows('right_content')) :
                            the_row();
                            $title = get_sub_field('right_title');
                            $desc = get_sub_field('right_desc');
                            $button = get_sub_field('button');
                            ?>
                            <p class="text-black"><?php echo $title; ?></p>
                            <p class="desc"><?php echo $desc; ?></p>
                            <?php if(have_rows('button')): ?>
                                <div class="button">
                                    <a href="<?php echo $button['url']; ?>" class="button blue"><?php echo $button['title']; ?></a>
                                </div>
                            <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="center">
                    <?php if($wysiwyg = get_field('wysiwyg')): ?>
                        <div class="wysiwyg">
                            <p><?php echo $wysiwyg; ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if($button = get_field('button')): ?>
                        <div class="buttonn">
                            <a href="<?php echo $button['url']; ?>" class="button blue"><?php echo $button['title']; ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </div>
    <?php include(locate_template('parts/footer.php')); ?>
</body>

<?php get_footer(); ?>