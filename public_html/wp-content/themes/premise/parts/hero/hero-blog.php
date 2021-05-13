<?php

$object = get_queried_object();
if ($_GET['s']) {
    $search_term = $_GET['s'];
}
?>
<div
    class="hero sm" 
    style="background-image: url('<?php echo get_field('blog_feed_image','options')['sizes']['hero-large']; ?>');">
    <div class="swoop h-100">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col d-flex flex-column justify-content-center">
                    <div class="content">
                        <?php if(is_category()): ?>
                            <?php if($object->parent != 0): ?>
                                <h3><?php echo get_cat_name($object->parent); ?></h3>
                            <?php else: ?>
                                <h3>Category</h3>
                            <?php endif; ?>
                            <h1><?php echo $object->name; ?></h1>
                        <?php elseif(is_tag()): ?>
                            <h3>Tag</h3>
                            <h1><?php echo ucwords($object->name); ?></h1>
                        <?php elseif($search_term): ?>
                            <h3>Search results for: <?php echo $search_term; ?></h3>
                            <?php if($header = get_field('blog_title','options')): ?>
                                <h1><?php echo $header; ?></h1>
                            <?php endif; ?>
                        <?php else: ?>
                            <?php if($slogan = get_field('blog_slogan','options')): ?>
                                <h3><?php echo $slogan; ?></h3>
                            <?php endif; ?>
                            <?php if($header = get_field('blog_title','options')): ?>
                                <h1><?php echo $header; ?></h1>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
