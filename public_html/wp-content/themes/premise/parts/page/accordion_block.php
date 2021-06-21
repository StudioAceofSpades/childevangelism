<?php if( have_rows('accordion') ): ?>
    <div class="accordion-block">
        <div class="container">
            <div class="row">
                <div class="accordion">
                    <?php
                    $i = 0;
                    while( have_rows('accordion') ) : the_row();
                        $i == 0 ? $first = " active" : $first = "";
                        ?>
                        <div class="accordion-item<?php echo $first; ?>">
                            <h2>
                                <button class="accordion-button">
                                    <?php the_sub_field('title'); ?>
                                </button>
                            </h2>
                            <div class="collapse">
                                <?php the_sub_field('content'); ?>
                            </div>
                        </div>
                        <?php
                        $i++;
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
