<?php
$author     = get_user_by( 'slug', get_query_var( 'author_name' ) )->ID;
$aid        = 'user_'.$author;
$bg         = get_field('photo', $aid);
$twitter    = get_field('twitter', $aid);
$linkedin   = get_field('linkedin', $aid);
$email      = get_field('email', $aid);
?>
<div
    class="hero lg author" 
    <?php if($bg): ?>
        style="background-image: url('<?php echo $bg['sizes']['hero-large']; ?>');"
    <?php endif; ?>>
    <div class="swoop h-100">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col d-flex flex-column justify-content-center">
                    <div class="content">
                        
                        <?php if($slogan = get_field('job_title', $aid)): ?>
                        <h3><?php echo $slogan; ?></h3>
                        <?php endif; ?>

                        <?php if($header = get_field('name', $aid)): ?>
                        <h1><?php echo $header; ?></h1>
                        <?php endif; ?>

                        <?php the_field('bio', $aid); ?>
                        
                        <?php if($twitter || $linkedin || $email) : ?>
                        <div class="social">
                            <?php if ($twitter): ?>
                                <a href="<?php echo $twitter; ?>" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            <?php endif; ?>
                            <?php if($linkedin): ?>
                                <a href="<?php echo $linkedin; ?>" target="_blank">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                            <?php endif; ?>
                            <?php if($email): ?>
                                <a href="mailto:<?php echo $email; ?>" target="_blank">
                                    <i class="far fa-envelope"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
