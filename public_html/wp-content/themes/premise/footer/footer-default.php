<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); } if (CFCT_DEBUG) { cfct_banner(__FILE__); } ?>

<footer class="footer d-flex flex-column align-items-center">
    <div class="container">
        <div class = "row">
            <div class = "col-sm">
                <h3>About Child Evangelism Ministries</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                <p class = "copyright">
                    <a href="#" class="fb">
                        <img src="<?php bloginfo('template_directory'); ?>/img/fb.png" class="img-fluid">
                    </a>
                    <a href="#" class="subtract">
                        <img src="<?php bloginfo('template_directory'); ?>/img/Subtract.png" class="img-fluid">
                    </a>
                    &copy; <?php echo date('Y'); ?> Child Evangelism Ministries
                </p>

            </div>
            <div class = "col-sm">
                <div class = "nav">
                    <?php if(have_rows('navigation','options')): ?>
                        <nav class="desktop footer">
                            <?php include(locate_template('parts/navigation.php')); ?>
                        </nav>

                        <div class="mm-trigger">
                            <i class="far fa-bars"></i>
                        </div>
                        
                        <nav class="mobile footer">
                            <?php include(locate_template('parts/navigation.php')); ?>
                        </nav>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

<?php wp_footer(); ?>
</html>
