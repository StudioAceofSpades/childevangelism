<div class="wysiwyg">
<div class="container">
    <div class="row">
        <?php if(get_sub_field('width') == 'partial'): ?>
        <div class="col-md-8 offset-md-2">
        <?php else: ?>
        <div class="col">
        <?php endif; ?>
            <div class="wysiwyg-content">
                <?php the_sub_field('content');  ?>
                </div>
            </div>
        </div>
    </div>
</div>
