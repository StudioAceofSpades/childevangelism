<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<?php include(locate_template('parts/hero.php')); ?>
<div id="mailboxclub">
    <section class="mailboxclub">
        <?php 
        if(have_rows('mailbox_content')) :
            $counter = 0;
            while(have_rows('mailbox_content')) : 
                the_row(); 
                $counter++; 
                $layout = get_row_layout();
                ?>
                <div id="section-<?php echo $counter; ?>">
                    <?php include(locate_template('parts/page/'.$layout.'.php')); ?>
                </div>
                <?php
            endwhile;
        endif ?>
    </section>
</div>

<?php get_footer(); ?>
