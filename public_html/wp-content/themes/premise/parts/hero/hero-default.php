<?php 

$class = '';

if(get_field('hero_type')) {
    $class = 'expanded';
} else {
    $class = 'simple';
}

if($bg = get_field('hero_background_image')): ?>
<style>
    .hero-default {
        background-image: url('<?php echo $bg['url']; ?>');
    }
</style>
<?php endif; ?>
<div class="hero-wrapper hero-default <?php echo $class; ?>">


    <?php if($class == 'expanded'): ?>
        
        <div class="hero-card">
            <?php if($header = get_field('hero_header')): ?>
            <h1><?php echo $header; ?></h1>
            <?php endif; ?>

            <?php the_field('hero_description'); ?>
        </div>

    <?php else: ?>

        <?php if($header = get_field('hero_header')): ?>
        <h1><?php echo $header; ?></h1>
        <?php endif; ?>

    <?php endif; ?>

</div>
