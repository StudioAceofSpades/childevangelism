<div class="two-column-block">
    <div class="container">
        <div class="row">
            <?php if (have_rows('column')): ?>
                <?php while(have_rows('column') ): the_row(); ?>
                    <div class="col-md-4">
                            <?php if(get_sub_field('title','options')): ?>
                                <?php $title = get_sub_field('title'); ?>
                                <h2 class="title"><?php echo $title ?></h2>
                            <?php endif; ?>
                            <div class="col-wrapper">
                            <?php if(get_sub_field('image','options')): ?>
                                <?php $img = get_sub_field('image'); ?>
                                <img src="<?php echo $img['url'] ?>" alt="<?php the_sub_field('title'); ?>" class="img-fluid">
                            <?php endif; ?>
                            <?php if(get_sub_field('description','options')): ?>
                                <?php $desc = get_sub_field('description'); ?>
                                <div class="wysiwyg"><?php echo $desc ?></div>
                            <?php endif; ?>
                            <?php if(get_sub_field('column_button','options')): ?>
                                <?php $btn = get_sub_field('column_button'); ?>
                                    <div class="buttons">
                                        <a href="<?php echo $btn['url'];?>" class="button" target="<?php echo $btn['target'];?>"><?php echo $btn['title']; ?></a>
                                    </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>