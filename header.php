<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Custom_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">

        <header id="header">
            <div class="header-box">
                <div class="container header-container">
                    <div class="head-left">
                        <div class="logoBox">
                            <a class="logo" href="<?php echo get_site_url() . '/' ?>">
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt="Logo" />
                            </a>
                        </div>
                    </div>
                    <div class="head-right">
                        <ul class="header-list">
                            <li><a href="<?php echo get_site_url() . '/' ?>">Home</a></li>
                            <li><a href="#services">Our Services</a></li>
                            <li><a href="<?php echo get_site_url() . '/about/' ?>">About </a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <div class="menuBtn">
                            <a href="<?php echo get_site_url() . '/contact/' ?>" class="button">Get Free Quote</a>
                            <div class="menu side-menu">
                                <a href="javascript:void(0)" class="js-nav-toggle">
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-line">
                    <div class="container">
                        <p class="header-line-txt">No part of the world is inaccessible for us to deliver your cargo.
                            <span>Call us today:
                                <img src="<?php bloginfo('template_url'); ?>/assets/img/whatsapp.svg" alt="">
                                <a href="tel:+971551404131">
                                    +971 55 140 4131
                                </a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Side Menu -->
            <div class="menuOverlay"></div>
            <div class="nav-wrapper">
                <nav role="mob-navigation" class="mob-navigation">
                    <div class="nav-toggle">
                        <span class="nav-back"></span>
                        <span class="nav-title">
                            <!-- <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" alt=""> -->
                        </span>
                        <span class="nav-close"></span>
                    </div>
                    <ul>
                        <li><a href="<?php echo get_site_url() . '/' ?>">Home</a></li>
                        <li><a href="#services">Our Services</a></li>
                        <li><a href="<?php echo get_site_url() . '/about/' ?>">About </a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>