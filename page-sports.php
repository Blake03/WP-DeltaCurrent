<?php
/* Template Name: page-sports */

/**
 * The template for displaying sports-page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DeltaCurrent.com
 */

get_header(); ?>

	<div id="primary" class="content-area-full-width">
		<main id="main" class="site-main" role="main">

			<ul class="mobile-feed-menu">
				<li class="mobile-feed-menu__items"><a href="#primary">ArkansasRazorbacks</li>
				<li class="mobile-feed-menu__items"><a href="#wholehogsoprts">WholeHogSports</a></li>
				<li class="mobile-feed-menu__items"><a href="#espn">ESPN</a></li>
			</ul><!--mobile-menu-->

			<div class="news-flex-wrapper">
				
				<div id="arkansasrazorbacks" class="news-box animated1 rotateInDownRight">
					<h2>ArkansasRazorbacks.com</h2>
					<?php getFeed("http://www.arkansasrazorbacks.com/feed/"); ?>
					<?php dynamic_sidebar( 'news-feed-widget' ); ?>
				</div><!--news-box-->

				<div id="wholehogsoprts" class="news-box animated2 rotateInDownRight">
					<h2>WholeHogSports.com</h2>
					<?php getFeed("http://www.wholehogsports.com/rss/headlines/"); ?>
				</div><!--news-box-->

				<div id="espn" class="news-box animated3 rotateInDownRight">
					<h2>ESPN.com</h2>
					<?php getFeed("http://www.espn.com/espn/rss/news"); ?>
				</div><!--news-box-->

			</div><!--news-flex-wrapper-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
