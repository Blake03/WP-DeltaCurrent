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


			<ul class="mobile-menu">
				<li class="mobile-menu__items"><a href="#arkansasrazorbacks">ArkansasRazorbacks</li>
				<li class="mobile-menu__items"><a href="#Wholehogsoprts">WholeHogSports</a></li>
				<li class="mobile-menu__items"><a href="#monticellolive">MonticelloLive</a></li>
			</ul><!--mobile-menu-->

			<div class="news-flex-wrapper">
				
				<div id="arkansasrazorbacks" class="news-box">
					<h2>ArkansasRazorbacks.com</h2>
					<?php getFeed("http://www.arkansasrazorbacks.com/feed/"); ?>
					<ul>
					<li>Your Add Here</li>
					</ul>
				</div><!--news-box-->

				<div id="Wholehogsoprts" class="news-box">
					<h2>WholeHogSports.com</h2>
					<?php getFeed("http://www.wholehogsports.com/rss/headlines/"); ?>
				</div><!--news-box-->

				<div id="monticellolive" class="news-box">
					<h2>RazorBlogers.net</h2>
					<?php getFeed("http://www.razorbloggers.net/feed/"); ?>
				</div><!--news-box-->

			</div><!--news-flex-wrapper-->

<?php
get_footer();
