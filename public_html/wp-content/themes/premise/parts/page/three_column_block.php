<div class="three-column-block" style="background-color: #<?php the_sub_field('background_color'); ?>;">
    <div class="container">
        <div class="row">
            <?php
            if (have_rows('column')):
                while(have_rows('column') ): the_row();
                    ?>
                    <div class="col-md-4">
                            <div class="col-wrapper">
                            <?php
                            if(get_sub_field('image')):
                                $img = get_sub_field('image');
                                ?>
                                <div class="image">
                                    <?php if(get_sub_field('title')): ?>
                                        <?php $title = get_sub_field('title'); ?>
                                        <h2 class="title"><?php echo $title ?></h2>
                                    <?php endif; ?>
                                    <img src="<?php echo $img['url'] ?>" alt="<?php echo $title; ?>" class="img-fluid">
                                </div>
                                <?php
                            endif;
                            if(get_sub_field('description')): ?>
                                <?php $desc = get_sub_field('description'); ?>
                                <div class="wysiwyg"><?php echo $desc ?></div>
                                <?php
                            endif;
                            if(get_sub_field('column_button')):
                                $btn = get_sub_field('column_button');
                                ?>
                                <div class="buttons">
                                    <a href="<?php echo $btn['url'];?>" class="button orange" target="<?php echo $btn['target'];?>"><?php echo $btn['title']; ?></a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>