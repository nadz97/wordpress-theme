<!DOCTYPE html>
<html lang="en">
    <head>
        <?php wp_head() ?>
    </head>
    <body>
        <main class="main">
        <!-- start of navbar -->
        <div class="navbar">
            <div class="logo">
            <img src="<?php echo get_theme_file_uri('/img/Dezign.png') ?>" alt="ini logo dezign" />
            </div>
            <div class="menu">
            <ul>
                <li onclick="activateMenuItem(this)"><a href="#home">HOME</a></li>
                <li onclick="activateMenuItem(this)"><a href="#work">WORK</a></li>
                <li onclick="activateMenuItem(this)"><a href="#about">ABOUT</a></li>
            </ul>
            </div>
        </div>
        <!-- end of navbar -->

        <!-- start of hero-section -->
        <div class="hero-section" id="home">
            <div class="hero-texts">
            <h1>
                I'm designer specialising in
                <strong>UI/UX and Interaction Design</strong>
            </h1>
            </div>
            <div class="arrow">
            <a href="#client-section"
                ><img src="<?php echo get_theme_file_uri('/img/Arrow-down.png') ?>" alt="arrow pointing down"
            /></a>
            </div>
        </div>
        <!-- end of hero-section -->
        </main>