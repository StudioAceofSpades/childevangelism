<?php
if (__FILE__ == $_SERVER['SCRIPT_FILENAME']) { die(); }
if (CFCT_DEBUG) { cfct_banner(__FILE__); }

get_header(); ?>

<body id="top-of-page">
    <?php include(locate_template('parts/header.php')); ?>

    <div id="home">
        <?php include(locate_template('parts/home.php')); ?>
        <!-- <section class="bg-white">
            <div class = "container">
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
                    <div class = "col-sm text-center trans">
                            <p class = "story"> Children’s Stories</p>
                            <p class = "club"> Happy Day Club </p>
                            <p class = "school"> Vacation Bible School</p>
                    </div>
                </div>
                <div class = "row text">
                    <div class = "col-sm text-center" style="margin-top: -250px;">
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
                <div class = "backer2 d-flex align-items-center">
                    <div class = "bcard2">
                        <div class="row">
                            <div class = "col text-center">
                                <h2 class="head">Togo, West Africa</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class = "col text-center">
                                <p class="sub">Meet our team 6000 miles away in Togo, West Africa!</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class = "col text-center">
                                <p class="desc">Our ministry here at CEM reaches beyond the boarders of Elkhart and LaGrange Counties...</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center">
                                <div class="buttons">
                                    <a href="#" class="button Blue">LEARN ABOUT TOGO</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <img class="mapi" src="<?php bloginfo('template_directory'); ?>/img/westafrica.png">
                </div>
                <div class = "row">
                        <div class="col-sm text-center">
                            <img class="togo" src="<?php bloginfo('template_directory'); ?>/img/ele.png">
                        </div>
                        <div class="col-sm righthalf">
                            <h2>Donate to Child Evangelism Ministeries</h2>
                            <h3>Help fund our mission. Lorem ipsum dolor sit amet consectetur</h3>
                            <p class = "subtext">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class = "buttons">
                                <a href="#" class = "button Blue">DONATE</a>
                            </div>
                    </div>
                </div>
            </div>
        </section> -->
    </div>

        <?php include(locate_template('parts/footer.php')); ?>
</body>

<?php get_footer(); ?>
