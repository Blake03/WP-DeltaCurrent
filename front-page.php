<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package DeltaCurrent.com
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="news-row-1">

				<div class="news-box">
					<h2>ArkansasOnline.com</h2>
					<?php getFeed("http://www.arkansasonline.com/rss/headlines"); ?>
				</div><!--news-box-->

				<div class="news-box">
					<h2>SearkToday.com</h2>
					<?php getFeed("http://searktoday.com/feed"); ?>
				</div><!--news-box-->

				<div class="news-box">
					<h2>MonticelloLive.com</h2>
					<?php getFeed("http://www.monticellolive.com/feed"); ?>
					<ul>
					<li>Add Space</li>
					</ul>
				</div><!--news-box-->

			</div><!--news-row-1-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
