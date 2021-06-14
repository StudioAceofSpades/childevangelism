<?php if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); } if (CFCT_DEBUG) { cfct_banner(__FILE__); } ?>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 text-center text-md-left">
                <?php if (get_field('header', 'options')): ?>
                    <h3><?php the_field('header', 'options'); ?></h3>
                <?php endif; ?>
                <?php if (get_field('content', 'options')): ?>
                    <?php the_field('content', 'options'); ?>
                <?php endif; ?>
                <div class="d-inline-block social">
                    <?php if (get_field('facebook_link', 'options')): ?>
                        <a href="<?php the_field('facebook_link', 'options'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <?php endif; ?>
                    <?php if (get_field('youtube_link', 'options')): ?>
                        <a href="<?php the_field('youtube_link', 'options'); ?>" target="_blank"><i class="fab fa-youtube"></i></a>
                    <?php endif; ?>
                </div>
                <p class="copyright d-inline-block">&copy; <?php echo date('Y'); ?> Child Evangelism Ministries</p>
            </div>
            <div class="col-lg-3 col-md-4">
                <nav>
                <ul>
                    <li><a href="<?php bloginfo('url'); ?>">Home</a></li>
                </ul>
                    <?php if(have_rows('navigation','options')): ?>
                        <?php include(locate_template('parts/navigation.php')); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</footer>

</body>

<?php wp_footer(); ?>
</html>