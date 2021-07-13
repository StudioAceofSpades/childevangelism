<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<div id="home">
    <?php include(locate_template('parts/hero.php')); ?>
    <section id="main">

        <?php if($bg = get_field('featured_background_image')): ?>
            <div class="featured-content" style="background-image: url('<?php echo $bg['url']; ?>');">
                <div class="container">
                    <div class="row">
                            <div class="col card">
                                <?php if($title = get_field('title')): ?>
                                    <h3><?php echo $title; ?></h3>
                                <?php endif; ?>

                                <?php if($subtitle = get_field('subtitle')): ?>
                                    <h4><?php echo $subtitle; ?></h4>
                                <?php endif; ?>

                                <?php if($description = get_field('featured_description')) : ?>
                                    <div class="description">
                                        <?php echo $description; ?>
                                    </div>
                                <?php endif; ?>
                                
                                <?php if($link = get_field('link')): ?>
                                    <div class="buttons">
                                        <a href="<?php echo $link['url']; ?>" class="button blue" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if(have_rows('features')): ?>
            <div class="features container">
                <div class="row">
                    <?php while(have_rows('features')) : the_row(); ?>
                        <div class="col-md-4 feature">
                            <?php if($image = get_sub_field('image')): ?>
                                <div class="image">
                                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                                    <?php if($title = get_sub_field('title')): ?>
                                        <h3><?php echo $title; ?></h3>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                            <?php if($description = get_sub_field('description')): ?>
                                <div class="description">
                                    <?php echo $description; ?>
                                </div>
                            <?php endif; ?>
                            <?php if($link = get_sub_field('button')): ?>
                                <div class="buttons">
                                    <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="button <?php the_sub_field('button_color'); ?>"><?php echo $link['title']; ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="donate container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <?php if($image = get_field('donate_image')): ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
                    <?php endif; ?>
                </div>
                <div class="col-md-6">
                    <?php if($title = get_field('donate_title')) : ?>
                        <h3><?php echo $title; ?></h3>
                    <?php endif; ?>
                    <?php if($subtitle = get_field('donate_subtitle')): ?>
                        <h4><?php echo $subtitle; ?></h4>
                    <?php endif; ?>
                    <?php if($description = get_field('donate_description')): ?>
                        <div class="description">
                            <?php echo $description; ?>
                        </div>
                    <?php endif; ?>
                    <?php if($link = get_field('donate_link')): ?>
                        <div class="buttons">
                            <a href="<?php echo $link['url']; ?>" class="button blue" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </section>
</div>

<?php get_footer(); ?>
