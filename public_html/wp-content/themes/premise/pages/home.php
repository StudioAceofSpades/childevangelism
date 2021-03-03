<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<body id="top-of-page">
<?php include(locate_template('parts/header.php')); ?>

    <div id="home">
        <section class="bg-white">
            <div class = "container">
                <div class = "backer">
                    <div class = "incontainer">
                        <div class = "bcard">
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
                                <div class="col text-center">
                                    <div class="buttons">
                                        <a href="#" class="button Blue">DECLARATION OF FAITH</a>
                                        
                                        <a href="#" class="button Yellow">LATEST NEWSLETTER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <img class="hero" src="<?php bloginfo('template_directory'); ?>/img/hero.png"> -->
                <!-- <h3>Children's Stories</h3> -->
                <div class="children row">
                    <div class="col-sm text-center">
                        <div class="img">
                            <img class="sam" src="<?php bloginfo('template_directory'); ?>/img/children.png">
                            <img class="esther" src="<?php bloginfo('template_directory'); ?>/img/happy.png">
                            <img class="secret" src="<?php bloginfo('template_directory'); ?>/img/bible.png">
                        </div>
                    </div>
                </div>
                <div class = "row text">
                    <div class = "col-sm text-center">
                        <div class = "content">
                            <p class = "children"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <p class = "happy"> Happy Day Clubs are after school Bible clubs meeting once a week for one hour from October through March. Happy Day Clubs are taught by teams of trained volunteers. Each week children are taught a Bible lesson, hear the next chapter of an exciting missionary story, sing songs, learn a Bible verse and so much more! </p>
                            <p class = "bible"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                        <div>
                    </div>
                </div>
                <div class="row secondary">
                    <div class="col-sm text-center">
                        <div class="secondary">
                            <a href="#" class="secondary Yellow">WATCH STORIES ONLINE</a>
                            <a href="#" class="secondary purple">ABOUT HAPPY DAY CLUB</a>
                            <a href="#" class="secondary Blue">SIGN UP FOR VES</a>
                        </div>
                    </div>
                </div>
                <div class="row title">
                    <div class = "col-sm">
                        <h2>Happy Day Club 2020 - 2021</h2>
                        <h3>Although Happy Day Club isn't able to meet in your school this year we have new ways to enjoy Happy Day Club!</h3>
                        <p>Happy Day Clubs are after school Bible clubs meeting once a week for one hour from October through March. Happy Day Clubs are taught by teams of trained volunteers. Each week children are taught a Bible lesson, hear the next chapter of an exciting missionary story, sing songs, learn a Bible verse and so much more! </p>
                    </div>
                    <div class = "col">
                        <a href="#" class="club">About Happy Day Club</a>
                    </div>
                </div>
                <img class="clubing" src="<?php bloginfo('template_directory'); ?>/img/club.png">
                <div class="row">
                    <div class="col-sm text-center">
                        <img class="togo" src="<?php bloginfo('template_directory'); ?>/img/togo.png">
                    </div>
                    <div class="col-sm righthalf">
                        <h2>Togo, West Africa</h2>
                        <h3>Our ministry here at CEM reaches beyond the boarders of Elkhart and LaGrange Counties...</h3>
                        <img class="map" src="<?php bloginfo('template_directory'); ?>/img/map.png">
                        <div class="mapbuttons">
                            <a href="#" class="mapbuttons map">Learn about TogoR</a>
                        </div>
                    </div>
                </div>
                <div class="row  Bottom">
                    <div class ="col text-center">
                        <h2>Vacation Bible School</h2>
                        <h3>Lorem ipsum dolor sit amet consectetur</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                        <div class="sign">
                            <a href="#" class="sign up">Sign up for VBS</a>
                        </div>
                    </div>
                </div>
                <img class="final" src="<?php bloginfo('template_directory'); ?>/img/final.png">
            </div>
        </section>
    </div>

        <?php include(locate_template('parts/footer.php')); ?>
</body>

<?php get_footer(); ?>
