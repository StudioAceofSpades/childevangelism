<div class="hero_block">
    <div class="container">
        <?php if (have_rows('hero_content')): ?>
            <?php while(have_rows('hero_content') ): the_row(); ?>
            <div class="hero-content">
                <?php if(get_sub_field('image','options')): ?>
                    <?php $img = get_sub_field('image'); ?>
                    <img src="<?php echo $img['url'] ?>" alt="<?php the_sub_field('title'); ?>" class="img-fluid">
                <?php endif; ?>
                <?php if(get_sub_field('header','options')): ?>
                    <?php $header = get_sub_field('header'); ?>
                <div class="header">
                <?php echo $header ?>
                <div class="buttons">
                            <a href="<?php echo $btn['url'];?>" class="button" target="<?php echo $btn['target'];?>"><?php echo $btn['title']; ?></a>
                    </div>
                </div>
                    <?php $header_button = get_sub_field('header_button'); ?>
                   
                <?php endif; ?>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
