<?php 
if($bg = get_field('background_image')): ?>
<style>
    .hero-home {
        background-image: url('<?php echo $bg['url']; ?>');
    }
</style>
<?php endif; ?>

<div class="hero-wrapper hero-home">

    <div class="hero-card">

        <?php if($header = get_field('header')): ?>
        <h1><?php echo $header; ?></h1>
        <?php endif; ?>

        <?php if($subheader = get_field('subheader')): ?>
        <h2><?php echo $subheader; ?></h2>
        <?php endif; ?>

        <?php the_field('description'); ?>

        <?php if(have_rows('buttons')): ?>
        <div class="buttons">
            <?php 
            while(have_rows('buttons')): 
                the_row();
                $link   = get_sub_field('link');
                $color  = get_sub_field('color');
                ?>

                <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>" class="<?php echo $color; ?> button"><?php echo $link['title']; ?></a>
            
            <?php endwhile; ?>
        </div>
        <?php endif; ?>

    </div>
</div>
