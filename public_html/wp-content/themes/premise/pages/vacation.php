<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<body id="top-of-page">
    <?php include(locate_template('parts/header.php')); ?>

    <div id="vacation">
    <?php include(locate_template('parts/hero/vacation.php')); ?>
        <section class="vacation">
            <?php 
            if(have_rows('vacation_content')) :
                $counter = 0;
                while(have_rows('vacation_content')) : 
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
    <?php include(locate_template('parts/footer.php')); ?>
</body>

<?php get_footer(); ?>
