<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<div id="about">
    
    <?php include(locate_template('parts/hero.php')); ?>

    <section id="main">
        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <?php if($header = get_field('intro_header')): ?>
                            <h2><?php echo $header; ?></h2>
                        <?php endif; ?>
                        <?php if($subheader = get_field('intro_subheader')): ?>
                            <h3><?php echo $subheader; ?></h3>
                        <?php endif; ?>
                        <?php the_field('content'); ?>
                        <?php if(have_rows('intro_buttons')): ?>
                            <div class="buttons">
                                <?php 
                                while(have_rows('intro_buttons')) :
                                    the_row(); 
                                    $link   = get_sub_field('link');
                                    $color  = get_sub_field('color');
                                    ?>
                                    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="<?php echo $color; ?> button"><?php echo $link['title']; ?></a>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="container">
                <h2>Photo Gallery</h2>
            </div>
            <?php if($images = get_field('photos')): ?>
                <div class="slider">
                    <?php foreach($images as $image): ?>
                        <div class="slide">
                            <img src="<?php echo $image['sizes']['small_gallery']; ?>" alt="<?php echo $image['alt']; ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <div class="staff">
            <div class="container">
                <h2>Staff</h2>
                <?php if(have_rows('staff')): ?>
                    <?php while(have_rows('staff')): the_row(); ?>
                        <div class="row staff-person">
                            <div class="col-md-3">
                                <?php if($name = get_sub_field('name')): ?>
                                    <h3><?php echo $name; ?></h3>
                                <?php endif; ?>
                                <?php if($image = get_sub_field('profile_photo')): ?>
                                    <img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>">
                                <?php endif; ?>
                            </div>
                            <div class="col-md-9">
                                <?php if($position = get_sub_field('position')): ?>
                                    <span class="position"><?php echo $position; ?></span>
                                <?php endif; ?>
                                <?php the_sub_field('about'); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="declaration">
            <div class="bg-dark-blue">
                <div class="container">
                    <h2>Declaration of Faith</h2>
                    <?php if(have_rows('declarations')): ?>
                        <div class="row">
                            <div class="col-md-6">
                                <?php
                                $counter = 0;
                                while(have_rows('declarations')):
                                    $counter++;
                                    the_row();
                                    if($counter % 2 == 0):
                                        ?>
                                        <p><?php the_sub_field('declaration'); ?></p>
                                        <?php
                                    endif;
                                endwhile;
                                ?>
                            </div>
                            <div class="col-md-6">
                                <?php 
                                $counter = 0;
                                while(have_rows('declarations')):
                                    $counter++;
                                    the_row();
                                    if($counter % 2 != 0):
                                        ?>
                                        <p><?php the_sub_field('declaration'); ?></p>
                                        <?php
                                    endif;
                                endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php if($text = get_field('mission_statement')): ?>
                <div class="bg-dark-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <p><?php echo $text; ?></p>
                                <?php if(have_rows('declaration_buttons')): ?>
                                    <div class="buttons">
                                        <?php 
                                        while(have_rows('declaration_buttons')) : 
                                            the_row(); 
                                            $link   = get_sub_field('link');
                                            $color  = get_sub_field('color');
                                            ?>
                                            <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="<?php echo $color; ?> button"><?php echo $link['title']; ?></a>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>

    </section>

</div>
<?php get_footer(); ?>
