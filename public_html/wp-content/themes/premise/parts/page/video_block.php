<div class="video_block">
    <div class="container">
        <div class="row">
            <?php if (have_rows('video')): ?>
                <?php while(have_rows('video') ): the_row(); ?>
                <div class="col-md-8 offset-md-2">
                    <div class="video">
                        <?php if(get_sub_field('video_title')): ?>
                            <?php $title = get_sub_field('video_title'); ?>
                            <h2 class="title"><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <?php if(get_sub_field('video_link')): ?>
                            <?php $vid = get_sub_field('video_link');  ?>
                            <div class="video-container">
                                <?php echo $vid; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
