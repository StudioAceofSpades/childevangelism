<?php
if(get_sub_field('align_buttons_left') == TRUE):
    $left = "left";
endif;
?>

<div class="button_group">
    <div class="container">
        <div class="row">
            <div class="buttons <?php echo $left; ?>">
                <?php
                while( have_rows('button') ) : the_row();
                    $link = get_sub_field('link'); 
                    $color = get_sub_field('color');
                    ?>
                    <a href="<?php echo $link['url']; ?>" class="button <?php echo $color; ?>"<?php echo $link['target']; ?>><?php echo $link['title']; ?></a>
                    <?php
                endwhile;
                ?>
            </div>
        </div>
    </div>
</div>