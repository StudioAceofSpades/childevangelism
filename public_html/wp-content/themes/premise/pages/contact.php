<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<?php include(locate_template('parts/hero.php')); ?>

<div id="contact" class="bg-dark-blue">
    <div class="container">
        <div class="contact-container bg-white">
            <div class="row">
                <div class="col text-center">
                    <h3>Get in Touch</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <p class="social">
                        <?php if (get_field('facebook_link', 'options')): ?>
                            <a href="<?php the_field('facebook_link', 'options'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            <?php
                        endif;
                        if (get_field('youtube_link', 'options')):
                            ?>
                            <a href="<?php the_field('youtube_link', 'options'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                        <?php endif; ?>
                    </p>
                    <?php if (get_field('email')): ?>
                        <p>
                            <label>Email</label><br>
                            <a href="#" target="_blank"><?php the_field('email'); ?></a>
                        </p>
                        <?php
                    endif;
                    if ($phone = get_field('phone')):
                        $phone_num = str_replace(array(' ','(',')','-','.','+'),'', $phone);
                        ?>
                        <p>
                            <label>Phone</label><br>
                            <a href="tel:<?php echo $phone_num; ?>" target="_blank"><?php echo $phone; ?></a>
                        </p>
                        <?php
                    endif;
                    if (get_field('address')):
                        ?>
                        <p>
                            <label>Address</label><br>
                            <?php the_field('address'); ?>
                        </p>
                    <?php endif; ?>
                </div>
                <div class="col-md">
                    <?php cfct_loop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>
