<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<div id="home">
<?php include(locate_template('parts/header.php')); ?>
	<div class="content">
		<!-- <?php cfct_loop(); ?> -->
		<!-- <h1>hi i got it</h1> -->
    </div>
</div>

<?php get_footer(); ?>
