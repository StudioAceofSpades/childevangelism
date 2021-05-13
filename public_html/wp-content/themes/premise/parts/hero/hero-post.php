<?php if(get_field('use_page_builder')): ?>

<?php if($bg = get_field('background_image')): ?>
<div class="hero lg" style="background-image: url('<?php echo $bg['sizes']['hero-large']; ?>');">
<?php else: $bg = get_field('blog_post_hero_placeholder_image','options'); ?>
<div class="hero lg" style="background-image: url('<?php echo $bg['sizes']['hero-large']; ?>');">
<?php endif; ?>
    <div class="swoop h-100">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col d-flex flex-column justify-content-center">
                    <div class="content">
                        <h3><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php the_time('F j, Y'); ?></h3>
                        <h1><?php the_title(); ?></h1>
                        <div class="categories">
                            <div class="buttons">
                            <?php 
                            $categories = get_the_category();
                            foreach($categories as $category):
                                if($category->parent != 0): ?>
                                <a 
                                    href="<?php echo get_term_link($category->slug,'category'); ?>" 
                                    class="button"
                                    style="background-color: <?php the_field('color', $category); ?>">
                                    <span><?php echo $category->name; ?></span>
                                </a>
                                <?php endif;
                            endforeach;
                            ?>
                            </div>
                        </div>
                        <?php the_field('short_description'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php else: ?>
<div class="hero sm old">
    <div class="overlay"></div>
    <div class="swoop h-100">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col d-flex flex-column justify-content-center">
                    <div class="content">
                        <h3><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | <?php the_time('F j, Y'); ?></h3>
                        <h1><?php the_title(); ?></h1>
                        <div class="categories">
                            <div class="buttons">
                            <?php 
                            $categories = get_the_category();
                            foreach($categories as $category):
                                if($category->parent != 0): ?>
                                <a 
                                    href="<?php echo get_term_link($category->slug,'category'); ?>" 
                                    class="button"
                                    style="background-color: <?php the_field('color', $category); ?>">
                                    <span><?php echo $category->name; ?></span>
                                </a>
                                <?php endif;
                            endforeach;
                            ?>
                            </div>
                        </div>
                        <?php the_field('short_description'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
