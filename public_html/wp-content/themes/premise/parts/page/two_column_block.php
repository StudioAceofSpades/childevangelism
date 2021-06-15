<div class="two-column-block">
    <div class="container">
        <div class="row">
            <?php if (have_rows('column')): ?>
                <?php while(have_rows('column') ): the_row(); ?>
                    <div class="col-md-6 col-wrapper">

                        <?php if($image = get_sub_field('image')): ?>
                            <img src="<?php echo $image; ?>" alt="<?php the_sub_field('title'); ?>" class="img-fluid">
                        <?php endif; ?>

                        <?php if($title = get_sub_field('title')): ?>
                            <h3 class="title"><?php echo $title; ?></h3>
                        <?php endif; ?>

                        <?php if($desc = get_sub_field('description')): ?>
                            <div class="wysiwyg"><?php echo $desc; ?></div>
                        <?php endif; ?>

                        <?php if($btn = get_sub_field('column_button')): ?>
                            <div class="buttons">
                                <a href="<?php echo $btn['url'];?>" class="button blue" target="<?php echo $btn['target'];?>"><?php echo $btn['title']; ?></a>
                            </div>
                        <?php endif; ?>

                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
