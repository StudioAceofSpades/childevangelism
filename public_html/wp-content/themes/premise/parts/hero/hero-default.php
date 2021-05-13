<div
    <?php if($type = get_field('hero_type') == 'lg'): ?>
        class="hero lg <?php if(is_front_page()): ?>animated<?php endif; ?>" 
        <?php if($bg = get_field('background_image')['sizes']['hero-large']): ?>
            style="background-image: url('<?php echo $bg; ?>');"
        <?php endif; ?>
    <?php else: ?>
        class="hero sm" 
        <?php if($bg = get_field('background_image')['sizes']['hero-small']): ?>
            style="background-image: url('<?php echo $bg; ?>');"
        <?php endif; ?>
    <?php endif; ?>
    >
    <div class="swoop h-100">
        
        <?php if(is_front_page()): ?>
        <div class="bgs">
            <img class="bottom" src="<?php bloginfo('template_directory'); ?>/img/bottom.png" alt="">
            <img class="middle" src="<?php bloginfo('template_directory'); ?>/img/middle.png" alt="">
            <img class="top" src="<?php bloginfo('template_directory'); ?>/img/top.png" alt="">
        </div>
        <?php endif; ?>

        <div class="hero-wrapper hero-home">
            <div class = "backer d-flex align-items-center">
                <div class = "bcard">
                    <div class="row">
                    
                        <?php if($header = get_field('hero_header')): ?>
                        <div class = "col text-center">
                            <div class="row">
                                <h2 class="head"><?php echo $header; ?></h1>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <?php if($type == 'lg'): ?>
                        <div class = "col text-center">
                            <div class="row">
                                <p class="desc"><?php the_field('hero_content'); ?></p>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <?php if(have_rows('hero_buttons')): ?>
                            <div class="row">
                                <div class="col text-center">
                                    <div class="buttons">
                                        <?php 
                                        while(have_rows('hero_buttons')) : 
                                            the_row(); 
                                            $link   = get_sub_field('link');
                                            $color  = get_sub_field('color');
                                            ?>
                                            
                                            <?php if($link): ?>
                                            <a 
                                                href="<?php echo $link['url']; ?>" 
                                                class="button <?php echo $color; ?>" 
                                                target="<?php echo $link['target']; ?>">
                                                    <span><?php echo $link['title']; ?></span>
                                            </a>
                                            <?php endif; ?>

                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
