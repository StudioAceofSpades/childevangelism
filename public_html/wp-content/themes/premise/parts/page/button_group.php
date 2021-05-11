<?php 
$left = get_sub_field('align_buttons_left');
if($left) {
    $class = "align-buttons-left";
}
?>

<div class="button_group">
    <div class="container">
    <?php if( have_rows('button')): ?>
        <?php if($left): ?>
        <div class="buttons row align-buttons-left">
        <?php else: ?>
        <div class="buttons row justify-content-center">
        <?php endif; ?>
            <?php while( have_rows('button') ) : the_row(); ?>
                <?php $link = get_sub_field('link'); ?>
                <?php $color = get_sub_field('color'); ?>
                
                <?php if(!$left): ?>
                <div class="col-lg col-md-6 col-sm-12">
                <?php endif; ?>
                    <a href="<?php echo $link['url']; ?>" class="button <?php echo $color; ?>"<?php echo $link['target']; ?>><?php echo $link['title']; ?></a>
                <?php if(!$left): ?>
                </div>
                <?php endif; ?>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    </div>
</div>
