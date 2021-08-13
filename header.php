<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <title><?php echo get_bloginfo('name'); ?></title>
</head>
<body>
    <header class="site-header" id="home">
        <div class="overlay">
            <div class="top-bar">
                <a href="<?php site_url(); ?>" ><img src="<?php echo get_theme_file_uri('images/logo.png') ?>" alt="logo" class="logo"></a>
                
                <div class="nav">
                    <a href="#home" class="menu-item">Home</a>
                    <a href="#about" class="menu-item">About Us</a>
                    <a href="#join" class="menu-item">Join Us</a>
                    <a href="#contact" class="menu-item">Contact Us</a>
                    <a href="https://gofundme.com" class="donate">Donate</a>
                </div>
            </div>
            <div class="header-content">
                <h1 class="site-title">
                    <?php echo get_bloginfo('name'); ?>
                </h1>
                <h3 class="site-tagline">
                    <?php echo get_bloginfo('description') ?>
                </h3>
                <form action="https://gofundme.com" target="_blank">
                    <button class="donate">Donate</button>
                </form>
            </div>
        </div>        
    </header>