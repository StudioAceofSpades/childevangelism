<?php
$width = get_sub_field('content_width');
if($width == 'small') {
    $class = 'col-md-6 offset-md-3';
} elseif($width == 'medium') {
    $class = 'col-md-8 offset-md-2';
} else {
    $class = 'col';
}

?>

<div class="wysiwyg">
    <div class="container">
        <div class="row">
            <div class="<?php echo $class; ?>">
                <div class="wysiwyg-content">
                    <?php the_sub_field('content'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
