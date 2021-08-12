    <footer class="site-footer" id="contact">
            <div class="footer-content">
                <div class="section section-1">
                    <img src="<?php echo get_theme_file_uri('images/logo.png') ?>" alt="logo" class="logo">
                    <p class="site-tagline">Supporting women personal development through Education, skills and seeking the welfare of women through diverse ways</p>
                    <h4>Follow Us</h4>
                    <div class="social">

                    </div>
                </div>
                <div class="section section-2">
                    <h4>What We Do</h4>
                    <p>Advancing women's human rights</p>
                    <hr>
                    <p>Increasing professional and personal development opportunities</p>
                    <hr>
                    <p>Building women leadership</p>
                    <hr>
                    <p>Developing professional leadership potential</p>
                    <hr>
                    <p>Education programs</p>

                </div>
                <div class="section section-3">
                    <h4>Contact Us</h4>
                    <form action="#">
                        <label for="name">Your name</label>
                        <input type="text" name="name" required>
                        <label for="email">Your email</label>
                        <input type="text" name="name" required>
                        <label for="text">Your message (optional)</label>
                        <textarea type="textarea" rows="15" cols="80" name="message"></textarea>
                        <input type="submit" name="submit">
                    </form>
                </div>
            </div>
            <div class="copyright">
                <p>Copyright &copy <span id="date"><?php echo date('Y')?></span> <?php echo get_bloginfo('name') ?></p>
                <p class="powered">Powered by <?php echo get_bloginfo('name') ?></p>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>