<?php
$class = '';
if(get_sub_field('background_color') != 'ffffff') {
    $class = 'background-color';
}
?>


<div class="two-column-block <?php echo $class; ?> <?php the_sub_field('bottom_margin'); ?>" style="background-color: #<?php the_sub_field('background_color'); ?>;">
    <div class="container">
        <div class="row">
            <?php if (have_rows('column')): ?>
                <?php while(have_rows('column') ): the_row(); ?>
                    <div class="col-md-6<?php echo get_sub_field('center_paragraph') ? ' text-center' : '' ?>">
                        <div class="col-wrapper">
                        <?php if(get_sub_field('name', 'options' )): ?>
                                <?php $name = get_sub_field('name'); ?>
                                <h2 class="name"><?php echo $name ?></h2>
                            <?php endif; ?>
                            <?php if(get_sub_field('image')): ?>
                                <?php $img = get_sub_field('image'); ?>
                                <img src="<?php echo $img ?>" alt="<?php the_sub_field('title'); ?>" class="img-fluid">
                            <?php endif; ?>
                            <?php if(get_sub_field('title')): ?>
                                <?php $title = get_sub_field('title'); ?>
                                <h3 class="title"><?php echo $title ?></h3>
                            <?php endif; ?>
                            <?php if(get_sub_field('description')): ?>
                                <?php $desc = get_sub_field('description'); ?>
                                <div class="wysiwyg"><?php echo $desc ?></div>
                            <?php endif; ?>
                            <?php if(get_sub_field('text')): ?>
                                <?php $text = get_sub_field('text'); ?>
                                <div class="wysiwyg"><?php echo $text ?></div>
                            <?php endif; ?>
                            <?php if(get_sub_field('column_button')): ?>
                                <?php $btn = get_sub_field('column_button'); ?>
                                    <div class="buttons">
                                        <a href="<?php echo $btn['url'];?>" class="button blue" target="<?php echo $btn['target'];?>"><?php echo $btn['title']; ?></a>
                                    </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
