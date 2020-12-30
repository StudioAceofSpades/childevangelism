<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<div id="home">
    <section class="bg-white">
        <div class = "container">
            <div class="row">
                <div class = "col text-center">
                    <h2 class="head">Welcome to Child Evangelism Ministries</h2>
                </div>
            </div>
            <div class="row">
                <div class = "col text-center">
                    <p class="sub">We are so glad you’re here! A little bit about us...</p>
                </div>
            </div>
            <div class="row">
                <div class = "col text-center">
                    <p class="desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm text-center">
                    <div class="buttons">
                        <a href="#" class="button Blue">DECLARATION OF FAITH</a>
                        
                        <a href="#" class="button Yellow">LATEST NEWSLETTER</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

    <?php include(locate_template('parts/footer.php')); ?>
</body>

<?php get_footer(); ?>
