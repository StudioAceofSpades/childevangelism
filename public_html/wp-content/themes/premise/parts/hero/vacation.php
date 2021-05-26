<?php
$classes = '';
if(get_field('small_type_in_hero')) {
    $classes .= 'small-type';
}
?>
<div class="hero-wrapper hero-home ">
    <div class = "background d-flex align-items-center">
        <div class = "bcard">
            <?php if($header = get_field('header')): ?>
            <div class="row">
                <div class = "col text-center">
                    <h2 class="head"><?php echo $header; ?></h2>
                </div>
            </div>
            <?php endif; ?>
            <?php if($text = get_field('text')): ?>
            <div class="row">
                <div class = "col text-center">
                    <p class="desc"><?php echo $text; ?></p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>