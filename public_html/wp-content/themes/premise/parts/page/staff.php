<div class="staff">
    <div class="container">
        <h2>Staff</h2>
        <?php if(have_rows('staff')): ?>
            <?php while(have_rows('staff')): the_row(); ?>
            <div class="row staff-person">
                <div class="col-md-3">
                    <?php if($name = get_sub_field('name')): ?>
                    <h3><?php echo $name; ?></h3>
                    <?php endif; ?>

                    <?php if($image = get_sub_field('profile_photo')): ?>
                    <img src="<?php echo $image['sizes']['square']; ?>" alt="<?php echo $image['alt']; ?>">
                    <?php endif; ?>
                </div>
                <div class="col-md-9">
                    <?php if($position = get_sub_field('position')): ?>
                    <span class="position"><?php echo $position; ?></span>
                    <?php endif; ?>

                    <?php the_sub_field('description'); ?>
                </div>
            </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
