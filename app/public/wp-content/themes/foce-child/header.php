<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>

        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">
                <!--CODE ajouté -->
                <ul>
                    <li class="site-title "><a href="#" rel="home">Fleurs d'oranger & chats errants</a></li>
                </ul>

                <div class="modal">
                    <button class=" modal__burger modal__open " aria-controls="primary-menu" aria-expanded="false">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </button>
                    <div class="modal__content" style="display: none;">
                        <div>
                            <img class=" " src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                            <ul>
                                <li class="modal__content__story"><a href="#story">Histoire</a></li>
                                <li class="modal__content__characters"><a href="#characters">Personnages</a></li>

                                <li class="modal__content__place"><a href="#place">Lieu</a></li>
                                <li class="modal__content__footer"><a href="#studio">Studio Koukaki</a></li>
                            </ul>
                        </div>
                        <div class="menu__footer">
                            <a href="#">STUDIO KOUKAKI</a>
                        </div>
                    </div>
                </div>

            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->