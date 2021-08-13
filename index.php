<?php get_header(); ?>

<?php 
    $about = get_posts([
        'name' => 'about',
        'post-type' => 'page'
    ]);
    
    $about_page = 22;
    $about_content = get_post_field('post_content', $about_page);
?>
    <div class="about" id="about">
        <div class="about-overlay">
            <div class="about-container">
                <h4 class="page-title"><?php echo get_the_title($about_page); ?></h4>
                <h1 class="about-tagline">Confident women empowered to <br>participate in and influence <br>society in a self-determined way
                </h1>
                <div class="about-content">
                    <h3 class="site-title"><?php echo get_bloginfo('name') ?></h3>
                    <p class="about-text">
                        <?php echo $about_content ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="goals">
        <div class="goals-content">
            <div class="goals-block">
                <img src="<?php echo get_theme_file_uri('images/education.jpg') ?>" alt="education">
                <h4>Education</h4>
                <hr>
                <h2>Education programmes to <br>develop professional <br>leadership potential</h2>
            </div>
            <div class="goals-block">
                <img src="<?php echo get_theme_file_uri('images/welfare.jpg') ?>" alt="welfare">
                <h4>Welfare</h4>
                <hr>
                <h2>To seek welfare of memebrs <br>of the association</h2>
            </div>
            <div class="goals-block">
                <img src="<?php echo get_theme_file_uri('images/awareness.jpg') ?>" alt="awareness">
                <h4>Awareness</h4>
                <hr>
                <h2>Advocate for the elimination <br>of all discrimination against <br>women</h2>
            </div>
        </div>
    </div>

    <div class="join" id="join">
        <div class="join-overlay">
            <div class="join-content">
                <h4>Join Us</h4>
                <hr>
                <h2>Memberships shall be opened to all individuals who are interested to join and support women without borders upon recommendation by a registered member.</h2>
                <button class="join-btn">Join Our Community</button>
            </div>
        </div>
    </div>


<?php get_footer(); ?>