<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<div id="donate">
    
    <?php include(locate_template('parts/hero.php')); ?>
    
    <section id="main">

        <div class="container">
            <div class="row">
                <div class="col-md-6 left">
                    <?php if(have_rows('left_content')): ?>
                    <div class="half">
                        <?php while(have_rows('left_content')) :
                         the_row();
                         $text = get_sub_field('left_text');
                         $button = get_sub_field('left_button');
                        ?>
                        <p class="text-black"><?php echo $text; ?></p>
                        <div class="buttons">
                            <a href="<?php echo $button['url']; ?>" class="button orange"><?php echo $button['title']; ?></a>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-6 right">
                    <?php if(have_rows('right_content')): ?>
                    <div class="half">
                        <?php while(have_rows('right_content')) :
                        the_row();
                        $text = get_sub_field('right_text');
                        $button = get_sub_field('right_button');
                        ?>
                        <p class="text-black"><?php echo $text; ?></p>
                        <div class="buttons">
                            <a href="<?php echo $button['url']; ?>" class="button blue"><?php echo $button['title']; ?></a>
                        </div>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </section>

</div>

<?php get_footer(); ?>
