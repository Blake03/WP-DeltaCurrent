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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( '', 'deltacurrent' ); ?></a>

	<header>

		<!--
    ====================================================
    start-navbar
    -->
    <div class="mobile-only">
        <nav class="navbar">

            <div class="navbar__header">
                <div class="navbar__logo-wrapper">
                <a class="navbar__logo" href="#">DeltaCurrent.com</a>
                <a class="navbar__logo-sub" href="#">local news online</a>
                </div>

                <div class="navbar__social-menu">Social Icons</div>
            </div><!--navbar__header-->

            <ul class="navbar__main-menu" style="">
                <li class="navbar__menu-item"><a href="#">News</a></li>
                <li class="navbar__menu-item"><a href="#">Weather</a></li>
                <li class="navbar__menu-item"><a href="#">Sports</a></li>
                <li class="navbar__menu-item"><a href="#">Fourm</a></li>
                <li class="navbar__menu-item"><a href="#">Classifieds</a></li>
                <li class="navbar__menu-item"><a href="#">Jobs</a></li>

            </ul><!--navbar__menu-->

       </nav><!--navbar-->
   </div><!--mobie-only-->
    <!--
    end-navbar
    ====================================================
    -->

	</header>

	<div id="content" class="site-content">
		





