<div class="video_block">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="video">
                    <?php if(get_sub_field('video_title')): ?>
                        <?php $title = get_sub_field('video_title'); ?>
                        <h3 class="text-center"><?php echo $title; ?></h3>
                    <?php endif; ?>
                    <?php if(get_sub_field('video_link')): ?>
                        <?php $vid = get_sub_field('video_link');  ?>
                        <div class="video-container">
                            <?php echo $vid; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
