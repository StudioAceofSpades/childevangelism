<div class="image_block">
    <div class="container">
        <div class="row">
            <?php if (have_rows('images')): ?>
                <?php while(have_rows('images') ): the_row(); ?>
                <div class="row">
                    <div class="col-md-3">
                    <?php if(get_sub_field('image_title')): ?>
                            <?php $title = get_sub_field('image_title'); ?>
                            <h1 class="title"><?php echo $title ?></h1>
                        <?php endif; ?>
                        <?php if(get_sub_field('image')): ?>
                            <?php $img = get_sub_field('image'); ?>
                            <img src="<?php echo $img ?>" alt="<?php the_sub_field('image_title'); ?>" class="img-fluid">
                        <?php endif; ?>
                    </div>
                    <div class="col-md-9">
                        <?php if(get_sub_field('image_caption')): ?>
                            <?php $caption = get_sub_field('image_caption'); ?>
                            <h2 class="caption"><?php echo $caption ?></h2>
                        <?php endif; ?>
                        <?php if(get_sub_field('image_description')): ?>
                            <?php $desc = get_sub_field('image_description'); ?>
                            <div class="vl">
                                <div class="wysiwyg"><?php echo $desc ?></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
