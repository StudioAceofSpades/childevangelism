<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<div id="home">
    <?php include(locate_template('parts/hero.php')); ?>
    
	<div class="container">
        <h1> HOME CONTENT PAGE </h1>
    </div>
</div>

    <?php include(locate_template('parts/footer.php')); ?>
</body>

<?php get_footer(); ?>
