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


			<ul class="mobile-feed-menu">
				<li class="mobile-feed-menu__items"><a href="#arkansasrazorbacks">ArkansasRazorbacks</li>
				<li class="mobile-feed-menu__items"><a href="#wholehogsoprts">WholeHogSports</a></li>
				<li class="mobile-feed-menu__items"><a href="#razorbloggers">RazorBloggers</a></li>
			</ul><!--mobile-menu-->

			<div class="news-flex-wrapper">
				
				<div id="arkansasrazorbacks" class="news-box animated1 rotateInDownRight">
					<h2>ArkansasRazorbacks.com</h2>
					<?php getFeed("http://www.arkansasrazorbacks.com/feed/"); ?>
					<?php dynamic_sidebar( 'sidebar-2' ); ?>

				</div><!--news-box-->

				<div id="wholehogsoprts" class="news-box animated2 rotateInDownRight">
					<h2>WholeHogSports.com</h2>
					<?php getFeed("http://www.wholehogsports.com/rss/headlines/"); ?>
				</div><!--news-box-->

				<div id="razorbloggers" class="news-box animated3 rotateInDownRight">
					<h2>ESPN.com</h2>
					<?php getFeed("http://www.espn.com/espn/rss/news"); ?>
				</div><!--news-box-->

			</div><!--news-flex-wrapper-->

<?php
get_footer();
