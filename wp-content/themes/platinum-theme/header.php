<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <header class="header clear" role="banner" id="navbar-js">
        <div class="header__container">
            <div class="header__logo">
                <a href="<?php echo home_url(); ?>">
                    <svg class="header__logo-img"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-logo" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-logo"/></svg>
                </a>
            </div>
            <!-- Mobile Menu -->
            <div class="nav__hamburger-icon" id="hamburger">
                <div class="hamburger-bar1"></div>
                <div class="hamburger-bar2"></div>
                <div class="hamburger-bar3"></div>
            </div>
            <!-- Menu -->
            <nav class="header__nav" role="navigation">
                <?php //html5blank_nav(); ?>

                <?php if ( have_rows( 'menu', 'option' ) ) : ?>
                    <?php while ( have_rows( 'menu', 'option' ) ) : the_row(); ?>
                        
                        <?php if ( get_sub_field( 'drop_down_option' ) == 1 ) { 
                        // echo 'true'; 
                        // if there is a drop down menu make the parent link just text so it does not link off to anywhere
                        ?><div class="header__nav--link"><div class="header__nav--dropdown-parent"><?php the_sub_field( 'menu_item_name' ); ?></div></div><?php
                        } else { 
                        // echo 'false'; 
                        ?><a class="header__nav--link" href="<?php the_sub_field( 'menu_item_link' ); ?>"><?php the_sub_field( 'menu_item_name' ); ?></a><?php
                        } ?>
                        <?php if ( have_rows( 'drop_down_menu' ) ) : ?>
                            <div class="header__dropdown--wrapper">
                                <?php while ( have_rows( 'drop_down_menu' ) ) : the_row(); ?>
                                    <div class="header__dropdown--container">
                                        <a class="header__dropdown--link" title="<?php the_sub_field( 'sub_menu_item_name' ); ?>" href="<?php the_sub_field( 'sub_menu_item_link' ); ?>">
                                            <?php if ( get_sub_field( 'button_image' ) ) { ?>
                                                <img class="header__dropdown--image" src="<?php the_sub_field( 'button_image' ); ?>" />
                                            <?php } ?>
                                            <div class="header__dropdown--text"><?php the_sub_field( 'sub_menu_item_name' ); ?></div>
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <?php // no rows found ?>
                <?php endif; ?>                         
            </nav>

            <div class="header__social">
                <a class="header__social--link" title="Facebook" href="<?php the_field('facebook_url', 'option'); ?>" target="_blank">
                    <svg class="header__social--icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-facebook-icon" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-facebook-icon"/></svg>
                </a>
                <a class="header__social--link" title="Twitter" href="<?php the_field('twitter_url', 'option'); ?>" target="_blank">
                    <svg class="header__social--icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-twitter-icon" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-twitter-icon"/></svg>
                </a>
                <a class="header__social--link" title="Instagram" href="<?php the_field('instagram_url', 'option'); ?>" target="_blank">
                    <svg class="header__social--icon"><use href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-instagram-icon" xlink:href="<?php echo get_template_directory_uri(); ?>/img/icons/icons.svg#icon-instagram-icon"/></svg>
                </a>
            </div>
        </div>
    </header>
