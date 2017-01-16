<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DeltaCurrent.com
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>DeltaCurrent</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php include_once("analyticstracking.php") ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( '', 'deltacurrent' ); ?></a>

	<header>

		<!--
    ====================================================
    start-navbar
    -->
        <nav class="navbar">

            <div class="navbar__header">

                <div class="navbar__logo-wrapper">
                    <a class="navbar__logo-wrapper__logo" href="#">DeltaCurrent.com</a>
                    <a class="navbar__logo-wrapper__tag-line" href="#">local news online</a>
                </div>

                <div class="navbar__date-time">
                    <p id="date"></p>
                </div><!--date-time-->

            </div><!--navbar__header-->

            <div class="navbar__main-menu" style="">
                <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
            </div><!--navbar__menu-->

       </nav><!--navbar-->
    <!--
    end-navbar
    ====================================================
    -->

	</header>

	<div id="content" class="site-content">
		





