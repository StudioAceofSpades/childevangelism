<div class="form">
<div class="container">
            <div class="form-content">
            <?php cfct_loop(); ?>
                    <?php if($form = get_field('form')): ?>
                        <?php echo do_shortcode($form); ?>
                    <?php endif; ?>            
            </div>
    </div>
</div>
